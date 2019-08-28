               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-users fa-3x"></i>
                           <div class="counter-number pull-right">
                                <?php
                                //code for getting all active members
                                $result ="SELECT count(*) FROM customer ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->execute();
                                $stmt->bind_result($customers);
                                $stmt->fetch();
                                $stmt->close();
                                ?>
                              <span class="count-number"><?php echo $customers;?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Active Clients</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox2">
                        <div class="statistic-box">
                           <i class="fa fa-user-secret fa-3x"></i>
                           <div class="counter-number pull-right">
                                 <?php
                                //code for getting all active members
                                $result ="SELECT count(*) FROM admin ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->execute();
                                $stmt->bind_result($members);
                                $stmt->fetch();
                                $stmt->close();
                                ?>
                              <span class="count-number"><?php echo $members;?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Active Admins</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox3">
                        <div class="statistic-box">
                           <i class="fa fa-money fa-3x"></i>
                           <div class="counter-number pull-right">
                           <?php
                                //code for getting all active members
                                $result ="SELECT count(*) FROM expense ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->execute();
                                $stmt->bind_result($expense);
                                $stmt->fetch();
                                $stmt->close();
                                ?>
                              <i class="ti ti-money"></i><span class="count-number"><?php echo $expense;?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Total Expenses</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox4">
                        <div class="statistic-box">
                           <i class="fa fa-cogs fa-3x"></i>
                           <div class="counter-number pull-right">
                           <?php
                                //code for getting all active members
                                $result ="SELECT count(*) FROM expense ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->execute();
                                $stmt->bind_result($transactions);
                                $stmt->fetch();
                                $stmt->close();
                                ?>
                              <span class="count-number"><?php echo $transactions;?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>Transactions</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Upcoming Events</h4>
                           </div>
                        </div>
                           <?php
                              
                              $ret="SELECT * FROM events ";
                              $stmt= $mysqli->prepare($ret) ;
                              //$stmt->bind_param('i',$aid);
                              $stmt->execute() ;//ok
                              $res=$stmt->get_result();
                              $cnt=1;
                              while($row=$res->fetch_object())
                              {
                           ?>
                        <div class="panel-body">
                           <div class="work-touchpoint">
                              <div class="work-touchpoint-date">
                                 <span class="day"><?php echo $row->day;?></span>
                                 <span class="month"><?php echo $row->month;?></span>
                              </div>
                           </div>
                           <div class="detailswork">
                              <span class="label-custom label label-default pull-right"><?php echo $row->notification_type;?></span>
                              <a href="#" title="headings"><?php echo $row->event_name;?></a> <br>
                              <p><?php echo $row->city;?> - <?php echo $row->country;?></p>
                           </div>
                        </div>
                              <?php }?>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Running Projects</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                        <?php
                              
                              $ret="SELECT * FROM projects ";
                              $stmt= $mysqli->prepare($ret) ;
                              //$stmt->bind_param('i',$aid);
                              $stmt->execute() ;//ok
                              $res=$stmt->get_result();
                              $cnt=1;
                              while($row=$res->fetch_object())
                              {
                           ?>
                           <div class="runnigwork">
                              <span class="label-success label label-default pull-right"><?php echo $row->status;?></span>
                              <i class="fa fa-dot-circle-o"></i>        
                              <a href="#"><?php echo $row->project_name;?></a><br>                          
                              <div class="progress runningprogress">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $row->project_progress;?>%" aria-valuenow="<?php echo $row->project_progress;?>" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $row->project_progress;?>%"></div>
                              </div>
                           </div>
                           <?php }?>
                        </div>
                     </div>
                  </div>
               </div>

               