<?php
	session_start();
	
	require_once "/src/header.php";

?>
	<form method="post" action="register_action.php">
	<fieldset>
	<legend>Register</legend>
	
	<table>
	
	<tr>
		<td><label for="name" class="tableLabel">Full name:</label></td>
		<td><input type="text" name="name" id="name"  class="tableInput"/> </td>
	</tr>
	
<!-- 	<tr> -->
<!-- 		<td><label for="username" class="tableLabel">Username:</label></td> -->
<!-- 		<td><input type="text" name="username" id="username" class="tableInput"/></td>  -->
<!-- 	</tr> -->
	<tr>
		<td><label for="email" class="tableLabel">Email:</label></td> 
		<td><input type="email" name="email" id="email"  class="tableInput"/> </td>
	</tr>	
		
	<tr>
		<td><label for="password1" class="tableLabel">Password:</label></td> 
		<td><input type="password" name="password1" id="password1" class="tableInput" /></td>
	</tr>
	
	<tr>
		<td><label for="password2" class="tableLabel">Confirm password:</label></td>
		<td><input type="password" name="password2" id="password2"  class="tableInput"/></td>
	</tr>
	
	<tr>
		<td><label for="date_of_birth" class="tableLabel">Date of birth (dd-mm-yyyy):</label></td>
		<td><input type="date" name="date_of_birth" id="date_of_birth"  class="tableInput"/></td>
	</tr>	
		
	<tr>
		<td><label for="place_of_birth" class="tableLabel">Place of birth:</label></td> 
		<td><input type="text" name="place_of_birth" id="place_of_birth"  class="tableInput"/></td>
	</tr>
	
	<tr>
		<td><label for="info" class="tableLabel">Information:</label></td> 
		<td><textarea name="info" id="info" rows="5" cols="50" class="tableInput"></textarea></td>
	</tr>	
	
	<tr>
		<td><label for="nationality" class="tableLabel">Nationality:</label></td> 
		<td><input type="text" name="nationality" id="nationality" class="tableInput"/></td>
	</tr>
	
	</table>
	
	</br>
	
	<p class="center"><input value="Register" type="submit" /></p>
	</fieldset>
	</form>
<?php	
	require_once "/src/footer.php";
?>