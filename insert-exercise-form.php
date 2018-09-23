<?php 
	session_start();
	
	
	if(isset($_SESSION["role"])){
				if(($_SESSION["role"] == 2)){
		?>
<html>
	<form action="process-insert-exercise-form.php" method="POST">
		Exercise Name:<input type = "text" 
							  name = "exerciseName"><br><br>
		Description: <input type = "text" 
							name = "description"><br><br>
		Demonstration Image: <input type = "file"
								  name = "demonstrationImage"><br><br>
		
		<input type = "submit"
				value = "Submit"
			   name = "submit"><br><br>
	</form>
</html>

<?php
    }else{
		echo("You are not authorised to add exercises as your user role is not 2!!");}
		?>
		</br></br><a href="insert-user-form.php">Insert User</a></br></br>
		<a href="insert-program-item-form.php">Insert Program item</a></br></br>
		<a href="logout.php">Log Out</a>
		<?php
	}else{
		echo("Please Login to add new exercises!");
		?></br><a href="login-user-form.php">Login</a><?
	}

?>