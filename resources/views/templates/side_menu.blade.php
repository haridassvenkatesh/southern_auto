<style>
	.header-right-info ul.header-right-menu li .author-log {
    left: -89px;
}
</style>
<div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        
                    </div>
                </div>
            </div>
        </div>
<div class="header-advance-area">
 <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <!-- <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div> -->
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
<!--
                         
-->
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
<!--
         
-->

                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
<!--															<img src="<% asset('/img/product/pro4.jpg') %>" alt="" />-->
															<span class="admin-name"><?php echo Session::get('emp_name'); ?></span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="change_password"><span class="edu-icon edu-user-rounded author-log-ic"></span>Change Password</a>
                                                        </li>
                                                        <li><a href="logout"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="dashboard">Dashboard <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        
                                        </li>
                                           <li><a data-toggle="collapse" data-target="#demopro" href="#">Master <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
												<?php if(Session::get('designation_id')==1){ ?>
                                                <li><a href="view_academic">Academic Year</a>
                                                </li>
                                                <li><a href="view_designation">Designation</a>
                                                </li>                                                 
                                                <?php  } ?>
                                                <li><a href="view_employee">Employee</a>
                                                </li>
                                                <li><a href="view_customer">Customer</a>
                                                </li>                                               
                                            </ul>
                                        </li>
                                       
<!--
                                        <li><a data-toggle="collapse" data-target="#Charts" href="enquiry_master">Enquiry <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                         
                                        </li> 
-->
                                        
                                        <li><a data-toggle="collapse" data-target="#Charts" href="enquiry_master">Transaction <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                         
                                        </li>
                                    </ul>
<!--
 
-->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>    </div>
            <!-- Mobile Menu end -->