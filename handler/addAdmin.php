<?php
/**
 * Created by Emmanuel.
 */
$msg="";
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);

    if (isset($_POST["finish"])) {

        $con=mysqli_connect("localhost","checkmate","checkmate","checkmate");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$clerks = "troops";

// escape variables for security
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$othernames = mysqli_real_escape_string($con, $_POST['othernames']);
$badgeNumber = mysqli_real_escape_string($con, $_POST['badgeNumber']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = md5('password');


$sql="INSERT INTO users(firstname, lastname, othernames, username, password, badge)
VALUES ('$firstname', '$lastname', '$othernames', '$username', '$password', '$badgeNumber')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
<script type="text/javascript">
            alert("Administrator Added Successfully!!!");
            history.back();
        </script>
<?php
mysqli_close($con);

  }
?>