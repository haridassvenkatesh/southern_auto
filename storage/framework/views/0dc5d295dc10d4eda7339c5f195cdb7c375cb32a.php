<title>
	Auditor</title>
<link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet" media="screen">
<link href="<?php echo e(asset('/css/bootstrap-responsive.min.css')); ?>" rel="stylesheet" media="screen">
<link href="<?php echo e(asset('/assets/styles.css')); ?>" rel="stylesheet" media="screen">
<link href="<?php echo e(asset('/assets/DT_bootstrap.css')); ?>" rel="stylesheet" media="screen">
<link data-require="chosen@*" data-semver="1.0.0" rel="stylesheet" href="<?php echo e(asset('/css/chosen.min.css')); ?>" />
<link href="<?php echo e(asset('/vendors/easypiechart/jquery.easy-pie-chart.css')); ?>" rel="stylesheet" media="screen">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

<style>
	.nav li a:hover .fa {
		transform: rotate(360deg);
		transition: all 0.5s;
	}
	
	div.dataTables_info {
		padding-top: 48px;
	}
	
	.paginate_button {
		display: inline-block;
		padding: 4px 12px;
		margin-bottom: 0;
		font-size: 14px;
		line-height: 20px;
		color: #333;
		text-align: center;
		text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
		vertical-align: middle;
		cursor: pointer;
		background-color: #f5f5f5;
		background-image: -moz-linear-gradient(top, #fff, #e6e6e6);
		background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fff), to(#e6e6e6));
		background-image: -webkit-linear-gradient(top, #fff, #e6e6e6);
		background-image: -o-linear-gradient(top, #fff, #e6e6e6);
		background-image: linear-gradient(to bottom, #fff, #e6e6e6);
		background-repeat: repeat-x;
		border: 1px solid #ccc;
		border-color: #e6e6e6 #e6e6e6 #bfbfbf;
		border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
		border-bottom-color: #b3b3b3;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
		filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
		-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
		-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
		box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
	}

</style>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a> <?php if(Session::get('user_group_id') == 10 ): ?>
			<a class="brand" href="dashboard" style="font-family: 'Righteous', cursive;">Auditor Panel</a> <?php endif; ?> <?php if(Session::get('user_group_id') == 11 ): ?>
			<a class="brand" href="manager_dashboard" style="font-family: 'Righteous', cursive;">Auditor Panel</a> <?php endif; ?> <?php if(Session::get('user_group_id') == 12 ): ?>
			<a class="brand" href="employee_dashboard" style="font-family: 'Righteous', cursive;">Auditor Panel</a> <?php endif; ?>
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
					<li class="dropdown">
						<?php /* @if(Session::get('user_group_id') == 10 )
						<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <img src="<% asset('/css/images/user_icon.png') %>" class="user_icon">
                            <% Session::get('user_name')%><i class="caret"></i>
                        </a> @endif @if(Session::get('user_group_id') == 11 )
						<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <img src="<% asset('/css/images/user_icon.png') %>" class="user_icon">
                            <% Session::get('user_name')%><i class="caret"></i>
                        </a> @endif @if(Session::get('user_group_id') == 12 ) */ ?>
						<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo e(asset('/css/images/user_icon.png')); ?>" class="user_icon">

                            <?php echo e(Session::get('user_name')); ?><i class="caret"></i>
                        </a>
						<?php /* @endif */ ?>
						<ul class="dropdown-menu">

							<li>
								<a tabindex="-1" href="logout">Logout</a>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="nav">
					<li>
						<?php if(Session::get('user_group_id') == 10 ): ?>
						<a href="dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a> <?php endif; ?> <?php if(Session::get('user_group_id') == 12 ): ?>
						<a href="employee_dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i>
 Dashboard</a> <?php endif; ?> <?php if(Session::get('user_group_id') == 11 ): ?>
						<a href="manager_dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i>
 Dashboard</a> <?php endif; ?>
					</li>

					<?php if(Session::get('user_group_id') == 10 || Session::get('user_group_id') == 12): ?>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cogs" aria-hidden="true"></i>
 Manage<b class="caret"></b></a>
						<ul class="dropdown-menu" id="Manage">

							<li class="dropdown dropdown-submenu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">GST</a>
								<ul class="dropdown-menu">

									<li><a href="company_view_details">Regular</a></li>
									<li><a href="company_Corresponding_details">Compounding</a></li>
								</ul>
							</li>
							<li class="dropdown dropdown-submenu">
								<a href="#" id="Customer" class="dropdown-toggle" data-toggle="dropdown">IT</a>
								<ul class="dropdown-menu">

									<li><a href="customer_view_details">Individual</a></li>
									<li><a href="concern_customer_view">Concern (GST)</a></li>
								</ul>
							</li>

							<li class="dropdown dropdown-submenu">
								<a href="#" id="Customer" class="dropdown-toggle" data-toggle="dropdown">TDS</a>
								<ul class="dropdown-menu">
									<li><a href="TDSViewCustomerIndividual">Individual</a></li>
									<li><a href="TDSViewCustomerConcern">Concern (GST)</a></li>
								</ul>
							</li>
							<?php if(Session::get('user_group_id') == 10 ): ?>
							<li>
								<a href="employee_view_details" id="Employee">Employee</a>
							</li>
							<?php endif; ?>
						</ul>
					</li>

					<?php endif; ?> <?php if(Session::get('user_group_id') == 10 || Session::get('user_group_id') == 11 ): ?>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-compass" aria-hidden="true"></i> Mapping<b class="caret"></b></a>
						<ul class="dropdown-menu" id="Mapping">
							<!--
                            <li>
                                <a href="user_id_mapping">User Id</a>
                            </li>
-->
							<li class="dropdown dropdown-submenu">
								<!--                                <a href="employee_mapping" id="Employee">Company</a>-->
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">GST</a>
								<ul class="dropdown-menu">

									<li><a href="employee_mapping_regular">Regular</a></li>
									<li><a href="employee_mapping_compounding">Compounding</a></li>
								</ul>
							</li>
							<li class="dropdown dropdown-submenu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">IT</a>
								<ul class="dropdown-menu">
									<li><a href="customer_individual_mapping">Individual</a></li>
									<li><a href="customer_corresponding_mapping">Concern (GST)</a></li>
								</ul>
							</li>
							<li class="dropdown dropdown-submenu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">TDS</a>
								<ul class="dropdown-menu">
									<li><a href="customer_tds_individual_mapping">Individual</a></li>
									<li><a href="customer_tds_corresponding_mapping">Concern (GST)</a></li>
								</ul>
							</li>

						</ul>
					</li> <?php endif; ?>
					<?php /*
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-inr" aria-hidden="true"></i>
 Tax<b class="caret"></b></a>
						<ul class="dropdown-menu" id="Tax">
							<li>
								<a href="gst_add_view" id="GST">GST</a>
							</li>
							<!--
                            <li>
                                <a href="tax_it_add_view">IT</a>
                            </li>
-->

						</ul>
					</li>

					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-pie-chart" aria-hidden="true"></i> Manage Fee<b class="caret"></b></a>
						<ul class="dropdown-menu" id="Fee">
							<li>
								<a href="company_fee" id="Company">Company</a>
							</li>
							<li>
								<a href="sample_customer_fee_details" id="Customer">Customer</a>
							</li>

						</ul>
					</li>
					<!--
                    @if(Session::get('user_group_id') == 10 )

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Master<b class="caret"></b></a>
                        <ul class="dropdown-menu" id="menu1">
                            <li>
                                <a href="sample_gst">GST</a>
                            </li>
                            <li>
                                <a href="master_add_it">IT</a>
                            </li>

                        </ul>
                    </li>
                    @endif
-->
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Report<b class="caret"></b></a>
						<ul class="dropdown-menu" id="Report">
							<li>
								<a href="gst_report" id="report">GST</a>
							</li>

						</ul>
					</li>

					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-building " aria-hidden="true"></i> Company<b class="caret"></b></a>
						<ul class="dropdown-menu" id="Company">
							<li>
								<a href="sample_company_follow_Details" id="Document">Document</a>
							</li>

						</ul>
					</li>
*/ ?>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-file-text-o" aria-hidden="true"></i>  Report<b class="caret"></b></a>
						<ul class="dropdown-menu" id="Mapping">

							<li class="dropdown dropdown-submenu">
								<!--                                <a href="employee_mapping" id="Employee">Company</a>-->
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">GST</a>
								<ul class="dropdown-menu">

									<li><a href="grand_gst_regular_report">Regular</a></li>
									<li><a href="grand_compounding_regular_report">Compounding</a></li>
								</ul>
							</li>
							<li class="dropdown dropdown-submenu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">IT</a>
								<ul class="dropdown-menu">
									<li><a href="report_it_individual_year">Individual</a></li>
									<li><a href="report_it_concern_year">Concern (GST)</a></li>
								</ul>
							</li>
							<li class="dropdown dropdown-submenu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">TDS</a>
								<ul class="dropdown-menu">
									<li><a href="report_tds_individual_year">Individual</a></li>
									<li><a href="report_tds_concern_year">Concern (GST)</a></li>
								</ul>
							</li>

						</ul>
					</li>

					<!--
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-file-text-o" aria-hidden="true"></i>  Grand Report<b class="caret"></b></a>
                        <ul class="dropdown-menu" id="Mapping">

                            <li class="dropdown dropdown-submenu">
                               
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company (GST)</a>
                                <ul class="dropdown-menu">

                                    <li><a href="grand_gst_regular_report">Regular</a></li>
                                    <li><a href="grand_compounding_regular_report">Compounding</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer (IT)</a>
                                <ul class="dropdown-menu">

                                    <li><a href="#">Individual</a></li>
                                    <li><a href="#">Concern (GST)</a></li>
                                    <li><a href="#">TDS</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
-->
					<li class="dropdown">

						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-gear" aria-hidden="true"></i> Status <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="status" id="Employee">Company</a>
							</li>
							<?php if(Session::get('user_group_id') == 10 ) { ?>
							<li>
								<a href="employeeStatus">Employee</a>
								<!--
                                <ul class="dropdown-menu">

                                    <li><a href="status">Company</a></li>
                                    <li><a href="employeeStatus">Employee</a></li>
                                </ul>-->
							</li>
							<?php } ?>
						</ul>
					</li>
					<!--
					<li class="dropdown">
						<a href="grand_report"><i class="fa fa-file-text-o" aria-hidden="true"></i> Grand Report</a>
						<ul class=" dropdown-submenu dropdown-menu">
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer (IT)</a>
							</li>

						</ul>
-->

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>
<script src="<?php echo e(asset('/js/angular.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/angular-chosen.min.js')); ?>"></script>
<script src="<?php echo e(asset('/vendors/modernizr-2.6.2-respond-1.1.0.min.js')); ?>"></script>
<link href="<?php echo e(asset('/vendors/uniform.default.css')); ?>" rel="stylesheet" media="screen">
<link href="<?php echo e(asset('/vendors/wysiwyg/bootstrap-wysihtml5.css')); ?>" rel="stylesheet" media="screen">
<link href="<?php echo e(asset('/css/jquery-ui.css')); ?>" rel="stylesheet" media="screen">
<script src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/jquery-ui.js')); ?>"></script>

<!--<script src="<?php echo e(asset('/vendors/jquery-1.9.1.js')); ?>"></script>-->
<script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('/vendors/jquery.uniform.min.js')); ?>"></script>
<script src="<?php echo e(asset('/vendors/wysiwyg/bootstrap-wysihtml5.js')); ?>"></script>
<script src="<?php echo e(asset('/vendors/wysiwyg/wysihtml5-0.3.0.js')); ?>"></script>
<script src="<?php echo e(asset('/vendors/wizard/jquery.bootstrap.wizard.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/scripts.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/vendors/jquery-validation/dist/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/form-validation.js')); ?>"></script>
<script src="<?php echo e(asset('/vendors/modernizr-2.6.2-respond-1.1.0.min.js')); ?>"></script>
<!--<script src="<?php echo e(asset('/vendors/datatables/js/jquery.dataTables.min.js')); ?>"></script>-->
<!-- <script src="<?php echo e(asset('/assets/DT_bootstrap.js')); ?>"></script> -->
<script data-require="chosen@*" data-semver="1.0.0" src="<?php echo e(asset('/js/chosen.jquery.min.js')); ?>"></script>
<script data-require="chosen@*" data-semver="1.0.0" src="<?php echo e(asset('/js/chosen.proto.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/ui-bootstrap-tpls-0.6.0.js')); ?>"></script>
<script src="<?php echo e(asset('/vendors/easypiechart/jquery.easy-pie-chart.js')); ?>"></script>

<script>
	$(function() {
		// Easy pie charts
		$('.chart').easyPieChart({
			animate: 1000
		});
	});
	$(function() {
		$(".dropdown").hover(
			function() {
				$('.dropdown-menu', this).stop(true, true).fadeIn("fast");
				$(this).toggleClass('open');
				$('b', this).toggleClass("caret caret-up");
			},
			function() {
				$('.dropdown-menu', this).stop(true, true).fadeOut("fast");
				$(this).toggleClass('open');
				$('b', this).toggleClass("caret caret-up");
			});
	});

</script>
