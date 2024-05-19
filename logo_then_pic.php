



<?php
//$rootDir = $_SERVER['DOCUMENT_ROOT'];
//echo "Root Directory: " . $rootDir;


?>



  <div class="row">

  <div class="d-flex justify-content-center mt-4 mr-4">







<?php
$folder = 'footer_logo'; // Replace with the actual folder path

// Get the list of files in the folder
$files = scandir($folder);

// Iterate over each file in the folder
foreach ($files as $file) {
    if ($file === '.' || $file === '..') {
        continue; // Skip current and parent directory entries
    }

    $filePath = $folder . '/' . $file;

    // Check if the file is an image
    if (is_file($filePath) && getimagesize($filePath) !== false) {
        // Display the image path
        //echo "Image: $filePath<br>";



        


       echo ' <img src="'.$filePath.'" alt="Logo"  class="img-fluid" height="300" width="300" >

       ' ;
    }
}
?>









  </div>


    <div class=" row mt-4  ">

    <?php

echo ' <img src="https://ksa-ads.com/meswak_files/tandt.png" alt="Image" width="200">';

?>
   
    </div>
    
  </div>

<?php
$form1_des2="

واحصل علي خصومات تصل الي 50%
";

?>

  <script>


//alert("wwe");

var elements = document.getElementsByClassName('image-container');

// Loop through the elements and hide them
for (var i = 0; i < elements.length; i++) {
  elements[i].style.display = 'none';
}


//alert("wwe2");


  </script>



<style>


.form-container {
    background-size: cover;
    margin-top: 0;
}






.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y)* -1);
    margin-right: calc(var(--bs-gutter-x) / 2);
    margin-left: calc(var(--bs-gutter-x) / 2);
}


 
</style>