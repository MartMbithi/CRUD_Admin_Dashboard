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
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="mailbox">
                        <div class="mailbox-header">
                           <div class="row">
                              <div class="col-xs-4">
                                 <div class="inbox-avatar">
                                    <i class="fa fa-user-circle-o"></i>
                                    <div class="inbox-avatar-text hidden-xs hidden-sm">
                                       <div class="avatar-name">Alrazy</div>
                                       <div><small>Mailbox</small></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-8">
                                 <div class="inbox-toolbar btn-toolbar">
                                    <div class="btn-group">
                                       <a href="mailbox.html" class="btn btn-default"><span class="fa fa-long-arrow-left"></span></a>
                                       <a href="#" class="hidden-xs hidden-sm btn btn-default"><span class="fa fa-reply-all"></span></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="mailbox-body">
                           <div class="row m-0">
                              <div class="col-sm-3 p-0 inbox-nav hidden-xs hidden-sm">
                                 <div class="mailbox-sideber">
                                    <div class="profile-usermenu">
                                       <h6>Mailbox</h6>
                                       <ul class="nav">
                                          <li class="active"><a href="#"><i class="fa fa-inbox"></i>Inbox <small class="label pull-right bg-green">61</small></a></li>
                                          <li><a href="#"><i class="fa fa-envelope-o"></i>Send Mail</a></li>
                                          <li><a href="#"><i class="fa fa-star-o"></i>Starred</a></li>
                                          <li><a href="#"><i class="fa fa-trash-o"></i>Tresh </a></li>
                                          <li><a href="#"><i class="fa fa-paperclip"></i>Attachments</a></li>
                                       </ul>
                                       <h6>Other</h6>
                                       <ul class="nav">
                                          <li><a href="#"><i class="fa fa-exclamation"></i>Spam</a></li>
                                          <li><a href="#"><i class="fa fa-file-text-o"></i>Draft</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-9 p-0 inbox-mail p-20">
                                 <div class="form-group row">
                                    <label class="col-sm-3 col-md-2 col-form-label text-right">To :</label>
                                    <div class="col-sm-9 col-md-10">
                                       <input class="form-control" type="text"  id="to">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label class="col-sm-3 col-md-2 col-form-label text-right">Cc :</label>
                                    <div class="col-sm-9 col-md-10">
                                       <input class="form-control" type="text" id="cc">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label class="col-sm-3 col-md-2 col-form-label text-right">Subject :</label>
                                    <div class="col-sm-9 col-md-10">
                                       <input class="form-control" type="text" id="subjejct">
                                    </div>
                                 </div>
                                 <!-- summernote -->
                                 <div id="summernote"></div>
                                 <div class="hidden-xs hidden-sm btn-group">
                                    <button type="button" class="text-center btn btn-default">DISCARD</button>
                                    <button type="button" class="btn btn-default">SAVE</button>
                                 </div>
                                 <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-add">SEND</button>
                                 </div>
                              </div>
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
      <!-- Start Page Lavel Plugins
      =====================================================================-->
      <!-- summernote js -->
      <script src="assets/plugins/summernote/summernote.js" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
      =====================================================================-->
      <!-- Start Theme label Script
      =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
      =====================================================================-->
      <script>
            //Summernote
            function sumnote() {
              var note = $('#summernote');
              $(note).summernote({
             height: 200, // set editor height
             minHeight: null, // set minimum height of editor
             maxHeight: null, // set maximum height of editor
             focus: true  // set focus to editable area after initializing summernote
          });
           }
           sumnote();
        </script>
     </body>
     
</html>

