
<?php


//include "list_model.php";

?>


<div class="form-container" id="myform" data-aos-duration="1500"  data-aos="zoom-in-up">
  <div class="row justify-content-center custom_row_margin">
    <div class="col-lg-6">
      <div class="card mt-5">
        <div class="card-body form_bg" >
          <h2 class="card-title text-center mb-4" style="color: white;">
          <?php
          echo $form1_des;
          ?>
<br>

<?php
          echo $form1_des2;
          ?>



          </h2>
          <form method="post" action="post_to_google_sheet.php" onsubmit="form1_action()">




          <input type="text" class="form-control" name="source" value="<?php echo $ad_source  ?> "  hidden>

          <input type="text" class="form-control" name="is_w_app" value="0"  hidden>













            <div class="mb-3">
              
              <input type="text" class="form-control" name="name" placeholder="الاسم" required>
            </div>


            <div class="mb-3">
 
              <input id="phn_form1" type="number" class="form-control" name="phone" placeholder="أدخل  رقم جوالك هنا " required>
            </div>



           





















































 <div class="mb-3"  >


         
<?php
//include "select_and_sub_select.php";
//include "model_locations.php";
//include "select_and_sub_select2.php";
//include "branches_model.php";
//include "list_model.php";

?>
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


            <img  class="img-fluid" id="loading_gif" src="images/loading.gif" alt="Italian Trulli"  width="50" height="50" >


              <button id="form1_button" type="submit" class="btn btn-primary   rounded-pill">احجز الان</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

































<script>


$('#loading_gif').hide();


function form1_action() {
  //alert("The form was submitted");
  
 
  //document.getElementById("form1_button").disabled = true;
 

  //$('#form1_button').hide();
  //$('#loading_gif').show();
 
  //alert("wwe");
  document.getElementById('form1_button').innerText = 'يرجى الإنتظار سيتم تحويلك الان';








  var event_phn=document.getElementById('phn_form1').value
 

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