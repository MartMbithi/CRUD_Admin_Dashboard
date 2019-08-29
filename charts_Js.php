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
                  <i class="fa fa-bar-chart"></i>
               </div>
               <div class="header-title">
                  <h1>Chart js</h1>
                  <small>Simple yet flexible JavaScript charting for designers & developers</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Bar Chart -->
                  <div class="col-sm-12 col-md-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Bar chart</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <canvas id="barChart" height="200"></canvas>
                        </div>
                     </div>
                  </div>
                  <!-- Radar Chart -->
                  <div class="col-sm-12 col-md-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Rader chart</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <canvas id="radarChart" height="200"></canvas>
                        </div>
                     </div>
                  </div>
                  <!-- Line Chart -->
                  <div class="col-sm-12 col-md-8">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Line chart</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <canvas id="lineChart" height="140"></canvas>
                        </div>
                     </div>
                  </div>
                  <!-- Pie Chart -->
                  <div class="col-sm-6 col-md-4">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Pie chart</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <canvas id="pieChart" height="310"></canvas>
                        </div>
                     </div>
                  </div>
                  <!-- Doughnut Chart -->
                  <div class="col-sm-6 col-md-4">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Doughut chart</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <canvas id="doughutChart" height="310"></canvas>
                        </div>
                     </div>
                  </div>
                  <!-- Polar Chart -->
                  <div class="col-sm-6 col-md-4">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Polar chart</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <canvas id="polarChart" height="310"></canvas>
                        </div>
                     </div>
                  </div>
                  <!-- Single Bar Chart -->
                  <div class="col-sm-6 col-md-4">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Single Bar Chart</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <canvas id="singelBarChart" height="310"></canvas>
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
      <!-- ChartJs JavaScript -->
      <script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
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
             function chartlist() {
             "use strict"; // Start of use strict
         
             //bar chart
             var ctx = document.getElementById("barChart");
             var myChart = new Chart(ctx, {
                 type: 'bar',
                 data: {
                     labels: ["January", "February", "March", "April", "May", "June", "July"],
                     datasets: [
                         {
                             label: "My First dataset",
                             data: [65, 59, 80, 81, 56, 55, 40],
                             borderColor: "rgba(0, 150, 136, 0.76)",
                             borderWidth: "0",
                             backgroundColor: "rgba(0, 150, 136, 0.76)"
                         },
                         {
                             label: "My Second dataset",
                             data: [28, 48, 40, 19, 86, 27, 90],
                             borderColor: "rgba(0, 150, 136, 0.76)",
                             borderWidth: "0",
                             backgroundColor: "rgba(0, 150, 136, 0.76)"
                         }
                     ]
                 },
                 options: {
                     scales: {
                         yAxes: [{
                                 ticks: {
                                     beginAtZero: true
                                 }
                             }]
                     }
                 }
             });
         
             //radar chart
             var ctx = document.getElementById("radarChart");
             var myChart = new Chart(ctx, {
                 type: 'radar',
                 data: {
                     labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                     datasets: [
                         {
                             label: "My First dataset",
                             data: [65, 59, 66, 45, 56, 55, 40],
                             borderColor: "rgba(0, 150, 136, 0.76)",
                             borderWidth: "1",
                             backgroundColor: "rgba(0, 150, 136, 0.76)"
                         },
                         {
                             label: "My Second dataset",
                             data: [28, 12, 40, 19, 63, 27, 87],
                             borderColor: "rgba(55, 160, 0, 0.7",
                             borderWidth: "1",
                             backgroundColor: "rgba(0, 150, 136, 0.98)"
                         }
                     ]
                 },
                 options: {
                     legend: {
                         position: 'top'
                     },
                     scale: {
                         ticks: {
                             beginAtZero: true
                         }
                     }
                 }
             });
         
             //line chart
             var ctx = document.getElementById("lineChart");
             var myChart = new Chart(ctx, {
                 type: 'line',
                 data: {
                     labels: ["January", "February", "March", "April", "May", "June", "July"],
                     datasets: [
                         {
                             label: "My First dataset",
                             borderColor: "rgba(0,0,0,.09)",
                             borderWidth: "1",
                             backgroundColor: "rgba(0,0,0,.07)",
                             data: [22, 44, 67, 43, 76, 45, 12]
                         },
                         {
                             label: "My Second dataset",
                             borderColor: "rgba(0, 150, 136, 0.76)",
                             borderWidth: "1",
                             backgroundColor: "rgba(0, 150, 136, 0.76)",
                             pointHighlightStroke: "rgba(26,179,148,1)",
                             data: [16, 32, 18, 26, 42, 33, 44]
                         }
                     ]
                 },
                 options: {
                     responsive: true,
                     tooltips: {
                         mode: 'index',
                         intersect: false
                     },
                     hover: {
                         mode: 'nearest',
                         intersect: true
                     }
         
                 }
             });
         
             //pie chart
             var ctx = document.getElementById("pieChart");
             var myChart = new Chart(ctx, {
                 type: 'pie',
                 data: {
                     datasets: [{
                             data: [45, 25, 20, 10],
                             backgroundColor: [
                                 "#084368cc",
                                 "#169398",
                                 "#b2c917cc",
                                 "#c98217cc"
                             ],
                             hoverBackgroundColor: [
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0,0,0,0.07)"
                             ]
         
                         }],
                     labels: [
                         "#009688",
                         "#009688",
                         "#009688"
                     ]
                 },
                 options: {
                     responsive: true
                 }
             });
         
             //doughut chart
             var ctx = document.getElementById("doughutChart");
             var myChart = new Chart(ctx, {
                 type: 'doughnut',
                 data: {
                     datasets: [{
                             data: [45, 25, 20, 10],
                             backgroundColor: [
                                 "rgba(0, 150, 136, 0.76)",
                                 "#30a44ae6",
                                 "#290d69e6",
                                 "#169398"
                             ],
                             hoverBackgroundColor: [
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0,0,0,0.07)"
                             ]
         
                         }],
                     labels: [
                         "#009688",
                         "#009688",
                         "#009688",
                         "#009688"
                     ]
                 },
                 options: {
                     responsive: true
                 }
             });
         
             //polar chart
             var ctx = document.getElementById("polarChart");
             var myChart = new Chart(ctx, {
                 type: 'polarArea',
                 data: {
                     datasets: [{
                             data: [15, 18, 9, 6, 19],
                             backgroundColor: [
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0,0,0,0.2)",
                                 "rgba(0, 150, 136, 0.76)"
                             ]
         
                         }],
                     labels: [
                         "#009688",
                         "#009688",
                         "#009688",
                         "#009688"
                     ]
                 },
                 options: {
                     responsive: true
                 }
             });
         
             // single bar chart
             var ctx = document.getElementById("singelBarChart");
             var myChart = new Chart(ctx, {
                 type: 'bar',
                 data: {
                     labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
                     datasets: [
                         {
                             label: "My First dataset",
                             data: [40, 55, 75, 81, 56, 55, 40],
                             borderColor: "#009688",
                             borderWidth: "0",
                             backgroundColor: "rgba(0, 150, 136, 0.76)"
                         }
                     ]
                 },
                 options: {
                     scales: {
                         yAxes: [{
                                 ticks: {
                                     beginAtZero: true
                                 }
                             }]
                     }
                 }
             });
          }
          chartlist();
         });
         
      </script>
   </body>

</html>

