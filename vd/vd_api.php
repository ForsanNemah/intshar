<?php

$video_url=$_GET['video_url'];
echo gett($video_url);

  function gett($url){
    
    // global $rapid_key;
    
    $rapid_key="546edb2ceemshef99297e7df4ed5p171d53jsn0315d35e2010";
    $curl = curl_init();
    
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://social-download-all-in-one.p.rapidapi.com/v1/social/autolink",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
            'url' => $url
        ]),
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "x-rapidapi-host: social-download-all-in-one.p.rapidapi.com",
            "x-rapidapi-key:".$rapid_key
        ],
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        //echo $response;
    
       // $response = json_decode($response, true);
    //$url = $response['url'];
    // $mediaUrl = $response['medias'][0]['url'];
    
    return  $response;
    ///echo "-<br>";
    //echo  $url;
    }
    }


    


?>