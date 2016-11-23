<?php
	session_start();
		
	require_once "db.php";
	
if ( isset($_POST['username']) ) { 
    $username = $_POST['username'];
} elseif ( isset($_COOKIE['username']) ) {
    $username = $_COOKIE['username'];
}
if ( isset($_POST['password']) ) { 
    $password = md5($_POST['password']);
} elseif ( isset($_COOKIE['password']) ) {
    $password = md5($_COOKIE['password']);
}
	
	$sql = "SELECT * FROM users WHERE name='$username' && password='$password';";
	$result = $link->query($sql);
	$resultArr = $result->fetch_array();
	
	if ($result == false) {
		echo '<a href="login.php">Error: cannot execute query</a>';
		exit;
	}
	
	if ($result->num_rows >= 1) {
		$_SESSION['login'] = "OK";
		$_SESSION['username'] = $username;
		$_SESSION['userId'] = $resultArr['id'];
		header('Location: private.php');
		close($link);
		die();
	}
	
	header('Location: login.php');
?>