<?php

// Connect to server/database
$mysqli = mysqli_connect("mi-linux", "2349472", "52t0w1", "db2349472");
if ($mysqli -> connect_errno) {
  echo "Connection Error: " . $mysqli -> connect_error;
  exit();
}

	session_start();
   if (isset($_POST["username"])) {
     if (($_POST["username"] == "minamina") && ($_POST["password"] == "minamina")) { // VALID LOGIN
       $_SESSION["loggedIn"] = true;
       echo "Successful Login - <a href=\"homepage.html\">Return to the Homepage</a>";
	   session_start();

// Check if the form is submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize the user's name
    $name = htmlspecialchars($_POST["name"]);

    // Store the name in the session
    $_SESSION['userName'] = $name;
}
     } else { // INVALID LOGIN
       echo "Wrong username and/or password - click back to try again";
     }
   } else { // NO USERNAME ENTERED
     echo "Username is blank - click back to try again";
   }
?>


