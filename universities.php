<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Universities - GlobeScholar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>



.navbar-toggler {
    border: 1px solid white; /* Border color for the toggle button */
  }

  .navbar-toggler .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }
    .hero {
      background: url('images/banner.jpg') no-repeat center center/cover;
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
    .card {
    height:  25rem; /* Set a consistent height */
    width: 100%; /* Allow cards to adapt to column width */
    background-color: #1F4529; /* Keep the same background for consistency */
    color: white; /* Ensure text is readable */
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

</style>

<body>

  <!-- Header -->
        <?php 
      include('navbar.php')
      ?>  

<?php
$servername = "localhost"; // Database server
$username = "root"; // Database username
$password = ""; // Database password
$database = "globescholardb"; // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
  <!-- Universities Section -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <?php
        // Fetch universities from the database
        $sql = "SELECT * FROM universities";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Display each university as a card
          while ($row = $result->fetch_assoc()) {
            echo '
            <div class="col-md-4 my-3">
              <div class="card">
                <img src="' . $row['image_url'] . '" class="card-img-top" alt="' . $row['name'] . '">
                <div class="card-body">
                  <h5 class="card-title">' . $row['name'] . '</h5>
                  <p class="card-text">' . $row['description'] . '</p>
                  <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal' . $row['id'] . '">View Details</button>
                </div>
              </div>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="modal' . $row['id'] . '" tabindex="-1" aria-labelledby="modalLabel' . $row['id'] . '" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel' . $row['id'] . '">' . $row['name'] . '</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <ul>
                      <li>Location: ' . $row['location'] . '</li>
                      <li>' . $row['highlights'] . '</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>';
          }
        } else {
          echo '<p>No universities found.</p>';
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Modal Templates -->
  <div class="modal fade" id="harvardModal" tabindex="-1" aria-labelledby="harvardModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="harvardModalLabel">Harvard University</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Ranked #1 in innovation globally.</li>
            <li>Located in Cambridge, MA, USA.</li>
            <li>Offers top programs in law, business, and medicine.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Add similar modals for other universities -->
  <div class="modal fade" id="stanfordModal" tabindex="-1" aria-labelledby="stanfordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stanfordModalLabel">Stanford University</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li>Located in the heart of Silicon Valley.</li>
            <li>Famed for programs in technology and entrepreneurship.</li>
            <li>Strong ties with top tech companies.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

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
