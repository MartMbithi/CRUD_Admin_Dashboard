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
               <div class="header-icon"><i class="fa fa-calendar-o"></i></div>
               <div class="header-title">
                  <h1>Calender</h1>
                  <small>Show Events</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12 col-md-3">
                     <div class="panel panel-bd">
                        <div class="panel-body">
                           <div id='external-events'>
                              <h4>Draggable Events</h4>
                              <div class='fc-event'>My Event 1</div>
                              <div class='fc-event'>My Event 2</div>
                              <div class='fc-event'>My Event 3</div>
                              <div class='fc-event'>My Event 4</div>
                              <div class='fc-event'>My Event 5</div>
                              <p>
                                 <input type='checkbox' id='drop-remove' />
                                 <label for='drop-remove'>remove after drop</label>
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-bd hidden-xs hidden-sm">
                        <div class="panel-body">
                           <h4 class="m-t-0">FullCalendar</h4>
                           <p> is a jQuery plugin that provides a full-sized, drag &amp; drop calendar like the one below. It uses AJAX to fetch events on-the-fly for each month and is
                              easily configured to use your own feed format (an extension is provided for Google Calendar).
                           </p>
                           <p><a href="#" target="_blank">FullCalendar documentation</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-9">
                     <div class="panel panel-bd">
                        <div class="panel-body">
                           <!-- calender -->
                           <div id='calendar'></div>
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
      <!-- fullcalendar js -->
      <script src="assets/plugins/fullcalendar/lib/moment.min.js" type="text/javascript"></script>
      <script src="assets/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
      <script>
      function calndr() {         
         /* initialize the external events
          -----------------------------------------------------------------*/
           var calndr = $('#external-events .fc-event');
         
           $(calndr).each(function () {
             // store data so the calendar knows to render an event upon drop
             $(this).data('event', {
                 title: $.trim($(this).text()), // use the element's text as the event title
                 stick: true // maintain when user navigates (see docs on the renderEvent method)
             });
         
             // make the event draggable using jQuery UI
             $(this).draggable({
                 zIndex: 999,
                 revert: true, // will cause the event to go back to its
                 revertDuration: 0  //  original position after the drag
             });
         
         });
         
         /* initialize the calendar
          -----------------------------------------------------------------*/
          var calender = $('#calendar');
         $(calender).fullCalendar({
             header: {
                 left: 'prev,next today',
                 center: 'title',
                 right: 'month,agendaWeek,agendaDay,listMonth'
             },
             defaultDate: '2016-12-12',
             navLinks: true, // can click day/week names to navigate views
             businessHours: true, // display business hours
             editable: true,
             droppable: true, // this allows things to be dropped onto the calendar
             drop: function () {
                 // is the "remove after drop" checkbox checked?
                 if ($('#drop-remove').is(':checked')) {
                     // if so, remove the element from the "Draggable Events" list
                     $(this).remove();
                 }
             },
             events: [
                 {
                     title: 'Business Lunch',
                     start: '2016-12-03T13:00:00',
                     constraint: 'businessHours'
                 },
                 {
                     title: 'Meeting',
                     start: '2016-12-13T11:00:00',
                     constraint: 'availableForMeeting', // defined below
                     color: '#009688'
                 },
                 {
                     title: 'Conference',
                     start: '2016-12-18',
                     end: '2016-12-20'
                 },
                 {
                     title: 'Party',
                     start: '2016-12-29T20:00:00'
                 },
                 // areas where "Meeting" must be dropped
                 {
                     id: 'availableForMeeting',
                     start: '2016-12-11T10:00:00',
                     end: '2016-12-11T16:00:00',
                     rendering: 'background'
                 },
                 {
                     id: 'availableForMeeting',
                     start: '2016-12-13T10:00:00',
                     end: '2016-12-13T16:00:00',
                     rendering: 'background'
                 },
                 // red areas where no events can be dropped
                 {
                     start: '2016-12-24',
                     end: '2016-12-28',
                     overlap: false,
                     rendering: 'background',
                     color: '#ff9f89'
                 },
                 {
                     start: '2016-12-06',
                     end: '2016-12-08',
                     overlap: false,
                     rendering: 'background',
                     color: '#ff9f89'
                 }
             ]
         });
         }
         calndr();
      </script>
   </body>

</html>

