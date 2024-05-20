 
  <style>
    
  
    
  </style>
</head>
<body>
  <footer class="footer mt-4">
    <div class="container">
      <div class="row">


        <div class="col-8">

        <div class="row">
        <div class="col-8 d-flex justify-content-center">
        <p class="text-center fs-3">   
            
    
    <?php
echo $footer_des1;
    ?>
    
    
    </p>
         
        
      </div>
        </div>



        <div class="row">
        <div class="col-8 d-flex justify-content-center">
        <p class="text-center"> 


        <?php
echo $footer_des2;
    ?>
        </p>
         
        
      </div>
        </div>




        
        <div class="row">
        <div class="col-8 d-flex justify-content-center">
        <p class="text-center ">

        <?php
echo $footer_des3;
    ?>


        </p>
         
        
      </div>
        </div>






        
        <div class="row">
        <div class="col-8 d-flex justify-content-center">
        <p class="text-center"
        
        
        <?php
echo $footer_des4;
    ?>
        
      </p>


       
      
        
      </div>
        </div>



        <div class="row">
        <div class="col-8 d-flex justify-content-center">


        <a href="#myform">


        <button type="button" class="btn btn-primary rounded-pill pulsate"> احجز الحين</button>

        </a>
     
      














        
        
      </div>













     











        </div>











       
        <div class="row">
        <div class="col-8 d-flex justify-content-center">
        

        <hr style="height: 3px; background-color: white; width: 450px;">
        
      </div>
        </div>
        
       
 
       
          















        </div>





        















        <div class="col-4"  >



        <?php
$folderPath = 'footer_logo/'; // Replace 'path/to/folder' with the actual path to your folder

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
    
    
    
   
    
    <img src="footer_logo/'.$image.'" class="img-fluid"    >
    
    
    
    
    ';




}
?>








        
        </div>
      </div>
    </div>







   



  <div class="row  mt-4"  style="background-color: white;">


  <div class="container">
    <div class="row">
      <div class="col">
        <a href="#"><i class="fab fa-facebook"></i></a>
      </div>
      <div class="col">
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
      <div class="col">
        <a href="#"><i class="fas fa-times"></i></a>
      </div>
      <div class="col">
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
      <div class="col">
        <a href="#"><i class="fab fa-snapchat"></i></a>
      </div>
      <div class="col">
        <a href="#"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>
  </div>












</div>
  </footer>

  