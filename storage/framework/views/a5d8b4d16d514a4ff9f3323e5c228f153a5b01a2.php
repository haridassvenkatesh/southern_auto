  <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<style>
#loading {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  width: 100vw;
  height: 100vh;
  background-color: rgba(192, 192, 192, 0.5);
  background-image: url("https://i.stack.imgur.com/MnyxU.gif");
  background-repeat: no-repeat;
  background-position: center;
}
</style>
<?php 
//foreach($data['result'] as $row)
//{
//    
//    echo "<pre>";print_r($row);
//}die;
?><div id="loading" style="display:none"></div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12" id="content">
            <div>
                <div class="row-fluid">


                    <div class="block-content collapse in">


                        <div class="row-fluid">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <?php $title = "IT INDIVIDUAL";
                                if($data['type'] == 61)
                                    $title = "IT CONCERN";
                                    ?>
                                    <center>
                                        <div class="muted pull-left">REPORT</div>
                                        <div class="muted pull-center"><b><?= $title ?></b></div>
                                    </center>
                                </div>

                                <input type="hidden" name="hdnTax" id="hdnTax" value="<?= $data['type'] ?>">
                                <div class="block-content collapse in">
                                    <label class="control-label" for="company_name">Status </label>
                                    <div class="control-group">
                                        <div class="controls">
                                            <select id="drpStatus" onchange="changeValue()">
                                                    <option value="1">Success</option>
                                                    <option value="2">Pending</option>
                                                </select>
                                        </div>
                                    </div>

                                    <input type="hidden" name="page" id="page">


                                    <table class="table table-bordered" id="tblCompany">
                                        <thead>
                                            <tr>
                                                <th>Year</th>
                                                <th>Total Customer</th>
                                                <th>Document Received</th>
                                                <th>Field</th>
                                                <th>CPC</th>
                                                <th>Fee Collected</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sno = 1; foreach($data['result'] as $row) {  ?>
                                            <tr>
                                                <td>
                                                    <a onclick="btn_click(<?=$row[0]->intYear?>)"><?= ($row[0]->intYear-1).'-'. $row[0]->intYear?></a>
                                                </td>
                                                <td>
                                                    <?= $row[0]->totalCompany ?>
                                                </td>
                                                <td>
                                                    <?= $row[0]->dr ?>
                                                </td>
                                                <td>
                                                    <?= $row[0]->field ?>
                                                </td>
                                                <td>
                                                    <?= $row[0]->cpc ?>
                                                </td>
                                                <td>
                                                    <?= $row[0]->fc ?>
                                                </td>
                                            </tr>
                                            <?php $sno++; }  ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <input type="hidden" name="hdntax" id="hdntax" value="<?= $data['tax'] ?>">
                    </div>

                </div>
            </div>
            <hr>
        </div>
    </div>
</div>

<script>
    
//    function btn_click(year){
//       
//        	$.ajax({
//			url: "completeITReport",
//			data: {
//			
//				hdntax: $('#hdnTax').val(),
//				year:  year-1,
//				status: $('#drpStatus').val(),
//			},
//			success: function(data) {
//				//alert(data);
//                 //alert(data);
//                console.log(data);
//			//	window.location.href = "report_it_individual_year";
//			}
//		});
//        
//    }
    
    function btn_click(year) {
         
        if (document.getElementById('hdnTax').value == 60) {
            window.location.href = "report_it_individual_year?Year=" + (year-1) + "&hdntax=" + $('#hdntax').val() + "&drpStatus=" + $('#drpStatus').val();
        } else if (document.getElementById('hdnTax').value == 61) {
            window.location.href = "report_it_concern_year?Year=" + (year-1) + "&hdntax=" + $('#hdntax').val() + "&drpStatus=" + $('#drpStatus').val();
        }
    }

    function changeValue() {
        var TotalCustomer = 0;
        var SuccessCount = 0;
        var PendingCount = 0;
        var ele = $('#drpYear').val();
        var status = $('#drpStatus').val();
        $.ajax({
            url: "changeValueITSuccess",
            type: 'get',
            data: {
                hdntax: $('#hdntax').val(),
                status: $('#drpStatus').val(),
            },beforeSend: function(){
     $("#loading").show();
   },
   complete: function(){
     $("#loading").hide();
   },
            success: function(data) {

                $("#tblCompany tbody").empty();
                var sno = 0;
                $.each(data['result'], function(i, key) {
                    //var Month = '<td><a onclick="btnComplete(' + (key.month + 1) + ')"><b>' + key.monthName + '</b></a></td>';    
                    console.log(key);
                    var Year = '<td><a onclick="btn_click(' + key[0].intYear + ')">' + (key[0].intYear - 1) + '-' + key[0].intYear + '</a></td>';
                    var totalCompany = parseInt(key[0].totalCompany);
                    var dr = parseInt(key[0].dr);
                    var field = parseInt(key[0].field);
                    var cpc = parseInt(key[0].cpc);
                    var fc = parseInt(key[0].fc);



                    //if (key.dr != '-' || key.field != '-' || key.cpc != '-' || key.fc != '-') {
                    //SuccessCount = SuccessCount + 1;
                    //}

                    // if ($('#drpStatus').val() == 2) {
                    //     dr = totalCompany - dr;
                    //     field = totalCompany - field;
                    //     cpc = totalCompany - cpc;
                    //     fc = totalCompany - fc;
                    // }

                    $("#tblCompany").append('<tbody><tr>' + Year + '<td>' + totalCompany + '</td><td>' + dr + '</td><td>' + field + '</td><td>' + cpc + '</td><td>' + fc + '</td></tr></tbody> ');
                });

                if (data['result'] != null) {
                    TotalCustomer = data['result'].length;
                }

                //                document.getElementById("total_customer").value = TotalCustomer;
                //                document.getElementById("total_Success").value = SuccessCount;
                //                document.getElementById("total_pending").value = TotalCustomer - SuccessCount;



            }
        });
    }

</script>


<script>
    $(document).ready(function() {
        $('#tblCompany').DataTable({
            //			"order": [
            //				[1, "asc"]
            //			]
        });
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>