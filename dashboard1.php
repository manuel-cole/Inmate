
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Dashboard1</title>
   <link rel="shortcut icon" href="login/assets/ico/favicon.png"
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
   <style type="text/css">
   #apDiv1 {
	position: absolute;
	width: 42px;
	height: 46px;
	z-index: 1;
	left: 406px;
	top: 4px;
}
   #apDiv2 {
	position: absolute;
	width: 183px;
	height: 155px;
	z-index: 2;
	left: 1100px;
	top: 196px;
}
   </style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!--BEGIN SIDEBAR TOGGLE-->
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
               </div>
               <!--END SIDEBAR TOGGLE-->
               <!-- BEGIN LOGO -->
               <a class="brand" href="dashboard1.php">               </a>
               <div id="apDiv1"><img src="img/Ghana.png" width="32" height="46"></div>
               <a class="brand" href="dashboard1.php"><img src="img/logo.png" alt="Metro Lab" /></a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER --><!-- END  NOTIFICATION -->
               <div class="top-nav "><!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

              <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
          <div class="navbar-inverse">
                  <form class="navbar-search visible-phone">
                      <input type="text" class="search-query" placeholder="Search" />
                  </form>
            </div>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="sidebar-menu">
                <li class="sub-menu">
              <a class="" href="dashboard1.php">
                          <i class="icon-th"></i>
                          <span>Home</span>
                         
                </li>
                <li class="sub-menu">
                     <a class="" href="inmate1.html">
                        <i class="icon-book"></i>
                        <span>Add Inmate</span>
                         
                </li>
                <li class="sub-menu">
                    <a href="update.php" class="">
                        <i class="icon-tasks"></i>
                        <span>Update</span>
                          
                </li>
                  
                <li class="sub-menu">
                    <a href="delete.php" class="">
                        <i class="icon-fire"></i>
                        <span>Delete</span>
                         
                </li>
                <li class="sub-menu">
                    <a href="report.php" class="">
                        <i class="icon-book"></i>
                        <span>Report</span>
                         
                </li>
                        
                </li>
                <li>
                    <a class="" href="login/logout.php">
                          <i class="icon-user"></i>
                        <span>Sign Out</span>
                    </a>
                </li>
            </ul>
              <!-- END SIDEBAR MENU -->
          </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     DASHBOARD
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Dashboard</a>
                           <span class="divider">/</span>
                       </li>
                      
                           <form action="search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
            <div class="row-luid">
                 <div class="span12">
                
                     <div class="widget box green">
                         <div class="widget-title">
                             <h4>
                                 <i class="icon-reorder"></i> NAVIGATION
                             </h4>
                        <span class="tools">
                           
                        </span>
                         </div>
                         <div class="widget-body">
                             <form class="form-horizontal" action="#">
                               <div id="pills" class="custom-wizard-pills">
                                 <ul>
                                     <li><a href="inmate1.html">Add Inmate</a></li>
                                     <li><a href="update.php">Update</a></li>
                                     <li><a href="delete.php">Delete</a></li>
                                     <li><a href="#">Search</a>
                                       <div id="apDiv2"><img src="img/Ghana.png" width="117" height="134"></div>
                                     </li>
                                 </ul>
                               </div>
                             </form>
                         </div>
                     </div>
                 </div>
           </div>
            <!-- END PAGE CONTENT-->

            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget box purple">
                        <div class="widget-title">
                            <h4>
                                <i class="icon-reorder"></i> Add New Administrator</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                        </span>
                        </div>
                        <div class="widget-body">
                            <form class="form-horizontal" name="finish" method="POST" action="handler/addAdmin.php">
                                <div id="tabsleft" class="tabbable tabs-left">
                                <ul>
                                    <li><a href="#tabsleft-tab1" data-toggle="tab"><span class="strong">Step 1</span> <span class="muted">Login Credentials</span></a></li>
                                    <li><a href="#tabsleft-tab2" data-toggle="tab"><span class="strong">Step 2</span> <span class="muted">Personal Information</span></a></li>
                                    <li><a href="#tabsleft-tab3" data-toggle="tab"><span class="strong">Step 3</span> <span class="muted">Payment Details</span></a></a></li>
                                    <li><a href="#tabsleft-tab4" data-toggle="tab"><span class="strong">Step 4</span> <span class="muted">Confirmation</span></a></a></li>
                                </ul>
                                <div class="progress progress-info progress-striped">
                                    <div class="bar"></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="tabsleft-tab1">
                                        <h3>Fill up step 1</h3>
                                        <div class="control-group">
                                            <label class="control-label">Username</label>
                                            <div class="controls">
                                                <input name="username" type="text" class="span6">
                                                <span class="help-inline">Give your username</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Password</label>
                                            <div class="controls">
                                                <input name="password" type="password" class="span6">
                                                <span class="help-inline">Give your Password</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabsleft-tab2">
                                        <h3>Fill up step 2</h3>
                                        <div class="control-group">
                                            <label class="control-label">First  Name</label>
                                            <div class="controls">
                                                <input name="firstname" type="text" class="span6">
                                                <span class="help-inline">Give your First Name</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Last Name</label>
                                            <div class="controls">
                                                <input name="lastname" type="text" class="span6">
                                                <span class="help-inline">Give your Last Name</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabsleft-tab3">
                                        <h3>Fill up step 3</h3>
                                        <div class="control-group">
                                            <label class="control-label">Badge Number</label>
                                            <div class="controls">
                                                <input name="badgeNumber" type="text" class="span6" />
                                                <span class="help-inline"></span>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label"></label>
                                            <div class="controls">
                                                <label class="checkbox line">
                                                    <input type="checkbox" value="" />
                                                </label>
                                                <label class="radio line">
                                                    <input type="radio" value="" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabsleft-tab4">
                                        <h3>Final step</h3>
                                        <div class="control-group">
                                            <label class="control-label">Fullname:</label>
                                            <div class="controls">
                                                <span class="text">Jhon Doe </span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Password:</label>
                                            <div class="controls">
                                                <span class="text">eeeeeeeeeee</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Badge Number:</label>
                                            <div class="controls">
                                                <span class="text">123456789</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label"></label>
                                            <div class="controls">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="" /> I confirm my steps
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard">
                                        <li class="previous first"><a href="javascript:;">First</a></li>
                                        <li class="previous"><a href="javascript:;">Previous</a></li>
                                        <li class="next last"><a href="javascript:;">Last</a></li>
                                        <li class="next"><a href="javascript:;">Next</a></li>
                                        <li class=""><button href="handler/addAdmin.php" class="btn btn-success" type="submit" name="finish">Finish</button></li>
                                    </ul>
                                    
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="widget yellow">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> C.M Editor</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                          </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Document</label>
                                    <div class="controls">
                                        <textarea class="span12 ckeditor" name="editor1" rows="6"></textarea>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
           </div>
                    
   <script src="js/jquery-1.8.2.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery.blockui.js"></script>

   <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
   <script src="js/jQuery.dualListBox-1.3.js" language="javascript" type="text/javascript"></script>


   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>



   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page-->
   <script src="js/form-component.js"></script>
  <!-- END JAVASCRIPTS -->

   <script language="javascript" type="text/javascript">

       $(function() {

           $.configureBoxes();

       });

   </script>

           <!-- END PAGE CONTENT-->


         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id="footer">
       2016 &copy; CheckMate Dashboard.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>

   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>
   <!--script for this page-->
   <script src="js/form-wizard.js"></script>


   <!-- END JAVASCRIPTS -->
   <script>
       $(function () {
           $(" input[type=radio], input[type=checkbox]").uniform();
       });



   </script>

</body>
<!-- END BODY -->
</html>