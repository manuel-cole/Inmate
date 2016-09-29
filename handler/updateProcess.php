<?php
ob_start();
session_start();
//if update button is clicked
if(isset($_POST['update'])){

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
      $sql = " UPDATE inmate 
SET firstname = '$Nfirstname',
    lastname = '$Nlastname', 
    nationality = '$Nnationality',
    date_of_birth = '$Ndate_of_birth',
    age = '$Nage',
    gender = '$Ngender',
    address = '$Naddress',
    charges = '$Ncharges',
    sentence = '$Nsentence',
    about = '$Nabout'
    WHERE id = '$id' ";



      if (!mysqli_query($con,$sql)) {

        die('Error: ' . mysqli_error($con));
      }
?>
<script type="text/javascript">
            alert("Item Updated Successfully!!!");
            history.back();
        </script>
<?php   }
  }
}
}
?>