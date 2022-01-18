**To install**

composer require idmaintzain/myidentitypass


This libray will enable you to verify your BVN/NIN/CAC/TIN/PHONE Number with MyIdentityPass API (Nigeria)
You can check myidentity pass official website for more documentation on the api at https://developer.myidentitypass.com/data-verification-1/nigeria

Set your constant as below
1. define("URL", "https://api.myidentitypay.com/api/v1/biometrics/merchant/data/verification/nin_wo_face"); //(This endpoint can be gotten from Myidentity pass documentation website, and there are different endpoints for different features, eg. the sample endpoint is NIN
define("API_CODE", "exxxxxxxx.xxxxxxxxxxxxxxxxx"); //the API code is x-api-key api key, simple copy it from your dashboard and set it on header on the header

the two parameters can be passed to dataVerification method available in MyIdentityPass Class as below

                function dataVerification($number,$url,$api_key){
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
    
  I only use arrayPrinter method to see my response in json
