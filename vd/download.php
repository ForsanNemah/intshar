<?php
// set_time_limit(0);
// require './YoutubeDownloader.php';

// if (!isset($_GET['id'])) {
//     header('Bad request', true, 400);
//     echo "id param is required";
//     die();
// }
// $id = $_GET['id'];

// $yd = new YoutubeDownloader('https://www.youtube.com/watch?v=' . $id);

// if (!isset($_GET['itag'])) {
//     $info = $yd->getFullInfo();
//     $itag = $info['url_encoded_fmt_stream_map'][0]['itag'];
// } else {
//     $itag = $_GET['itag'];
// }

// $yd->downloadForItag($itag);

// <?php
if (isset($_GET['file']) && isset($_GET['name'])) {
    $fileUrl = urldecode($_GET['file']);
    $fileName = $_GET['name'];

    // Check if the URL is valid
    if (filter_var($fileUrl, FILTER_VALIDATE_URL)) {
        // Initialize a cURL session
        $ch = curl_init($fileUrl);

        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        // Execute cURL request
        $data = curl_exec($ch);

        // Check if any error occurred
        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        } else {
            // Get the content type and size
            $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
            $contentLength = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

            // Set headers to force download
            header('Content-Description: File Transfer');
            header('Content-Type: ' . $contentType);
            header('Content-Disposition: attachment; filename="' . basename($fileName) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . $contentLength);

            // Output the file content
            echo $data;
        }

        // Close the cURL session
        curl_close($ch);
    } else {
        echo "Invalid file URL.";
    }
} else {
    echo "No file specified.";
}
?>


