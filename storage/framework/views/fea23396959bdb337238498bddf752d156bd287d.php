 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12" id="content" ng-app="company_app" ng-controller="company_controller">

			<div class="row-fluid">
				<!-- block -->
				<div class="block">
					<div class="navbar navbar-inner block-header">
						<?php $title = "GST REGULAR";
                               if($data['tax'] == 8)
                                    $title = "GST COMPOUNDING";
                                    ?>
						<center>
							<div class="muted pull-left">REPORT</div>
							<div class="muted pull-center">
								<?= $title ?> -
									<?php echo $data['mname']." - ".Session::get('reportYear'); ?>
							</div>
						</center>
					</div>
					<div class="block-content collapse in">
						<table class="table table-bordered" id="tblCompany">
							<thead>




								<tr>
									<th rowspan="2"><b>SNO</b></th>
									<th rowspan="2"><b>Company</b></th>
									<th rowspan="2"><b>Phone</b></th>
									<th rowspan="2"><b>Circle</b></th>


									<?php if(Session::get('user_group_id') == 10){
									?>

									<th rowspan="2">Name</th>
									<?php } ?>

									<th rowspan="2">Bill Received</th>

									<th rowspan="2">Tally Accounted</th>
									<?php if($data['tax'] == 7): ?>
									<th rowspan="2">GSTR 3B</th>
									<th rowspan="2">GSTR 1</th>

									<?php endif; ?>
									<th rowspan="2">Bank A/C</th>
									<th rowspan="2">EXP A/C</th>
									<?php if($data['tax'] == 8): ?>
									<th rowspan="2">GSTR 4</th>
									<?php endif; ?>
									<th colspan="2">Fees Collection</th>
								</tr>

								<tr>
									<th style="text-align:center">Fee</th>
									<th style="text-align:center">Collected</th>
								</tr>
							</thead>

							<tbody>
								<?php $sno=1;?> <?php $__currentLoopData = $data['Company'][0][0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<tr>
									<td>
										<?= $sno ?>
									</td>
									<td>
										<?= $r->Company_Name ?>
									</td>
									<td>
										<?= $r->Phone_No1 ?>
									</td>

									<td>
										<?= $r->Circle ?>
									</td>

									<?php if(Session::get('user_group_id') == 10){
									?>
									<td>
										<?= $r->First_Name ?>
									</td>
									<?php } ?>
									<td>
										<?= $r->br ?>
									</td>
									<td>
										<?= $r->ta ?>
									</td>
									<?php if($data['tax'] == 7): ?>
									<td>
										<?php ?>
										<?= $r->gstr3b ?>
									</td>
									<td>
										<?= $r->gstr1 ?>
									</td>

									<?php endif; ?>
									<td>
										<?= $r->gstr2 ?>
									</td>
									<td>
										<?= $r->gstr3 ?>
									</td>


									<?php if($data['tax'] == 8): ?>
									<td>
										<?= $r->gstr4 ?>
									</td>
									<?php endif; ?>





									<td>
										<?=  $r->Actual_Fee ?>
									</td>
									<td>
										<?=  $r->fc ?>
									</td>

								</tr>

								<?php  $sno++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


							</tbody>
						</table>

					</div>
				</div>
				<!-- /block -->
			</div>

		</div>
	</div>
	<hr>
</div>
<script>
	$(document).ready(function() {
		$('#tblCompany').DataTable({
			"order": [
				[2, "asc"]
			],
			"pageLength": 50,
			//"dom": '<"top"i>rt<"bottom"flp><"clear">'
			"sDom": 'Rfrtlip',
		});
	});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>