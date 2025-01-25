<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - GlobeScholar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="favicon.png" type="image/x-icon">
  <style>
    body {
      background: linear-gradient(rgba(35, 59, 12, 0.5), #323b30), url('images/regBcgrnd.webp');
      background-size: cover;
      background-position: inherit;
      margin-bottom: 8vw;
    }
    .form-container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .form-title {
      margin-bottom: 20px;
    }
    .website-title {
      font-size: 2.5rem;
      font-weight: bold;
      color: #003366;
      text-align: center;
    }
    .motto {
      font-size: 1.2rem;
      font-style: italic;
      color: #555;
      text-align: center;
      margin-bottom: 40px;
    }
  </style>
</head>
<body>

  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <div class="website-title">
        <a href="index.php">
          <img src="images/Globescholar.png" style="height: 18vw; width: 17vw;" alt="">
        </a>
        <div class="motto mt-2">Your future begins with a <br> step into the world of opportunities</div>
      </div>
      <?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data if available, otherwise set to an empty string
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';
    $errors = array();

    // Validate form data
    if (empty($name)) {
        $errors[] = "Full name is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    // If no errors, process registration
    if (empty($errors)) {
        // Hash the password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Connect to the database
        $conn = new mysqli("localhost", "root", "", "globescholardb");

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert user data into the database
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $password_hash);

        if ($stmt->execute()) {
            echo "<p style='color: green;'>Registration successful!</p>";
        } else {
            echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}
?>


      <form action="register.php" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required minlength="6">
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required minlength="6">
        </div>
        <button type="submit" class="btn btn-success w-100">Register</button>
        <p class="mt-3 text-center">
          Already have an account? <a href="login.php">Login here</a>
        </p>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
