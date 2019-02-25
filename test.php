<?php
$curl = curl_init();
$link = "http://akshaymore.net/udriveEmail.php?mailTo=".str_replace('@','%40','kulkarni.rohan619@gmail.com')."&name=Rohan&issueType=123&details=Hi&token=1234";
echo $link;   
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
    echo ($err);
    curl_close($curl);
?>