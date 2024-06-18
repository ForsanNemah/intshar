<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

$url = 'https://opensheet.elk.sh/1X4GKsYorjkbIr6tV7fE8vr64vD4faY5NbM9Xtck3EX0/Sheet2';

$keywords_content = "";
$description = "";
$counter = 1;

try {
    $response = file_get_contents($url);

    if ($response !== false) {
        // Parse the response as JSON
        $data = json_decode($response, true);

        if ($data !== null) {
            // Loop through the rows and display key-value pairs
            foreach ($data as $row) {
                $keyword = $row['keyword'];

                if ($counter == 1) {
                    $description = $row['meta-description'];
                }

                $keywords_content .= $keyword . ",";
                $counter++;
            }

            $keywords_content = rtrim($keywords_content, ',');

            echo '
<meta name="description" content="' . $description . '">
<meta name="keywords" content="' . $keywords_content . '" />
';
        } else {
            // Handle JSON parsing error
            throw new Exception('Failed to parse the JSON response.');
        }
    } else {
        // Handle error
        throw new Exception('Failed to retrieve the response.');
    }
} catch (Exception $e) {
    // Handle exceptions
    //echo 'Error: ' . $e->getMessage();
}