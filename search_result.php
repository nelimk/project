<?php
	
session_start();

	require_once "/src/header_login.php";
	
	require_once 'db.php';

	echo "<fieldset><legend>Users</legend>";

	if(!isset($_POST['name']) || empty($_POST['name'])) {
		echo "<p>Empty search is not allowed</p>";
	}
	else {
		$name = $_POST['name'];
	
		$sql = "select id, name, date_of_birth from users where name = '$name';";
		$result = $link->query($sql);
		
		if ($result == false) {
			echo '<p>Error: cannot execute query</p>';
		}
		else {
			$num_rows = mysqli_num_rows($result);

			if($num_rows >= 1) {
				while($row = mysqli_fetch_array($result)) {
					echo "<p>";
					echo "<b>Name:</b> " . "<a href=\"search_full_result.php?id={$row["id"]}\">" . $row["name"] . "</a><br />";
					echo "<b>Date of birth:</b> " . $row["date_of_birth"];
					echo "</p>";
				}
			}
			else {
				echo '<p>No user found</p>';
			}
		}
	}
	
	$link->close();
	
	echo "</fieldset>";
	
	require_once "/src/footer.php";
?>