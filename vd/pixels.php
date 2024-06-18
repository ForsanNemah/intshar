<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snapchat Pixel Checker</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
    <h1 class="text-center">Snapchat Pixel Checker</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <form id="pixelCheckForm">
              <div class="mb-3">
                <label for="urlInput" class="form-label">Enter a URL:</label>
                <input type="url" class="form-control" id="urlInput" aria-describedby="urlHelp" placeholder="https://example.com" required>
                <div id="urlHelp" class="form-text">Enter the URL you want to check for the Snapchat pixel.</div>
              </div>
              <button type="submit" class="btn btn-primary">Check Pixel</button>
            </form>
            <div id="resultContainer" class="mt-3"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery and Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#pixelCheckForm').submit(function(event) {
        event.preventDefault();
        var url = $('#urlInput').val();
        $.ajax({
          url: url,
          type: 'GET',
          success: function(data) {
            if (data.includes('snapchat-pixel')) {
              $('#resultContainer').html('<div class="alert alert-success">The Snapchat pixel is installed on this URL.</div>');
            } else {
              $('#resultContainer').html('<div class="alert alert-danger">The Snapchat pixel is not installed on this URL.</div>');
            }
          },
          error: function(xhr, status, error) {
            var errorMessage = 'An error occurred while checking the Snapchat pixel.';
            if (xhr.responseJSON && xhr.responseJSON.error) {
              errorMessage = xhr.responseJSON.error;
            }
            $('#resultContainer').html(`<div class="alert alert-danger">${errorMessage}</div>`);
            console.error('Error:', error);
            console.error('Status:', status);
            console.error('Response:', xhr.responseJSON);
          }
        });
      });
    });
  </script>
</body>
</html>