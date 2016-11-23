<?php 

if(isset($_SESSION['login']) && $_SESSION['login'] == "OK"): 

?>
<li style="padding-left: 40px" id="currentUser">

<?php 

echo $_SESSION['username']; 

?>

</li>
	
	<?php endif ?>


<div>

<img alt="Facebook photo" src="img/welcome.jpg" id="loginPhoto" />

</div>