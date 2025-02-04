<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GlobeScholar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->

   <link rel="icon" href="favicon.png" type="image/x-icon"> <!-- Replace with your favicon path -->
  
   <link rel="icon" href="favicon.png" type="image/x-icon">
    
<style>
      .navbar-toggler {
    border: 1px solid white; /* Border color for the toggle button */
  }

  .navbar-toggler .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }
    .hero {
      background: url('images/banner.jpg') no-repeat center center/cover;
      color: white;
      text-align: center;
      padding: 100px 20px;
      background: linear-gradient( rgba(102, 143, 64, 0.5),#5A6C57), 
                url('images/banner.jpg');
    background-size: cover;
    background-position: inherit;
    margin-bottom: 8vw;
    }
    .section-title {
      text-align: center;
      margin-bottom: 40px;
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
    body{
      background-color:#5A6C57;
    }
    .card {
    height:  25rem; /* Set a consistent height */
    width: 100%; /* Allow cards to adapt to column width */
    background-color: #1F4529; /* Keep the same background for consistency */
    color: white; /* Ensure text is readable */
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
  </style>
</head>
<body>

  <!-- Header -->
<!-- Header -->
      <?php 
      include('navbar.php')
      ?>  


  <!-- Hero Section -->
  <section class="hero">
    <h1>Explore Your GlobeScholar Opportunities</h1>
    <p class="mt-3">Find the perfect university and country to fulfill your dreams.</p>
    <button class="btn mt-3"style="background: #D3F1DF;color: black;">Get Started</button>
  </section>

  <!-- Countries Section -->
  <section id="countries" class="py-3">
    <div class="container">
      <h2 class="section-title"style="color: white;">Preferred Study Destinations</h2>
      <div class="row">
     <a href="usa.php" class="col-md-4 text-white text-decoration-none my-3">
      <div>
        <div class="card shadow">
          <img src="images/usaImgHome.jpg" class="card-img-top" alt="USA">
          <div class="card-body text-center">
            <h5 class="card-title">United States</h5>
            <p class="card-text">Top-notch education system with diverse opportunities.</p>
          </div>
        </div>
      </div>

     </a>


     <a href="uk.php" class="col-md-4 text-white text-decoration-none my-3">
    
      <div >
        <div class="card shadow">
          <img src="images/ukImgHome.jpg" class="card-img-top" alt="UK">
          <div class="card-body text-center">
            <h5 class="card-title">United Kingdom</h5>
            <p class="card-text">Prestigious universities with rich cultural heritage.</p>
          </div>
        </div>
      </div>
     </a>

     
     <a href="australia.php" class="col-md-4 text-white text-decoration-none my-3">
        <div>
          <div class="card shadow">
            <img src="images/australiaImgHome.jpg" class="card-img-top" alt="Australia">
            <div class="card-body text-center">
              <h5 class="card-title">Australia</h5>
              <p class="card-text">World-class education in a vibrant, sunny setting.</p>
            </div>
          </div>
        </div>
      </div>
    </a>
    </div>
  </section>

  <!-- Universities Section -->
  <section id="universities" class=" py-5">
    <div class="container">
      <h2 class="section-title" style="color: white;">Featured Universities</h2>
      <div class="row">


        <a href="uniOfToronto.php" class="col-md-4 text-white text-decoration-none my-3">
          <div>
            <div class="card shadow">
              <img src="images/University of Toronto.jpg" class="card-img-top" alt="Harvard">
              <div class="card-body text-center">
                <h5 class="card-title">University  of Toronto</h5>
              </div>
            </div>
          </div>
        </a>
        <a href="UniOfAmst.php" class="col-md-4 text-white text-decoration-none my-3">
         
        <div>
          <div class="card shadow">
            <img src="images/University of Amsterdam.jpg" class="card-img-top" alt="Oxford">
            <div class="card-body text-center">
              <h5 class="card-title">University of Amsterdam</h5>
            </div>
          </div>
        </div>
        </a>

        <a href="aNU.php" class="col-md-4 text-white text-decoration-none  my-3">
         
        <div>
          <div class="card shadow">
            <img src="images/Australian National University.jpg" class="card-img-top" alt="ANU">
            <div class="card-body text-center">
              <h5 class="card-title">Australian National University</h5>
            </div>
          </div>
        </div>
        </a>
      </div>
    </div>
  </section>

  <!-- about us -->


  <!-- Solutions Section -->
<section id="solutions" class="py-5">
  <div class="container">
    <h2 class="section-title text-light">How We Help You Solve Your GlobeScholar Problems</h2>
    <div class="row">
      <!-- Problem 1 -->
      <div class="col-md-4 my-3">
        <div class="card shadow">
          <div class="card-body text-center">
            <i class="fas fa-book-open fa-3x" style="color: #009933;"></i>
            <h5 class="card-title mt-3">Confusion About Universities</h5>
            <p class="card-text">We provide comprehensive information about top universities across the world, helping you choose the best fit for your academic and career goals.</p>
          </div>
        </div>
      </div>
      <!-- Problem 2 -->
      <div class="col-md-4 my-3">
        <div class="card shadow">
          <div class="card-body text-center">
            <i class="fas fa-users fa-3x" style="color: #009933;"></i>
            <h5 class="card-title mt-3">Difficulty Finding Trusted Agencies</h5>
            <p class="card-text">We connect you with reliable agencies that specialize in guiding students through the GlobeScholar process, ensuring you get the best support.</p>
          </div>
        </div>
      </div>
      <!-- Problem 3 -->
      <div class="col-md-4 my-3">
        <div class="card shadow">
          <div class="card-body text-center">
            <i class="fas fa-paper-plane fa-3x" style="color: #009933;"></i>
            <h5 class="card-title mt-3">Complicated Visa & Application Process</h5>
            <p class="card-text">We simplify the visa and application procedures, providing step-by-step guidance to make your GlobeScholar journey as smooth as possible.</p>
          </div>
        </div>
      </div>
      <!-- Problem 4 -->
      <div class="col-md-4 my-3">
        <div class="card shadow">
          <div class="card-body text-center">
            <i class="fas fa-dollar-sign fa-3x" style="color: #009933;"></i>
            <h5 class="card-title mt-3">Understanding Costs and Scholarships</h5>
            <p class="card-text">We offer insights on the cost of studying abroad and available scholarships to make your education more affordable.</p>
          </div>
        </div>
      </div>
      <!-- Problem 5 -->
      <div class="col-md-4 my-3">
        <div class="card shadow">
          <div class="card-body text-center">
            <i class="fas fa-globe fa-3x" style="color: #009933;"></i>
            <h5 class="card-title mt-3">Cultural Adjustment Concerns</h5>
            <p class="card-text">We help you prepare for cultural differences and provide tips on adapting to new environments, ensuring a smoother transition to studying abroad.</p>
          </div>
        </div>
      </div>
      <!-- Problem 6 -->
      <div class="col-md-4 my-3">
        <div class="card shadow">
          <div class="card-body text-center">
            <i class="fas fa-comments fa-3x" style="color: #009933;"></i>
            <h5 class="card-title mt-3">Language Barriers</h5>
            <p class="card-text">We provide language resources and guidance on improving your language skills to help you thrive in an international education system.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p>&copy; 2024 Globescholar. All Rights Reserved.</p>
      <p>
        <a href="#">Privacy Policy</a> | 
        <a href="#">Terms of Use</a>
      </p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
