<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Australia Universities</title>
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
         <?php 
      include('navbar.php')
      ?>  
  

  <!-- University List Section -->
  <div class="container university-list">
    <h2 class="text-center text-white">Top Universities in Australia</h2>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>University of Melbourne</span>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#melbourneModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>University of Sydney</span>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#sydneyModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Australian National University (ANU)</span>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#anuModal">View Courses</button>
    </div>
    <!-- Find an agency -->
  
    <a href="agencies.php" >
      <button type="button" style="background-color: #7ED4AD;" class="btn w-10 my-5 border-radius">Find an agency</button>
    
     </a>
  </div>

  <!-- Modals -->
  
  <!-- University of Melbourne Modal -->
  <div class="modal fade" id="melbourneModal" tabindex="-1" aria-labelledby="melbourneModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="melbourneModalLabel">University of Melbourne - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Computer Science</li>
            <li>Business Management</li>
            <li>Architecture</li>
            <li>Biomedical Science</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- University of Sydney Modal -->
  <div class="modal fade" id="sydneyModal" tabindex="-1" aria-labelledby="sydneyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sydneyModalLabel">University of Sydney - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Medicine</li>
            <li>Law</li>
            <li>Artificial Intelligence</li>
            <li>Environmental Science</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ANU Modal -->
  <div class="modal fade" id="anuModal" tabindex="-1" aria-labelledby="anuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="anuModalLabel">Australian National University - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Political Science</li>
            <li>Data Science</li>
            <li>Astronomy</li>
            <li>Public Health</li>
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
          <img src="images/coLA.webp" class="card-img-top" alt="Cost of Living">
          <div class="card-body">
            <h5 class="card-title">Cost of Living</h5>
            <ul>
              <li>Monthly Rent: $1,200 - $2,500 AUD</li>
              <li>Groceries: $300 - $600 AUD</li>
              <li>Transportation: $100 - $200 AUD</li>
              <li>Utilities: $150 - $300 AUD</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Facilities -->
      <div class="col-md-6">
        <div class="card shadow">
          <img src="images/facAU.jpg" class="card-img-top" alt="Facilities">
          <div class="card-body">
            <h5 class="card-title">Facilities</h5>
            <ul>
              <li>Student Housing</li>
              <li>Healthcare Services</li>
              <li>Scholarships</li>
              <li>Part-time Work Opportunities</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Steps to Study -->
  <section class="py-5">
    <div class="container">
      <h2 class="section-title text-white">Steps to Study in Australia</h2>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item">Research universities and programs.</li>
        <li class="list-group-item">Prepare for English proficiency tests (IELTS/TOEFL).</li>
        <li class="list-group-item">Apply for admission online.</li>
        <li class="list-group-item">Secure financial proof for tuition and living costs.</li>
        <li class="list-group-item">Apply for a student visa (subclass 500).</li>
        <li class="list-group-item">Arrange accommodation and health insurance.</li>
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
