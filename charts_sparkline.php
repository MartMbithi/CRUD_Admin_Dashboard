<!DOCTYPE html>
<html lang="en">
   
<?php include('assets/_partials/head.php');?>

   <body class="hold-transition sidebar-mini">
   <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
      <?php include('assets/_partials/header.php');?>

         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar -->
            <?php include('assets/_partials/navbar.php');?>

            <!-- /.sidebar -->
         </aside>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-line-chart"></i>
               </div>
               <div class="header-title">
                  <h1>Sparkline Charts</h1>
                  <small>Preview sample. Documentation here: <a href="http://omnipotent.net/jquery.sparkline/#s-about" target="_blank">http://omnipotent.net/jquery.sparkline/#s-about</a></small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="spark_about">
                        <p>
                           This <a href="http://jquery.com/">jQuery</a> plugin generates <a href="http://en.wikipedia.org/wiki/Sparkline">
                           sparklines</a> (small inline charts) directly in the browser using data supplied either inline in the HTML,
                           or via javascript.
                        </p>
                        <p>
                           The plugin is compatible with most modern browsers and has been tested with Firefox 2+, Safari 3+, Opera 9, Google
                           Chrome and Internet Explorer 6, 7, 8, 9 & 10 as well as iOS and Android. Each example displayed below takes just 1
                           line of HTML or javascript to generate.
                        </p>
                        <p>
                           The plugin was written by <a href="http://omnipotent.net/">Gareth Watts</a>
                           for <a href="http://www.splunk.com/">Splunk Inc</a> and released under the
                           <a href="http://www.opensource.org/licenses/BSD-3-Clause">New BSD License</a>.
                        </p>
                     </div>
                  </div>
               </div>
               <!-- Sparklines Charts -->
               <div class="row">
                  <div class="col-sm-6 col-md-3">
                     <div class="panel panel-bd">
                        <div class="panel-body">
                           <div class="statistic-box">
                              <h2><span class="count-number">206</span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span></h2>
                              <div class="small">% New Sessions</div>
                              <div class="sparkline1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                     <div class="panel panel-bd">
                        <div class="panel-body">
                           <div class="statistic-box">
                              <h2><span class="count-number">321</span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span> </h2>
                              <div class="small">Total visitors</div>
                              <div class="sparkline2"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                     <div class="panel panel-bd">
                        <div class="panel-body">
                           <div class="statistic-box">
                              <h2><span class="count-number">789</span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span></h2>
                              <div class="small">Total users</div>
                              <div class="sparkline3"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                     <div class="panel panel-bd">
                        <div class="panel-body">
                           <div class="statistic-box">
                              <h2><span class="count-number">171</span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span></h2>
                              <div class="small">Bounce Rate</div>
                              <div class="sparkline4"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Sparklines Example chart</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>Graph</th>
                                       <th>Type</th>
                                       <th>Code</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><span id="sparkline5"></span></td>
                                       <td>Inline line chart</td>
                                       <td>{ type: 'line', lineColor: '#009688', fillColor: '#009688', width: '150', height: '20' }</td>
                                    </tr>
                                    <tr>
                                       <td><span id="sparkline6"></span></td>
                                       <td>Bar chart</td>
                                       <td>{ type: 'bar', barColor: '#009688', negBarColor: '#c6c6c6', width: '150', height: '20' }</td>
                                    </tr>
                                    <tr>
                                       <td><span id="sparkline7"></span></td>
                                       <td>Pie chart</td>
                                       <td>{ type: 'pie', sliceColors: ['#009688', '#ffffff'], width: '150', height: '20' }</td>
                                    </tr>
                                    <tr>
                                       <td><span id="sparkline8"></span></td>
                                       <td>Long inline chart</td>
                                       <td>{ type: 'line', lineColor: '#009688', fillColor: '#009688', width: '150', height: '20' }</td>
                                    </tr>
                                    <tr>
                                       <td><span id="sparkline9"></span> </td>
                                       <td>Tristate chart</td>
                                       <td>{ type: 'tristate', posBarColor: '#009688', negBarColor: '#ffffff', width: '150', height: '20'}</td>
                                    </tr>
                                    <tr>
                                       <td><span id="sparkline10"></span></td>
                                       <td>Discrete chart</td>
                                       <td>{ type: 'discrete', lineColor: '#009688', width: '150', height: '20'}); }</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <?php include('assets/_partials/footer.php');?>

      </div>
      <!-- ./wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
      <!-- FastClick -->
      <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="assets/dist/js/custom.js" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- Counter js --> 
      <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
      <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
      <!-- Sparklines js -->
      <script src="assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
      <script>
         $(document).ready(function () {
         function sparklin() {
             "use strict"; // Start of use strict
             //counter
             $('.count-number').counterUp({
                 delay: 10,
                 time: 5000
             });
         
             //Sparklines Charts
             $('.sparkline1').sparkline([4, 6, 7, 7, 4, 3, 2, 4, 6, 7, 4, 6, 7, 7, 4, 3, 2, 4, 6, 7, 7, 4, 3, 1], {
                 type: 'bar',
                 barColor: '#009688',
                 height: '30',
                 barWidth: '8',
                 barSpacing: 1
             });
             $(".sparkline2").sparkline([-8, 2, 4, 3, 5, 4, 3, 5, 5, 6, 3, 9, 7, 3, 5, 6, 9, 5, 6, 7, 2, 3, 9, 6, 6, 7, 8, 10, 15, 16, 17, 15], {
                 type: 'line',
                 height: '30',
                 width: '100%',
                 lineColor: '#009688',
                 fillColor: '#fff'
             });
             $(".sparkline3").sparkline([2, 5, 3, 7, 5, 10, 3, 6, 5, 7], {
                 type: 'line',
                 height: '30',
                 width: '100%',
                 lineColor: '#009688',
                 fillColor: '#fff'
             });
             $(".sparkline4").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                 type: 'line',
                 height: '30',
                 width: '100%',
                 lineColor: 'rgba(0, 150, 136, 0.65)',
                 fillColor: 'rgba(0, 150, 136, 0.65)'
             });
             $("#sparkline5").sparkline([34, 43, 43, 35, 44, 32, 44, 52, 25], {
                 type: 'line',
                 lineColor: '#009688',
                 fillColor: '#009688',
                 width: '150',
                 height: '20'
             });
             $("#sparkline6").sparkline([5, 6, 7, 2, 0, -4, -2, 4], {
                 type: 'bar',
                 barColor: '009688',
                 negBarColor: '#c6c6c6',
                 width: '150',
                 height: '20'
             });
             $("#sparkline7").sparkline([10, 2], {
                 type: 'pie',
                 sliceColors: ['#009688', '#ffffff'],
                 width: '150',
                 height: '20'
             });
             $("#sparkline8").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
                 type: 'line',
                 lineColor: '#009688',
                 fillColor: '#009688',
                 width: '150',
                 height: '20'
             });
             $("#sparkline9").sparkline([1, 1, 0, 1, -1, -1, 1, -1, 0, 0, 1, 1], {
                 type: 'tristate',
                 posBarColor: '#009688',
                 negBarColor: '#ffffff',
                 width: '150',
                 height: '20'
             });
             $("#sparkline10").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 5, 6, 3, 4, 5, 8, 7, 6, 9, 3, 2, 4, 1, 5, 6, 4, 3, 7], {
                 type: 'discrete',
                 lineColor: '#009688',
                 width: '150',
                 height: '20'
             });
         }
         sparklin();
         });
      </script>
   </body>

</html>

