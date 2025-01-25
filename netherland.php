<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Netherlands Universities</title>
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
    <h2 class="text-center">Top Universities in Netherlands</h2>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>University of Amsterdam</span>
      <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#amsterdamModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Delft University of Technology</span>
      <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#delftModal">View Courses</button>
    </div>
    <div class="university-item d-flex justify-content-between align-items-center">
      <span>Leiden University</span>
      <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#leidenModal">View Courses</button>
    </div>
  </div>

  <!-- Modals -->

  <!-- University of Amsterdam Modal -->
  <div class="modal fade" id="amsterdamModal" tabindex="-1" aria-labelledby="amsterdamModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="amsterdamModalLabel">University of Amsterdam - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Social Sciences</li>
            <li>Economics</li>
            <li>Physics</li>
            <li>Environmental Science</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Delft University of Technology Modal -->
  <div class="modal fade" id="delftModal" tabindex="-1" aria-labelledby="delftModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="delftModalLabel">Delft University of Technology - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Engineering</li>
            <li>Architecture</li>
            <li>Computer Science</li>
            <li>Applied Physics</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Leiden University Modal -->
  <div class="modal fade" id="leidenModal" tabindex="-1" aria-labelledby="leidenModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="leidenModalLabel">Leiden University - Available Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Law</li>
            <li>Humanities</li>
            <li>Medicine</li>
            <li>Physics</li>
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
              <li>Monthly Rent: €800 - €1,500</li>
              <li>Groceries: €250 - €400</li>
              <li>Transportation: €70 - €100</li>
              <li>Utilities: €150 - €300</li>
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
      <h2 class="section-title">Steps to Study in Netherlands</h2>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item">Research universities and programs.</li>
        <li class="list-group-item">Pass English language tests (IELTS/TOEFL).</li>
        <li class="list-group-item">Apply directly through university websites or via Study in Netherlands portal.</li>
        <li class="list-group-item">Submit proof of financial support (for tuition and living expenses).</li>
        <li class="list-group-item">Apply for a residence permit for studies.</li>
        <li class="list-group-item">Arrange for accommodation and health insurance.</li>
      </ol>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
