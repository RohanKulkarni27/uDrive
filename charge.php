<?php
  require_once('./config.php');
  include 'includes/database.inc.php';

  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];

  $customer = \Stripe\Customer::create([
      'email' => $email,
      'source'  => $token,
  ]);

  $charge = \Stripe\Charge::create([
      'customer' => $customer->id,
      'amount'   => 14400,
      'currency' => 'usd',
  ]);

  echo '<h1>Successfully charged $144.00!</h1>';
  $id = mysqli_real_escape_string($conn,$_POST['cardID']);
  $sql2 = "select T_Vehicle_Details.*,T_VehicleType.* FROM T_Vehicle_Details INNER JOIN T_VehicleType ON T_VehicleType.vehT_id = T_Vehicle_Details.vehd_Vid WHERE T_VehicleType.vehT_id = '$id'";
                $result2 = mysqli_query($conn,$sql2);
                $queryresults2 = mysqli_num_rows($result2);
                if($queryresults2>0){
                    while($row = mysqli_fetch_assoc($result2)){
                        $name = $row['vehT_name'];
                        $reg_no = $row['vehD_regNo'];
                        $deposit = $row['vehT_deposit'];
                        $costperhr = $row['vehT_costPerHr'];
                        $username="Mr.Rohan Kulkarni";
                        $mobileno = "2147483647";
                        $pickupLocation="Journal Square";
                        $amountPaid="$144.00";
                    }
                }
             $name = mysqli_real_escape_string($conn,$name);
             $reg_no = mysqli_real_escape_string($conn,$reg_no);
             $deposit = mysqli_real_escape_string($conn,$deposit);
             $costperhr = mysqli_real_escape_string($conn,$costperhr);
             $username = mysqli_real_escape_string($conn,$username);
             $mobileno = mysqli_real_escape_string($conn,$mobileno);
             $pickupLocation = mysqli_real_escape_string($conn,$pickupLocation);
             $amountPaid = mysqli_real_escape_string($conn,$amountPaid);
             $sql = "INSERT INTO T_booking(Veh_id,Veh_name,reg_no,deposit,costperhr,username,mobileno,pickupLocation,amountPaid)"
    . "VALUES('$id','$name','$reg_no','$deposit','$costperhr','$username',' $mobileno','$pickupLocation','$amountPaid')";
     mysqli_query($conn,$sql);

     $curl = curl_init();
						$link = "http://akshaymore.net/UdrivePayment.php?mailTo=kulkarni.rohan619@gmail.com";
 							curl_setopt_array($curl, array(
							CURLOPT_URL => str_replace(' ', '%20', $link),
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_ENCODING => "",
							CURLOPT_MAXREDIRS => 10,
							CURLOPT_TIMEOUT => 30,
							CURLOPT_FOLLOWLOCATION => 1,
							CURLOPT_SSL_VERIFYHOST => false,
							CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							CURLOPT_CUSTOMREQUEST => "GET",
							));
							$response = curl_exec($curl);
							$err = curl_error($curl);
							curl_close($curl);
?>