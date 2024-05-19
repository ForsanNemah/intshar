 
<body >
  <div class="container" hidden>
    <h1>Modal Popup Example</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#locations_model_model">
      Open Modal
    </button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="locations_model" tabindex="-1" aria-labelledby="locations_model_model" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel"> اختر موقعك</h5>
          <button hidden type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-group">



          <?php
$filename = 'locations.txt';
$file = fopen($filename, 'r');

// Read the file line by line
while (($line = fgets($file)) !== false) {
    // Check if it's the last line
    if (!feof($file)) {
        // Process the line
       // echo $line;

       echo '


<li class="list-group-item rtl-item" onclick="alertItemName(this)">'.$line.'</li>




';
    }
}

fclose($file);
?>



         
  




          </ul>
        </div>
        <div class="modal-footer">
          <button  id="close_model" type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
        </div>
      </div>
    </div>
  </div>
 
  <script>








    function alertItemName(item) {

      closeModal();
      var itemName = item.innerHTML;

      var itemIndex = Array.from(item.parentNode.children).indexOf(item);


      //alert(itemName+itemIndex);


      
      document.getElementById("mainSelect").selectedIndex = itemIndex+1;
      
      document.getElementById('mainSelect').dispatchEvent(new Event('change'));



    


      //mainSelect_from_model.value = itemName;

/*
      var myModal_from_model = new bootstrap.Modal(document.getElementById('myModal'));
      myModal_from_model.close();

*/
      
    }




    function closeModal() {

      //alert("wwe");

      var close_model = document.getElementById('close_model');

// Simulate a click event on the button
close_model.click();

var myform_from_model = document.getElementById("myform");
  if (myform_from_model) {
    myform_from_model.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }


  


    }
  </script>
</body>
</html>