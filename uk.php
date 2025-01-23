<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UK Universities</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  
   <link rel="icon" href="favicon.png" type="image/x-icon">
    
<style>
.navbar-toggler {
  border: 1px solid white; /* Border color for the toggle button */
}

.navbar-toggler .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
    .university-list {
      margin-top: 30px;
    }
    .university-item {
      border-bottom: 1px solid #ddd;
      padding: 15px 0;
    }
    .modal-header {
      background-color: #007bff;
      color: white;
    }
    .cost-living-section {
      margin-top: 40px;
    }
    .cost-living-section h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    
    body{
      background-color:#5A6C57;
      /* color: white; */
    }
    .card {
    height: 35rem; /* Set a consistent height */
    width: 100%; /* Allow cards to adapt to column width */
    background-color: #1F4529; /* Keep the same background for consistency */
    color: white; /* Ensure text is readable */
    
    margin-bottom: 20px;
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
  .list-group-item{
    background-color: #D3F1DF;
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
    .university-item{
      color: white;
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
          <li class="nav-item"><a class="nav-link" style="color: white;" href="countries.html">Countries</a></li>
          <li class="nav-item"><a class="nav-link" style="color: white;" href="universities.html">Universities</a></li>
          <li class="nav-item"><a class="nav-link" style="color: white;" href="requirements.html">Requirements</a></li>
          <li class="nav-item"><a class="nav-link" style="color: white;" href="contact.html">Contact</a></li>
          <li class="nav-item"><a class="nav-link" style="color: white;" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" style="color: white;" href="login.html">Log in</a></li>
        </ul>
      </div>
    </div>
  </nav>
  

  <!-- University List Section -->
  <div class="container university-list">
    <h2 class="text-center text-light">Top Universities in the UK</h2>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>University of Oxford</span>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#oxfordModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>University of Cambridge</span>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#cambridgeModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Imperial College London</span>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#imperialModal">View Courses</button>
    </div>
    <!-- Find an agency -->
  
    <a href="agencies.html" >
      <button type="button" style="background-color: #7ED4AD;" class="btn w-10 my-5 border-radius">Find an agency</button>
    
     </a>
  </div>

  <!-- Modals -->

  <!-- Oxford Modal -->
  <div class="modal fade" id="oxfordModal" tabindex="-1" aria-labelledby="oxfordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="oxfordModalLabel">University of Oxford - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Philosophy, Politics, and Economics</li>
            <li>Law</li>
            <li>Medicine</li>
            <li>Data Science</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Cambridge Modal -->
  <div class="modal fade" id="cambridgeModal" tabindex="-1" aria-labelledby="cambridgeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cambridgeModalLabel">University of Cambridge - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Engineering</li>
            <li>Computer Science</li>
            <li>Biochemistry</li>
            <li>Mathematics</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Imperial Modal -->
  <div class="modal fade" id="imperialModal" tabindex="-1" aria-labelledby="imperialModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="imperialModalLabel">Imperial College London - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Aeronautical Engineering</li>
            <li>Business Analytics</li>
            <li>Life Sciences</li>
            <li>Physics</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Cost of Living Section -->
  <section class="container cost-living-section">
    <h2 class="text-light">Cost of Living & Facilities</h2>
    <div class="row">
      <!-- Cost of Living -->
      <div class="col-md-6">
        <div class="card shadow">
          <img src="images/colUK.webp" class="card-img-top" alt="Cost of Living">
          <div class="card-body">
            <h5 class="card-title">Cost of Living</h5>
            <ul>
              <li>Monthly Rent: £600 - £1,500</li>
              <li>Groceries: £200 - £400</li>
              <li>Transportation: £70 - £120</li>
              <li>Utilities: £100 - £200</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Facilities -->
      <div class="col-md-6">
        <div class="card shadow">
          <img src="images/facUK.jpg" class="card-img-top" alt="Facilities">
          <div class="card-body">
            <h5 class="card-title">Facilities</h5>
            <ul>
              <li>Scholarships</li>
              <li>Student Housing</li>
              <li>Health Insurance</li>
              <li>Work Opportunities</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Steps to Study -->
  <section class="py-5 ">
    <div class="container">
      <h2 class="section-title text-light">Steps to Study in the UK</h2>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item">Research universities and programs.</li>
        <li class="list-group-item">Pass English language tests (IELTS/TOEFL).</li>
        <li class="list-group-item">Apply through UCAS or directly to universities.</li>
        <li class="list-group-item">Secure financial proof for tuition and living costs.</li>
        <li class="list-group-item">Apply for a Tier 4 (Student) visa.</li>
        <li class="list-group-item">Plan accommodations and healthcare.</li>
      </ol>
    </div>
  </section>
   <!-- Footer -->
     
   <footer class="footer text-center ">
    <div class="container">
      <p>&copy; 2024 GlobeScholar. All Rights Reserved.</p>
      <p>
        <a href="#">Privacy Policy</a> | 
        <a href="#">Terms of Use</a>
      </p>
    </div>
  </footer>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
