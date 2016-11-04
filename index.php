<?php 

error_reporting(0);
include("php/db_connection.php");
session_start();
if(!isset($_SESSION['username']) && (!isset($_SESSION['password']))) {
  header('location: ../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>New Project | Home-page</title>

  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="build/css/custom.css" rel="stylesheet">
  <!-- My Style -->
  <link href="css/mystyle.css" rel="stylesheet">

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-gg"></i> <span>Your logo</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="Foto" class="img-circle profile_img">
            </div>
            <div class="profile_info text-center">
              <span>Welcome to system!</span>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3 class="text-center"><?php echo $_SESSION['username']?></h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home </a></li>
                <li><a><i class="fa fa-edit"></i> Page 1</a></li>
                <li><a><i class="fa fa-desktop"></i> Page 2 </a></li>
                <li><a><i class="fa fa-table"></i> Page 3 </a></li>
                <li><a><i class="fa fa-bar-chart-o"></i> Page 4 </a></li>
                <li><a><i class="fa fa-clone"></i>Page 5 </a></li>
                <li><a><i class="fa fa-bug"></i> Page 6 </a></li>
                <li><a><i class="fa fa-windows"></i> Page 7 </a>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">

              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt=""><?php echo $_SESSION['username']?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profile</a></li>
                  <li>
                    <a href="javascript:;">
                      <span>Settings</span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Help</a></li>
                  <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i id="envelope" class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span><?php echo $_SESSION['username']?></span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span><?php echo $_SESSION['username']?></span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span ><?php echo $_SESSION['username']?></span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span><?php echo $_SESSION['username']?></span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>

                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <div>
                  <form class="navbar-form navbar-left">
                    <div class="form-group search_form">
                      <input id="search" type="text" class="form-control" autocomplete="off" placeholder="search - begin typing text...">
                      <button type="submit" class="btn btn-primary butt_seach">Go!</button>
                      <ul class="search_result"></ul>
                    </div>
                  </form>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->
      <div class="conteiner-fluid">
        <div class="right_col" role="main">
          <div class="row">
           <!-- page content -->
           <div class="col-md-5">
             <div class="page-title">

              <!-- Inbox massages -->
              <div class="row">
                <div class="col-md-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Inbox Design<small>User Mail</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12 mail_list_column">
                         <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                            </div>
                            <div class="right">
                              <h3>Dennis Mugo <small>3.00 PM</small></h3>
                              <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-star"></i>
                            </div>
                            <div class="right">
                              <h3>Jane Nobert <small>4.09 PM</small></h3>
                              <p><span class="badge">To</span> Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-circle-o"></i><i class="fa fa-paperclip"></i>
                            </div>
                            <div class="right">
                              <h3>Musimbi Anne <small>4.09 PM</small></h3>
                              <p><span class="badge">CC</span> Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-paperclip"></i>
                            </div>
                            <div class="right">
                              <h3>Jon Dibbs <small>4.09 PM</small></h3>
                              <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              .
                            </div>
                            <div class="right">
                              <h3>Debbis & Raymond <small>4.09 PM</small></h3>
                              <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              .
                            </div>
                            <div class="right">
                              <h3>Debbis & Raymond <small>4.09 PM</small></h3>
                              <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /MAIL LIST -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5 mail_view">
         <!-- CONTENT MAIL -->
         <div class="inbox-body">
          <div class="mail_heading row">
            <div class="col-md-8">
              <div class="btn-group">
                <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</button>
                <button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>
                <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>
                <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
              </div>
            </div>
            <div class="col-md-4 text-right">
              <p class="date"> 8:02 PM 12 FEB 2014</p>
            </div>
            <div class="col-md-12">
              <h4> Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum.</h4>
            </div>
          </div>
          <div class="sender-info">
            <div class="row">
              <div class="col-md-12">
                <strong>Jon Doe</strong>
                <span>(jon.doe@gmail.com)</span> to
                <strong>me</strong>
                <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
          <div class="view-mail">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            </div>
            <div class="attachment">
              <p>
                <span><i class="fa fa-paperclip"></i> 3 attachments — </span>
                <a href="#">Download all attachments</a> |
                <a href="#">View all images</a>
              </p>
              <ul>
                <li>
                  <a href="#" class="atch-thumb">
                    <img src="images/inbox.png" alt="img" />
                  </a>
                  <div class="file-name">
                    image-name.jpg
                  </div>
                  <span>12KB</span>
                  <div class="links">
                    <a href="#">View</a> -
                    <a href="#">Download</a>
                  </div>
                </li>

                <li>
                  <a href="#" class="atch-thumb">
                    <img src="images/inbox.png" alt="img" />
                  </a>

                  <div class="file-name">
                    img_name.jpg
                  </div>
                  <span>40KB</span>
                  <div class="links">
                    <a href="#">View</a> -
                    <a href="#">Download</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- /CONTENT MAIL -->
        </div>

        <div class="col-md-2">
         <div>
          <div class="x_title">
            <h2>Top Profiles</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <ul class="list-unstyled top_profiles scroll-view">
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Ms. Mary Jane</a>
                <p><strong>$2300. </strong> Agent Avarage Sales </p>
                <p> <small>12 Sales Today</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-green profile_thumb">
                <i class="fa fa-user green"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Ms. Mary Jane</a>
                <p><strong>$2300. </strong> Agent Avarage Sales </p>
                <p> <small>12 Sales Today</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-blue profile_thumb">
                <i class="fa fa-user blue"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Ms. Mary Jane</a>
                <p><strong>$2300. </strong> Agent Avarage Sales </p>
                <p> <small>12 Sales Today</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Ms. Mary Jane</a>
                <p><strong>$2300. </strong> Agent Avarage Sales </p>
                <p> <small>12 Sales Today</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-green profile_thumb">
                <i class="fa fa-user green"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Ms. Mary Jane</a>
                <p><strong>$2300. </strong> Agent Avarage Sales </p>
                <p> <small>12 Sales Today</small>
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
    </div>
  </div>
  <!-- jQuery -->
  <script src="vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- jQuery Sparklines -->
  <script src="vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- Flot -->
  <script src="vendors/Flot/jquery.flot.js"></script>
  <script src="vendors/Flot/jquery.flot.pie.js"></script>
  <script src="vendors/Flot/jquery.flot.time.js"></script>
  <script src="vendors/Flot/jquery.flot.stack.js"></script>
  <script src="vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="vendors/DateJS/build/date.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="vendors/moment/min/moment.min.js"></script>
  <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="build/js/custom.min.js"></script>

  <!-- Custom My Scripts -->
  <script src="js/myscript.js"></script>

  <!-- /bootstrap-daterangepicker -->
</body>
</html>