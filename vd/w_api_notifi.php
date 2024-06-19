
<?php




function send_w_app_msg_groups($phone,$msg,$token) {


    

  //echo "w_api start 2";
  
   
  
  
  
  //echo $phone.$msg.$token;
  
  
  
  /*
      $postParameter = array(
          
          
          'phn' => $phone,
          'token' => $token,
          'msg' => $msg
          
      );
  
      */
  
  
      $postParameter="phn=".$phone."&msg=".$msg."&token=".$token;
      
      $curlHandle = curl_init("http://alamerms.com/send-text-group");
      curl_setopt($curlHandle, CURLOPT_POST, true);
      curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
      curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
      curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER,false);
      curl_setopt($curlHandle, CURLOPT_PORT, 2000);
      curl_setopt($curlHandle, CURLOPT_CONNECTTIMEOUT, 0); 
  
      $curlResponse = curl_exec($curlHandle);
      //echo $curlResponse."res";
      curl_close($curlHandle);
  
  
      //print_r(curl_getinfo($curlHandle));
  
      if(curl_errno($curlHandle)){
          //echo 'Curl error: ' . curl_error($curlHandle);
      }
      
    }





 
if (isset($_GET['source'])) {

  $msg=" زائر  جديد لاداة تحميل الفيديوهات من ".$_GET['source'];
  send_w_app_msg_groups("120363312261460253",$msg,"2000");
  
} else {

  send_w_app_msg_groups("120363312261460253","زائر  جديد لاداة تحميل الفيديوهات","2000");
  
}


?>