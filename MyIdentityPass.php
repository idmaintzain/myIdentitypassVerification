<?php
class MyIdentityPass  {

    function bvnNin($number,$url,$api_key){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 
                 http_build_query(array('number' => $number)));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "X-API-Key: $api_key",
            "Cache-Control: no-cache",
          ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        
        curl_close ($ch);
        return $server_output;
    }

    function printArray($array){
         echo '<pre>';
         print_r($array);
         echo '</pre>';
    }


}





?>