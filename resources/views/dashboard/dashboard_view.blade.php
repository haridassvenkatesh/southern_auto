@extends('templates.layout') @section('content')

<div class="all-content-wrapper">
  
   <div class="analytics-sparkle-area" style="margin-top: 65px;">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="analytics-sparkle-line reso-mg-b-30">
                  <div class="analytics-content">
                     <h5>Computer Technologies</h5>
                     <h2>$<span class="counter">5000</span> <span class="tuition-fees">Tuition Fees</span></h2>
                     <span class="text-success">20%</span>
                     <div class="progress m-b-0">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="analytics-sparkle-line reso-mg-b-30">
                  <div class="analytics-content">
                     <h5>Accounting Technologies</h5>
                     <h2>$<span class="counter">3000</span> <span class="tuition-fees">Tuition Fees</span></h2>
                     <span class="text-danger">30%</span>
                     <div class="progress m-b-0">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                  <div class="analytics-content">
                     <h5>Electrical Engineering</h5>
                     <h2>$<span class="counter">2000</span> <span class="tuition-fees">Tuition Fees</span></h2>
                     <span class="text-info">60%</span>
                     <div class="progress m-b-0">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                  <div class="analytics-content">
                     <h5>Chemical Engineering</h5>
                     <h2>$<span class="counter">3500</span> <span class="tuition-fees">Tuition Fees</span></h2>
                     <span class="text-inverse">80%</span>
                     <div class="progress m-b-0">
                        <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
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
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="sparkline9-list responsive-mg-b-30">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    <h1>Bar Big size <span class="c3-ds-n">Example</span></h1>
                                </div>
                            </div>
                            <div class="sparkline9-graph">
                                <div id="stocked"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="sparkline10-list">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>Bar Big size <span class="c3-ds-n">Example</span></h1>
                                </div>
                            </div>
                            <div class="sparkline10-graph">
                                <div id="pie"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box res-mg-t-30 table-mg-t-pro-n">
                            <h3 class="box-title">Visits from countries</h3>
                            <ul class="country-state">
                                <li>
                                    <h2><span class="counter">1250</span></h2> <small>From Australia</small>
                                    <div class="pull-right">75% <i class="fa fa-level-up text-danger ctn-ic-1"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger ctn-vs-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%;"> <span class="sr-only">75% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><span class="counter">1050</span></h2> <small>From USA</small>
                                    <div class="pull-right">48% <i class="fa fa-level-up text-success ctn-ic-2"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info ctn-vs-2" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><span class="counter">6350</span></h2> <small>From Canada</small>
                                    <div class="pull-right">55% <i class="fa fa-level-up text-success ctn-ic-3"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success ctn-vs-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:55%;"> <span class="sr-only">55% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><span class="counter">950</span></h2> <small>From India</small>
                                    <div class="pull-right">33% <i class="fa fa-level-down text-success ctn-ic-4"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success ctn-vs-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:33%;"> <span class="sr-only">33% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><span class="counter">3250</span></h2> <small>From Bangladesh</small>
                                    <div class="pull-right">60% <i class="fa fa-level-up text-success ctn-ic-5"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-inverse ctn-vs-5" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">60% Complete</span></div>
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


@stop
