<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href=""><img class="main-logo" src="<% asset('/img/logo/logo.png') %>" alt="" /></a>
<!--                <strong><a href="index.html"><img src="<% asset('/img/logo/logosn.png') %>" alt="" /></a></strong>-->
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                     <ul class="metismenu" id="menu1">
                         <li>
                            <a href="dashboard">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Dashboard</span>
								</a>
                           
                        </li>   
                            <li>
                            <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Master</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
								<?php if(Session::get('designation_id')==1){ ?>
                                <li><a title="Academic Year" href="view_academic"><span class="mini-sub-pro">Academic Year</span></a></li>
                                 <li><a title="Designation" href="view_designation"><span class="mini-sub-pro">Designation</span></a></li>
                                <?php }?>
                                <li><a title="Employee" href="view_employee"><span class="mini-sub-pro">Employee</span></a></li>
                                <li><a title="Customer" href="view_customer"><span class="mini-sub-pro">Customer</span></a></li>
                                
                            </ul>
                        </li>
                         
                        
<!--
                        <li>
                            <a href="enquiry_master">
                                   <span class="educate-icon educate-home icon-wrap"></span>
                                   <span class="mini-click-non">Enquiry</span>
                                </a>
                           
                                         
                                        </li>
-->
                              <li>
                            <a href="enquiry_master">
                                   <span class="educate-icon educate-interface icon-wrap"></span>
                                   <span class="mini-click-non">Transaction</span>
                                </a>
                           
                                         
                                        </li>
                    </ul>
<!--

-->
                </nav>
            </div>
        </nav>
    </div>