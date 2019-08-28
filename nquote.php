<?php 
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['admin_id'];
    if(isset($_POST['add_quote']))//get specific input from a certain button.
            {
                //declare and initialize some variables
                $subject=$_POST['subject'];
                $customer=$_POST['customer'];
                $quotes=$_POST['quotes'];
                $exp_date=$_POST['exp_date'];
                $entry_date=$_POST['entry_date'];
                $c_mobile=$_POST['c_mobile'];
                $stages=$_POST['stages'];
                $sales_tax=$_POST['sales_tax'];
                $discount=$_POST['discount'];
                //sql to inset the values to the database
                $query="insert into quote (subject, customer, quotes, exp_date, entry_date, c_mobile, stages, sales_tax, discount) values(?,?,?,?,?,?,?,?,?)";
                $stmt = $mysqli->prepare($query);
                //bind the submitted values with the matching columns in the database.
                $rc=$stmt->bind_param('sssssssss', $subject, $customer, $quotes, $exp_date, $entry_date, $c_mobile, $stages, $sales_tax, $discount);
                $stmt->execute();
                //if binding is successful, then indicate that a new value has been added.
                $success_msg= "Quotes Details Added";
               
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
              
               <div class="header-title">
                  <h1>Add quotes</h1>
                  
               </div>
            </section>
            <!-- Main content -->
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
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="quote.php"> 
                              <i class="fa fa-list"></i>  Quotes List</a>  
                           </div>
                        </div>
                        <div class="panel-body">

                           <form class="col-sm-12" method =POST>
                              <div class="form-group">
                                 <label>Subject</label>
                                 <input type="text" name="subject" class="form-control" placeholder="Enter Subject" required>
                              </div>
                              <div class="form-group">
                                 <label> Select Customer</label>
                                 <select name="customer" class="form-control">
                                 <?php
                                            
                                            $ret="SELECT * FROM customer ";
                                            $stmt= $mysqli->prepare($ret) ;
                                            //$stmt->bind_param('i',$aid);
                                            $stmt->execute() ;//ok
                                            $res=$stmt->get_result();
                                            //$cnt=1;
                                            while($row=$res->fetch_object())
                                            {
                                                 ?>
                                    <option><?php echo $row->fname;?> <?php echo $row->lname;?></option>
                                            <?php }?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Quotes</label>
                                 <textarea type="text" name="quotes" class="form-control" placeholder="Enter Quotes" required></textarea>
                              </div>
                              <div class="form-group">
                                 <label>Entry date</label>
                                 <input type="text" id='minMaxExample' name="entry_date" class="form-control years">
                              </div>
                              <div class="form-group">
                                 <label>Expiry date</label>
                                 <input type="text" id='minMaxExample2' name="exp_date" class="form-control years">
                              </div>
                              <div class="form-group">
                                 <label>Customer Number</label>
                                 <select name="c_mobile" class="form-control">
                                 <?php
                                            
                                            $ret="SELECT * FROM customer ";
                                            $stmt= $mysqli->prepare($ret) ;
                                            //$stmt->bind_param('i',$aid);
                                            $stmt->execute() ;//ok
                                            $res=$stmt->get_result();
                                            //$cnt=1;
                                            while($row=$res->fetch_object())
                                            {
                                                 ?>
                                    <option><?php echo $row->mobile;?></option>
                                            <?php }?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Stage</label>
                                 <select name="stages" class="form-control">
                                    <option>Draft</option>
                                    <option>Accept</option>
                                    <option>Cancelled</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Sales tax</label>
                                 <input  name="sales_tax" type="text" class="form-control" placeholder="Enter tax">
                              </div>
                              <div class="form-group">
                                 <label>Discount</label>
                                 <input type="text" name="discount" class="form-control" placeholder="Enter Discount" required>
                              </div>
                              <div class="reset-button">
                                 <a href="#" class="btn btn-warning">Reset</a>
                                 <input type="submit" name="add_quote" value="Save" class="btn btn-add">
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

<!-- Mirrored from thememinister.com/crm/nquote.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 11:39:46 GMT -->
</html>

