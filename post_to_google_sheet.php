<?php

error_reporting(E_ERROR | E_PARSE);
ini_set('max_execution_time', '0');
include "info.php";

$name=$_POST['name'];
$phone=$_POST['phone'];
$service=$_POST['service'];
$is_w_app=$_POST['is_w_app'];
$source=$_POST['source'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];

$branch1=$_POST['branch1'];
$branch2=$_POST['branch2'];
$location=$_POST['location'];

//echo  $branch1.$branch2;

if (!empty($branch1)) {

    $branch=$branch1;

    //echo "1 not empty ";
}
else{

    $branch=$branch2;
    //echo "1  empty ";
    
}
//$source="snap 1";

date_default_timezone_set("Asia/Riyadh");
$date = date('Y/m/d H:i:s');



$whatsapp_link="wa.me/966".$phone;
//echo $name.$phone.$is_w_app;




$postParameter = array(
    'date_and_time' => $date,
    'name' => $name,
    'phone' => $phone,
    'service' => $service,
    'whatsapp_link' => $whatsapp_link,
    'subject' => $subject,
    'msg' => $msg,
    'branch' => $branch,
    'location' => $location,
    'source' => $source
    
);



$curlHandle = curl_init($action_url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);


include "check_if_registerd.php";

$sheet_id = getGoogleSheetId($sheet_url);

echo $phone."<br>"; 
echo $sheet_id."<br>"; 
///echo check_if_registered($phone,$sheet_id)."wwe";



if(1==2 ){

//echo "found";

}
else{

    //echo "not found ";
}

 
 
if(1==2){





    echo '<script type="text/javascript">

    var msg="هذا الرقم مسجل مسبقا ";   
 
 
 
            
 alert(msg);
 
 //window.history.go(-1);
 
 
 //window.location.replace("index.php");
 
 </script>
 
 ';




















}
else{









    
$curlResponse = curl_exec($curlHandle);
curl_close($curlHandle);


//echo "w_api start";

if($api_notification==1){
        
    $w_app_msg1="  لديك تسجيل  جديد  باسم  ".$name;
    $w_app_msg2=$w_app_msg1." برقم جوال ".$phone;
    
    send_w_app_msg($phone_main,$w_app_msg2,"2000");

}















function send_w_app_msg_groups($phone,$msg,$token) {


    

    echo "w_api start 2";
    
    
    
    
     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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
        echo $curlResponse."res";
        curl_close($curlHandle);
    
    
        //print_r(curl_getinfo($curlHandle));
    
        if(curl_errno($curlHandle)){
            echo 'Curl error: ' . curl_error($curlHandle);
        }
        
      }


      

//echo $curlResponse."";









if($is_w_app=="1"){


    if($api_notification==1){

        $w_app_msg1="  لديك تسجيل  جديد  باسم  ".$name;
        $w_app_msg2=$w_app_msg1." برقم جوال ".$phone;
        
        send_w_app_msg($phone_main,$w_app_msg2,"2000");

    }
  

    header("Location:https://wa.me/".$phone_main);

}

else{



    echo '<script type="text/javascript">

   var msg=" تمت عملية التسجيل بنجاح وسيتم التواصل معك في اسرع وقت  ";   



           
alert(msg);

//window.history.go(-1);


window.location.replace("index.php");

</script>

';

}


}





















function send_w_app_msg($phone,$msg,$token) {


    

echo "w_api start 2";




 





















//echo $phone.$msg.$token;



/*
    $postParameter = array(
        
        
        'phn' => $phone,
        'token' => $token,
        'msg' => $msg
        
    );

    */


    $postParameter="phn=".$phone."&msg=".$msg."&token=".$token;
    
    $curlHandle = curl_init("http://alamerms.com/send-text");
    curl_setopt($curlHandle, CURLOPT_POST, true);
    curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($curlHandle, CURLOPT_PORT, 2000);
    curl_setopt($curlHandle, CURLOPT_CONNECTTIMEOUT, 0); 

    $curlResponse = curl_exec($curlHandle);
    echo $curlResponse."res";
    curl_close($curlHandle);


    //print_r(curl_getinfo($curlHandle));

    if(curl_errno($curlHandle)){
        echo 'Curl error: ' . curl_error($curlHandle);
    }
    
  }



?>