<?php

session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize the user's name
    $name = htmlspecialchars($_POST["name"]);

    // Store the name in the session
    $_SESSION['userName'] = $name;
}

  // Display a welcome message if the name is set
  if (isset($_SESSION['userName'])) {
      echo '<div class="welcome-message">';
      echo 'Welcome, ' . htmlspecialchars($_SESSION['userName']) . '! ';
      echo '<a href="homepage.php">Continue to Welcome Page</a>';
      echo '</div>';
  }
  ?>