<!-- create a session-->
<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['admin_id'];
if(isset($_POST['update_cust']))
{ 
    $id=$_GET['c_id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $pic=$_FILES["pic"]["name"];
    move_uploaded_file($_FILES["pic"]["tmp_name"],"assets/dist/img/".$_FILES["pic"]["name"]);
    $bank_details=$_POST['bank_details'];
    $passport=($_POST['passport']);
    $fb_id=$_POST['fb_id'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $c_type=$_POST['c_type'];
    $sex=$_POST['sex'];
    $status=$_POST['status'];
   // $date_updated=$_POST['date_updated'];
                        
   //sql to inset the values to the database
    $query="update customer set fname=?, lname=?, email=?, mobile=?, pic=?, bank_details=?, passport=?, fb_id=?, dob=?, address=?, c_type=?, sex=?, status=? where c_id=? ";
    $stmt = $mysqli->prepare($query);
    //bind the submitted values with the matching columns in the database.
    $rc=$stmt->bind_param('sssssssssssssi', $fname, $lname, $email, $mobile, $pic, $bank_details, $passport, $fb_id, $dob, $address, $c_type, $sex, $status, $id);
    $stmt->execute();
    
    $msg = "Customer Details Updated!";

    
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
         <!--Header---------------------->
         <?php include("assets/_partials/header.php");?>
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
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Customer</h1>
                  <small>Customer list</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <!--trigger alert if its a success or its an eror-->
                  <?php if(isset($msg))
                  {?>
                   <script>
                     setTimeout(function () { swal("Success!","<?php echo $msg;?>!","success");
                     }, 1000);</script>
                  <?php }?>
                  <!--End Trigger-->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="clist.php"> 
                              <i class="fa fa-list"></i>  Customer List </a>  
                           </div>
                        </div>
                        <div class="panel-body">

                        <?php	
                                $id=$_GET['c_id'];
                                $ret="select * from customer where c_id=?";
                                //code for getting rooms using a certain id
                                $stmt= $mysqli->prepare($ret) ;
                                $stmt->bind_param('i',$id);
                                $stmt->execute() ;//ok
                                $res=$stmt->get_result();
                                //$cnt=1;
                                while($row=$res->fetch_object())
                                {
                            ?>
                            <form class="col-sm-12" method="POST"  enctype="multipart/form-data" >
                              <div class="form-group">
                                 <label>First Name</label>
                                 <input type="text" class="form-control" value="<?php echo $row->fname;?>" readonly name="fname" placeholder="Enter First Name" required>
                              </div>
                              <div class="form-group">
                                 <label>Last Name</label>
                                 <input type="text" class="form-control" value="<?php echo $row->lname;?>" readonly name="lname" placeholder="Enter last Name" required>
                              </div>
                              <div class="form-group">
                                 <label>Email</label>
                                 <input type="email" class="form-control" value="<?php echo $row->email;?>"   name="email" placeholder="Enter Email" required>
                              </div>
                              <div class="form-group">
                                 <label>Mobile</label>
                                 <input type="text" class="form-control" value="<?php echo $row->mobile;?>" name="mobile" placeholder="Enter Mobile" required>
                              </div>
                              <div class="form-group">
                                 <label>Picture upload</label>
                                 <input  required name="pic" type="file" placeholder="">                                 
                              </div>
                              <div class="form-group">
                                 <label>Bank details</label>
                                 <input type="text" class="form-control" value="<?php echo $row->bank_details;?>" name="bank_details" placeholder="Enter Bank Account Number" required>
                              </div>
                              <div class="form-group">
                                 <label>Passport</label>
                                 <input type="text" class="form-control" value="<?php echo $row->passport;?>"  readonly name="passport" placeholder="Enter Passport details" required>
                              </div>
                              <div class="form-group">
                                 <label>Facebook Id</label>
                                 <input type="text" class="form-control" value="<?php echo $row->fb_id;?>" name="fb_id" placeholder="Enter Facebook details" required>
                              </div>
                              <div class="form-group">
                                 <label>Date of Birth</label>
                                 <input id='minMaxExample' type="text" name="dob" class="form-control"  value ="<?php echo $row->dob;?>" placeholder="Enter Date...">
                              </div>
                              <div class="form-group">
                                 <label>Address</label>
                                 <textarea class="form-control" rows="3" name="address" required><?php echo $row->address;?></textarea>
                              </div>
                              <div class="form-group">
                                 <label>Customer type</label>
                                 <select name="c_type" class="form-control">
                                    <option>vendor</option>
                                    <option>vip</option>
                                    <option>regular</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Sex</label><br>
                                 <label class="radio-inline"><input name="sex" value="male" checked="checked" type="radio">Male</label> 
                                 <label class="radio-inline"><input name="sex" value="female" type="radio">Female</label>
                              </div>
                              <div class="form-check">
                                 <label>Status</label><br>
                                 <label class="radio-inline">
                                 <input type="radio" name="status" value="Active"  checked="checked">Active</label>
                                 <label class="radio-inline"><input  type="radio" name="status" value="Inactive" >InActive</label>
                              </div>
                              <div class="reset-button">
                                 
                                 <input type="submit" id="demo2" name="update_cust" value="Add Customer" class="btn btn-success">
                              </div>
                           </form>
                                <?php }?>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <?php include("assets/_partials/footer.php");?>
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
          <!-- Notification js -->
      <script src="assets/plugins/NotificationStyles/js/modernizr.custom.js" type="text/javascript"></script>
      <script src="assets/plugins/NotificationStyles/js/classie.js" type="text/javascript"></script>
      <script src="assets/plugins/NotificationStyles/js/notificationFx.js" type="text/javascript"></script>
      <script src="assets/plugins/NotificationStyles/js/snap.svg-min.js" type="text/javascript"></script>
      <script src="assets/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
      <script src="assets/plugins/toastr/toastr.min.html" type="text/javascript"></script>
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
   </body>

<!-- Mirrored from thememinister.com/crm/add-customer.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 11:38:40 GMT -->
</html>

