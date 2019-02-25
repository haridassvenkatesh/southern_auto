@extends('templates.layout') @section('content')
<style>
    .enq_icon{
        font-size:30px;
    }
    .widget_2{
        text-align:center;
    }
    .center_align{
        text-align:center;
    }
    .hpanel{
    box-shadow: 1px 1px 2px 2px #ccc;
    }    
    .m1_wid{
        margin-bottom: 20px;
    }
    
    .cont_siz{
/*        margin-top:15px;*/
		margin-top: 65px;
    }
</style>    

<meta name="csrf-token" content="<% csrf_token() %>" />
<div class="contaniner_class">
    <div class="widgets-programs-area">
            <div class="container-fluid cont_siz">

                <div class="row"> 
                   <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-icon pull-right">
                                     <span class="badge"><?= $data['create_enquiry_count'] ?></span> 
                                </div>
                                
                                <div class="m-t-xl m1_wid widget-cl-1 widget_2">
                                   <a href="view_enquiry"> <i class="educate-icon educate-apps enq_icon"></i></a>
                                </div>
                                <div class="stats-title center_align">
                                    <a href="view_enquiry"><h4>New Enquiry</h4></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
               
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-icon pull-right">
                                     <span class="badge"><?= $data['quoted_enquiry_count'] ?></span> 
                                </div>
                                
                                <div class="m-t-xl m1_wid widget-cl-1 widget_2">
                                   <a href="view_enquiry_quoted"> <i class="educate-icon educate-apps enq_icon"></i></a>
                                </div>
                                <div class="stats-title center_align">
                                     <a href="view_enquiry_quoted"><h4>Enquiry Quoted</h4></a> 
                                </div>
                            </div>
                        </div>
                    </div>


                    
                      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-icon pull-right">
                                     <span class="badge"><?= $data['won_enquiry_count'] ?></span> 
                                </div>
                                
                                <div class="m-t-xl m1_wid widget-cl-1 widget_2">
                                   <a href="view_enquiry_converted"> <i class="educate-icon educate-apps enq_icon"></i></a>
                                </div>
                                <div class="stats-title center_align">
                                     <a href="view_enquiry_converted"><h4>Project</h4></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-icon pull-right">
                                     <span class="badge"><?= $data['lost_enquiry_count'] ?></span> 
                                </div>
                                
                                <div class="m-t-xl m1_wid widget-cl-1 widget_2">
                                   <a href="view_enquiry_lost"> <i class="educate-icon educate-apps enq_icon"></i></a>
                                </div>
                                <div class="stats-title center_align">
                                     <a href="view_enquiry_lost"><h4>Lost</h4></a> 
                                </div>
                            </div>
                        </div>
                    </div></div><br/>
                    
                <div class="row"> 
                    
                      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-icon pull-right">
                                     <span class="badge"><?= $data['closed_enquiry_count'] ?></span> 
                                </div>
                                
                                <div class="m-t-xl m1_wid widget-cl-1 widget_2">
                                   <a href="view_enquiry_closed"> <i class="educate-icon educate-apps enq_icon"></i></a>
                                </div>
                                <div class="stats-title center_align">
                                     <a href="view_enquiry_closed"><h4>Closed</h4></a> 
                                </div>
                            </div>
                        </div>
                    </div>
               
                    
                      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-icon pull-right">
                                     <span class="badge"><?= $data['hold_enquiry_count'] ?></span> 
                                </div>
                                
                                <div class="m-t-xl m1_wid widget-cl-1 widget_2">
                                   <a href="view_enquiry_hold"> <i class="educate-icon educate-apps enq_icon"></i></a>
                                </div>
                                <div class="stats-title center_align">
                                     <a href="view_enquiry_hold"><h4>Hold</h4></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>




@stop
