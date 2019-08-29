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
                  <i class="fa fa-file-text"></i>
               </div>
               <div class="header-title">
                  <h1>Client Report</h1>
                  <small>Client Report details</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Client Payment Reports Chart -->
                  <div class="col-sm-6 col-md-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Client Payment Reports</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <canvas id="doughutChart" height="200"></canvas>
                        </div>
                     </div>
                  </div>
                  <!-- Client Payment Status Chart -->
                  <div class="col-sm-6 col-md-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Client Payment Status</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <canvas id="polarChart" height="200"></canvas>
                        </div>
                     </div>
                  </div>
                  <!-- Client Payment Reports Chart -->
                  <div class="col-sm-6 col-md-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Client Project Reports</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <canvas id="doughutChart2" height="200"></canvas>
                        </div>
                     </div>
                  </div>
                  <!-- Projects time -->
                  <div class="col-sm-6 col-md-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Client Project Assignment</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <h4>01. Please Currection the landing page error</h4>
                           <h4>02. Please Currection the landing page error</h4>
                           <h4>03. Please Currection the landing page error</h4>
                           <h4>04. Please Currection the landing page error</h4>
                           <h4>05. Please Currection the landing page error</h4>
                           <h4>06. Please Currection the landing page error</h4>
                           <h4>07. Please Currection the landing page error</h4>
                           <h4>08. Please Currection the landing page error</h4>
                           <h4>09. Please Currection the landing page error</h4>
                           <h4>10. Please Currection the landing page error</h4>
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
      $(function() {
         //doughut chart
         var ctx = document.getElementById("doughutChart");
         var myChart = new Chart(ctx, {
             type: 'doughnut',
             data: {
                 datasets: [{
                         data: [45, 25, 20, 10],
                         backgroundColor: [
                             "#125580cc",
                             "#13a21bb3",
                             "#1389a2b3",
                             "#1324a2b3"
                         ],
                         hoverBackgroundColor: [
                             "#125580cc",
                             "#13a21bb3",
                             "#1389a2b3",
                             "#1324a2b3"
                         ]
         
                     }],
                 labels: [
                     "Paid amount",
                     "Due amount",
                     "Invoice amount",
                     "Estimate amount"
                 ]
             },
             options: {
                 responsive: true
             }
         });
         
         //doughut chart2
         var ctx = document.getElementById("doughutChart2");
         var myChart = new Chart(ctx, {
             type: 'doughnut',
             data: {
                 datasets: [{
                         data: [45, 25, 20, 10],
                          backgroundColor: [
                            "#133da2b3",
                             "#5813a2b3",
                             "rgba(55,160,0,0.5)",
                             "#67a213b3",
                             "rgba(55,160,0,0.5)"
                         ],
                         hoverBackgroundColor: [
                            "#13a18d",
                             "#4a1e93",
                             "#42931e",
                             "#67a213b3",
                             "#42931e"
                         ]
         
                     }],
                 labels: [
                     "Started",
                     "inprogress",
                     "Completed",
                     "cancel"
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
                            "#133da2b3",
                             "#5813a2b3",
                             "rgba(55,160,0,0.5)",
                             "#67a213b3",
                             "rgba(55,160,0,0.5)"
                         ]
         
                     }],
                 labels: [
                    "Started",
                     "inprogress",
                     "Completed",
                     "cancel",
                     "success"
                 ]
             },
             options: {
                 responsive: true
             }
         });
         });
      </script>
   </body>

</html>

