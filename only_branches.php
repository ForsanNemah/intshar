<div class="mb-3"  >


<select name="branch1"  id="branch_only_id"  class="form-select" onchange="onselect_for_branches()">


<?php
$filename = 'branches.txt'; // Specify the path to your text file

// Check if the file exists
if (file_exists($filename)) {
// Read the file into an array, with each line as an element
$lines = file($filename, FILE_IGNORE_NEW_LINES);

// Output the HTML select tag


// Iterate over the lines and create an option for each line
foreach ($lines as $line) {
echo '<option>' . htmlspecialchars($line) . '</option>';
}

// Close the HTML select tag

} else {
echo 'File not found.';
}
?>

</select>

</div>


<script>

    $("#mainSelect").hide();
    $("#subSelect").hide();

    $('#mainSelect').prop('required', false);
    $('#subSelect').prop('required', false);


    function onselect_for_branches() {
      var selectElement = document.getElementById("branch_only_id");
      var selectedValue = selectElement.value;
      //alert(selectedValue);

      console.log("Selected value: " + selectedValue);
      // Perform additional actions based on the selected value



      if(selectedValue=="اخرى"){

        //alert("ok");
        $("#branch_only_id").hide();
        $('#branch_only_id').val('');
        $("#mainSelect").show();
        $("#subSelect").show();

        $('#mainSelect').prop('required', true);
        $('#subSelect').prop('required', true);


        var element = document.getElementById("myform");
  if (element) {
    element.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }




  var myModal = new bootstrap.Modal(document.getElementById('locations_model'));
      myModal.show();
    
      

   
     

  var mainSelect = document.getElementById("mainSelect");   
  if (mainSelect) {

    //alert("found");


    //mainSelect.size =5;

    //mainSelect.selectedIndex = 2;


    /*
    setTimeout(function() {
  console.log("After 2 seconds");
 
/*
  var myModal = new bootstrap.Modal(document.getElementById('locations_model'));
      myModal.show();

      }, 500);
*/

 

  
// Open the dropdown list using Select2
 
    //mainSelect.focus();
    //alert("2");







    

}










      }
      else{

        //alert("not");

      }
    }






/*

    function isMobileView() {
  // Check if the viewport width is less than a certain threshold (e.g., 600 pixels)
  return window.innerWidth < 600;
}

// Usage
if (isMobileView()) {
  alert("mv");
} else {
  alert("dz");
}*/

  </script>

  <style>



  </style>