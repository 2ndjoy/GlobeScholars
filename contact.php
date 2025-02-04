<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - GlobeScholar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="icon" href="favicon.png" type="image/x-icon">
    
<style>
    .section-title { text-align: center; margin-bottom: 40px; }
    .contact-form { max-width: 600px; margin: 0 auto; }
    
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

  <!-- Header -->
        <?php 
      include('navbar.php')
      ?>  

  <!-- Contact Section -->
  <section style="background-color: #5A6C57; color: white;" class="py-5">
    <div class="container">
      <h2 class="section-title">Contact Us</h2>
      <form class="contact-form">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" id="name" class="form-control" placeholder="Your Full Name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" class="form-control" placeholder="Your Email Address" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea id="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-success w-100">Send Message</button>
      </form>
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
