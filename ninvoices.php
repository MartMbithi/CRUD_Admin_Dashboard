<?php 
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['admin_id'];
    if(isset($_POST['add_invoice']))//get specific input from a certain button.
            {
                //declare and initialize some variables
                $account=$_POST['account'];
                $amount=$_POST['amount'];
                $invoice_date=$_POST['invoice_date'];
                $due_date=$_POST['due_date'];
                $type=$_POST['type'];
                $status=$_POST['status'];
                //sql to inset the values to the database
                $query="insert into invoice (account, amount, invoice_date, due_date, type, status) values(?,?,?,?,?,?)";
                $stmt = $mysqli->prepare($query);
                //bind the submitted values with the matching columns in the database.
                $rc=$stmt->bind_param('ssssss', $account, $amount, $invoice_date, $due_date, $type, $status);
                $stmt->execute();
                //if binding is successful, then indicate that a new value has been added.
                $success_msg= "Invoice Details Added";
               
            }
            
?>
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
                  <i class="fa fa-sticky-note-o"></i>
               </div>
               <div class="header-title">
                  <h1>Add Invoices</h1>
                  
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <i class="fa fa-sticky-note-o"></i>  Invoices</a>  
                           </div>
                        </div>
                          <!--Trigger a success message after the account has been created-->
                          <?php if(isset($success_msg)) 
                        {?>
                        <script>
                             setTimeout(function () 
                            { 
                                 swal("Success!","<?php echo $success_msg;?>!","success");
                            },
                                  100);
                        </script>
                  
                        <?php }?>
                        <div class="panel-body">
                           <form class="col-sm-12" method ="POST">
                              <div class="form-group">
                                 <label>Bank Account </label>
                                 <input type="text" name="account" class="form-control"  required>
                              </div>
                              <div class="form-group">
                                 <label>Amount Paid</label>
                                 <input type="text" name="amount"  required class="form-control"  required>
                              </div>
                              <div class="form-group">
                                 <label>Invoice Date</label>
                                 <input type="date" name="invoice_date" class="form-control"  required>
                              </div>
                              <div class="form-group">
                                 <label>Due Date</label>
                                 <input type="date" name="due_date" class="form-control"  required>
                              </div>
                              <div class="form-group">
                                 <label>Type</label>
                                 <select name="type"  class="form-control">
                                    <option>Onetime</option>
                                    
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Status</label>
                                 <select name="status" class="form-control">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                 </select>
                              </div>
                              
                              <div class="reset-button">
                                 <a href="#" class="btn btn-warning">Reset</a>
                                 <input type="submit" name="add_invoice" value="Submit" class="btn btn-add">
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

<!-- Mirrored from thememinister.com/crm/ninvoices.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 11:39:46 GMT -->
</html>

