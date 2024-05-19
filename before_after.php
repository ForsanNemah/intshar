
<div class="container mt-4" id="cases_section">
  <div class="row justify-content-center">
    <div class="col-lg-8 text-center">
      <h1 style="color: green;">
    
    
حالات قبل وبعد
    
    
    
    </h1>
      <div class="accordion" id="faqAccordion">
        <!-- Accordion items go here -->
      </div>
    </div>
  </div>
</div>


















<?php
$folderPath = 'before_after/1'; // Replace with the actual folder path

// Open the folder
$folder = opendir($folderPath);

if ($folder) {
   
    
    // Read each file in the folder
    while (($file = readdir($folder)) !== false) {
        // Check if the file is an image (you can add more image extensions if needed)
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif','webp'];
        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
        
        if (in_array(strtolower($fileExtension), $imageExtensions)) {
            //echo $file . "<br>";





echo '





<div class="container d-flex justify-content-center mt-4">


  <div class="row">
    <div class="col-sm-6">
      <img  data-myvariable="before_after/1/'.$file.'" src="before_after/1/'.$file.'" alt="Image 1" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal1">
    </div>
    <div class="col-sm-6">
    <img data-myvariable="before_after/2/'.$file.'"  src="before_after/2/'.$file.'" alt="Image 1" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal1">
    </div>
  </div>
</div>


















';













            
        }
    }
    
    // Close the folder
    closedir($folder);
} else {
    echo "Unable to open the folder.";
}
?>

 





















<!-- Modal 1 -->
<div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="model_image" src="https://picsum.photos/id/237/1200/900" alt="Image 1" class="img-fluid">
      </div>
    </div>
  </div>
</div>
 
 









  <style>
    @media (max-width: 576px) {
      .cases_row {
        display: flex;
        flex-wrap: nowrap;
      }
      .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }








    .modal-dialog-centered .modal-content .modal-body {
    display: flex;
    justify-content: center;
    align-items: center;
  }



  </style>
</div>



<script>

 //alert("wwe");
$(document).ready(function() {
  $('#imageModal1').on('show.bs.modal', function(event) {

   
    //alert("opend");

    
    var button = $(event.relatedTarget); // Button that triggered the modal
    var myVariable = button.data('myvariable'); // Extract the value from the data-* attribute

    // Update the content of the modal body with the variable value
    //$('#modalContent').text(myVariable);

    $('#model_image').attr('src', myVariable);

    
  });
});

</script>