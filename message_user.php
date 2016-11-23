<?php 
session_start();

$userId = $_SESSION['userId'];

require_once '/src/header_login.php';

require_once 'db.php';

$sql = 'SELECT m.message AS message, u.name AS username, m.date_of_creation AS created_at FROM users AS u'
		. ' LEFT JOIN messages AS m ON'
		. ' u.id = m.id_user WHERE u.id = ' . $userId;

		$messages = $link->query($sql);

while($message = $messages->fetch_assoc()){
	echo 'On:' . $message['created_at'] . '<br />';
	echo '<div>' . $message['username'] . '<div>';
	echo 'Send you a message: <br/>';
	echo '<p>' . $message['message'] . '</p>';
}

require_once '/src/footer.php';
?>