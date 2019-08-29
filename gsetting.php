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
                  <i class="fa fa-gears"></i>
               </div>
               <div class="header-title">
                  <h1>General Settings</h1>
                  <small>General Settings</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>General Settings</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6">
                              <div class="form-group">
                                 <label>Application Name/ Company Name</label>
                                 <input type="text" class="form-control" placeholder="Enter Name" required>
                              </div>
                              <div class="form-group">
                                 <label>Default Landing Page</label>
                                 <select class="form-control">
                                    <option>Admin Login</option>
                                    <option>client Login</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Dashboard Page</label>
                                 <select class="form-control">
                                    <option>Canvas</option>
                                    <option>Legacy</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Pay To Address</label>
                                 <textarea class="form-control" rows="3" required></textarea>
                              </div>
                              <div class="form-group">
                                 <label>Default Invoice Terms</label>
                                 <textarea class="form-control" rows="3" required></textarea>
                              </div>
                              <div class="form-group">
                                 <label>Invoice Starting</label>
                                 <input type="text" class="form-control" placeholder="Enter Invoice Starting" required>
                              </div>
                              <div class="form-group">
                                 <label>Company Email</label>
                                 <input type="email" class="form-control" placeholder="Enter Email" required>
                              </div>
                              <div class="form-group">
                                 <label>Company Mobile</label>
                                 <input type="number" class="form-control" placeholder="Enter Mobile" required>
                              </div>
                              <div class="form-group">
                                 <label>Domain Name</label>
                                 <input type="text" class="form-control" placeholder="Enter domain" required>
                              </div>
                              <div class="form-group">
                                 <label>Default currency</label>
                                 <select class="form-control">
                                    <option>US dollar</option>
                                    <option>Australian dollar</option>
                                    <option>Bdt</option>
                                    <option>Canadian dollar</option>
                                    <option>Euro</option>
                                    <option>Pound</option>
                                 </select>
                              </div>
                              <div class="reset-button">
                                 <a href="#" class="btn btn-warning">Reset</a>
                                 <a href="#" class="btn btn-add">Save</a>
                              </div>
                           </form>
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
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
   </body>

</html>

