<!DOCTYPE html>
<html dir="rtl" lang="ar"">

<?php


include "head.php";
include "info.php";
include "nav.php";

?>

<body bgcolor="green">











  <div >
    <div class="text-center image-container">
      <img src="images/v.jpg" alt="Book Image Mobile" class="img-fluid mobile-image">
      <img src="images/h.jpg" alt="Book Image Desktop" class="img-fluid desktop-image">
      <a href="#myform">

      <button class="btn btn-primary centered-button  btn-booking rounded-pill pulsate"> حجز استشارة مجانية</button>

      </a>
     
    </div>
  </div>















  <?php

 



if($header1==1){
  include "logo_then_pic.php";

}
include "form.php";



?>



<div>


<?php

include "w_app_form.php";



?>


</div>













<?php

 



if($about_image==1){
  include "about_image.php";

}
 



?>











<?php


if($w_app_button==1){
  include "w_app.php";

}





?>




<br>
<br>
  <div class="text-center">

 


 


<?php

if($before_after==1){

  echo '
  
  
  
  
  <a href="#cases_section">

  <button class="btn btn-primary    btn-booking rounded-pill pulsate"> 

شوف حالات قبل وبعد 

</button>
  </a>
  
  
  
  
  
  ';

}


?>






  



</div>









 










<?php

if($services==1){

  echo '
  
  
  
  
  <div class="text-center  mt-4">

  <h1>
 
 
 خدماتنا 
 
  </h1>
 
 </div
 
 
 
 
 

 
 
 
 
 
  
  
  
  
  
  ';

  include "services.php";

}


?>















<?php

if($services2==1){

  echo '
  
  
  
  
  <div class="text-center  mt-4">

  <h1>
 
 
 خدماتنا 
 
  </h1>
 
 </div
 
 
  
  ';

  include "services2.php";

}


?>




















<?php

if($derma_services==1){

  echo '
  
  
  
  
  <div class="text-center  mt-4">

  <h1>
 
 
 خدماتنا 
 
  </h1>
 
 </div
 
 
  
  ';

  include "derma_services.php";

}


?>

















<?php

if($services_images==1){

  

  include "services_images.php";

}



include "parteners.php";


?>








































<br>
<br>
  <div class="text-center">



<a href="#myform">
<button class="btn btn-primary    btn-booking rounded-pill pulsate"> 
حجز استشارة مجانية

  </button>

</a>


</div>





 

<?php


if($process==1){

  include "process.php";

}




?>












<?php

if($before_after==1){

include "before_after.php";

}

?>













<?php

if($faq==1){

include "faq.php";
}


?>








<?php



if($footer==1){
  
  include "map.php";
  include "footer.php";
}




?>






















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>



  <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/js/all.min.js"
    integrity="sha384-PASTE-INTEGRITY-HERE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-PASTE-INTEGRITY-HERE"
    crossorigin="anonymous"></script>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
  AOS.init();
</script>


</body>

</html>