<!--authentiction code-->
<?php
//start session
session_start();
//get the configuration file
include('assets/configs/config.php');
    //get the user input from the submit button
    if(isset($_POST['login']))
        {
            //declare and initialize auth variables
            $email=$_POST['email'];
            $password=sha1(md5($_POST['password']));//double encrypt passwords for security purposes.
            //sql statement to fetch email password and user id. 
            $stmt=$mysqli->prepare("SELECT email,password, admin_id FROM admin WHERE email=? and password=? ");
			$stmt->bind_param('ss',$email,$password);//bind the fetched parameters
			$stmt->execute();//after binding is successfull then execute
            $stmt -> bind_result($email,$password,$admin_id);
            $rs=$stmt->fetch();
            $_SESSION['admin_id']=$admin_id;//assign session variable
           // $uip=$_SERVER['REMOTE_ADDR'];//also get the remote ip address.
           /// $ldate=date('d/m/Y h:i:s', time());// and login date for timestamping.

            if($rs)
				{
                    //if the above code returns true...then redirect user to this page
					header("location:dashboard.php");
				}

                else
                {
                    $error = "Please Check Your Email or Password";
                }
		}
?>
<!--End Auth-->
<!DOCTYPE html>
<html lang="en">
    
    <!--Head-->
    <?php include('assets/_partials/head.php');?>
    <!--End Head--->
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            
            <div class="container-center">
            
            <div class="login-area">
            
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <!--code for triggering the error-->
                    
                    <div class="panel-body"> 
                    <?php if(isset($error)) 
                    {?>
                    <script>
                                setTimeout(function () 
                                { 
                                    swal("Failed!","<?php echo $error;?>!","error");
                                },
                                    100);
                            </script>
                
                <?php }?>
                        <!--Login Form-->
                        <form action="#" id="loginForm" method ="POST">
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="email" placeholder="example@gmail.com" required title="Please enter your email address" required="" value="" name="email" id="email" class="form-control">
                                <span class="help-block small">Your unique email to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password"  required placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Your strong password</span>
                            </div>
                            <div>
                                <button type="submit" name="login" id='demo2' class="btn btn-add">Login</button>
                                <a class="btn btn-success" href="register.php">Register</a>
                            </div>
                        </form>
                        <!--End Login Form-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
         <!-- Notification js -->
         <script src="assets/plugins/NotificationStyles/js/modernizr.custom.js" type="text/javascript"></script>
        <script src="assets/plugins/NotificationStyles/js/classie.js" type="text/javascript"></script>
        <script src="assets/plugins/NotificationStyles/js/notificationFx.js" type="text/javascript"></script>
        <script src="assets/plugins/NotificationStyles/js/snap.svg-min.js" type="text/javascript"></script>
        <script src="assets/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="assets/plugins/toastr/toastr.min.html" type="text/javascript"></script>
        
    </body>

</html>