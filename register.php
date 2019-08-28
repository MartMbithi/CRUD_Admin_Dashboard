<!--Code to Add New User In The System-->
<?php
session_start();//start session
include('assets/configs/config.php');//get config file
    if(isset($_POST['register']))//get specific input from a certain button.
            {
                //declare and initialize some variables
                $username=$_POST['username'];
                $password=sha1(md5($_POST['password']));//double encrypt passwords for security purposes.
                $repeatpassword=sha1(md5($_POST['repeatpassword']));
                $email=$_POST['email'];
                //sql to inset the values to the database
                $query="insert into admin (username, password, repeatpassword, email) values(?,?,?,?)";
                $stmt = $mysqli->prepare($query);
                //bind the submitted values with the matching columns in the database.
                $rc=$stmt->bind_param('ssss',$username, $password, $repeatpassword, $email);
                $stmt->execute();
                //if binding is successful, then indicate that a new value has been added.
                $success_msg= "Account Created";
               
            }
            
?>
<!DOCTYPE html>
<html lang="en">
    
    <!-- Head-->
    <?php include("assets/_partials/head.php");?>
    <!--End head-->
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            
            <div class="container-center lg">
             <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Please Register</h3>
                                <small><strong>Please enter your data to register.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
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
                        <!--======End Alert------->
                        <form action="#" method="POST" id="loginForm">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Username</label>
                                    <input type="text" value="" id="username" required class="form-control" name="username">
                                    <span class="help-block small">Your unique username to app</span>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" value="" id="password" required class="form-control" name="password">
                                    <span class="help-block small">Your hard to guess password</span>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input type="password" value="" id="repeatpassword" required class="form-control" name="repeatpassword">
                                    <span class="help-block small">Please repeat your pasword</span>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="email" value="" id="email" required class="form-control" name="email">
                                    <span class="help-block small">Your address email to contact</span>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-success " type="submit" id='demo2' name="register" >Register</button>
                                <a class="btn btn-add" href="index.php">Login</a>
                            </div>
                        </form>
                        </div>
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