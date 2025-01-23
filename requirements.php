<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Requirements - GlobeScholar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="icon" href="favicon.png" type="image/x-icon">
    
<style>
    .section-title { text-align: center; margin-bottom: 40px; }
    .requirements-table th, .requirements-table td { text-align: center; }
  </style>
</head>

<style>


.navbar-toggler {
    border: 1px solid white; /* Border color for the toggle button */
  }

  .navbar-toggler .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }
    .hero {
      background: url('banner.jpg') no-repeat center center/cover;
      color: white;
      text-align: center;
      padding: 100px 20px;
      background: linear-gradient( rgba(102, 143, 64, 0.5),#5A6C57), 
                url('banner.jpg');
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
    
</style>

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
  
  <!-- Requirements Section -->
  <section class="py-5 my-5">
    <div class="container">
      <h2 class="section-title text-light">Study Requirements</h2>
      <p class="text-center text-light">Find out what you need to prepare for studying abroad.</p>
      <div class="table-responsive">
        <table class="table table-bordered table-striped requirements-table mt-4">
          <thead>
            <tr>
              <th>Country</th>
              <th>IELTS Requirement (Undergraduate)</th>
              <th>IELTS Requirement (Master's)</th>
              <th>Academic Requirement</th>
              <th>Other Notes</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>United States</td>
              <td>6.0 - 7.0</td>
              <td>6.5 - 7.5</td>
              <td>Bachelor's degree for Master's programs</td>
              <td>GRE/GMAT for specific programs</td>
            </tr>
            <tr>
              <td>United Kingdom</td>
              <td>6.0 - 6.5</td>
              <td>6.5 - 7.0</td>
              <td>A-levels or equivalent</td>
              <td>Personal statement for admission</td>
            </tr>
            <tr>
              <td>Canada</td>
              <td>6.0 - 6.5</td>
              <td>6.5 - 7.0</td>
              <td>High school diploma or Bachelor's</td>
              <td>Proof of financial support</td>
            </tr>
            <tr>
              <td>Australia</td>
              <td>6.0 - 6.5</td>
              <td>6.5 - 7.0</td>
              <td>High school diploma for undergraduate, Bachelor's for Master's</td>
              <td>Proof of funds and OSHC (Overseas Student Health Cover)</td>
            </tr>
            <tr>
              <td>Sweden</td>
              <td>6.0 - 6.5</td>
              <td>6.5 - 7.0</td>
              <td>Completed Bachelor's for Master's programs</td>
              <td>Swedish language proficiency for some programs</td>
            </tr>
            <tr>
              <td>Germany</td>
              <td>6.0 - 6.5</td>
              <td>6.5 - 7.0</td>
              <td>Abitur or Bachelor's for Master's programs</td>
              <td>Proof of financial resources</td>
            </tr>
            <tr>
              <td>New Zealand</td>
              <td>6.0 - 6.5</td>
              <td>6.5 - 7.0</td>
              <td>High school diploma for undergraduate, Bachelor's for Master's</td>
              <td>Proof of sufficient funds and health insurance</td>
            </tr>
            <tr>
              <td>Netherlands</td>
              <td>6.0 - 6.5</td>
              <td>6.5 - 7.0</td>
              <td>High school diploma for undergraduate, Bachelor's for Master's</td>
              <td>Proof of sufficient funds for living expenses</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center text-white py-3">
    <div class="container">
      <p>&copy; 2024 Globescholar. All Rights Reserved.</p>
      <p><a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Terms of Use</a></p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
