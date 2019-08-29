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
               <div class="header-icon"><i class="pe-7s-date"></i></div>
               <div class="header-title">
                  <h1>iCheck, Toggle</h1>
                  <small>A slideshow component for cycling through elements, like a carousel. Nested carousels are not supported.</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12 col-md-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Minimal skin</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="skin-minimal">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="i-check">
                                       <input tabindex="5" type="checkbox" id="minimal-checkbox-1">
                                       <label for="minimal-checkbox-1">Checkbox 1</label>
                                    </div>
                                    <div class="i-check">
                                       <input tabindex="6" type="checkbox" id="minimal-checkbox-2" checked>
                                       <label for="minimal-checkbox-2">Checkbox 2</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="checkbox" id="minimal-checkbox-disabled" disabled>
                                       <label for="minimal-checkbox-disabled">Disabled</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="checkbox" id="minimal-checkbox-disabled-checked" checked disabled>
                                       <label for="minimal-checkbox-disabled-checked">Disabled &amp; checked</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="i-check">
                                       <input tabindex="7" type="radio" id="minimal-radio-1" name="minimal-radio">
                                       <label for="minimal-radio-1">Radio button 1</label>
                                    </div>
                                    <div class="i-check">
                                       <input tabindex="8" type="radio" id="minimal-radio-2" name="minimal-radio" checked>
                                       <label for="minimal-radio-2">Radio button 2</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="radio" id="minimal-radio-disabled" disabled>
                                       <label for="minimal-radio-disabled">Disabled</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="radio" id="minimal-radio-disabled-checked" checked disabled>
                                       <label for="minimal-radio-disabled-checked">Disabled &amp; checked</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Square skin</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="skin-square">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="i-check">
                                       <input tabindex="9" type="checkbox" id="square-checkbox-1">
                                       <label for="square-checkbox-1">Checkbox 1</label>
                                    </div>
                                    <div class="i-check">
                                       <input tabindex="10" type="checkbox" id="square-checkbox-2" checked>
                                       <label for="square-checkbox-2">Checkbox 2</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="checkbox" id="square-checkbox-disabled" disabled>
                                       <label for="square-checkbox-disabled">Disabled</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="checkbox" id="square-checkbox-disabled-checked" checked disabled>
                                       <label for="square-checkbox-disabled-checked">Disabled &amp; checked</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="i-check">
                                       <input tabindex="11" type="radio" id="square-radio-1" name="square-radio">
                                       <label for="square-radio-1">Radio button 1</label>
                                    </div>
                                    <div class="i-check">
                                       <input tabindex="12" type="radio" id="square-radio-2" name="square-radio" checked>
                                       <label for="square-radio-2">Radio button 2</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="radio" id="square-radio-disabled" disabled>
                                       <label for="square-radio-disabled">Disabled</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="radio" id="square-radio-disabled-checked" checked disabled>
                                       <label for="square-radio-disabled-checked">Disabled &amp; checked</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12 col-md-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Flat skin</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="skin-flat">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="i-check">
                                       <input tabindex="13" type="checkbox" id="flat-checkbox-1">
                                       <label for="flat-checkbox-1">Checkbox 1</label>
                                    </div>
                                    <div class="i-check">
                                       <input tabindex="14" type="checkbox" id="flat-checkbox-2" checked>
                                       <label for="flat-checkbox-2">Checkbox 2</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="checkbox" id="flat-checkbox-disabled" disabled>
                                       <label for="flat-checkbox-disabled">Disabled</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="checkbox" id="flat-checkbox-disabled-checked" checked disabled>
                                       <label for="flat-checkbox-disabled-checked">Disabled &amp; checked</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="i-check">
                                       <input tabindex="15" type="radio" id="flat-radio-1" name="flat-radio">
                                       <label for="flat-radio-1">Radio button 1</label>
                                    </div>
                                    <div class="i-check">
                                       <input tabindex="16" type="radio" id="flat-radio-2" name="flat-radio" checked>
                                       <label for="flat-radio-2">Radio button 2</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="radio" id="flat-radio-disabled" disabled>
                                       <label for="flat-radio-disabled">Disabled</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="radio" id="flat-radio-disabled-checked" checked disabled>
                                       <label for="flat-radio-disabled-checked">Disabled &amp; checked</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Line skin</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="skin-line">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="i-check">
                                       <input tabindex="17" type="checkbox" id="line-checkbox-1">
                                       <label for="line-checkbox-1">Checkbox 1</label>
                                    </div>
                                    <div class="i-check">
                                       <input tabindex="18" type="checkbox" id="line-checkbox-2" checked>
                                       <label for="line-checkbox-2">Checkbox 2</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="checkbox" id="line-checkbox-disabled" disabled>
                                       <label for="line-checkbox-disabled">Disabled</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="checkbox" id="line-checkbox-disabled-checked" checked disabled>
                                       <label for="line-checkbox-disabled-checked">Disabled &amp; checked</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="i-check">
                                       <input tabindex="19" type="radio" id="line-radio-1" name="line-radio">
                                       <label for="line-radio-1">Radio button 1</label>
                                    </div>
                                    <div class="i-check">
                                       <input tabindex="20" type="radio" id="line-radio-2" name="line-radio" checked>
                                       <label for="line-radio-2">Radio button 2</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="radio" id="line-radio-disabled" disabled>
                                       <label for="line-radio-disabled">Disabled</label>
                                    </div>
                                    <div class="i-check">
                                       <input type="radio" id="line-radio-disabled-checked" checked disabled>
                                       <label for="line-radio-disabled-checked">Disabled &amp; checked</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Toggle demo</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="row">
                              <div class="col-sm-6">
                                 <h4 class="m-t-0">Basic example</h4>
                                 <p>Simply add <code>data-toggle="toggle"</code> to convert checkboxes into toggles.</p>
                                 <input type="checkbox" checked data-toggle="toggle">
                                 <hr>
                                 <h4 class="m-t-0">Inline Checkboxes</h4>
                                 <p>Refer to Bootstrap <a href="http://getbootstrap.com/css/#forms-controls" target="_blank">Form 
                                    Controls</a> documentation to create inline checkboxes. Simply add <code>data-toggle="toggle"</code> to
                                    a convert checkboxes into toggles.
                                 </p>
                                 <label class="checkbox-inline">
                                 <input type="checkbox" checked data-toggle="toggle"> First
                                 </label>
                                 <label class="checkbox-inline">
                                 <input type="checkbox" data-toggle="toggle"> Second
                                 </label>
                                 <label class="checkbox-inline">
                                 <input type="checkbox" data-toggle="toggle"> Third
                                 </label>
                                 <hr>
                                 <h4 class="m-t-0">Size</h4>
                                 <p>Bootstrap toggle is available in different sizes. Refer to Bootstrap <a href="http://getbootstrap.com/css/#buttons-sizes" target="_blank">Button Sizes</a> documentation for more information.</p>
                                 <div class="toggle-example">
                                    <input type="checkbox" checked data-toggle="toggle" data-size="large">
                                    <input type="checkbox" checked data-toggle="toggle" data-size="normal">
                                    <input type="checkbox" checked data-toggle="toggle" data-size="small">
                                    <input type="checkbox" checked data-toggle="toggle" data-size="mini">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <h4 class="m-t-0">Custom Sizes</h4>
                                 <p>Bootstrap toggle can handle custom sizes by <code>data-width</code> and <code>data-height</code> options.</p>
                                 <div class="toggle-example">
                                    <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="75">
                                    <input type="checkbox" checked data-toggle="toggle" data-height="75">
                                    <input type="checkbox" checked data-toggle="toggle" data-width="100">
                                 </div>
                                 <hr>
                                 <h4 class="m-t-0">Colors</h4>
                                 <div class="toggle-example">
                                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary">
                                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="info">
                                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="warning">
                                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="danger">
                                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="default">
                                 </div>
                                 <hr>
                                 <h4 class="m-t-0">Colors Mix</h4>
                                 <p>You can style on state as well as the off state.</p>
                                 <div class="toggle-example">
                                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="warning" data-offstyle="info">
                                 </div>
                              </div>
                           </div>
                           <hr>
                           <div class="row">
                              <div class="col-sm-6 col-md-2">
                                 <h4 class="m-t-0">Custom Style</h4>
                                 <div class="toggle-example">
                                    <input type="checkbox" checked data-toggle="toggle" data-style="ios">
                                    <input type="checkbox" checked data-toggle="toggle" data-style="android" data-onstyle="info">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-2">
                                 <h4 class="m-t-0">Custom Text</h4>
                                 <div class="toggle-example">
                                    <input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-2">
                                 <h4 class="m-t-0">Icons/Html Text</h4>
                                 <div class="toggle-example">
                                    <input type="checkbox" checked data-toggle="toggle" data-on="<i class='fa fa-play'></i> Play" data-off="<i class='fa fa-pause'></i> Pause">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                 <h4 class="m-t-0">Multiple Lines of Text</h4>
                                 <div class="toggle-example">
                                    <input type="checkbox" checked data-toggle="toggle" data-on="Hello<br>World" data-off="Goodbye<br>World">
                                 </div>
                              </div>
                              <div class="col-sm-12 col-md-3">
                                 <h4 class="m-t-0">Animation Speed</h4>
                                 <div class="toggle-example">
                                    <input type="checkbox" checked data-toggle="toggle" data-style="slow">
                                    <input type="checkbox" checked data-toggle="toggle" data-class="fast">
                                    <input type="checkbox" checked data-toggle="toggle" data-style="quick">
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
      <!-- iCheck js -->
      <script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
      <!-- Bootstrap toggle -->
      <script src="assets/plugins/bootstrap-toggle/bootstrap-toggle.min.js" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
      <script>
         $('.skin-minimal .i-check input').iCheck({
             checkboxClass: 'icheckbox_minimal',
             radioClass: 'iradio_minimal',
             increaseArea: '20%'
         });
         
         $('.skin-square .i-check input').iCheck({
             checkboxClass: 'icheckbox_square-green',
             radioClass: 'iradio_square-green'
         });
         
         
         $('.skin-flat .i-check input').iCheck({
             checkboxClass: 'icheckbox_flat-red',
             radioClass: 'iradio_flat-red'
         });
         
         $('.skin-line .i-check input').each(function () {
             var self = $(this),
                     label = self.next(),
                     label_text = label.text();
         
             label.remove();
             self.iCheck({
                 checkboxClass: 'icheckbox_line-blue',
                 radioClass: 'iradio_line-blue',
                 insert: '<div class="icheck_line-icon"></div>' + label_text
             });
         });
         
      </script>
   </body>

</html>

