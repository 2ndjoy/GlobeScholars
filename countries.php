<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Countries - GlobeScholar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="icon" href="favicon.png" type="image/x-icon">
    
<style>
          .navbar-toggler {
    border: 1px solid white; /* Border color for the toggle button */
  }

  .navbar-toggler .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }
    .section-title { 
      text-align: center; 
      margin-bottom: 40px; 
    }
    .card {
    height: 350px; /* Set a consistent height */
    width: 100%; /* Allow cards to adapt to column width */
    background-color: #1F4529; /* Keep the same background for consistency */
    color: white; /* Ensure text is readable */
  margin-bottom: 2vw;
  }

  .card img {
    height: 200px; /* Ensure consistent image height */
    object-fit: cover; /* Maintain aspect ratio and fill the image container */
  }

  .card-body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 150px; /* Adjust to fill remaining space below the image */
  }
    
    body{
      background-color:#5A6C57;
    }
    .footer {
      background-color: #1F4529;
      color: white;
      padding: 20px 0;
    }
    .footer a {
      color: #f8f9fa;
    }
    .footer a:hover {
      text-decoration: underline;
    }

  </style>
</head>
<body>

  <!-- Header -->
  <nav style="background-color: #1F4529;" class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container">
      <div>
        <a class="navbar-brand" style="color: white;" href="index.php">
          <img src="logo4.png" style="height: 8rem;width: 8rem;" class="" alt=""></a></div>
      <button 
        class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
        style="border-color: white;"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" style="color: white;" href="countries.php">Countries</a></li>
          <li class="nav-item"><a class="nav-link" style="color: white;" href="universities.php">Universities</a></li>
          <li class="nav-item"><a class="nav-link" style="color: white;" href="requirements.php">Requirements</a></li>
          <li class="nav-item"><a class="nav-link" style="color: white;" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" style="color: white;" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" style="color: white;" href="login.php">Log in</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Countries Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="section-title text-white">Explore Countries</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow">
            <img src="images/usa.jpg" class="card-img-top" alt="USA">
            <div class="card-body text-center">
              <h5 class="card-title">United States</h5>
              <p class="card-text">Leading destination for higher education.</p>
              <a href="usa.php" class="btn btn-success mt-2">See More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow">
            <img src="images/uk.jpg" class="card-img-top" alt="UK">
            <div class="card-body text-center">
              <h5 class="card-title">United Kingdom</h5>
              <p class="card-text">Home to prestigious universities like Oxford.</p>
              <a href="uk.php" class="btn btn-success mt-2">See More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow">
            <img src="images/canada.jpg" class="card-img-top" alt="Canada">
            <div class="card-body text-center">
              <h5 class="card-title">Canada</h5>
              <p class="card-text">Affordable education and multicultural society.</p>
              <a href="canada.php" class="btn btn-success mt-2">See More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow">
            <img src="images/australiaImgHome.jpg" class="card-img-top" alt="Canada">
            <div class="card-body text-center">
              <h5 class="card-title">Australia</h5>
              <p class="card-text">Affordable education and multicultural society.</p>
              <a href="australia.php" class="btn btn-success mt-2">See More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow">
            <img src="images/netherland.jpg" class="card-img-top" alt="Canada">
            <div class="card-body text-center">
              <h5 class="card-title">Netherland</h5>
              <p class="card-text">Affordable education and multicultural society.</p>
              <a href="netherland.php" class="btn btn-success mt-2">See More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow">
            <img src="images/newland.jpg" class="card-img-top" alt="Canada">
            <div class="card-body text-center">
              <h5 class="card-title">New Zealand</h5>
              <p class="card-text">Affordable education and multicultural society.</p>
              <a href="newzealand.php" class="btn btn-success mt-2">See More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow">
            <img src="images/sweden.jpg" class="card-img-top" alt="Canada">
            <div class="card-body text-center">
              <h5 class="card-title">Sweden</h5>
              <p class="card-text">Affordable education and multicultural society.</p>
              <a href="sweden.php" class="btn btn-success mt-2">See More</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card shadow">
            <img src="images/germany.jpg" class="card-img-top" alt="Canada">
            <div class="card-body text-center">
              <h5 class="card-title">Germany</h5>
              <p class="card-text">Affordable education and multicultural society.</p>
              <a href="germany.php" class="btn btn-success mt-2">See More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Footer -->
  <footer class="footer text-center text-white py-3">
    <div class="container">
      <p>&copy; 2024 Globescholar. All Rights Reserved.</p>
      <p><a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Terms of Use</a></p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
