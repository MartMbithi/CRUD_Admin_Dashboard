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
                  <i class="fa fa-paper-plane"></i>
               </div>
               <div class="header-title">
                  <h1>Buttons</h1>
                  <small>Buttons color, size and types</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Buttons - Normal</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <p class="m-b-15">Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                           <button type="button" class="btn btn-default w-md m-b-5">Default</button>
                           <button type="button" class="btn btn-primary w-md m-b-5">Primary</button>
                           <button type="button" class="btn btn-success w-md m-b-5">Success</button>
                           <button type="button" class="btn btn-info w-md m-b-5">Info</button>
                           <button type="button" class="btn btn-warning w-md m-b-5">Warning</button>
                           <button type="button" class="btn btn-danger w-md m-b-5">Danger</button>
                           <button type="button" class="btn btn-inverse w-md m-b-5">Inverse</button>
                           <button type="button" class="btn btn-purple w-md m-b-5">Purple</button>
                           <button type="button" class="btn btn-pink w-md m-b-5">Pink</button>
                           <button type="button" class="btn btn-black w-md m-b-5">Black</button>
                           <button type="button" class="btn btn-violet w-md m-b-5">Violet</button>
                        </div>
                     </div>
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Button-Rounded</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <p class="m-b-15">Add <code>.btn-rounded</code> to default button to get rounded corners.</p>
                           <button type="button" class="btn btn-default btn-rounded w-md m-b-5">Default</button>
                           <button type="button" class="btn btn-primary btn-rounded w-md m-b-5">Primary</button>
                           <button type="button" class="btn btn-success btn-rounded w-md m-b-5">Success</button>
                           <button type="button" class="btn btn-info btn-rounded w-md m-b-5">Info</button>
                           <button type="button" class="btn btn-warning btn-rounded w-md m-b-5">Warning</button>
                           <button type="button" class="btn btn-danger btn-rounded w-md m-b-5">Danger</button>
                           <button type="button" class="btn btn-inverse btn-rounded w-md m-b-5">Inverse</button>
                           <button type="button" class="btn btn-purple btn-rounded w-md m-b-5">Purple</button>
                           <button type="button" class="btn btn-pink btn-rounded w-md m-b-5">Pink</button>
                           <button type="button" class="btn btn-black btn-rounded w-md m-b-5">Black</button>
                           <button type="button" class="btn btn-violet btn-rounded w-md m-b-5">Violet</button>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4> Button-Rounded</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <p class="m-b-15">Use a classes <code>.disabled</code>to quickly create a Disabled btn.</p>
                           <button type="button" class="btn btn-default disabled w-md m-b-5">Default</button>
                           <button type="button" class="btn btn-primary disabled w-md m-b-5">Primary</button>
                           <button type="button" class="btn btn-success disabled w-md m-b-5">Success</button>
                           <button type="button" class="btn btn-info disabled w-md m-b-5">Info</button>
                           <button type="button" class="btn btn-warning disabled w-md m-b-5">Warning</button>
                           <button type="button" class="btn btn-danger disabled w-md m-b-5">Danger</button>
                           <button type="button" class="btn btn-inverse disabled w-md m-b-5">Inverse</button>
                           <button type="button" class="btn btn-purple disabled w-md m-b-5">Purple</button>
                           <button type="button" class="btn btn-pink disabled w-md m-b-5">Pink</button>
                           <button type="button" class="btn btn-black disabled w-md m-b-5">Black</button>
                           <button type="button" class="btn btn-violet disabled w-md m-b-5">Violet</button>
                        </div>
                     </div>
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Button-Transparent</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <p class="m-b-15">Use a classes <code>.btn-transparent</code> to quickly create a bordered buttons.</p>
                           <button type="button" class="btn btn-default btn-transparent w-md m-b-5">Default</button>
                           <button type="button" class="btn btn-primary btn-transparent w-md m-b-5">Primary</button>
                           <button type="button" class="btn btn-success btn-transparent w-md m-b-5">Success</button>
                           <button type="button" class="btn btn-info btn-transparent w-md m-b-5">Info</button>
                           <button type="button" class="btn btn-warning btn-transparent w-md m-b-5">Warning</button>
                           <button type="button" class="btn btn-danger btn-transparent w-md m-b-5">Danger</button>
                           <button type="button" class="btn btn-inverse btn-transparent w-md m-b-5">Inverse</button>
                           <button type="button" class="btn btn-purple btn-transparent w-md m-b-5">Purple</button>
                           <button type="button" class="btn btn-pink btn-transparent w-md m-b-5">Pink</button>
                           <button type="button" class="btn btn-black btn-transparent w-md m-b-5">Black</button>
                           <button type="button" class="btn btn-violet btn-transparent w-md m-b-5">Violet</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4> Outline-Buttons</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <h4>Outline-Buttons</h4>
                           <p class="m-b-15">Use a classes <code>btn btn-default btn-outline</code>to quickly create a Outline btn.</p>
                           <button type="button" class="btn btn-default btn-outline w-md m-b-5">Default</button>
                           <button type="button" class="btn btn-primary btn-outline w-md m-b-5">Primary</button>
                           <button type="button" class="btn btn-success btn-outline w-md m-b-5">Success</button>
                           <button type="button" class="btn btn-info btn-outline w-md m-b-5">Info</button>
                           <button type="button" class="btn btn-warning btn-outline w-md m-b-5">Warning</button>
                           <button type="button" class="btn btn-danger btn-outline w-md m-b-5">Danger</button>
                           <button type="button" class="btn btn-inverse btn-outline w-md m-b-5">Inverse</button>
                           <button type="button" class="btn btn-purple btn-outline w-md m-b-5">Purple</button>
                           <button type="button" class="btn btn-pink btn-outline w-md m-b-5">Pink</button>
                           <button type="button" class="btn btn-black btn-outline w-md m-b-5">Black</button>
                           <button type="button" class="btn btn-violet btn-outline w-md m-b-5">Violet</button>
                           <br>
                           <br>
                           <h4>Rounded-Outline-Buttons</h4>
                           <p class="m-b-15">Use a classes <code>btn btn-default btn-outline btn-rounded</code>to quickly create a Rounded btn.</p>
                           <button type="button" class="btn btn-default btn-outline btn-rounded w-md m-b-5">Default</button>
                           <button type="button" class="btn btn-primary btn-outline btn-rounded w-md m-b-5">Primary</button>
                           <button type="button" class="btn btn-success btn-outline btn-rounded w-md m-b-5">Success</button>
                           <button type="button" class="btn btn-info btn-outline btn-rounded w-md m-b-5">Info</button>
                           <button type="button" class="btn btn-warning btn-outline btn-rounded w-md m-b-5">Warning</button>
                           <button type="button" class="btn btn-danger btn-outline btn-rounded w-md m-b-5">Danger</button>
                           <button type="button" class="btn btn-inverse btn-outline btn-rounded w-md m-b-5">Inverse</button>
                           <button type="button" class="btn btn-purple btn-outline btn-rounded w-md m-b-5">Purple</button>
                           <button type="button" class="btn btn-pink btn-outline btn-rounded w-md m-b-5">Pink</button>
                           <button type="button" class="btn btn-black btn-outline btn-rounded w-md m-b-5">Black</button>
                           <button type="button" class="btn btn-violet btn-outline btn-rounded w-md m-b-5">Violet</button>
                           <br>
                           <br>
                           <h4>Labeled-Buttons</h4>
                           <button type="button" class="btn btn-labeled btn-success m-b-5">
                           <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Success
                           </button>
                           <button type="button" class="btn btn-labeled btn-danger m-b-5">
                           <span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Cancel
                           </button>
                           <button type="button" class="btn btn-labeled btn-warning m-b-5">
                           <span class="btn-label"><i class="glyphicon glyphicon-bookmark"></i></span>Bookmark
                           </button>
                           <button type="button" class="btn btn-labeled btn-primary m-b-5">
                           <span class="btn-label"><i class="glyphicon glyphicon-camera"></i></span>Camera
                           </button>
                           <button type="button" class="btn btn-labeled btn-pink m-b-5">
                           <span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Left
                           </button>
                           <button type="button" class="btn btn-labeled btn-pink m-b-5">
                           <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>Right
                           </button>
                           <button type="button" class="btn btn-labeled btn-inverse m-b-5">
                           <span class="btn-label"><i class="glyphicon glyphicon-thumbs-up"></i></span>Thumbs Up
                           </button>
                           <button type="button" class="btn btn-labeled btn-purple m-b-5">
                           <span class="btn-label"><i class="glyphicon glyphicon-thumbs-down"></i></span>Thumbs Down
                           </button>
                           <button type="button" class="btn btn-labeled btn-info m-b-5">
                           <span class="btn-label"><i class="glyphicon glyphicon-refresh"></i></span>Refresh
                           </button>
                           <button type="button" class="btn btn-labeled btn-danger m-b-5">
                           <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>Trash
                           </button>
                           <button type="button" class="btn btn-success btn-labeled m-b-5">
                           <span class="btn-label"><i class="glyphicon glyphicon-info-sign"></i></span>Info Web
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-4">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4> Social Buttons</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <p class="m-b-15">Use a classes <code>btn btn-block btn-social btn-adn</code>to quickly create a Rounded btn.</p>
                           <button type="button" class="btn btn-block btn-social btn-adn m-b-5">
                           <span class="fa fa-adn"></span> Sign in with App.net
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-bitbucket m-b-5">
                           <span class="fa fa-bitbucket"></span> Sign in with Bitbucket
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-dropbox m-b-5">
                           <span class="fa fa-dropbox"></span> Sign in with Dropbox
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-facebook m-b-5">
                           <span class="fa fa-facebook"></span> Sign in with Facebook
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-flickr m-b-5">
                           <span class="fa fa-flickr"></span> Sign in with Flickr
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-foursquare m-b-5">
                           <span class="fa fa-foursquare"></span> Sign in with Foursquare
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-github m-b-5">
                           <span class="fa fa-github"></span> Sign in with GitHub
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-google m-b-5">
                           <span class="fa fa-google"></span> Sign in with Google
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-instagram m-b-5">
                           <span class="fa fa-instagram"></span> Sign in with Instagram
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-linkedin m-b-5">
                           <span class="fa fa-linkedin"></span> Sign in with LinkedIn
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-microsoft m-b-5">
                           <span class="fa fa-windows"></span> Sign in with Microsoft
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-odnoklassniki m-b-5">
                           <span class="fa fa-odnoklassniki"></span> Sign in with Odnoklassniki
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-openid m-b-5">
                           <span class="fa fa-openid"></span> Sign in with OpenID
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-pinterest m-b-5">
                           <span class="fa fa-pinterest"></span> Sign in with Pinterest
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-reddit m-b-5">
                           <span class="fa fa-reddit"></span> Sign in with Reddit
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-soundcloud m-b-5">
                           <span class="fa fa-soundcloud"></span> Sign in with SoundCloud
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-tumblr m-b-5">
                           <span class="fa fa-tumblr"></span> Sign in with Tumblr
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-twitter m-b-5">
                           <span class="fa fa-twitter"></span> Sign in with Twitter
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-vimeo m-b-5">
                           <span class="fa fa-vimeo-square"></span> Sign in with Vimeo
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-vk m-b-5">
                           <span class="fa fa-vk"></span> Sign in with VK
                           </button>
                           <button type="button" class="btn btn-block btn-social btn-yahoo">
                           <span class="fa fa-yahoo"></span> Sign in with Yahoo!
                           </button>
                           <br>
                           <br>
                           <p class="m-b-15">Use a classes <code>btn btn-social-icon btn-adn</code>to quickly create a Rounded btn.</p>
                           <button type="button" class="btn btn-social-icon btn-adn m-b-5"><i class="fa fa-adn"></i></button>
                           <button type="button" class="btn btn-social-icon btn-bitbucket m-b-5"><i class="fa fa-bitbucket"></i></button>
                           <button type="button" class="btn btn-social-icon btn-dropbox m-b-5"><i class="fa fa-dropbox"></i></button>
                           <button type="button" class="btn btn-social-icon btn-facebook m-b-5"><i class="fa fa-facebook"></i></button>
                           <button type="button" class="btn btn-social-icon btn-flickr m-b-5"><i class="fa fa-flickr"></i></button>
                           <button type="button" class="btn btn-social-icon btn-foursquare m-b-5"><i class="fa fa-foursquare"></i></button>
                           <button type="button" class="btn btn-social-icon btn-github m-b-5"><i class="fa fa-github"></i></button>
                           <button type="button" class="btn btn-social-icon btn-google m-b-5"><i class="fa fa-google"></i></button>
                           <button type="button" class="btn btn-social-icon btn-instagram m-b-5"><i class="fa fa-instagram"></i></button>
                           <button type="button" class="btn btn-social-icon btn-linkedin m-b-5"><i class="fa fa-linkedin"></i></button>
                           <button type="button" class="btn btn-social-icon btn-microsoft m-b-5"><i class="fa fa-windows"></i></button>
                           <button type="button" class="btn btn-social-icon btn-odnoklassniki m-b-5"><i class="fa fa-odnoklassniki"></i></button>
                           <button type="button" class="btn btn-social-icon btn-openid m-b-5"><i class="fa fa-openid"></i></button>
                           <button type="button" class="btn btn-social-icon btn-pinterest m-b-5"><i class="fa fa-pinterest"></i></button>
                           <button type="button" class="btn btn-social-icon btn-reddit m-b-5"><i class="fa fa-reddit"></i></button>
                           <button type="button" class="btn btn-social-icon btn-soundcloud m-b-5"><i class="fa fa-soundcloud"></i></button>
                           <button type="button" class="btn btn-social-icon btn-tumblr m-b-5"><i class="fa fa-tumblr"></i></button>
                           <button type="button" class="btn btn-social-icon btn-twitter m-b-5"><i class="fa fa-twitter"></i></button>
                           <button type="button" class="btn btn-social-icon btn-vimeo m-b-5"><i class="fa fa-vimeo-square"></i></button>
                           <button type="button" class="btn btn-social-icon btn-vk m-b-5"><i class="fa fa-vk"></i></button>
                           <button type="button" class="btn btn-social-icon btn-yahoo m-b-5"><i class="fa fa-yahoo"></i></button>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-8">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Circle icon, Button dropdown, Button dropdown</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <h4 class="m-t-0">Circle icon</h4>
                           <p class="m-b-15">Use a classes <code>btn btn-default btn-circle</code>to quickly create a Rounded btn.</p>
                           <button type="button" class="btn btn-default btn-circle m-b-5"><i class="glyphicon glyphicon-ok"></i></button>
                           <button type="button" class="btn btn-primary btn-circle m-b-5"><i class="glyphicon glyphicon-list"></i></button>
                           <button type="button" class="btn btn-success btn-circle m-b-5"><i class="glyphicon glyphicon-link"></i></button>
                           <button type="button" class="btn btn-info btn-circle m-b-5"><i class="glyphicon glyphicon-ok"></i></button>
                           <button type="button" class="btn btn-warning btn-circle m-b-5"><i class="glyphicon glyphicon-remove"></i></button>
                           <button type="button" class="btn btn-danger btn-circle m-b-5"><i class="glyphicon glyphicon-heart"></i></button>
                           <button type="button" class="btn btn-inverse btn-circle m-b-5"><i class="glyphicon glyphicon-trash"></i></button>
                           <button type="button" class="btn btn-purple btn-circle m-b-5"><i class="glyphicon glyphicon-repeat"></i></button>
                           <button type="button" class="btn btn-pink btn-circle m-b-5"><i class="glyphicon glyphicon-download-alt"></i></button>
                           <button type="button" class="btn btn-black btn-circle m-b-5"><i class="glyphicon glyphicon-bell"></i></button>
                           <button type="button" class="btn btn-violet btn-circle m-b-5"><i class="glyphicon glyphicon-info-sign"></i></button>
                           <br>
                           <br>
                           <h4>Button dropdown</h4>
                           <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
                           <!-- Start button group-->
                           <div class="btn-group m-b-5">
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-default">default 
                              <span class="caret"></span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li><a href="#">Something else here</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a></li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group m-b-5">
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-primary">primary
                              <span class="caret"></span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li><a href="#">Something else here</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a></li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group m-b-5">
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-success">success
                              <span class="caret"></span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li><a href="#">Something else here</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a></li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group m-b-5">
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-info">info
                              <span class="caret"></span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li><a href="#">Something else here</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a></li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group m-b-5">
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-warning">warning
                              <span class="caret"></span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li><a href="#">Something else here</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a></li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group m-b-5">
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-danger">danger
                              <span class="caret"></span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li><a href="#">Something else here</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a></li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group m-b-5">
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-inverse">inverse
                              <span class="caret"></span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li><a href="#">Something else here</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a></li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group m-b-5">
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-purple">purple
                              <span class="caret"></span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li><a href="#">Something else here</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a></li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group m-b-5">
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-pink">pink
                              <span class="caret"></span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li><a href="#">Something else here</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a></li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group m-b-5">
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-black">black
                              <span class="caret"></span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li><a href="#">Something else here</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a></li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group m-b-5">
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-violet">violet
                              <span class="caret"></span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li><a href="#">Something else here</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a></li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <br>
                           <br>
                           <h4>Split button dropdown</h4>
                           <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
                           <!-- Start button group-->
                           <div class="btn-group  m-b-5">
                              <button type="button" class="btn btn-default">Action</button>
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-default">
                              <span class="caret"></span>
                              <span class="sr-only">default</span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a>
                                 </li>
                                 <li><a href="#">Another action</a>
                                 </li>
                                 <li><a href="#">Something else here</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group  m-b-5">
                              <button type="button" class="btn btn-primary">Action</button>
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-primary">
                              <span class="caret"></span>
                              <span class="sr-only">primary</span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a>
                                 </li>
                                 <li><a href="#">Another action</a>
                                 </li>
                                 <li><a href="#">Something else here</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group  m-b-5">
                              <button type="button" class="btn btn-success">Action</button>
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-success">
                              <span class="caret"></span>
                              <span class="sr-only">success</span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a>
                                 </li>
                                 <li><a href="#">Another action</a>
                                 </li>
                                 <li><a href="#">Something else here</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group  m-b-5">
                              <button type="button" class="btn btn-info">Action</button>
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-info">
                              <span class="caret"></span>
                              <span class="sr-only">info</span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a>
                                 </li>
                                 <li><a href="#">Another action</a>
                                 </li>
                                 <li><a href="#">Something else here</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group  m-b-5">
                              <button type="button" class="btn btn-warning">Action</button>
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-warning">
                              <span class="caret"></span>
                              <span class="sr-only">warning</span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a>
                                 </li>
                                 <li><a href="#">Another action</a>
                                 </li>
                                 <li><a href="#">Something else here</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group  m-b-5">
                              <button type="button" class="btn btn-danger">Action</button>
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-danger">
                              <span class="caret"></span>
                              <span class="sr-only">danger</span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a>
                                 </li>
                                 <li><a href="#">Another action</a>
                                 </li>
                                 <li><a href="#">Something else here</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group  m-b-5">
                              <button type="button" class="btn btn-inverse">Action</button>
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-inverse">
                              <span class="caret"></span>
                              <span class="sr-only">inverse</span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a>
                                 </li>
                                 <li><a href="#">Another action</a>
                                 </li>
                                 <li><a href="#">Something else here</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group  m-b-5">
                              <button type="button" class="btn btn-purple">Action</button>
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-purple">
                              <span class="caret"></span>
                              <span class="sr-only">purple</span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a>
                                 </li>
                                 <li><a href="#">Another action</a>
                                 </li>
                                 <li><a href="#">Something else here</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group  m-b-5">
                              <button type="button" class="btn btn-pink">Action</button>
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-pink">
                              <span class="caret"></span>
                              <span class="sr-only">pink</span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a>
                                 </li>
                                 <li><a href="#">Another action</a>
                                 </li>
                                 <li><a href="#">Something else here</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group  m-b-5">
                              <button type="button" class="btn btn-black">Action</button>
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-black">
                              <span class="caret"></span>
                              <span class="sr-only">black</span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a>
                                 </li>
                                 <li><a href="#">Another action</a>
                                 </li>
                                 <li><a href="#">Something else here</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <!-- Start button group-->
                           <div class="btn-group  m-b-5">
                              <button type="button" class="btn btn-violet">Action</button>
                              <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-violet">
                              <span class="caret"></span>
                              <span class="sr-only">violet</span>
                              </button>
                              <ul role="menu" class="dropdown-menu">
                                 <li><a href="#">Action</a>
                                 </li>
                                 <li><a href="#">Another action</a>
                                 </li>
                                 <li><a href="#">Something else here</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#">Separated link</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End button group-->
                           <br>
                           <br>
                           <h4>Animate icon buttons</h4>
                           <p>Use the <code>.fa-spin</code> class to get any icon to rotate, and use <code>.fa-pulse</code> to have it rotate
                              with 8 steps.
                           </p>
                           <button type="button" class="btn btn-default btn-rounded"><i class="fa fa-bolt fa-spin"></i></button>
                           <button type="button" class="btn btn-primary btn-rounded"><i class="fa fa-cog fa-spin"></i></button>
                           <button type="button" class="btn btn-success btn-rounded"><i class="fa fa-spinner fa-spin"></i></button>
                           <button type="button" class="btn btn-info btn-rounded"><i class="fa fa-circle-o-notch fa-spin"></i></button>
                        </div>
                     </div>
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Button groups</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="row">
                              <div class="col-sm-5">
                                 <h4 class="m-t-0">Basic example</h4>
                                 <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
                                 <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default">Left</button>
                                    <button type="button" class="btn btn-default">Middle</button>
                                    <button type="button" class="btn btn-default">Right</button>
                                 </div>
                              </div>
                              <div class="col-sm-7">
                                 <h4 class="m-t-0">Button toolbar</h4>
                                 <p>Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.</p>
                                 <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                       <button type="button" class="btn btn-default">1</button>
                                       <button type="button" class="btn btn-default">2</button>
                                       <button type="button" class="btn btn-default">3</button>
                                       <button type="button" class="btn btn-default">4</button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Second group">
                                       <button type="button" class="btn btn-default">5</button>
                                       <button type="button" class="btn btn-default">6</button>
                                       <button type="button" class="btn btn-default">7</button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Third group">
                                       <button type="button" class="btn btn-default">8</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <br>
                                 <h4>Sizing</h4>
                                 <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including when nesting multiple groups.</p>
                                 <div class="btn-group btn-group-lg m-b-10" role="group" aria-label="Large button group">
                                    <button type="button" class="btn btn-default">Left</button>
                                    <button type="button" class="btn btn-default">Middle</button>
                                    <button type="button" class="btn btn-default">Right</button>
                                 </div>
                                 <br>
                                 <div class="btn-group m-b-10" role="group" aria-label="Default button group">
                                    <button type="button" class="btn btn-default">Left</button>
                                    <button type="button" class="btn btn-default">Middle</button>
                                    <button type="button" class="btn btn-default">Right</button>
                                 </div>
                                 <br>
                                 <div class="btn-group btn-group-sm m-b-10" role="group" aria-label="Small button group">
                                    <button type="button" class="btn btn-default">Left</button>
                                    <button type="button" class="btn btn-default">Middle</button>
                                    <button type="button" class="btn btn-default">Right</button>
                                 </div>
                                 <br>
                                 <div class="btn-group btn-group-xs m-b-10" role="group" aria-label="Extra-small button group">
                                    <button type="button" class="btn btn-default">Left</button>
                                    <button type="button" class="btn btn-default">Middle</button>
                                    <button type="button" class="btn btn-default">Right</button>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <br>
                                 <h4>Vertical variation</h4>
                                 <p>Make a set of buttons appear vertically stacked rather than horizontally. <strong class="text-danger">Split button dropdowns are not supported here.</strong></p>
                                 <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                    <button type="button" class="btn btn-default">Button</button>
                                    <button type="button" class="btn btn-default">Button</button>
                                    <div class="btn-group" role="group">
                                       <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                       <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                          <li><a href="#">Dropdown link</a></li>
                                          <li><a href="#">Dropdown link</a></li>
                                       </ul>
                                    </div>
                                    <button type="button" class="btn btn-default">Button</button>
                                    <button type="button" class="btn btn-default">Button</button>
                                    <div class="btn-group" role="group">
                                       <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                       <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                          <li><a href="#">Dropdown link</a></li>
                                          <li><a href="#">Dropdown link</a></li>
                                       </ul>
                                    </div>
                                    <div class="btn-group" role="group">
                                       <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                       <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                          <li><a href="#">Dropdown link</a></li>
                                          <li><a href="#">Dropdown link</a></li>
                                       </ul>
                                    </div>
                                    <div class="btn-group" role="group">
                                       <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                       <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                          <li><a href="#">Dropdown link</a></li>
                                          <li><a href="#">Dropdown link</a></li>
                                       </ul>
                                    </div>
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
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
   </body>

</html>

