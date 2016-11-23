<?php 

session_start();

require_once "/src/header_login.php";

require_once 'db.php';

$userId = trim($_POST['userId']);
$message = trim($_POST['message']);

$sql = "INSERT INTO messages(id_user, message) VALUES('$userId', '$message');";

$result = $link->query($sql);

if ($result == false) {
		echo '<p>Message was not send.</p>';
		echo '<p><a href="message.php">Try again</a></p>';
		exit;
	}
	else {
		echo '<p>Message was send!</p>';
	}
	
require_once "/src/footer.php";
?>