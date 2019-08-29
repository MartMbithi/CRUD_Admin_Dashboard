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
                  <i class="fa fa-user-o"></i>
               </div>
               <div class="header-title">
                  <h1>Employee Salary List</h1>
                  <small>Employee Salary Details</small>
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
                                 <h4>General Settings</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport"> 
                                 <a href="#" class="btn btn-add" data-toggle="modal" data-target="#addsal"><i class="fa fa-plus"></i> Add Employee Salary</a>  
                              </div>
                              <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                              <ul class="dropdown-menu exp-drop" role="menu">
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false'});"> 
                                    <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});">
                                    <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON (ignoreColumn)</a>
                                 </li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'true'});">
                                    <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON (with Escape)</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                    <img src="assets/dist/img/xml.png" width="24" alt="logo"> XML</a>
                                 </li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'sql'});"> 
                                    <img src="assets/dist/img/sql.png" width="24" alt="logo"> SQL</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});"> 
                                    <img src="assets/dist/img/csv.png" width="24" alt="logo"> CSV</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'txt',escape:'false'});"> 
                                    <img src="assets/dist/img/txt.png" width="24" alt="logo"> TXT</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});"> 
                                    <img src="assets/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'doc',escape:'false'});">
                                    <img src="assets/dist/img/word.png" width="24" alt="logo"> Word</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'powerpoint',escape:'false'});"> 
                                    <img src="assets/dist/img/ppt.png" width="24" alt="logo"> PowerPoint</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'png',escape:'false'});"> 
                                    <img src="assets/dist/img/png.png" width="24" alt="logo"> PNG</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> 
                                    <img src="assets/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Serial No.</th>
                                       <th>Employee Id</th>
                                       <th>Employee Name</th>
                                       <th>Salary Type</th>
                                       <th>Basic salary</th>
                                       <th>Overtime</th>
                                       <th>Details</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <div class="checkbox checkbox-success">
                                             <input id="checkbox1" type="checkbox">
                                             <label for="checkbox1">01</label>
                                          </div>
                                       </td>
                                       <td>Emp 02341</td>
                                       <td>Tony Kroos</td>
                                       <td>Basic</td>
                                       <td>$ 5665.00</td>
                                       <td>$ 78.00</td>
                                       <td class="text-center">
                                          <a href="#" class="btn btn-add btn-xs" data-toggle="modal" data-target="#details"><span class="fa fa-list-alt"></span></a>
                                       </td>
                                       <td>
                                          <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update"><i class="fa fa-pencil"></i></button>
                                          <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#del"><i class="fa fa-trash-o"></i> </button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="checkbox checkbox-info">
                                             <input id="checkbox2" type="checkbox">
                                             <label for="checkbox2">02</label>
                                          </div>
                                       </td>
                                       <td>Emp 6542</td>
                                       <td>Luca modric</td>
                                       <td>Basic</td>
                                       <td>$ 5665.00</td>
                                       <td>$ 45.00</td>
                                       <td class="text-center">
                                          <a href="#" class="btn btn-add btn-xs" data-toggle="modal" data-target="#details">
                                          <span class="fa fa-list-alt"></span></a>
                                       </td>
                                       <td>
                                          <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update"><i class="fa fa-pencil"></i></button>
                                          <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#del"><i class="fa fa-trash-o"></i> </button>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Add salary Modal1 -->
               <div class="modal fade" id="addsal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plus m-r-5"></i> Add Salary</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Employee Id</label>
                                          <input type="number" placeholder="Employee Id" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Employee Name</label>
                                          <input type="text" placeholder="Employee Name" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Salary Type</label>
                                          <input type="text" placeholder="Salary Type" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Basic salary</label>
                                          <input type="number" placeholder="Basic salary" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Overtime</label>
                                          <input type="number" placeholder="Basic salary" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Details</label>
                                          <input type="text" placeholder="details" class="form-control">
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Update</button>
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
               <!-- update Modal1 -->
               <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plus m-r-5"></i> Update salary</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Employee Id</label>
                                          <input type="number" placeholder="Employee Id" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Employee Name</label>
                                          <input type="text" placeholder="Employee Name" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Salary Type</label>
                                          <input type="text" placeholder="Salary Type" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Basic salary</label>
                                          <input type="number" placeholder="Basic salary" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Overtime</label>
                                          <input type="number" placeholder="Basic salary" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Details</label>
                                          <input type="text" placeholder="details" class="form-control">
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Update</button>
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
               <!-- details Modal1 -->
               <div class="modal fade" id="details" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plus m-r-5"></i> Employee Details</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-6">
                                 <!-- User widget -->
                                 <div class="user-widget list-group">
                                    <div class="list-group-item heading">
                                       <img class="media-object img-circle" src="assets/dist/img/avatar5.png" alt="image">
                                       <div class="text-wrap">
                                          <h4 class="list-group-item-heading">Richard Willams</h4>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <a href="#" class="list-group-item">
                                       <p class="pull-right"> emp1234</p>
                                       <p class="list-group-item-text"><strong>EMP ID :</strong></p>
                                    </a>
                                    <a href="#" class="list-group-item">
                                       <p class="pull-right"> Finance</p>
                                       <p class="list-group-item-text"><strong>Departments:</strong></p>
                                    </a>
                                    <a href="#" class="list-group-item">
                                       <p class="pull-right"> Accountant</p>
                                       <p class="list-group-item-text"><strong>Designation:</strong></p>
                                    </a>
                                    <a href="#" class="list-group-item">
                                       <p class="pull-right"> 01-06-1985</p>
                                       <p class="list-group-item-text"><strong>Joining Date:</strong></p>
                                    </a>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <!-- User widget -->
                                 <div class="user-widget list-group">
                                    <div class="list-group-item heading">
                                       <div class="text-wrap">
                                          <h4 class="list-group-item-heading">Salary Details</h4>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <a href="#" class="list-group-item">
                                       <p class="pull-right"> Manager</p>
                                       <p class="list-group-item-text"><strong>Salary Grades :</strong></p>
                                    </a>
                                    <a href="#" class="list-group-item">
                                       <p class="pull-right"> $ 2,4564.00</p>
                                       <p class="list-group-item-text"><strong>Basic Salary:</strong></p>
                                    </a>
                                    <a href="#" class="list-group-item">
                                       <p class="pull-right"> $ 204.00</p>
                                       <p class="list-group-item-text"><strong>Overtime (Per Hour):</strong></p>
                                    </a>
                                 </div>
                              </div>
                              <div class="form-horizontal col-md-12">
                                 <div class="panel panel-info">
                                    <div class="panel-heading">
                                       <div class="panel-title">
                                          <strong>Total Salary Details</strong>
                                       </div>
                                    </div>
                                    <div class="panel-body">
                                       <div class="">
                                          <label class="col-sm-6 control-label">
                                          <strong>Gross Salary :</strong></label>
                                          <p class="form-control-static">$ 2,600.00</p>
                                       </div>
                                       <div class="">
                                          <label class="col-sm-6 control-label">
                                          <strong>Total Deduction :</strong></label>
                                          <p class="form-control-static">$ 2,45.00</p>
                                       </div>
                                       <div class="">
                                          <label class="col-sm-6 control-label">
                                          <strong>Net Salary:</strong></label>
                                          <p class="form-control-static">$ 2,600.00</p>
                                       </div>
                                    </div>
                                 </div>
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
               <!-- delete user Modal -->
               <div class="modal fade" id="del" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Delete salary</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-12 form-group user-form-group">
                                          <label class="control-label">Delete salary</label>
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">NO</button>
                                             <button type="submit" class="btn btn-add btn-sm">YES</button>
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
      <!-- table-export js -->
      <script src="assets/plugins/table-export/tableExport.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/jquery.base64.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/html2canvas.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/sprintf.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/jspdf.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/base64.js" type="text/javascript"></script>
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

