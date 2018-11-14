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
						<?php $title = "TDS INDIVIDUAL";
                               if($data['tax'] == 72)
                                    $title = "TDS CONCERN";
                                    ?>
						<center>
							<div class="muted pull-center">
								<?= $title ?> -
									<?php echo $data['mname']." - ".$data['year']; ?>
							</div>
						</center>
					</div>
					<div class="block-content collapse in">
						<table class="table table-bordered" id="tblCompany">
							<thead>




								<tr>
									<th rowspan="2"><b>SNO</b></th>
									<th rowspan="2"><b>Customer</b></th>
									<th rowspan="2"><b>Phone</b></th>

									<?php if(Session::get('user_group_id') == 10){
									?>
									<th rowspan="2">Name</th>
									<?php } ?>
									<th rowspan="2">TC</th>
									<th rowspan="2">TP</th>
									<th rowspan="2">RF</th>
									<th colspan="2">Fees Collection</th>
								</tr>

								<tr>
									<th style="text-align:center">Fee</th>
									<th style="text-align:center">Collected</th>
								</tr>
							</thead>
							<tbody>
								<?php $sno = 1; foreach($data['Company'] as $row) {  ?> <?php if(!empty($row[0])): ?>
								<tr>
									<td>
										<?= $sno ?>
									</td>
									<td>
										<?= $row[0][0]->name ?>
									</td>
									<td>
										<?= $row[0][0]->contact_no ?>
									</td>
									<?php if(Session::get('user_group_id') == 10){
									?>
									<td>
										<?= $row[0][0]->First_Name ?>
									</td>
									<?php } ?>
									<td>
										<?= $row[0][0]->tc ?>
									</td>
									<td>
										<?= $row[0][0]->tp ?>
									</td>
									<td>
										<?= $row[0][0]->rf ?>
									</td>
									<td>
										<?= $row[0][0]->cf ?>
									</td>
									<td>
										<?= $row[0][0]->fc ?>
									</td>
								</tr>
								<?php endif; ?>
								<?php }  ?>
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