<?php
include 'includes/database.inc.php';

$id=$_GET['vehicleId'];

$sql = "DELETE FROM T_Whislist where Vehicle_ID='$id'";
mysqli_query($conn,$sql);

$sql1 = "UPDATE T_Vehicle_Details SET vehD_availability='Yes' WHERE vehd_Vid='$id'";
mysqli_query($conn,$sql1);
$sql2 = "UPDATE T_VehicleType SET vehT_availability=1 WHERE vehT_id='$id'";
mysqli_query($conn,$sql2);
header("Location:whistlist_page.php");
?>