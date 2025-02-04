<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sweden Universities</title>
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
    <h2 class="text-center">Top Universities in Sweden</h2>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Karolinska Institute</span>
      <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#karolinskaModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Stockholm University</span>
      <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#stockholmModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Lund University</span>
      <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#lundModal">View Courses</button>
    </div>
  </div>

  <!-- Modals -->

  <!-- Karolinska Institute Modal -->
  <div class="modal fade" id="karolinskaModal" tabindex="-1" aria-labelledby="karolinskaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="karolinskaModalLabel">Karolinska Institute - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Medicine</li>
            <li>Biotechnology</li>
            <li>Public Health</li>
            <li>Dental Surgery</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Stockholm University Modal -->
  <div class="modal fade" id="stockholmModal" tabindex="-1" aria-labelledby="stockholmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stockholmModalLabel">Stockholm University - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Computer Science</li>
            <li>Physics</li>
            <li>Environmental Science</li>
            <li>Law</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Lund University Modal -->
  <div class="modal fade" id="lundModal" tabindex="-1" aria-labelledby="lundModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="lundModalLabel">Lund University - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Engineering</li>
            <li>Arts</li>
            <li>Medicine</li>
            <li>International Relations</li>
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
              <li>Monthly Rent: SEK 7,000 - SEK 12,000</li>
              <li>Groceries: SEK 2,000 - SEK 4,000</li>
              <li>Transportation: SEK 300 - SEK 600</li>
              <li>Utilities: SEK 500 - SEK 1,000</li>
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
      <h2 class="section-title">Steps to Study in Sweden</h2>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item">Research universities and programs.</li>
        <li class="list-group-item">Pass English language tests (IELTS/TOEFL).</li>
        <li class="list-group-item">Apply directly through university websites or via University Admissions Sweden.</li>
        <li class="list-group-item">Submit proof of financial support (for tuition and living expenses).</li>
        <li class="list-group-item">Apply for a residence permit for studies.</li>
        <li class="list-group-item">Arrange for accommodation and health insurance.</li>
      </ol>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
