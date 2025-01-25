<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Countries - GlobeScholar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="favicon.png" type="image/x-icon">
    
<style>
  .navbar-toggler {
    border: 1px solid white; 
  }

  .navbar-toggler .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }
  .section-title { 
    text-align: center; 
    margin-bottom: 40px; 
  }
  .card {
    height: 450px; 
    width: 100%; 
    background-color: #1F4529; 
    color: white; 
    margin-bottom: 2vw;
  }

  .card img {
    height: 200px; 
    object-fit: cover; 
  }

  .card-body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 150px; 
  }
    
  body {
    background-color:#5A6C57;
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

  <!-- Header -->
  <?php
  include('navbar.php');
  ?>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "globescholardb";

  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  ?>

  <!-- Countries Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="section-title text-white">Explore Countries</h2>
      <div class="row">
        <?php
        $sql = "SELECT * FROM countries";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4">';
                echo '<div class="card shadow">';
                echo '<img src="' . $row["image"] . '" class="card-img-top" alt="' . $row["name"] . '">';
                echo '<div class="card-body text-center">';
                echo '<h5 class="card-title">' . $row["name"] . '</h5>';
                echo '<p class="card-text">' . $row["description"] . '</p>';
                echo '<a href="' . $row["link"] . '" class="btn btn-success mt-2">See More</a>';
                echo '<button class="btn btn-primary mt-2 add-to-apply" data-country="' . $row["name"] . '">Add to Apply</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p class="text-white">No countries found.</p>';
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php
  include('footer.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const buttons = document.querySelectorAll(".add-to-apply");

      buttons.forEach(button => {
        button.addEventListener("click", () => {
          const countryName = button.getAttribute("data-country");

          // Send data to the server
          fetch("add_to_apply.php", {
            method: "POST",
            headers: {
              "Content-Type": "application/x-www-form-urlencoded",
            },
            body: `name=${encodeURIComponent(countryName)}`,
          })
          .then(response => response.text())
          .then(data => {
            alert(data); // Show success or error message
          })
          .catch(error => {
            console.error("Error:", error);
          });
        });
      });
    });
  </script>
</body>
</html>
