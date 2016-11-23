<?php 
session_start();

require_once "/src/header_login.php";
require_once 'db.php';

?>

<form method="post" action="message_action.php">
	<fieldset>
		<legend>Write message</legend>
		
		
		<table>
		
	<?php 
			$sql = "SELECT id, name FROM users;";
			$users = $link->query($sql);
			?>
			
		<tr>
			<td><label for="message" class="tableLabel">Send message to: </label></td>
			<td><select name="userId">

		<?php 
		foreach($users as $user) {
		echo '<option value="' . $user['id'] .'">';
		echo $user['name'];
		echo '</option>';
		}
		?>
			</select></td>
			</tr>
			
			<tr>
				<td><label for="message" class="tableLabel">Message</label></td>
				<td><textarea name="message" id="message" rows="5" cols="50" class="tableInput" placeholder="Write message here"></textarea></td>
			</tr>
		</table>

		<p class="center"><input value="Send" type="submit" /></p>
	</fieldset>
</form>

<?php 

require_once "/src/footer.php";

?>
