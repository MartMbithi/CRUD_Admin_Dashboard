<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['admin_id'];
if(isset($_POST['post_transaction']))
{
    $bank_account=$_POST['bank_account'];
    $posting_date=$_POST['posting_date'];
    $description=$_POST['description'];
    $amount=$_POST['amount'];                    
   //sql to inset the values to the database
    $query="insert into expense (bank_account, posting_date, description, amount, type) values(?,?,?,?,'Deposit')";
    $stmt = $mysqli->prepare($query);
    //bind the submitted values with the matching columns in the database.
    $rc=$stmt->bind_param('ssss', $bank_account, $posting_date, $description, $amount);
    $stmt->execute();
    
    $msg = "Deposit Added!";

    
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
                  <i class="fa fa-shopping-basket"></i>
               </div>
               <div class="header-title">
                  <h1>Deposit</h1>
                  <small>Deposite list & new Deposits</small>
               </div>
            </section>
            <!-- Main content -->
               <!--trigger alert if its a success or its an eror-->
               <?php if(isset($msg))
                  {?>
                  <script>
                             setTimeout(function () 
                            { 
                                 swal("Success!","<?php echo $msg;?>!","success");
                            },
                                  100);
                  </script>
                  <?php }?>
                  <!--End Trigger-->
            <section class="content">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="panel lobidisable panel-bd">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Add Deposit</h4>
                           </div>
                        </div>
                        <div class="panel-body">

                           <form method="POST">
                              <div class="form-group">
                                 <label>Account</label>
                                 <select name="bank_account" required class="form-control">
                                    <option>Bank of asia</option>
                                    <option>Brac Bank</option>
                                    <option>National Bank</option>
                                    <option>Exim Bank</option>
                                    <option>Datchbangla Bank</option>
                                    <option>Sonali Bank</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Date</label>
                                 <div class=" input-group date form_date">
                                    <input id='minMaxExample' type="text" name="posting_date" class="form-control years"><span class="input-group-addon"><a href="#"><i class="fa fa-calendar"></i></a></span>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>Description</label>
                                 <textarea type="text" class="form-control" name="description" placeholder="Enter Short description" required></textarea>
                              </div>
                              <div class="form-group">
                                 <label>Amount</label>
                                 <input type="number" class="form-control" name="amount" placeholder="Enter Amount" required>
                              </div>
                              <div class="form-group">
                                 <button type="submit" name="post_transaction" class="btn btn-add"><i class="fa fa-check"></i> Submit
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-8">
                     <div class="panel lobidisable panel-bd">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Recent Deposits</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive">
                              <table class="table table-bordered table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>#</th>
                                       <th>Bank</th>
                                       <th>Description</th>
                                       <th>Amount</th>
                                    </tr>
                                 </thead>
                                 <?php
                                            
                                 $ret="SELECT * FROM `expense`  WHERE type = 'Deposit' ";
                                 $stmt= $mysqli->prepare($ret) ;
                                 //$stmt->bind_param('i',$aid);
                                 $stmt->execute() ;//ok
                                 $res=$stmt->get_result();
                                 $cnt=1;
                                 while($row=$res->fetch_object())
                                 {
                    	               ?>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $cnt;?></td>
                                       <td><?php echo $row->bank_account;?></td>
                                       <td><?php echo $row->description;?></td>
                                       <td>$ <?php echo $row->amount;?></td>
                                    </tr>
                                    
                                 </tbody>
                                 <?php $cnt=$cnt+1; } ?>
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
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
      
   </body>

</html>

