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
            <?php include('assets/_partials/head.php');?>

            <!-- /.sidebar -->
         </aside>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-warning"></i>
               </div>
               <div class="header-title">
                  <h1>Notifications </h1>
                  <small>Notification and custom alerts</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="notification-shape shape-box" id="notification-shape" data-path-to="m 0,0 500,0 0,500 -500,0 z">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 500 500" preserveAspectRatio="none">
                     <path d="m 0,0 500,0 0,500 0,-500 z"/>
                  </svg>
               </div>
               <div class="notification-shape shape-progress" id="notification-shape2">
                  <svg width="70px" height="70px">
                     <path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/>
                  </svg>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Notification Styles Inspiration</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="row">
                              <div class="col-sm-12">
                                 <header class="codrops-header">
                                    <h1>Notification Styles Inspiration <span>Simple ideas &amp; effects for website notifications</span></h1>
                                 </header>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <table class="table table-hover table-striped">
                                    <thead>
                                       <tr>
                                          <th>Examples </th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>.... Notification Styles "Scale"....</td>
                                          <td><button id="scale" class="btn btn-violet btn-sm progress-button pull-right">
                                             <span class="">Run example</span>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Jelly</td>
                                          <td><button id="jelly" class="btn btn-info btn-sm progress-button pull-right">
                                             <span class="">Run example</span>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Slide in</td>
                                          <td><button id="slideIn" class="btn btn-primary btn-sm progress-button pull-right">
                                             <span class="">Run example</span>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Genie</td>
                                          <td><button id="genie" class="btn btn-purple btn-sm progress-button pull-right">
                                             <span class="">Run example</span>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Flip</td>
                                          <td><button id="flip" class="btn btn-inverse btn-sm progress-button pull-right">
                                             <span class="">Run example</span>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Bouncy Flip</td>
                                          <td><button id="bouncyFlip" class="btn btn-default btn-sm progress-button pull-right">
                                             <span class="">Run example</span>
                                             </button>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class="col-sm-6">
                                 <table class="table table-hover table-striped">
                                    <thead>
                                       <tr>
                                          <th>Examples </th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>Slide On Top</td>
                                          <td><button id="slidetop" class="btn btn-black btn-sm progress-button pull-right">
                                             <span class="">Run example</span>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Expanding Loader</td>
                                          <td><button id="exploader" class="btn btn-default btn-sm progress-button pull-right">
                                             <span class="">Run example</span>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Corner Expand</td>
                                          <td><button id="cornerExpand" class="btn btn-success btn-sm progress-button pull-right">
                                             <span class="">Run example</span>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Loading Circle</td>
                                          <td><button id="loadingcircle" class="btn btn-pink btn-sm progress-button pull-right">
                                             <span class="">Run example</span>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Box Spinner</td>
                                          <td><button id="boxspinner" class="btn btn-warning btn-sm progress-button pull-right">
                                             <span class="">Run example</span>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Thumb Slider</td>
                                          <td><button id="thumbslider" class="btn btn-danger btn-sm progress-button pull-right">
                                             <span class="">Run example</span>
                                             </button>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="panel panel-bd">
                        <div class="panel-body">
                           <p>Sweet Alert is a beautiful replacement for standard Javascript's "Alert". </p>
                           <table class="table table-hover table-striped">
                              <thead>
                                 <tr>
                                    <th>Examples</th>
                                    <th> Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td> A basic message </td>
                                    <td><button class="btn btn-primary btn-sm demo1 pull-right">Run example</button></td>
                                 </tr>
                                 <tr>
                                    <td>A success message!</td>
                                    <td><button class="btn btn-success btn-sm demo2 pull-right">Run example</button></td>
                                 </tr>
                                 <tr>
                                    <td>A warning message, with a function attached to the "Confirm"-button</td>
                                    <td><button class="btn btn-warning btn-sm demo3 pull-right">Run example</button></td>
                                 </tr>
                                 <tr>
                                    <td>... and by passing a parameter, you can execute something else for "Cancel".</td>
                                    <td><button class="btn btn-danger btn-sm demo4 pull-right">Run example</button></td>
                                 </tr>
                              </tbody>
                           </table>
                           <div>
                              <p>You can easy add sweet alert in your controller by adding code like this:</p>
                              <pre>                        swal({
                        title: <span class="str">'Are you sure?'</span>,
                        text: <span class="str">"You won't be able to revert this!"</span>,
                        type: <span class="str">'warning'</span>,
                        showCancelButton: <span class="val">true</span>,
                        confirmButtonColor: <span class="str">'#3085d6'</span>,
                        cancelButtonColor: <span class="str">'#d33'</span>,
                        confirmButtonText: <span class="str">'Yes, delete it!'</span>,
                        cancelButtonText: <span class="str">'No, cancel!'</span>,
                        confirmButtonClass: <span class="str">'btn btn-success'</span>,
                        cancelButtonClass: <span class="str">'btn btn-danger'</span>,
                        buttonsStyling: <span class="val">false</span>
                    })
                </pre>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-bd">
                        <div class="panel-body">
                           <p class="m-b-20">Minimalistic and extensible notification service for toastr.</p>
                           <div class="text-center">
                              <h4>Example with toastr</h4>
                              <button class="toastr1 btn btn-info btn-sm m-r-5 m-b-5">Run example</button>
                              <button class="toastr2 btn btn-success btn-sm m-r-5 m-b-5">Run example</button>
                              <button class="toastr3 btn btn-warning btn-sm m-r-5 m-b-5">Run example</button>
                              <button class="toastr4 btn btn-danger btn-sm m-r-5 m-b-5">Run example</button>
                           </div>
                           <br>
                           <div>
                              <p>
                                 You can easy add any notification in your scripts by adding code like this:
                              </p>
                              <pre>                    Command: toastr["success"]("Example message ", "Example title")

                    toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-center",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                } </pre>
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
      <!-- jQuery -->
      <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
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
      <!-- Notification js -->
      <script src="assets/plugins/NotificationStyles/js/modernizr.custom.js" type="text/javascript"></script>
      <script src="assets/plugins/NotificationStyles/js/classie.js" type="text/javascript"></script>
      <script src="assets/plugins/NotificationStyles/js/notificationFx.js" type="text/javascript"></script>
      <script src="assets/plugins/NotificationStyles/js/snap.svg-min.js" type="text/javascript"></script>
      <script src="assets/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
      <script src="assets/plugins/toastr/toastr.min.html" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
      <script>
         "use strict"; // Start of use strict
         (function () {
             function1();
             function2();
             function3();
             function4();
             function5();
             function6();
             function7();
             function8();
             function9();
             function10();
             function11();
             function12();
             function13();
             function14();
             function15();
             function16();
         })();
         
         function function1() {
             var bttn = document.getElementById('scale');
         
             // make sure..
             bttn.disabled = false;
         
             bttn.addEventListener('click', function () {
                 // simulate loading (for demo purposes only)
                 classie.add(bttn, 'active');
                 setTimeout(function () {
         
                     classie.remove(bttn, 'active');
         
                     // create the notification
                     var notification = new NotificationFx({
                         message: '<p>This is just a simple notice. Everything is in order and this is a <a href="#">simple link</a>.</p>',
                         layout: 'growl',
                         effect: 'scale',
                         type: 'notice', // notice, warning, error or success
                         onClose: function () {
                             bttn.disabled = false;
                         }
                     });
         
                     // show the notification
                     notification.show();
         
                 }, 1200);
         
                 // disable the button (for demo purposes only)
                 this.disabled = true;
             });
         }
         function function2() {
             var bttn = document.getElementById('jelly');
             // make sure..
             bttn.disabled = false;
         
             bttn.addEventListener('click', function () {
                 // simulate loading (for demo purposes only)
                 classie.add(bttn, 'active');
                 setTimeout(function () {
         
                     classie.remove(bttn, 'active');
         
                     // create the notification
                     var notification = new NotificationFx({
                         message: '<p>Hello there! I\'m a classic notification but I have some elastic jelliness thanks to <a href="http://bouncejs.com/">bounce.js</a>. </p>',
                         layout: 'growl',
                         effect: 'jelly',
                         type: 'notice', // notice, warning, error or success
                         onClose: function () {
                             bttn.disabled = false;
                         }
                     });
         
                     // show the notification
                     notification.show();
         
                 }, 1200);
         
                 // disable the button (for demo purposes only)
                 this.disabled = true;
             });
         }
         function function3() {
             var bttn = document.getElementById('slideIn');
             // make sure..
             bttn.disabled = false;
         
             bttn.addEventListener('click', function () {
                 // simulate loading (for demo purposes only)
                 classie.add(bttn, 'active');
                 setTimeout(function () {
                     classie.remove(bttn, 'active');
                     // create the notification
                     var notification = new NotificationFx({
                         message: '<p>This notification has slight elasticity to it thanks to <a href="http://bouncejs.com/">bounce.js</a>.</p>',
                         layout: 'growl',
                         effect: 'slide',
                         type: 'notice', // notice, warning or error
                         onClose: function () {
                             bttn.disabled = false;
                         }
                     });
         
                     // show the notification
                     notification.show();
         
                 }, 1200);
         
                 // disable the button (for demo purposes only)
                 this.disabled = true;
             });
         }
         function function4() {
             var bttn = document.getElementById('genie');
             // make sure..
             bttn.disabled = false;
         
             bttn.addEventListener('click', function () {
                 // simulate loading (for demo purposes only)
                 classie.add(bttn, 'active');
                 setTimeout(function () {
                     classie.remove(bttn, 'active');
                     // create the notification
                     var notification = new NotificationFx({
                         message: '<p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
                         layout: 'growl',
                         effect: 'genie',
                         type: 'notice', // notice, warning or error
                         onClose: function () {
                             bttn.disabled = false;
                         }
                     });
         
                     // show the notification
                     notification.show();
         
                 }, 1200);
         
                 // disable the button (for demo purposes only)
                 this.disabled = true;
             });
         }
         function function5() {
             var bttn = document.getElementById('flip');
             // make sure..
             bttn.disabled = false;
         
             bttn.addEventListener('click', function () {
                 // simulate loading (for demo purposes only)
                 classie.add(bttn, 'active');
                 setTimeout(function () {
         
                     classie.remove(bttn, 'active');
         
                     // create the notification
                     var notification = new NotificationFx({
                         message: '<p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
                         layout: 'attached',
                         effect: 'flip',
                         type: 'notice', // notice, warning or error
                         onClose: function () {
                             bttn.disabled = false;
                         }
                     });
         
                     // show the notification
                     notification.show();
         
                 }, 1200);
         
                 // disable the button (for demo purposes only)
                 this.disabled = true;
             });
         }
         function function6() {
             var bttn = document.getElementById('bouncyFlip');
             // make sure..
             bttn.disabled = false;
         
             bttn.addEventListener('click', function () {
                 // simulate loading (for demo purposes only)
                 classie.add(bttn, 'active');
                 setTimeout(function () {
         
                     classie.remove(bttn, 'active');
         
                     // create the notification
                     var notification = new NotificationFx({
                         message: '<span class="icon icon-calendar"></span><p>The event was added to your calendar. Check out all your events in your <a href="#">event overview</a>.</p>',
                         layout: 'attached',
                         effect: 'bouncyflip',
                         type: 'notice', // notice, warning or error
                         onClose: function () {
                             bttn.disabled = false;
                         }
                     });
         
                     // show the notification
                     notification.show();
         
                 }, 1200);
         
                 // disable the button (for demo purposes only)
                 this.disabled = true;
             });
         }
         function function7() {
             var bttn = document.getElementById('slidetop');
         
             // make sure..
             bttn.disabled = false;
         
             bttn.addEventListener('click', function () {
                 // simulate loading (for demo purposes only)
                 classie.add(bttn, 'active');
                 setTimeout(function () {
         
                     classie.remove(bttn, 'active');
         
                     // create the notification
                     var notification = new NotificationFx({
                         message: '<span class="icon icon-megaphone"></span><p>You have some interesting news in your inbox. Go <a href="#">check it out</a> now.</p>',
                         layout: 'bar',
                         effect: 'slidetop',
                         type: 'notice', // notice, warning or error
                         onClose: function () {
                             bttn.disabled = false;
                         }
                     });
         
                     // show the notification
                     notification.show();
         
                 }, 1200);
         
                 // disable the button (for demo purposes only)
                 this.disabled = true;
             });
         
         }
         function function8() {
         
             var bttn = document.getElementById('exploader');
         
             // make sure..
             bttn.disabled = false;
         
             bttn.addEventListener('click', function () {
         
                 // create the notification
                 var notification = new NotificationFx({
                     message: '<span class="icon icon-settings"></span><p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
                     layout: 'bar',
                     effect: 'exploader',
                     type: 'notice', // notice, warning or error
                     onClose: function () {
                         bttn.disabled = false;
                     }
                 });
         
                 // show the notification
                 notification.show();
         
                 // disable the button (for demo purposes only)
                 this.disabled = true;
             });
         }
         
         function function9() {
             var svgshape = document.getElementById('notification-shape'),
             s = Snap(svgshape.querySelector('svg')),
             path = s.select('path'),
             pathConfig = {
                 from: path.attr('d'),
                 to: svgshape.getAttribute('data-path-to')
             },
             bttn = document.getElementById('cornerExpand');
         
             // make sure..
             bttn.disabled = false;
         
             bttn.addEventListener('click', function () {
                 // simulate loading (for demo purposes only)
                 classie.add(bttn, 'active');
                 setTimeout(function () {
         
                     path.animate({'path': pathConfig.to}, 300, mina.easeinout);
         
                     classie.remove(bttn, 'active');
         
                     // create the notification
                     var notification = new NotificationFx({
                         wrapper: svgshape,
                         message: '<p><span class="icon icon-bulb"></span> I\'m appaering in a morphed shape thanks to <a href="http://snapsvg.io/">Snap.svg</a></p>',
                         layout: 'other',
                         effect: 'cornerexpand',
                         type: 'notice', // notice, warning or error
                         onClose: function () {
                             bttn.disabled = false;
                             setTimeout(function () {
                                 path.animate({'path': pathConfig.from}, 300, mina.easeinout);
                             }, 200);
                         }
                     });
         
                     // show the notification
                     notification.show();
         
                 }, 1200);
         
                 // disable the button (for demo purposes only)
                 this.disabled = true;
             });
         
         }
         function function10() {
             var svgshape = document.getElementById('notification-shape2'),
             bttn = document.getElementById('loadingcircle');
         
             // make sure..
             bttn.disabled = false;
         
             bttn.addEventListener('click', function () {
                 // create the notification
                 var notification = new NotificationFx({
                     wrapper: svgshape,
                     message: '<p>Whatever you did, it was successful!</p>',
                     layout: 'other',
                     effect: 'loadingcircle',
                     ttl: 9000,
                     type: 'notice', // notice, warning or error
                     onClose: function () {
                         bttn.disabled = false;
                     }
                 });
         
                 // show the notification
                 notification.show();
         
                 // disable the button (for demo purposes only)
                 this.disabled = true;
             });
         }
         function function11() {
             var bttn = document.getElementById('boxspinner');
         
             // make sure..
             bttn.disabled = false;
         
             bttn.addEventListener('click', function () {
                 // create the notification
                 var notification = new NotificationFx({
                     message: '<p>I am using a beautiful spinner from <a href="http://tobiasahlin.com/spinkit/">SpinKit</a></p>',
                     layout: 'other',
                     effect: 'boxspinner',
                     ttl: 9000,
                     type: 'notice', // notice, warning or error
                     onClose: function () {
                         bttn.disabled = false;
                     }
                 });
         
                 // show the notification
                 notification.show();
         
                 // disable the button (for demo purposes only)
                 this.disabled = true;
             });
         
         }
         function function12() {
             var bttn = document.getElementById('thumbslider');
             // make sure..
             bttn.disabled = false;
         
             bttn.addEventListener('click', function () {
                 // simulate loading (for demo purposes only)
                 classie.add(bttn, 'active');
                 setTimeout(function () {
         
                     classie.remove(bttn, 'active');
         
                     // create the notification
                     var notification = new NotificationFx({
                         message: '<div class="ns-thumb"><img src="assets/dist/img/user1.jpg"/></div><div class="ns-content"><p><a href="#">Zoe Moulder</a> accepted your invitation.</p></div>',
                         layout: 'other',
                         ttl: 6000,
                         effect: 'thumbslider',
                         type: 'notice', // notice, warning, error or success
                         onClose: function () {
                             bttn.disabled = false;
                         }
                     });
         
                     // show the notification
                     notification.show();
         
                 }, 1200);
         
                 // disable the button (for demo purposes only)
                 this.disabled = true;
             });
         
         }
         
         function function13() {
             $('.demo1').on("click", function () {
                 swal({
                     title: "Welcome in Alerts",
                     text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                 });
             });
         }
         
         function function14() {
             $('.demo2').on("click", function () {
                 swal({
                     title: "Good job!",
                     text: "You clicked the button!",
                     type: "success"
                 });
             });
         }
         
         function function15() {
             $('.demo3').on("click", function () {
                 swal({
                     title: "Are you sure?",
                     text: "Your will not be able to recover this imaginary file!",
                     type: "warning",
                     showCancelButton: true,
                     confirmButtonColor: "#DD6B55",
                     confirmButtonText: "Yes, delete it!"
                 },
                 function () {
                     swal("Booyah!");
                 });
             });
         }
         
         function function16() {
             $('.demo4').on("click", function () {
                 swal({
                     title: "Are you sure?",
                     text: "Your will not be able to recover this imaginary file!",
                     type: "warning",
                     showCancelButton: true,
                     confirmButtonColor: "#DD6B55",
                     confirmButtonText: "Yes, delete it!",
                     cancelButtonText: "No, cancel plx!",
                     closeOnConfirm: false,
                     closeOnCancel: false},
                     function (isConfirm) {
                         if (isConfirm) {
                             swal("Deleted!", "Your imaginary file has been deleted.", "success");
                         } else {
                             swal("Cancelled", "Your imaginary file is safe :)", "error");
                         }
                     });
             });
         }
         
         // Toastr options
         toastr.options = {
             "debug": false,
             "newestOnTop": false,
             "positionClass": "toast-top-center",
             "closeButton": true,
             "toastClass": "animated fadeInDown"
         };
         
         $('.toastr1').on("click", function () {
             toastr.info('Info - This is a custom Homer info notification');
         });
         
         $('.toastr2').on("click", function () {
             toastr.success('Success - This is a Homer success notification');
         });
         
         $('.toastr3').on("click", function () {
             toastr.warning('Warning - This is a Homer warning notification');
         });
         
         $('.toastr4').on("click", function () {
             toastr.error('Error - This is a Homer error notification');
         });
         
      </script>
   </body>

</html>

