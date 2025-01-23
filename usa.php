<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USA Universities</title>
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
  <div class="container university-list my-5">
    <h2 class="text-center text-light">Universities in the USA</h2>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Harvard University</span>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#harvardModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Stanford University</span>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#stanfordModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>MIT (Massachusetts Institute of Technology)</span>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#mitModal">View Courses</button>
    </div>
    

  <!-- Find an agency -->
  <a href="agencies.html" >
    <button type="button" style="background-color: #7ED4AD;" class="btn w-10 my-5 border-radius">Find an agency</button>
  
   </a>
  </div>

  <!-- Modals -->
  
  <!-- Harvard Modal -->
<div class="modal fade" id="harvardModal" tabindex="-1" aria-labelledby="harvardModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="harvardModalLabel">Harvard University - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>
              Engineering
              <button class="btn btn-outline-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#degreeModal">View Degrees</button>
            </li>
            <li>
              Business Administration
              <button class="btn btn-outline-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#degreeModal">View Degrees</button>
            </li>
            <li>
              Law
              <button class="btn btn-outline-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#degreeModal">View Degrees</button>
            </li>
            <li>
              Medicine
              <button class="btn btn-outline-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#degreeModal">View Degrees</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Stanford Modal -->
  <div class="modal fade" id="stanfordModal" tabindex="-1" aria-labelledby="stanfordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stanfordModalLabel">Stanford University - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>
              Engineering
              <button class="btn btn-outline-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#degreeModal">View Degrees</button>
            </li>
            <li>
              Psychology
              <button class="btn btn-outline-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#degreeModal">View Degrees</button>
            </li>
            <li>
              Economics
              <button class="btn btn-outline-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#degreeModal">View Degrees</button>
            </li>
            <li>
              Artificial Intelligence
              <button class="btn btn-outline-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#degreeModal">View Degrees</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <!-- MIT Modal -->
  <div class="modal fade" id="mitModal" tabindex="-1" aria-labelledby="mitModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mitModalLabel">MIT - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>
              Data Science
              <button class="btn btn-outline-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#degreeModal">View Degrees</button>
            </li>
            <li>
              Mechanical Engineering
              <button class="btn btn-outline-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#degreeModal">View Degrees</button>
            </li>
            <li>
              Aerospace Engineering
              <button class="btn btn-outline-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#degreeModal">View Degrees</button>
            </li>
            <li>
              Robotics
              <button class="btn btn-outline-success btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#degreeModal">View Degrees</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Degree Modal -->
  <div class="modal fade" id="degreeModal" tabindex="-1" aria-labelledby="degreeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="degreeModalLabel">Select Degree Type</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <a href="#" class="btn btn-success m-2">Master's</a>
          <a href="#" class="btn btn-secondary m-2">Bachelor's</a>
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
          <img src="images/colU.webp" class="card-img-top" alt="Cost of Living">
          <div class="card-body">
            <h5 class="card-title">Cost of Living</h5>
            <p class="card-text">Learn about average living costs in the United States:</p>
            <ul>
              <li>Monthly Rent: $1,000 - $2,500</li>
              <li>Groceries: $300 - $600</li>
              <li>Transportation: $100 - $200</li>
              <li>Utilities: $150 - $300</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Facilities -->
      <div class="col-md-6">
        <div class="card shadow">
          <img src="images/facUsa.jpg" class="card-img-top" alt="Facilities">
          <div class="card-body">
            <h5 class="card-title">Facilities</h5>
            <p class="card-text">Explore the facilities available for international students:</p>
            <ul>
              <li>Student Housing</li>
              <li>Healthcare Services</li>
              <li>Public Transportation</li>
              <li>Part-time Work Opportunities</li>
              <li>Cultural Exchange Programs</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="py-5">
    <div class="container">
      <h2 class="section-title text-light my-3">Steps to Study in the USA from Bangladesh</h2>
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <ol class="list-group list-group-numbered" style="background-color: #1F4529;" >
            <li class="list-group-item">
              <strong>Research and Select Universities:</strong> Identify universities that offer your desired program and match your budget and preferences.
            </li>
            <li class="list-group-item">
              <strong>Prepare for Standardized Tests:</strong> Take exams like TOEFL/IELTS for English proficiency and SAT/ACT or GRE/GMAT if required.
            </li>
            <li class="list-group-item">
              <strong>Gather Documents:</strong> Prepare academic transcripts, letters of recommendation, a statement of purpose, and a resume.
            </li>
            <li class="list-group-item">
              <strong>Apply to Universities:</strong> Submit your applications online, adhering to deadlines and application requirements.
            </li>
            <li class="list-group-item">
              <strong>Obtain Financial Proof:</strong> Show evidence of financial support to cover tuition and living expenses.
            </li>
            <li class="list-group-item">
              <strong>Apply for a Student Visa:</strong> Once accepted, use your I-20 form to apply for an F-1 student visa at the US Embassy.
            </li>
            <li class="list-group-item">
              <strong>Arrange Accommodation:</strong> Plan where you will stay, whether on-campus or off-campus housing.
            </li>
            <li class="list-group-item">
              <strong>Prepare for Departure:</strong> Book your flight, attend pre-departure orientations, and pack according to guidelines.
            </li>
          </ol>
        </div>
      </div>
    </div>

  </section>
  
  <footer class="footer text-center text-white py-3">
    <div class="container">
      <p>&copy; 2024 Globescholar. All Rights Reserved.</p>
      <p><a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Terms of Use</a></p>
    </div>
  </footer>

   

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
