<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Zealand Universities</title>
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
    <h2 class="text-center">Top Universities in New Zealand</h2>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>University of Auckland</span>
      <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#aucklandModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>University of Otago</span>
      <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#otagoModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Victoria University of Wellington</span>
      <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#victoriaModal">View Courses</button>
    </div>
  </div>

  <!-- Modals -->

  <!-- Auckland Modal -->
  <div class="modal fade" id="aucklandModal" tabindex="-1" aria-labelledby="aucklandModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="aucklandModalLabel">University of Auckland - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Engineering</li>
            <li>Health Sciences</li>
            <li>Computer Science</li>
            <li>Business and Management</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Otago Modal -->
  <div class="modal fade" id="otagoModal" tabindex="-1" aria-labelledby="otagoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="otagoModalLabel">University of Otago - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Law</li>
            <li>Arts</li>
            <li>Science</li>
            <li>Medicine</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Victoria Modal -->
  <div class="modal fade" id="victoriaModal" tabindex="-1" aria-labelledby="victoriaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="victoriaModalLabel">Victoria University of Wellington - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Environmental Science</li>
            <li>Media and Communications</li>
            <li>Engineering</li>
            <li>Architecture</li>
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
              <li>Monthly Rent: NZD 900 - NZD 1,800</li>
              <li>Groceries: NZD 250 - NZD 450</li>
              <li>Transportation: NZD 100 - NZD 150</li>
              <li>Utilities: NZD 100 - NZD 200</li>
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
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="section-title">Steps to Study in New Zealand</h2>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item">Research universities and programs.</li>
        <li class="list-group-item">Pass English language tests (IELTS/TOEFL).</li>
        <li class="list-group-item">Apply directly to universities or through the New Zealand Qualifications Authority (NZQA).</li>
        <li class="list-group-item">Provide evidence of financial support for tuition and living costs.</li>
        <li class="list-group-item">Apply for a student visa.</li>
        <li class="list-group-item">Arrange accommodation and healthcare insurance.</li>
      </ol>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
