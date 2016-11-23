<?php 
	require_once 'db.php';
	
	$email = $_POST['email'];
	$password1 = md5($_POST['password1']);
	$password2 = md5($_POST['password2']);
	$name = $_POST['name'];
	$date_of_birth = $_POST['date_of_birth'];
	$place_of_birth = $_POST['place_of_birth'];
	$nationality = $_POST['nationality'];	
	$info = $_POST['info'];
	
	if ($password1 != $password2) {
		require_once "/src/header.php";
		echo '<p>Error: password does not match. Try again</p>';
		echo '<p><a href="register.php">Try again</p>';
		require_once "/src/footer.php";
		exit;
	}
	
	$sql = "INSERT INTO users (name, info, date_of_birth, email, password, place_of_birth, nationality) 
	VALUES ('$name', '$info', '$date_of_birth', '$email', '$password1', '$place_of_birth', '$nationality');";
	$result = $link->query($sql);
	
	if ($result == false) {
		require_once "/src/header.php";
		echo '<p>Error: cannot execute query</p>';
		echo '<p><a href="register.php">Try again</a></p>';
		require_once "/src/footer.php";
		exit;
	}
	else {
		header('Location: private.php');
	}

	$link->close();
?>