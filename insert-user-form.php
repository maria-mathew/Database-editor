<?php 
	session_start();
	
	
	if(isset($_SESSION["role"])){
		if(($_SESSION["role"] == 2)){
		?>
<html>
	<form action="process-insert-user-form.php" method="POST">
		First Name: <input type = "text"
			              name = "firstName"><br><br>
		Last Name: <input type = "text"
						 name = "lastName"><br><br>
		Email: <input type = "text"
					  name = "email"><br><br>
		Password: <input type = "text"
						 name = "password"><br><br>
		<input type = "submit"
			   value = "Submit"
			   name = "submit">
	
	</form>
</html>
	
	<?php
	}else{
		echo("You are not authorised to add users as your user role is not 2!!");}
		?>
		</br></br><a href="insert-exercise-form.php">Insert Exercise</a></br></br>
		<a href="insert-program-item-form.php">Insert Program item</a></br></br>
		<a href="logout.php">Log Out</a>
		<?php
	}else{
		echo("Please Login to add new users!");
		?></br><a href="login-user-form.php">Login</a><?
	}

?>