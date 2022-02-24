<?php 
/*if the user is loggen in, make the username variable equal to username. If user is not logged in, send him back to register page.*/
if (isset($_SESSION['username'])) {
  $userLoggedIn = $_SESSION['username'];
  $user_details_query = mysqli_query($connector, "SELECT * FROM users WHERE username='$userLoggedIn'");
  $user = mysqli_fetch_array($user_details_query);
}
else {
  header("Location: login.php");
  exit();
}

// change character set to utf8
if (!mysqli_set_charset($connector, "utf8")) {
	printf("Error loading character set utf8: %s\n", mysqli_error($connector));
	exit();
} else {
	//printf("Current character set: %s\n", mysqli_character_set_name($connector));//used only for testing
}
?>