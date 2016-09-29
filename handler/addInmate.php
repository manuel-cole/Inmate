<?php
/**
 * Created by Emmanuel.
 */
$msg="";
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);

    if (isset($_POST["add"])) {

        $con=mysqli_connect("localhost","checkmate","checkmate","checkmate");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$clerks = "troops";

// escape variables for security
$about = mysqli_real_escape_string($con, $_POST['about']);
$inmate_id = mysqli_real_escape_string($con, $_POST['inmate_id']);
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$othername = mysqli_real_escape_string($con, $_POST['othername']);
$alias = mysqli_real_escape_string($con, $_POST['alias']);
$nationality = mysqli_real_escape_string($con, $_POST['nationality']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$age = mysqli_real_escape_string($con, $_POST['age']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$charges = mysqli_real_escape_string($con, $_POST['charges']);
$sentence = mysqli_real_escape_string($con, $_POST['sentence']);
$start_date = mysqli_real_escape_string($con, $_POST['start_date']);
$pic = mysqli_real_escape_string($con, $_POST['pic']);



$sql="INSERT INTO inmate(about, inmate_id, firstname, lastname, othername, alias, nationality, date_of_birth, age, gender, address, charges, sentence, start_date, pic)
VALUES ('$about', '$inmate_id','$firstname', '$lastname', '$othername', '$alias', '$nationality', '$dob', '$age', '$gender', '$address', '$charges', '$sentence', '$start_date', '$pic')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
<script type="text/javascript">
            alert("Inmate Added Successfully!!!");
            history.back();
        </script>
<?php
mysqli_close($con);

  }else{
  	echo "string";
  }
?>