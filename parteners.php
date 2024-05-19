<!DOCTYPE html>
<html>
<head>
  <title>Animated Partners Section</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <style>
    /* Custom CSS for animation */
    .carousel-item.active .partner-logo {
      animation: bounce 1s;
    }

    @keyframes bounce {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.2);
      }
      100% {
        transform: scale(1);
      }
    }
  </style>
</head>
<body>
  <div id="partners-section">
    <div class="container">
      <h2>Our Partners</h2>
      <div id="partners-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="partner-logo" src="partner1.png" alt="Partner 1">
          </div>
          <div class="carousel-item">
            <img class="partner-logo" src="partner2.png" alt="Partner 2">
          </div>
          <div class="carousel-item">
            <img class="partner-logo" src="partner3.png" alt="Partner 3">
          </div>
          <!-- Add more partner items as needed -->
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Initialize the carousel
    var carousel = new bootstrap.Carousel(document.getElementById('partners-carousel'), {
      interval: 2000, // Set the desired interval for auto-sliding
      wrap: true // Enable wrapping back to the first item
    });
  </script>
</body>
</html>