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
                  <i class="fa fa-hand-paper-o"></i>
               </div>
               <div class="header-title">
                  <h1>Public Holiday </h1>
                  <small>Public Holiday details</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>Holiday Details</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="col-sm-4">
                              <ul class="nav nav-tabs tabs-left holiday-month">
                                 <li class="active"><a href="#tab1" data-toggle="tab"><i class=" ti-calendar "></i> January</a></li>
                                 <li><a href="#tab2" data-toggle="tab"><i class=" ti-calendar "></i> February</a></li>
                                 <li><a href="#tab3" data-toggle="tab"><i class=" ti-calendar "></i> March</a></li>
                                 <li><a href="#tab3" data-toggle="tab"><i class=" ti-calendar "></i> April</a></li>
                                 <li><a href="#tab5" data-toggle="tab"><i class=" ti-calendar "></i> May</a></li>
                                 <li><a href="#tab6" data-toggle="tab"><i class=" ti-calendar "></i> June</a></li>
                                 <li><a href="#tab7" data-toggle="tab"><i class=" ti-calendar "></i> July</a></li>
                                 <li><a href="#tab8" data-toggle="tab"><i class=" ti-calendar "></i> August</a></li>
                                 <li><a href="#tab9" data-toggle="tab"><i class=" ti-calendar "></i> September</a></li>
                                 <li><a href="#tab10" data-toggle="tab"><i class=" ti-calendar "></i> October</a></li>
                                 <li><a href="#tab11" data-toggle="tab"><i class=" ti-calendar "></i> November</a></li>
                                 <li><a href="#tab12" data-toggle="tab"><i class=" ti-calendar "></i> December</a></li>
                              </ul>
                           </div>
                           <!-- Tab panels -->
                           <div class="tab-content col-sm-8">
                              <div class="tab-pane fade in active" id="tab1">
                                 <div class="panel-body">
                                    <a href="#" class="btn btn-add btndate" data-toggle="modal" data-target="#addholiday"><i class="ti-calendar"></i> <strong>January</strong></a>  
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Event Name</th>
                                                <th>start date</th>
                                                <th>End date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade in" id="tab2">
                                 <div class="panel-body">
                                    <a href="#" class="btn btn-add btndate" id="btndate" data-toggle="modal" data-target="#addholiday"><i class=" ti-calendar"></i> <strong>February</strong></a>  
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Event Name</th>
                                                <th>start date</th>
                                                <th>End date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade in" id="tab3">
                                 <div class="panel-body">
                                    <a href="#" class="btn btn-add btndate" data-toggle="modal" data-target="#addholiday"><i class=" ti-calendar"></i> <strong>March</strong></a>  
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Event Name</th>
                                                <th>start date</th>
                                                <th>End date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade in" id="tab4">
                                 <div class="panel-body">
                                    <a href="#" class="btn btn-add btndate" data-toggle="modal" data-target="#addholiday"><i class=" ti-calendar"></i> <strong>April</strong></a>  
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Event Name</th>
                                                <th>start date</th>
                                                <th>End date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade in" id="tab5">
                                 <div class="panel-body">
                                    <a href="#" class="btn btn-add btndate" data-toggle="modal" data-target="#addholiday"><i class=" ti-calendar"></i> <strong>May</strong></a>  
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Event Name</th>
                                                <th>start date</th>
                                                <th>End date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade in" id="tab6">
                                 <div class="panel-body">
                                    <a href="#" class="btn btn-add btndate" data-toggle="modal" data-target="#addholiday"><i class=" ti-calendar"></i> <strong>June</strong></a>  
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Event Name</th>
                                                <th>start date</th>
                                                <th>End date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade in" id="tab7">
                                 <div class="panel-body">
                                    <a href="#" class="btn btn-add btndate" data-toggle="modal" data-target="#addholiday"><i class=" ti-calendar"></i> <strong>July</strong></a>  
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Event Name</th>
                                                <th>start date</th>
                                                <th>End date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade in" id="tab8">
                                 <div class="panel-body">
                                    <a href="#" class="btn btn-add btndate" data-toggle="modal" data-target="#addholiday"><i class=" ti-calendar"></i> <strong>August</strong></a>  
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Event Name</th>
                                                <th>start date</th>
                                                <th>End date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade in" id="tab9">
                                 <div class="panel-body">
                                    <a href="#" class="btn btn-add btndate" data-toggle="modal" data-target="#addholiday"><i class=" ti-calendar"></i> <strong>September</strong></a>  
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Event Name</th>
                                                <th>start date</th>
                                                <th>End date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade in" id="tab10">
                                 <div class="panel-body">
                                    <a href="#" class="btn btn-add btndate" data-toggle="modal" data-target="#addholiday"><i class=" ti-calendar"></i> <strong>October</strong></a>  
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Event Name</th>
                                                <th>start date</th>
                                                <th>End date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade in" id="tab11">
                                 <div class="panel-body">
                                    <a href="#" class="btn btn-add btndate" data-toggle="modal" data-target="#addholiday"><i class=" ti-calendar"></i> <strong>November</strong></a>  
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Event Name</th>
                                                <th>start date</th>
                                                <th>End date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade in" id="tab12">
                                 <div class="panel-body">
                                    <a href="#" class="btn btn-add btndate" data-toggle="modal" data-target="#addholiday"><i class=" ti-calendar"></i> <strong>December</strong></a>
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-striped table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Event Name</th>
                                                <th>start date</th>
                                                <th>End date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
                                                   </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Eid holiday</td>
                                                <td>02/03/2017</td>
                                                <td>10/03/2017</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                   <i class="fa fa-pencil"></i>
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
                  </div>
               </div>
               <!-- Update Modal1 -->
               <div class="modal fade" id="addholiday" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plus m-r-5"></i> Add holiday</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Event Name</label>
                                          <input type="text" placeholder="Event Name" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">start date</label>
                                          <input type="number" placeholder="Event Name" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">End date</label>
                                          <input type="number" placeholder="End date" class="form-control">
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Add Holiday</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <!-- Modal -->  
               <!-- Update Modal1 -->
               <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plus m-r-5"></i> Update</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Event Name</label>
                                          <input type="text" placeholder="Event Name" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">start date</label>
                                          <input type="number" placeholder="Event Name" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">End date</label>
                                          <input type="number" placeholder="End date" class="form-control">
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">update info</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <!-- Modal -->      
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
      <!-- dataTables js -->
      <script src="assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
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

