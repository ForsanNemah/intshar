<?php
$url = 'https://opensheet.elk.sh/15ubpqR4FwRw27laCgA71Ob6Xp1SkHgMdULFDnKpRbqo/Sheet2';

$response = file_get_contents($url);
$keywords_content="";
$description="";
$counter=1;
if ($response !== false) {
    // Parse the response as JSON
    $data = json_decode($response, true);

    if ($data !== null) {
        // Loop through the rows and display key-value pairs
        foreach ($data as $row) {

            $keyword = $row['keyword'];

           if($counter==1){
            $description = $row['meta-description'];

           }
           $counter++;
           
            
            $keywords_content=$keywords_content.$keyword.",";
            //echo "keyword:". $keyword;
          
            //echo "<br>";
        }


        $keywords_content = substr_replace($keywords_content, '', -1);

        //echo   "<h dir='rtl'>$keywords_content</h>" ;
        //echo   "<h dir='rtl'>$description</h>" ;


echo '



<meta name="description" content="'.$description.'">
<meta name="keywords" content="'. $keywords_content.'" />





';

    } else {
        // Handle JSON parsing error
        echo 'Failed to parse the JSON response.';
    }
} else {
    // Handle error
    echo 'Failed to retrieve the response.';
}
?>