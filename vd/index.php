<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>


  افضل موقع عربي  لتحميل الفيديوهات من السوشال ميديا 


  </title>


 


  <?php


include "head.php";
 
include "nav.php";

?>


</head>


<body  >
  <div class="container my-5">
    <h1 class="mb-4">



    افضل موقع عربي  لتحميل الفيديوهات من السوشال ميديا 



    </h1>
    <form onsubmit="handleFormSubmit(event)">
      <div class="mb-3">
        <label for="urlInput" class="form-label">أدخل عنوان URL</label>
        <input type="text" class="form-control" id="urlInput" placeholder="أدخل عنوان URL" required>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary" id="submitButton">تحميل</button>
      </div>
    </form>
    <div id="errorMessage" class="alert alert-danger mt-3 d-none" role="alert">
      الرجاء إدخال عنوان URL صالح من موقع تواصل اجتماعي (Facebook, Twitter, Instagram, LinkedIn).
    </div>
  </div>



  <?php

include "video_view.php";

?>



















  

  <script>

var table_div = document.getElementById("table_div");
table_div.style.display = "none";

const submitButton = document.getElementById('submitButton');


    function handleFormSubmit(event) {
      event.preventDefault(); // منع الإرسال الافتراضي للنموذج
      const inputField = document.getElementById('urlInput');
      const inputValue = inputField.value.trim();
      
      if (isValidUrl(inputValue)) {
        table_div.style.display = "none";
        console.log('عنوان URL صالح:', inputValue);
        submitButton.textContent = 'يرجى الإنتظار';
        submitButton.disabled = true;
        deleteAllRows("video_table_id");
        makeAjaxRequest(inputValue);
        // أضف منطق معالجة النموذج المخصص هنا
        hideErrorMessage();
      } else {
        console.log('عنوان URL غير صالح:', inputValue);
        showErrorMessage();
      }
    }

    function isValidUrl(url) {
      try {
        const allowedDomains = ['facebook.com', 'twitter.com', 'instagram.com', 'linkedin.com'];
        const parsedUrl = new URL(url);
        return allowedDomains.some(domain => parsedUrl.hostname.endsWith(domain)) && !url.includes(' ');
      } catch (error) {
        return false;
      }
    }

    function showErrorMessage() {
      const errorMessage = document.getElementById('errorMessage');
      errorMessage.classList.remove('d-none');
    }

    function hideErrorMessage() {
      const errorMessage = document.getElementById('errorMessage');
      errorMessage.classList.add('d-none');
    }





    function makeAjaxRequest(current_video_url) {
            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Set the HTTP method and URL
            xhr.open('GET', 'vd_api.php?video_url='+current_video_url, true);

            // Define the callback function to handle the response
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {







                  //alert(xhr.responseText);




                  
                    // Display the response in the HTML element
                     
                    submitButton.textContent = 'تحميل';
                    submitButton.disabled = false;
                    document.getElementById('video_table_id').scrollIntoView();
                    table_div.style.display = "none";

                  
                    var data = JSON.parse(xhr.responseText);
                    


if( 'message' in data){

  alert("messge found");
  //notify me please 
  return 0;

}

 










                    var videoNameElement = document.getElementById("video_name_id");
                    videoNameElement.textContent =data.title;
                    const video_image_id = document.getElementById('video_image_id');
                     video_image_id.src =data.thumbnail;

                     //alert(data.url);
                     //alert(data.title);
                     //alert(data.thumbnail);
/*
                     alert(data.medias[0].url);
                     alert(data.medias[0].type);
                     alert(data.medias[0].quality);
                     alert(data.medias[0].extension);

                     */


                     for (let i = 0; i < data.medias.length; i++) {

                      
  let media = data.medias[i];
  /*
  alert(`URL: ${media.url}`);
  alert(`Type: ${media.type}`);
  alert(`Quality: ${media.quality}`);
  alert(`Extension: ${media.extension}`);
  alert('---');

  */

  var table = document.getElementById("video_table_id");

// Create a new row
var newRow = table.insertRow(-1);

// Create new cells and add content
var cell1 = newRow.insertCell(0);
var cell2 = newRow.insertCell(1);
var cell3 = newRow.insertCell(2);
var cell4 = newRow.insertCell(3);

cell1.innerHTML = media.type;
cell2.innerHTML = media.quality;
cell3.innerHTML = media.extension;

// Create a new button element with Bootstrap classes and a smaller download icon
var button = document.createElement("button");
button.className = "btn btn-success btn-sm";
button.innerHTML = '<i class="fas fa-download fa-fw"></i> تنزيل';
button.onclick = function() {
  // Add button click functionality here
  console.log("Download button clicked!");

  //downloadFile(media.url,data.title);
  
  if(media.quality=="Audio"){

    window.open(media.url);
  }else{

    downloadFile(media.url,data.title);

  }




};

// Add the button to the fourth cell
cell4.appendChild(button);

table_div.style.display = "block";

}









                 
                     


                }
            };

            // Send the AJAX request
            xhr.send();
        }








        function downloadFile(url, fileName) {
  // Create an AJAX request
  var xhr = new XMLHttpRequest();

  // Set the request method and URL
  xhr.open('GET', url, true);

  // Set the response type to 'arraybuffer' to handle binary data
  xhr.responseType = 'arraybuffer';

  // Add an event listener for the 'load' event
  xhr.onload = function() {
    if (xhr.status === 200) {
      // Get the array buffer data from the response
      var arrayBuffer = xhr.response;

      // Convert the array buffer to a Blob
      var blob = new Blob([arrayBuffer], { type: 'audio/mpeg' });

      // Create a temporary link element
      var a = document.createElement('a');
      a.href = window.URL.createObjectURL(blob);
      a.download = fileName;

      // Append the link to the document
      document.body.appendChild(a);

      // Click the link to initiate the download
      a.click();

      // Remove the temporary link element
      document.body.removeChild(a);
    } else {
      console.error('Error downloading file:', xhr.status);
    }
  };

  // Add an error handler
  xhr.onerror = function() {
    console.error('Error downloading file:', xhr.status);
  };

  // Send the request
  xhr.send();
}

function deleteAllRows(tableId) {
  // Get a reference to the table element
  var table = document.getElementById(tableId);

  // Loop through all the rows, starting from the second row
  for (var i = table.rows.length - 1; i > 0; i--) {
    // Remove the row from the table
    table.deleteRow(i);
  }
}




  </script>

 
</body>

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

</html>


<style>
body {
    font-family: 'Tajawal';font-size: 22px;
}
</style>
