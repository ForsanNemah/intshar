<?php



include "info.php";


function getGoogleSheetId($url) {
    // Extract the ID from the URL using regular expressions
    $pattern = '/\/spreadsheets\/d\/([a-zA-Z0-9-_]+)/';
    preg_match($pattern, $url, $matches);

    if (isset($matches[1])) {
        return $matches[1]; // Return the ID
    } else {
        return null; // Return null if the ID is not found
    }
}




//$sheetId = getGoogleSheetId($sheet_url);

//echo $sheetId; // Output: 19xxfRY16c6nCs5OAn6VIlB5p0rbSfMn_vsXAWCVS7ik


/*
$phoneNumberToCheck = '0534854921';
if (check_if_registered($phoneNumberToCheck)) {
    echo "Phone number is registered.";
} else {
    echo "Phone number is not registered.";
}

 */





function check_if_registered($phoneNumber,$sheet_id) {
    // Remove spaces from the phone number
    $phoneNumber = str_replace(' ', '', $phoneNumber);

    // URL of the response containing the phone numbers
    $url = 'https://opensheet.elk.sh/'.$sheet_id.'/Sheet1';

    echo  $url; 
    // Fetch the JSON response from the URL
    $response = file_get_contents($url);

    // Decode the JSON response into an associative array
    $data = json_decode($response, true);

    // Check if the phone number is present in the response
    foreach ($data as $row) {
        if (isset($row['phone'])) {
            // Remove spaces from the phone number in the response
            $responsePhoneNumber = str_replace(' ', '', $row['phone']);

            if ($responsePhoneNumber === $phoneNumber) {
                return true; // Phone number found
            }
        }
    }

    return false; // Phone number not found
}

// Usage example

 








?>