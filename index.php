<?php
include('MyIdentityPass.php');
$ver = new MyIdentityPass;
define("URL", "https://api.myidentitypay.com/api/v1/biometrics/merchant/data/verification/nin_wo_face");

define("API_CODE", "exxxxxxxx.xxxxxxxxxxxxxxxxx");
$number = 'xxxxxxxxx'; //variable $number is verification number eg, NIN, BVN
$response = $ver->bvnNin($number,URL,API_CODE);
$ver->printArray($response);



?>