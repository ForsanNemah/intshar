<!DOCTYPE html>
<html dir="rtl">
<head>
  <title>Bootstrap Modal with Select Event Example</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <style>
    .modal-header .btn-close {
      margin-left: auto;
    }
  </style>
</head>
<body>

  <!-- The Modal -->
  <div class="modal fade" id="locations_model">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <h5 class="modal-title">اختر عنصرًا</h5>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <ul class="list-group text-right">
            <li class="list-group-item">العنصر 1</li>
            <li class="list-group-item">العنصر 2</li>
            <li class="list-group-item">العنصر 3</li>
            <li class="list-group-item">العنصر 4</li>
          </ul>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>





    document.addEventListener('DOMContentLoaded', function() {
      // Show the modal when the page loads
      

      // Add click event listener to list items
      var listItems = document.getElementsByClassName('list-group-item');
      for (var i = 0; i < listItems.length; i++) {
        listItems[i].addEventListener('click', function() {
          var selectedItem = this.innerText;
          alert('العنصر المُحدد: ' + selectedItem);
          // Perform any other actions you want with the selected item
        });
      }
    });
  </script>
</body>
</html>