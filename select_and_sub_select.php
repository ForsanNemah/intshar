 






<select name="location" id="mainSelect" class="form-control mt-4" dir="rtl" required>
  <option value="" disabled selected>اختر  نوع الخدمة </option>
 
 
 



</select>

<select name="branch2" id="subSelect" class="form-control mt-4 mb-4" dir="rtl" required> 
  <option value="" disabled selected>اختر الخدمة </option>
 
 
</select>







<?php

//include "only_branches.php";

?>

















<script>
    var filePath = "location_and_branches.txt";
    var result = [];


    const subOptions = {

};

//subOptions.option4 = ['Suboption 4-1', 'Suboption 4-2'];

//console.log(subOptions); // Array of arrays







    var xhr = new XMLHttpRequest();
    xhr.open("GET", filePath, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var contents = xhr.responseText;
        var lines = contents.split('\n');
        
    
        var currentGroup = [];
        
        lines.forEach(function(line) {
          var trimmedLine = line.trim(); // Remove leading/trailing whitespace
          
          if (trimmedLine !== '') {
            currentGroup.push(trimmedLine);
          } else if (currentGroup.length > 0) {
            result.push(currentGroup);
            currentGroup = [];
          }
        });
        
        if (currentGroup.length > 0) {
          result.push(currentGroup);
        }
        
        //console.log(result); // Array of arrays
        
        result.forEach(function(group) {
         // console.log(group); // Individual group
          //alert(group.join('\n'));
           



 var select = document.getElementById("mainSelect");
      var option = document.createElement("option");
      option.value = group[0];
      option.text = group[0];
      select.appendChild(option);


var key=group[0];
//alert(key);
group.shift()
      subOptions[key] =group;

    
      //console.log(group.shift());
          for (var i = 0; i < group.length; i++) {
  //alert(group[i]);
}



        });
      }
    };
    xhr.send();

    //console.log(subOptions);
  </script>


 

<script>


 

    // Get references to the select elements
const mainSelect = document.getElementById('mainSelect');
const subSelect = document.getElementById('subSelect');

// Define the sub-option values based on the main option selected



// Event listener for mainSelect
mainSelect.addEventListener('change', function() {
  // Clear existing sub-options
  subSelect.innerHTML = '';

  // Get the selected option value
  const selectedOption = mainSelect.value;
//4san
  // Populate sub-options based on the selected option
  if (selectedOption && subOptions[selectedOption]) {
    subOptions[selectedOption].forEach(function(subOption) {
      const option = document.createElement('option');
      option.value = subOption;
      option.textContent = subOption;
      subSelect.appendChild(option);
    });
  } else {
    // Display a default message if no sub-options are available
    const option = document.createElement('option');
    option.value = '';
    option.textContent = ' اختر  المنطقة اولا';
    subSelect.appendChild(option);
  }
});
</script>