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
                  <i class="fa fa-envelope"></i>
               </div>
               <div class="header-title">
                  <h1>Email Settings</h1>
                  <small>List of Email Settings</small>
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
                                 <h4>Email Settings</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6">
                              <div class="form-group">
                                 <label>Protocol</label>
                                 <select class="form-control">
                                    <option>PHP</option>
                                    <option>SMTP</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Smtp Host</label>
                                 <input type="text" class="form-control" placeholder="Enter Smtp Host" required>
                              </div>
                              <div class="form-group">
                                 <label>Smtp user</label>
                                 <input type="text" class="form-control" placeholder="Enter Smtp user" required>
                              </div>
                              <div class="form-group">
                                 <label>Smtp Password</label>
                                 <input type="password" class="form-control" placeholder="Enter Smtp Password" required>
                              </div>
                              <div class="form-group">
                                 <label>Smtp Port</label>
                                 <input type="number" class="form-control" placeholder="Enter Smtp Port" required>
                              </div>
                              <div class="form-group">
                                 <label>System mail</label>
                                 <input type="email" class="form-control" placeholder="Enter Email" required>
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

