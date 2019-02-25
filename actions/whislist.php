<?php
include '../includes/database.inc.php';

$id=$_GET['vehicleId'];
$sql2 = "select T_Vehicle_Details.*,T_VehicleType.* FROM T_Vehicle_Details INNER JOIN T_VehicleType ON T_VehicleType.vehT_id = T_Vehicle_Details.vehd_Vid WHERE T_VehicleType.vehT_id = '$id'";
$result2 = mysqli_query($conn,$sql2);
$queryresults2 = mysqli_num_rows($result2);
if($queryresults2>0){
    while($row = mysqli_fetch_assoc($result2)){
        $custid = "kulkarni.rohan619@gmail.com";
        $carname = $row['vehT_name'];
        $ImageTitle = $row['image_title'];
    }

}
$vehicleID = mysqli_real_escape_string($conn,$id);
$customerID = mysqli_real_escape_string($conn,$custid);
$carName = mysqli_real_escape_string($conn,$carname);
$image = mysqli_real_escape_string($conn,$ImageTitle);

$sql = "INSERT into T_Whislist(Vehicle_ID,Cust_id,Vehicle_Name,Image_Title)"
    ."VALUES('$vehicleID','$customerID','$carName','$image')";
    mysqli_query($conn,$sql);
echo "Values Inserted";

$sql1 = "UPDATE T_Vehicle_Details SET vehD_availability='No' WHERE vehd_Vid='$id'";
mysqli_query($conn,$sql1);
$sql2 = "UPDATE T_VehicleType SET vehT_availability=0 WHERE vehT_id='$id'";
mysqli_query($conn,$sql2);
alertFunction();
header("Location:../Search.php");

function alertFunction(){
    echo "<script type='text/javascript'>";
    echo "alert('Item has been added')";
    echo "</script>";
}
?>