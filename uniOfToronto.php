<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University of Toronto</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
   <link rel="icon" href="favicon.png" type="image/x-icon">
    
<style>
     .hero {
      background: linear-gradient(rgba(0, 102, 51, 0.6), rgba(0, 102, 51, 0.6)), 
                  url('images/University\ of\ Toronto.jpg') no-repeat center center/cover;
      color: white;
      text-align: center;
      padding: 100px 20px;
    }
    .section-title {
      text-align: center;
      margin-bottom: 40px;
      color: #004d00;
    }
    .btn-find-agency {
      background-color: #009933;
      color: white;
    }
    .btn-find-agency:hover {
      background-color: #007a29;
    }
    .modal-header {
      background-color: #009933;
      color: white;
    }

    .navbar-toggler {
    border: 1px solid white; /* Border color for the toggle button */
  }

  .navbar-toggler .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
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
          <?php 
      include('navbar.php')
      ?>  
      

  <!-- Hero Section -->
  <section class="hero">
    <h1>University of Toronto</h1>
    <p class="mt-3">Discover courses, requirements, and find guidance for your journey.</p>
    <button class="btn btn-find-agency mt-3" data-bs-toggle="modal" data-bs-target="#agencyModal">Find an Agency</button>
  </section>

  <!-- Courses Section -->
 
  <!-- Courses Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="section-title">Courses Offered</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="courses">
            <h4>Undergraduate Programs</h4>
            <ul>
              <li>Computer Science</li>
              <li>Engineering (Civil, Mechanical, Electrical)</li>
              <li>Psychology</li>
              <li>Business Administration</li>
              <li>Life Sciences</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="courses">
            <h4>Graduate Programs</h4>
            <ul>
              <li>Data Science</li>
              <li>Artificial Intelligence</li>
              <li>Biomedical Engineering</li>
              <li>MBA</li>
              <li>Public Policy</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Requirements Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="section-title">Admission Requirements</h2>
      <ul class="list-group">
        <li class="list-group-item">High school diploma or equivalent</li>
        <li class="list-group-item">Proof of English proficiency (TOEFL/IELTS)</li>
        <li class="list-group-item">Letters of recommendation</li>
        <li class="list-group-item">Personal statement</li>
        <li class="list-group-item">Portfolio (if required)</li>
      </ul>
    </div>
  </section>

  <!-- Modal for Find an Agency -->
  <div class="modal fade" id="agencyModal" tabindex="-1" aria-labelledby="agencyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agencyModalLabel">Find an Agency</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="location" class="form-label">Select Location</label>
              <select id="location" class="form-select">
                <option selected>Select your division</option>
                <option value="1">Dhaka</option>
                <option value="2">Chattogram</option>
                <option value="3">Khulna</option>
                <option value="4">Rajshahi</option>
                <option value="5">Barishal</option>
                <option value="6">Sylhet</option>
                <option value="7">Rangpur</option>
                <option value="8">Mymensingh</option>
              </select>
              
            </div>
           <a href="agencies.php">
            <button type="button" class="btn btn-find-agency w-100">Search</button>
          
           </a>
        </form>
        </div>
      </div>
    </div>
  </div>

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
