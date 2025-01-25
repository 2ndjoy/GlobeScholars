<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Germany Universities</title>
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
      background-color: #0d6efd;
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
        <?php 
      include('navbar.php')
      ?>  

  <!-- University List Section -->
  <div class="container university-list">
    <h2 class="text-center">Top Universities in Germany</h2>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Ludwig Maximilian University of Munich</span>
      <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#munichModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Technical University of Munich</span>
      <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#techMunichModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Heidelberg University</span>
      <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#heidelbergModal">View Courses</button>
    </div>
  </div>

  <!-- Modals -->

  <!-- Ludwig Maximilian University Modal -->
  <div class="modal fade" id="munichModal" tabindex="-1" aria-labelledby="munichModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="munichModalLabel">Ludwig Maximilian University of Munich - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Law</li>
            <li>Physics</li>
            <li>Political Science</li>
            <li>Biochemistry</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Technical University of Munich Modal -->
  <div class="modal fade" id="techMunichModal" tabindex="-1" aria-labelledby="techMunichModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="techMunichModalLabel">Technical University of Munich - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Engineering</li>
            <li>Computer Science</li>
            <li>Aerospace Engineering</li>
            <li>Data Science</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Heidelberg University Modal -->
  <div class="modal fade" id="heidelbergModal" tabindex="-1" aria-labelledby="heidelbergModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="heidelbergModalLabel">Heidelberg University - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Biology</li>
            <li>Medicine</li>
            <li>Philosophy</li>
            <li>Mathematics</li>
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
              <li>Monthly Rent: €500 - €1,200</li>
              <li>Groceries: €150 - €300</li>
              <li>Transportation: €70 - €100</li>
              <li>Utilities: €150 - €250</li>
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
              <li>Student Housing</li>
              <li>Health Insurance</li>
              <li>Work Opportunities</li>
              <li>International Scholarships</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Steps to Study -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="section-title">Steps to Study in Germany</h2>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item">Research universities and programs.</li>
        <li class="list-group-item">Pass English language tests (IELTS/TOEFL).</li>
        <li class="list-group-item">Apply through university websites or the UniAssist portal.</li>
        <li class="list-group-item">Provide proof of financial support (for tuition and living expenses).</li>
        <li class="list-group-item">Apply for a student visa or residence permit.</li>
        <li class="list-group-item">Secure student housing and health insurance.</li>
      </ol>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
