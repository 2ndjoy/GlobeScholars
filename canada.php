<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Canada Universities</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="icon" href="favicon.png" type="image/x-icon">
    
<style>
    .university-list {
      margin-top: 30px;
    }
    .university-item {
      border-bottom: 1px solid #ddd;
      padding: 15px 0;
    }
    .modal-header {
      background-color: #198754;
      color: white;
    }
    .cost-living-section {
      margin-top: 40px;
    }
    .cost-living-section h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    .card img {
      height: 200px;
      object-fit: cover;
    }
    .card {
      margin-bottom: 20px;
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
    <h2 class="text-center">Top Universities in Canada</h2>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>University of Toronto</span>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#torontoModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>University of British Columbia (UBC)</span>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#ubcModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>McGill University</span>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#mcgillModal">View Courses</button>
    </div>
  </div>

  <!-- Modals -->

  <!-- University of Toronto Modal -->
  <div class="modal fade" id="torontoModal" tabindex="-1" aria-labelledby="torontoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="torontoModalLabel">University of Toronto - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Computer Science</li>
            <li>Finance and Economics</li>
            <li>Artificial Intelligence</li>
            <li>Health Sciences</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- UBC Modal -->
  <div class="modal fade" id="ubcModal" tabindex="-1" aria-labelledby="ubcModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ubcModalLabel">University of British Columbia - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Environmental Studies</li>
            <li>Data Science</li>
            <li>Psychology</li>
            <li>Biotechnology</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- McGill Modal -->
  <div class="modal fade" id="mcgillModal" tabindex="-1" aria-labelledby="mcgillModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mcgillModalLabel">McGill University - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Engineering</li>
            <li>Business Administration</li>
            <li>Human Medicine</li>
            <li>Law</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Cost of Living Section -->
  <section class="container cost-living-section">
    <h2>Cost of Living & Facilities</h2>
    <div class="row">
      <!-- Cost of Living -->
      <div class="col-md-6">
        <div class="card shadow">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Cost of Living">
          <div class="card-body">
            <h5 class="card-title">Cost of Living</h5>
            <ul>
              <li>Monthly Rent: $800 - $2,200 CAD</li>
              <li>Groceries: $250 - $500 CAD</li>
              <li>Transportation: $100 - $200 CAD</li>
              <li>Utilities: $100 - $250 CAD</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Facilities -->
      <div class="col-md-6">
        <div class="card shadow">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Facilities">
          <div class="card-body">
            <h5 class="card-title">Facilities</h5>
            <ul>
              <li>Scholarships</li>
              <li>Health Insurance</li>
              <li>Work-Study Programs</li>
              <li>Student Support Services</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Steps to Study -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="section-title">Steps to Study in Canada</h2>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item">Select a university and program.</li>
        <li class="list-group-item">Pass English/French language tests (IELTS/TOEFL/TEF).</li>
        <li class="list-group-item">Apply for admission through university portals.</li>
        <li class="list-group-item">Demonstrate proof of financial stability.</li>
        <li class="list-group-item">Apply for a study permit (student visa).</li>
        <li class="list-group-item">Plan for housing and health insurance.</li>
      </ol>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
