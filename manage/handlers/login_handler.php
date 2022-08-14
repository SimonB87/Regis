<?php
$error_array = [];
if(isset($_POST['login_button'])) {

	$email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); //sanitize email

	$_SESSION['log_email'] = $email; //Store email into session variable 
	$password = md5($_POST['log_password']); //Get password

	$check_database_query = mysqli_query($connector, "SELECT * FROM users WHERE email='$email' AND password='$password'");
	$check_login_query = mysqli_num_rows($check_database_query);

	if($check_login_query == 0) {

		array_push($error_array, "Email nebo heslo nejsou správné");

	} elseif ($check_login_query == 1) {

		$row = mysqli_fetch_array($check_database_query);
		$username = $row['username'];
		$usernamelevel = $row['user_level'];

		$user_closed_query = mysqli_query($connector, "SELECT * FROM users WHERE email='$email' AND user_closed='yes'");
		if(mysqli_num_rows($user_closed_query) == 1) {
			$reopen_account = mysqli_query($connector, "UPDATE users SET user_closed='no' WHERE email='$email'");
		}

		$_SESSION['username'] = $username;
		$_SESSION['user_level'] = $usernamelevel;

		header("Location: index.php");
		exit();
	}

}

foreach( $error_array as $key=>$item ) {
	echo "<div id='notification_$key' class='notification bg-warning alert-hide'><span class='notification-content '>" . $item . "</span><span class=\"notification--close \" onclick=\"hideNotification('notification_$key');\" > X </span>" . "</div>";
}


?>