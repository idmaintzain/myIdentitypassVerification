<?php
include('MyIdentityPass.php');
$ver = new MyIdentityPass;
define("URL", "https://api.myidentitypay.com/api/v1/biometrics/merchant/data/verification/nin_wo_face"); // myidentitypass api endpoint
define("API_CODE", "exxxxxxxx.xxxxxxxxxxxxxxxxx"); // X-API-Key secret key
$number = 'xxxxxxxxx'; //variable $number is verification number eg, NIN, BVN
$response = $ver->dataVerification( $number, URL, API_CODE);
$ver->printArray($response);



?>