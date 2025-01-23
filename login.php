<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - GlobeScholar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="icon" href="favicon.png" type="image/x-icon">
    
<style>
    body {     
      background: linear-gradient( rgba(35, 59, 12, 0.5),#323b30), 
    url('images/logBcgrnd.webp');
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
      margin-bottom: 25px;
    }
  </style>
</head>
<body>

  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <div class="website-title">
        <a href="index.php">
        <img src="images/Globescholar.png" style="height: 18vw;width: 17vw;" alt="Logo">
      </a>
        <div class="motto mt-2">Your journey to global education begins here</div> <!-- Motto -->
      </div> <!-- Website Title -->
      
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input 
            type="email" 
            class="form-control" 
            id="email" 
            name="email" 
            placeholder="Enter your email" 
            required
            pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
          >
          <div class="form-text">Please enter a valid email address (e.g., example@mail.com).</div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input 
            type="password" 
            class="form-control" 
            id="password" 
            name="password" 
            placeholder="Enter your password" 
            required 
            minlength="6" 
            maxlength="20"
            pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,20}"
 
          >
          <div class="form-text">Password must be between 6 and 20 characters.</div>
        </div>
        <button type="submit" class="btn btn-success w-100">Login</button>
        <p class="mt-3 text-center">
          Don't have an account? <a href="register.html">Register here</a>
        </p>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
