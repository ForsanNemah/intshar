 



 <div class="text-center  mt-4 mb-4">

<h1>

شركاء النجاح

</h1>

</div


 
  <section id="parteners">
    <div class="container">



      <div class="row">








      <?php
$folderPath = 'parteners/'; // Replace 'path/to/folder' with the actual path to your folder

$files = scandir($folderPath); // Get all files and directories from the folder

$imageFiles = array();

foreach ($files as $file) {
    $filePath = $folderPath . '/' . $file;
    
    // Check if the file is a regular file and ends with a known image extension
    if (is_file($filePath) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
        $imageFiles[] = $file;
    }
}

// Output the image file names
foreach ($imageFiles as $image) {
    ///echo $image . "<br>";


    echo '
    
    
    
    
    <div class="col-md-2 col-sm-6">
    <div class="service">
      <img src="parteners/'. $image.'" alt="Service 3" class="img-fluid ">
      <h3> </h3>
      <p> </p>
    </div>
  </div>
    
    
    
    
    
    
    
    
    ';




}
?>






























 











      </div>



     


    </div>
  </section>


  <style>

.custom-img {
  object-fit: cover;
  width: 100%;
  height: 100%; /* Set the desired height */
}

</style>