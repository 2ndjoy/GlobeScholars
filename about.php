<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - GlobeScholar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="icon" href="favicon.png" type="image/x-icon">
    
<style>

.navbar-toggler {
    border: 1px solid white; /* Border color for the toggle button */
  }

  .navbar-toggler .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }
    .section-title {
      text-align: center;
      margin-bottom: 40px;
    }
    .about-content {
      text-align: center;
      margin-top: 30px;
    }
    .team-member {
      text-align: center;
      margin-bottom: 30px;
    }
    .team-member img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      margin-bottom: 15px;
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
      color: white;
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
</head>
<body>

  <!-- Header -->
        <?php 
      include('navbar.php')
      ?>  

  <!-- About Section -->
  <section class="py-5 my-5">
    <div class="container">
      <h2 class="section-title">About Us</h2>
      <hr>
      <p class="text-center">At GlobeScholar, we are passionate about helping students find the perfect destination to GlobeScholar. We provide comprehensive information about countries, universities, courses, and requirements, making your GlobeScholar journey easy and successful.</p>
      
      <div class="about-content">
        <h3>Our Mission</h3>
        <hr>
        <p>Our mission is to make studying abroad accessible and stress-free for students. We aim to provide all the necessary tools, resources, and support to help students make informed decisions about their education and future.</p>
        
        <h3>Our Vision</h3>
        <hr>
        <p>We envision a world where students from all backgrounds have the opportunity to GlobeScholar and experience education in diverse cultures, helping them grow academically, personally, and professionally.</p>
      </div>

      <div class="team-member my-5 py-3">
        <hr>
        <hr>
        <h3>Meet Our Team</h3>
        <div class="row">
          <div class="col-md-4">
            <img src="https://encrypted-tbn0.gstatic.comimages?q=tbn:ANd9GcT9-ug7uucnWzHXXS54O8MIxvOQOv2JrAGjqQ&s" alt="Team Member 1">
            <h4>Ragnar Lothbrok</h4>
            <p>Founder & CEO</p>
          </div>
          <div class="col-md-4">
            <img src="https://encrypted-tbn0.gstatic.comimages?q=tbn:ANd9GcSXjcxhXuS0c0jxqqveGTZ2cQ85SoDDqt_k_w&s" alt="Team Member 2">
            <h4>Hannibal Lecter</h4>
            <p>Lead Consultant</p>
          </div>
          <div class="col-md-4">
            <img src="https://static.tvtropes.org/pmwiki/pubimages/saul_goodman.jpg" alt="Team Member 3">
            <h4>Saul Goodman</h4>
            <p>Head of Marketing</p>
          </div>
        </div>
        <hr>
        <hr>
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
