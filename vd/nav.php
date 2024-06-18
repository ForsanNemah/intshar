<style>
  body {
    padding-top: 0px; /* Add padding to the top of the body to account for the fixed navbar */
  }
  .navbar-nav .nav-link {
    color: #333; /* Set the text color of the navigation items to dark gray */
  }
  .navbar {
    background-color: #fff; /* Set the background color of the navigation bar to white */
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light fixed-top ">
  <div class="container">
    <a class="navbar-brand" href="../index.php">قمة الإنتشار</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php" onclick="toggleNavbar()">الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php#about_id" onclick="toggleNavbar()">من نحن</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php#services_id" onclick="toggleNavbar()">الخدمات</a>
        </li>




        <li class="nav-item">
          <a class="nav-link" href="../index.php#customers_id" onclick="toggleNavbar()">عملاؤنا</a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="../index.php#footer_id" onclick="toggleNavbar()">تواصل معنا</a>
        </li>


 



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         ادوات التسويق 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">

            <li><a class="dropdown-item"  onclick="toggleNavbar()" href="#">تحميل الفيديوهات </a></li>
             
          </ul>
        </li>





      </ul>
    </div>
  </div>
</nav>

<script>
  function toggleNavbar() {
    var navbarCollapse = document.getElementById("navbarNav");
    navbarCollapse.classList.toggle("show");
  }
</script>