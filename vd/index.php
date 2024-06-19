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


<body>



  <?php


include "hero.php";
include "loading_bar.php";
include "video_view.php";
include "w_api_notifi.php";

?>



















  

  <script>

var table_div = document.getElementById("table_div");
table_div.style.display = "none";





var progress_bar_div_id = document.getElementById("progress_bar_div_id");
progress_bar_div_id.style.display = "none";



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
        const allowedDomains = ['googleapis.com','facebook.com','snapchat.com','youtube.com','youtu.be', 'twitter.com', 'instagram.com', 'linkedin.com','tiktok.com'];
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

  alert("حاول مرة اخرى ");
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
var cell5 = newRow.insertCell(4);

cell1.innerHTML = media.type;
cell2.innerHTML = media.quality;
cell3.innerHTML = media.extension;

var current_row_id=media.type+media.quality+media.extension+i;

// Create a new button element with Bootstrap classes and a smaller download icon
var button = document.createElement("button");

var ahef = document.createElement("a");
ahef.href =media.url;
ahef.innerHTML = 'فتح';
cell5.appendChild(ahef);

button.id = current_row_id;

button.className = "btn btn-success btn-sm";
button.innerHTML = '<i class="fas fa-download fa-fw"></i> تنزيل';



button.onclick = function() {
  // Add button click functionality here
  console.log("Download button clicked!");

  //downloadFile(media.url,data.title);
  
  

  //alert(media.type+media.quality+media.extension);


  if(media.quality=="Audio"){

    window.open(media.url);
  }else{

    downloadFile(media.url,data.title+"."+media.extension,current_row_id);
    
    //window.open("download.php?file="+media.url+"&name="+media.title+"."+media.extension);

    //button.innerHTML = '<i class="fas fa-download fa-fw"></i> جاري التنزيل';
    //button.disabled = true;

   
    document.getElementById(cuurent_row_id).textContent = 'جاري التنزيل';
    //location.href = "download.php?file=" + encodeURIComponent(media.url) + "&name=" + data.title + "." + media.extension;

    /*
    fetch(`download.php?file=${encodeURIComponent(media.url)}&name=${data.title}.${media.extension}`, {
  method: 'GET',
  headers: {
    
  }
})
.then(response => {
     document.getElementById(media.type+media.quality+media.extension).innerHTML = '<i class="fas fa-download fa-fw"></i> تنزيل';

  if (response.ok) {
    //return response.blob();
    return 0;
  } else {
    throw new Error('Failed to download file');
  }
})
.then(blob => {
  const url = URL.createObjectURL(blob);
  const link = document.createElement('a');
  link.href = url;
  link.download = `${data.title}.${media.extension}`;
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
})
.catch(error => {
  console.error(error);
});
    
*/



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








        function downloadFile(file, name,current_download_button_id) {
  // Create a new XMLHttpRequest object
 
  progress_bar_div_id.style.display = "block";
  
  var videoUrl =file;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', videoUrl, true);
            xhr.responseType = 'blob';

            xhr.onprogress = function (e) {
                if (e.lengthComputable) {
                    var percentComplete = (e.loaded / e.total) * 100;
                    var progress = document.getElementById('progress');
                    var status = document.getElementById('status');
                    progress.style.width = percentComplete + '%';
                    progress.textContent = Math.round(percentComplete) + '%';
                    status.textContent = 'Downloaded ' + Math.round(e.loaded / 1024 / 1024) + ' MB of ' + Math.round(e.total / 1024 / 1024) + ' MB';
                }
            };

            xhr.onload = function () {
                if (xhr.status === 200) {
                    var blob = xhr.response;
                    var url = window.URL.createObjectURL(blob);
                    var a = document.createElement('a');
                    a.style.display = 'none';
                    a.href = url;
                    a.download =name;
                    document.body.appendChild(a);
                    a.click();
                    window.URL.revokeObjectURL(url);
                    var status = document.getElementById('status');
                    status.textContent = 'تم التنزيل بنجاح!';
                     document.getElementById(current_download_button_id).innerHTML = '<i class="fas fa-download fa-fw"></i> تنزيل';
                }
            };

            xhr.onerror = function () {
                alert('Failed to download video.');
            };

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






// Add a click event listener to buttons with the 'my-button' class
document.querySelectorAll('.table_rows_button').forEach(button => {
  button.addEventListener('click', (event) => {
    // Get the ID of the clicked button
    const clickedButtonId = event.target.id;
    console.log(`Clicked button ID: ${clickedButtonId}`);
    alert(clickedButtonId);


  });
});


</script>

</html>


<style>
body {
    font-family: 'Tajawal';font-size: 22px;
}
</style>




