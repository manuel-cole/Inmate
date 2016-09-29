<?php
ob_start();
session_start();

//$region_name = $_POST['region_name']; 
$con=mysqli_connect("localhost","checkmate","checkmate","checkmate");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM inmate";

$records=mysqli_query($con,$sql);

//if update button is clicked
if(isset($_POST['delete'])){

$con=mysqli_connect("localhost","checkmate","checkmate","checkmate");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//$disapproved_reservation = "disapproved_reservation";
$item = "item";

  $Nfirstname = $_POST['Nfirstname'];
  $Nlastname = $_POST['Nlastname'];
  $Nnationality = $_POST['Nnationality'] ;
  $Ndate_of_birth = $_POST['Ndate_of_birth'] ;
  $Nage = $_POST['Nage'] ; 
  $Ngender = $_POST['Ngender']; 
  $Naddress = $_POST['Naddress']; 
  $Ncharges = $_POST['Ncharges'];
  $Nsentence = $_POST['Nsentence']; 
  $Nabout = $_POST['Nabout'];  


$result=mysqli_query($con, "SELECT * from inmate");
$count=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)) {
    
  $id=$row['id'];

  if (array_key_exists($id, $_POST["check"])) {
    $ischecked=$_POST["check"][$id];
    /* See if this has a value of 1.  If it does, it means it has been checked */
    if ($ischecked==1) {
    $sql = "DELETE FROM inmate 
          WHERE id = $id";


      if (!mysqli_query($con,$sql)) {

        die('Error: ' . mysqli_error($con));
      }
?>
<script type="text/javascript">
            alert("Item Deleted Successfully!!!");
            history.back();
        </script>
<?php   }
  }
}
}

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Inmate Profile</title>
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

   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />

   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
   <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />

   <link href="assets/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>
   <style type="text/css">
   #apDiv1 {
	position: absolute;
	width: 78px;
	height: 72px;
	z-index: 1;
	left: 866px;
	top: 215px;
}
   #apDiv2 {
	position: absolute;
	width: 131px;
	height: 140px;
	z-index: 1;
	left: -669px;
	top: 379px;
}
   #apDiv3 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 1041px;
	top: 690px;
}
fieldset.scheduler-border {
    border: 3px outset #59c3d8 !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
            
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: center !important;
        width:auto;
        padding: 10px 10px 10px 10px;
        border-bottom:none;
        padding-left: 10px;
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
               <a class="brand" href="dashboard2.html">
                   <img src="img/logo.png" alt="Metro Lab" width="412" height="78" />
               </a><!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->
                   <ul class="nav top-menu">
                       <!-- BEGIN SETTINGS -->
                       <img src="img/Ghana.png" width="24" height="28">
                       <!-- END SETTINGS -->
                       <!-- BEGIN INBOX DROPDOWN -->
                       <!-- END INBOX DROPDOWN -->
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <!-- END NOTIFICATION DROPDOWN -->

                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
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
                      <a href="dashboard1.php">
                          <i class="icon-th"></i>
                          <span>Home</span>
                        
                </li>
                  <li class="sub-menu active">
                      <a href="inmate.html" class="">
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
                          <i class="icon-fire"></i>
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
                     Edit Profile
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="Home.html">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="edit_profile.html">Dashboard</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Update
                       </li>
                       <li class="pull-right search-wrap">
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
             <div class="row-fluid">
                 <!-- BEGIN PROFILE PORTLET-->
                 <div class=" profile span12">
                     <div class="span2">
                        
                        
                     </div>
                     <div class="span11">
                         <div class="profile-head">
                             <div class="span4">
                                 <h1>INMATE PROFILE</h1>
                                 <p>&nbsp;</p>
                             </div>

                             <div class="span4">
                                 <ul class="social-link-pf"></li>
                                     <li><a href="#">
                                     <i class="icon-linkedin"></i></a></li>
                                 </ul>
                             </div>

                             <div class="span4">
                                 <a href="#" class="btn btn-edit btn-large pull-right mtop20"> Save Profile </a>
                                 <div id="apDiv3"><img src="img/Coat_of_arms_of_Ghana.svg.png" width="100" height="100"></div>
                             </div>
                         </div>
                         <div class="space15"></div>
                         <div class="row-fluid">
                             <div class="span12 bio form">
                                 <h2> Profile Info</h2>
                                 <form class="form-horizontal" method="POST" name="add" action="delete.php">
                                   <fieldset class="scheduler-border">
                                      <table class="table table-bordered table-hover table-bordered datatable">
                                      <thead style="background: #00BFFF; color: White;">
   
                                      <tr>
                                      <th style="width: 50px;"></th>
                                      <th style="color: #3b3b3b;">Firstname</th> 
                                      <th style="color: #3b3b3b;">Lastname</th>
                                      <th style="color: #3b3b3b;">Nationality</th>
                                      <th style="color: #3b3b3b;">Date Of Birth</th> 
                                      <th style="color: #3b3b3b;">Age</th>
                                      <th style="color: #3b3b3b;">Gender</th>
                                      <th style="color: #3b3b3b;">Address</th>
                                      <th style="color: #3b3b3b;">Charges</th>
                                      <th style="color: #3b3b3b;">Sentence</th>
                                      <th style="color: #3b3b3b;">About</th>

   
                                          </tr>
                                              </thead>
                                          
                                      <tbody>       
                                          <?php

                                          $result = mysqli_query($con,"SELECT * FROM inmate ");
                                          $count = mysqli_num_rows($result);

                                      ?>
                                          <legend class="scheduler-border">
                                          <?php
                                              echo "<h3><center>Available Inmates</center></h3>";
                                          ?></legend>
                                          <?php
                                      while($row=mysqli_fetch_array($result)){
                                          $id = $row['id'];
                                        
                                        ?>
                                        
                                          <tr>
                                        
                    <td><center><input type="checkbox" name="check[<?php echo $row['id']; ?>]" value="1" ></div></center></td>
                    <td><input style="width: 70px" type="" name="Nfirstname" value="<?php echo $row['firstname'];?>" /></td>
                    <td><input style="width: 60px" type="text" class="form-control" name="Nlastname" placeholder="<?php echo $row['lastname'];?>" value="<?php echo $row['lastname']?>" /></td>
                    <td><input style="width: 60px" type="text" class="form-control" name="Nnationality" placeholder="<?php echo $row['nationality'];?>" value="<?php echo $row['nationality']?>" /></td>
                    <td><input style="width: 80px" type="text" class="form-control" name="Ndate_of_birth" placeholder="<?php echo $row['date_of_birth'];?>" value="<?php echo $row['date_of_birth']?>" /></td>
                    <td><input style="width: 15px" type="text" class="form-control" name="Nage" placeholder="<?php echo $row['age'];?>" value="<?php echo $row['age']?>" /></td>
                    <td><input style="width: 35px" type="text" class="form-control" name="Ngender" placeholder="<?php echo $row['gender'];?>" value="<?php echo $row['gender']?>" /></td>
                    <td><input style="width: 60px" type="text" class="form-control" name="Naddress" placeholder="<?php echo $row['address'];?>" value="<?php echo $row['address']?>" /></td>
                    <td><input style="width: 60px" type="text" class="form-control" name="Ncharges" placeholder="<?php echo $row['charges'];?>" value="<?php echo $row['charges']?>" /></td>
                    <td><input style="width: 60px" type="text" class="form-control" name="Nsentence" placeholder="<?php echo $row['sentence'];?>" value="<?php echo $row['sentence']?>" /></td>
                    <td><input style="width: 60px" type="text" class="form-control" name="Nabout" placeholder="<?php echo $row['about'];?>" value="<?php echo $row['about']?>" /></td>
                                                 
                                          </tr>
                                          
                                          <?php } //end of while loop ?>
                                              
                                          </tbody>
                                      </table> 

                                        <button class="btn btn-danger" href="delete.php" name="delete" type="submit"><center>Delete</center></button>
                                          </fieldset> 

                                  <div class="text-center">
                                   <!--   <button type="submit" name="update" href="update.php" class="btn btn-inverse btn-large "> Update & Continue</button> -->
                                 </div>
                                 </form>
                                         <!-- END FORM-->
                                 <div class="space20"></div>
                                 <div class="space20"></div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- END PROFILE PORTLET-->
             </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2016 &copy; CheckMate.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery.blockui.js"></script>

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
   <script src="assets/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
   <script src="js/jquery.scrollTo.min.js"></script>

   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <script src="js/form-component.js"></script>
   <script src="js/sliders.js" type="text/javascript"></script>

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>