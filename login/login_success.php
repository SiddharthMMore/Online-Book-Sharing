<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'omegaread');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	session_start();


	// echo "connection done";
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from form 
      
		$myusername = mysqli_real_escape_string($db,$_POST['username_login']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password_login']); 
		// echo $myusername, $mypassword;
			
		$sql = "SELECT user_id, password FROM customer WHERE user_id = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		// $active = $row['active'];

		$count = mysqli_num_rows($result);
			
		// If result matched $myusername and $mypassword, table row must be 1 row
			
		if($count == 1) {
		$_SESSION['user_id'] = $myusername;
		header("location: ../homepage/homepage.php");
		}
		else {
			$error = "Your Login Name or Password is invalid";
			echo $error;
		}
	}
	else{
		echo "Method is not post";
	}
?>
