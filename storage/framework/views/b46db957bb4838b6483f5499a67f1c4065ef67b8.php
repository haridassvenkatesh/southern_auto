 <?php $__env->startSection('content'); ?>

<style>
    .country-state li{
        margin: 38px 0px;
    }    
</style>    

<script src = "https://code.highcharts.com/highcharts.js"></script>
<div class="all-content-wrapper">  
   <div class="analytics-sparkle-area" style="margin-top: 65px;">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="analytics-sparkle-line reso-mg-b-30">
                  <div class="analytics-content">
                     <h5>Revenue Invoice</h5>
                     <h2><span class="counter" id="revenue_invoice"><?= $data['total_revenue_invoice']; ?></span>  <span id="target_amount1" class="tuition-fees"><?= $data['target_amount']; ?></span></h2>
                       <?php 
                                    $total_revenue_invoice=0;
                                    if($data['total_revenue_invoice']>0 && $data['target_amount']>0){
                                        
                                        $total_revenue_invoice=round((($data['total_revenue_invoice'])*(100))/($data['target_amount']));
                                        
                                    }
                                    
                                    ?>
                     <span class="text-info"><?= $total_revenue_invoice; ?>%</span>
                     <div class="progress m-b-0">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?= $total_revenue_invoice; ?>%;"> <span class="sr-only"><?= $total_revenue_invoice; ?>% Complete</span> </div>
                     </div>
                  </div>
               </div>
            </div>  
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="analytics-sparkle-line reso-mg-b-30">
                  <div class="analytics-content">
                     <h5>Revenue PO</h5>
                      <h2><span class="counter" id="revenue_po"><?= $data['total_revenue_po']; ?></span> <span class="tuition-fees" id="target_amount2"><?= $data['target_amount']; ?></span></h2>
                        <?php 
                                    $total_revenue_po=0;
                                    if($data['total_revenue_po']>0 && $data['target_amount']>0){
                                        
                                        $total_revenue_po=round((($data['total_revenue_po'])*(100))/($data['target_amount']));
                                        
                                    }
                                    
                                    ?>
                       <span class="text-success"><?= $total_revenue_invoice; ?>%</span>
                     <div class="progress m-b-0">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?= $total_revenue_invoice; ?>%;"> <span class="sr-only"><?= $total_revenue_invoice; ?>% Complete</span> </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                  <div class="analytics-content">
                     <h5>Revenue Lead</h5>
                    <h2><span class="counter" id="revenue_lead"><?= $data['total_revenue_lead']; ?></span> <span class="tuition-fees" id="target_amount3"><?= $data['target_amount']; ?></span></h2>
                        <?php 
                                    $total_revenue_lead=0;
                                    if($data['total_revenue_lead']>0 && $data['target_amount']>0){
                                        
                                        $total_revenue_lead=round((($data['total_revenue_lead'])*(100))/($data['target_amount']));
                                        
                                    }
                                    
                                    ?>
                     <span class="text-warning"><?= $total_revenue_invoice; ?>%</span>
                     <div class="progress m-b-0">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?= $total_revenue_invoice; ?>%;"> <span class="sr-only"><?= $total_revenue_invoice; ?>% Complete</span> </div>
                     </div>
                  </div>
               </div>
            </div>
           
         </div>
      </div>
   </div>
  

   <div class="library-book-area mg-t-30">
        <div class="pie-bar-line-area">
            <div class="container-fluid">
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="sparkline9-list responsive-mg-b-30">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    <h1>QUARTERLY REPORT <span class="c3-ds-n">(Value)</span></h1>
                                </div>
                            </div>
                            <div class="sparkline9-graph">
                                <div id="leadtoenquiry1"></div>
<!--                                <div id="stocked"></div>-->
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="sparkline10-list">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>PROJECT EXECUTION <span class="c3-ds-n">(Value)</span></h1>
                                </div>
                            </div>
                            <div class="sparkline10-graph">
                                <div id="container1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box res-mg-t-30 table-mg-t-pro-n">
                        <?php
                         $count_total=($data['create_enquiry_count']+$data['quoted_enquiry_count']+$data['won_enquiry_count']+$data['lost_enquiry_count']+$data['closed_enquiry_count']+$data['hold_enquiry_count']);
                        ?>
                            <h3 class="box-title">TOTAL NO.OF ENQUIRY</h3><span class="enq-class"><?= $count_total;?></span>
                            <ul class="country-state">
                                <li>
                                    <h2><span class="counter"><?= $data['create_enquiry_count'];?></span></h2> <small>New Enquiry</small>
                                    <?php 
                                    $total_enq_per=0;
                                    if($data['create_enquiry_count']>0){
                                        
                                        $total_enq_per=round((($data['create_enquiry_count'])*(100))/($count_total));
                                        
                                    }
                                    
                                    ?>
                                    <div class="pull-right"><?= $total_enq_per; ?>%</div>
<!--                                    <i class="fa fa-level-up text-danger ctn-ic-1"></i>-->
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger ctn-vs-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?= $total_enq_per;?>%;"> <span class="sr-only"><?= $total_enq_per;?>% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><span class="counter"><?= $data['quoted_enquiry_count'];?></span></h2> <small>Quoted</small>
                                     <?php 
                                    $total_quo_per=0;
                                    if($data['quoted_enquiry_count']>0){
                                        
                                        $total_quo_per=round((($data['quoted_enquiry_count'])*(100))/($count_total));
                                        
                                    }
                                    
                                    ?>
                                    <div class="pull-right"><?= $total_quo_per; ?>% </div>
<!--                                    <i class="fa fa-level-up text-success ctn-ic-2"></i>-->
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info ctn-vs-2" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?= $total_quo_per; ?>%;"> <span class="sr-only"><?= $total_quo_per; ?>% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><span class="counter"><?= $data['won_enquiry_count'];?></span></h2> <small>PO Received</small>
                                      <?php 
                                    $total_won_per=0;
                                    if($data['won_enquiry_count']>0){
                                        
                                        $total_won_per=round((($data['won_enquiry_count'])*(100))/($count_total));
                                        
                                    }
                                    
                                    ?>
                                    <div class="pull-right"><?= $total_won_per; ?>% </div>
<!--                                    <i class="fa fa-level-up text-warning ctn-ic-3"></i>-->
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning ctn-vs-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?= $total_won_per; ?>%;"> <span class="sr-only"><?= $total_won_per; ?>% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><span class="counter"><?= $data['closed_enquiry_count'];?></span></h2> <small>Invoiced</small>
                                       <?php 
                                    $total_closed_per=0;
                                    if($data['closed_enquiry_count']>0){
                                        
                                        $total_closed_per=round((($data['closed_enquiry_count'])*(100))/($count_total));
                                        
                                    }
                                    
                                    ?>
                                    <div class="pull-right"><?= $total_closed_per; ?>% </div>
<!--                                    <i class="fa fa-level-down text-info ctn-ic-4"></i>-->
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info ctn-vs-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?= $total_closed_per; ?>%;"> <span class="sr-only"><?= $total_closed_per; ?>% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><span class="counter"><?= ($data['lost_enquiry_count'])+($data['hold_enquiry_count']);?></span></h2> <small>Lost + Hold</small>
                                     <?php 
                                    $lost_enquiry_count=0;
                                    $hold_enquiry_count=0;
                                    $total_hl_per=0;
                                    $tot_hl_count=0;
                                    if($data['lost_enquiry_count']>0){
                                        $lost_enquiry_count=$data['lost_enquiry_count'];                                        
                                    }
                                    if($data['hold_enquiry_count']>0){
                                        $hold_enquiry_count=$data['hold_enquiry_count'];                                        
                                    }
                                    $tot_hl_count=($lost_enquiry_count)+($hold_enquiry_count);
                                    if($tot_hl_count>0){
                                           $total_hl_per=round((($data['closed_enquiry_count'])*(100))/($count_total));
                                    }
                                    
                                 
                                    ?>
                                    
                                    <div class="pull-right"><?= $total_hl_per; ?>% </div>
<!--                                    <i class="fa fa-level-up text-success ctn-ic-5"></i>-->
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger ctn-vs-5" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?= $total_hl_per; ?>% ;background: #d9534f;;"> <span class="sr-only"><?= $total_hl_per; ?>% Complete</span></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
   </div>
   
                             
   
</div>
<script>



Highcharts.chart('leadtoenquiry1', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: ['JAN-MARCH', 'APR-JUNE', 'JULY-SEP', 'OCT-DEC']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Enquiry Report'
        },
//        stackLabels: {
//            enabled: true,
//            style: {
//                fontWeight: 'bold',
//                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
//            }
//        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
//            dataLabels: {
//                enabled: true,
//                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
//            }
        }
    },
    credits: {
      enabled: false
  },
    series: [{
        name: 'John',
        data: [5, 3, 4, 7]
    }, {
        name: 'Jane',
        data: [2, 2, 3, 2]
    }]
});
    
    
    Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

// Build the chart
Highcharts.chart('container1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
     legend: {
       enabled:true
    },
    plotOptions: {
        pie: {
  //          allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
                connectorColor: 'silver'
            }
        }
    },
     credits: {
      enabled: false
  },
    series: [{
        name: 'Share',
        data: [
            { name: 'Chrome', y: 61.41 },
            { name: 'Internet Explorer', y: 11.84 },
            { name: 'Firefox', y: 10.85 }
        ]
    }]
});

    
    $(function() {
    var x1 = $('#target_amount1').html();
    var x2 = $('#target_amount2').html();
    var x3 = $('#target_amount3').html();
        
    var revenue_invoice = $('#revenue_invoice').html();
    var revenue_po = $('#revenue_po').html();
    var revenue_lead = $('#revenue_lead').html();
        
//    console.log(revenue_invoice);    
//    console.log(revenue_po);    
//    console.log(revenue_lead);    
//     
//x=x.toString();
//var lastThree = x.substring(x.length-3);
//var otherNumbers = x.substring(0,x.length-3);
//if(otherNumbers != '')
//    lastThree = ',' + lastThree;
//var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
//$('#tuition-fees_id').html('INR.'+res);

var res1=parseFloat(x1).toFixed(2).replace(/(\d)(?=(\d{2})+\d\.)/g, '$1,');
var res2=parseFloat(x2).toFixed(2).replace(/(\d)(?=(\d{2})+\d\.)/g, '$1,');
var res3=parseFloat(x3).toFixed(2).replace(/(\d)(?=(\d{2})+\d\.)/g, '$1,');
        
var revenue_invoice_total=parseFloat(revenue_invoice).toFixed(2).replace(/(\d)(?=(\d{2})+\d\.)/g, '$1,');
var revenue_po_total=parseFloat(revenue_po).toFixed(2).replace(/(\d)(?=(\d{2})+\d\.)/g, '$1,');
var revenue_lead_total=parseFloat(revenue_lead).toFixed(2).replace(/(\d)(?=(\d{2})+\d\.)/g, '$1,');
        
$('#target_amount1').html('INR.'+res1);
$('#target_amount2').html('INR.'+res2);
$('#target_amount3').html('INR.'+res3);
        
$('#revenue_invoice').html('INR.'+revenue_invoice_total);
$('#revenue_po').html('INR.'+revenue_po_total);
$('#revenue_lead').html('INR.'+revenue_lead_total);
        
});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>