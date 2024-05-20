<div class="form-container" id="w_app_form">
  <div class="row justify-content-center custom_row_margin">
    <div class="col-lg-6">
      <div class="card mt-5">
        <div class="card-body form_bg" >
          <h2 class="card-title text-center mb-4" style="color: white;">
          
          
          <?php
          echo $form2_des;
          ?>

<br>
<?php
          echo $form2_des2;
          ?>


          </h2>
          <form method="post" action="post_to_google_sheet.php" onsubmit="form2_action()">




          <input type="text" class="form-control" name="source" value="<?php echo $ad_source ?> "  hidden>

          <input type="text" class="form-control" name="is_w_app" value="1"  hidden>













            <div class="mb-3">
              
              <input type="text" class="form-control" name="name" placeholder="الاسم" required>
            </div>


            <div class="mb-3">
 
              <input id="phn_form2" type="number" class="form-control" name="phone" placeholder="أدخل  رقم جوالك هنا " required>
            </div>



            <div class="mb-3" hidden>


              <select name="branch"    class="form-select">


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







































            <div class="mb-3" hidden>


<select name="service"    class="form-select">


<?php
$filename = 'services.txt'; // Specify the path to your text file

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




















            





            <div class="text-center">


            <img id="loading2" src="images/loading.gif" alt="Italian Trulli"  width="100" height="100" >


              <button id="form2_button" type="submit" class="btn btn-primary   rounded-pill">تسجيل</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

































<script>

var w_app_form_div = document.getElementById("w_app_form");


w_app_form_div.style.display = "none";


$('#loading2').hide();


function form2_action() {
  //alert("The form was submitted");
  
 
  //document.getElementById("form1_button").disabled = true;
 
 

  //$('#loading2').show();
  //$('#form2_button').hide();
 
  //alert("wwe");
  document.getElementById('form2_button').innerText = 'يرجى الإنتظار سيتم تحويلك الان';







  var event_phn=document.getElementById('phn_form2').value
 

  snaptr('track','SIGN_UP', {
  
    'user_phone_number': sha256("966"+event_phn)          
});











ttq.identify({
 
	"phone_number":sha256("966"+event_phn)  // string. The phone number of the customer if available. It must be hashed with SHA-256 on the client side.
 
});


ttq.track('CompleteRegistration', {});





//alert("submited"+event_phn);





}
</script>