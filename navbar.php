



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
        <li class="nav-item"><a class="nav-link" style="color: white;" href="countries.php">Countries</a></li>
        <li class="nav-item"><a class="nav-link" style="color: white;" href="universities.php">Universities</a></li>
        <li class="nav-item"><a class="nav-link" style="color: white;" href="requirements.php">Requirements</a></li>
        <li class="nav-item"><a class="nav-link" style="color: white;" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" style="color: white;" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" style="color: white;" href="display_applied_countries.php">My applications</a></li>
        <?php
        session_start(); // Start the session

        // Check if the user is logged in by verifying session
        $isLoggedIn = isset($_SESSION['user_id']); // Adjust this to the session variable you use to track logged-in users
        ?>

        <ul class="navbar-nav">
          <?php if ($isLoggedIn): ?>
            <!-- Show Logout button if logged in -->
            <li><a href="logout.php" class="btn btn-danger">Logout</a></li>
          <?php else: ?>
            <!-- Show Login button if not logged in -->
            <li class="nav-item"><a class="nav-link" style="color: white;" href="login.php">Log in</a></li>
          <?php endif; ?>
        </ul>
          
      </ul>
    </div>
  </div>
</nav>
