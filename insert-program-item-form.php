<?php 
	session_start();
	
	
	if(isset($_SESSION["role"])){
		if(($_SESSION["role"] == 2)){
	

		$dsn = "mysql:host=localhost;dbname=mathmari_TrainerApp";

		$dbUsername = "mathmari_Trainer";
		$dbPassword = "Emmanuel1997&&";

		$pdo = new PDO($dsn, $dbUsername, $dbPassword); 

		$stmt = $pdo->prepare("SELECT * FROM `user`");

		$stmt->execute();
?>

 
	<form action="process-insert-program-item-form.php" method="POST">
		User: <select name ="user" id="iduser">
	
				<option>Select</option>
				<?php
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {     
				echo "<option value=" . $row[userId] . ">" . $row[firstName] . "</option>";
				}
				?>
			</select>
		</br></br>

		
<?php

		$dsn = "mysql:host=localhost;dbname=mathmari_TrainerApp";

		$dbUsername = "mathmari_Trainer";
		$dbPassword = "Emmanuel1997&&";

		$pdo = new PDO($dsn, $dbUsername, $dbPassword); 

		$stmt = $pdo->prepare("SELECT * FROM `exercise`");

		$stmt->execute();
?>
			
		Exercise: <select name ="exercise" id="idexercise">
			<option>Select</option>
			<?php
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {     
				echo "<option value=" . $row[exerciseId] . ">" . $row[exerciseName] . "</option>";
				}
				?>
			</select>
		</br></br>
		  
	<input type="submit" value="Submit" name="submit">
  </form>
<?php
	}else{
		echo("You are not authorised to add exercises to user as your user role is not 2!!");}
		?>
		</br></br><a href="insert-exercise-form.php">Insert Exercise</a></br></br>
		<a href="insert-user-form.php">Insert User</a></br></br>
		<a href="logout.php">Log Out</a>
		<?php
	}
	else{
		echo("Please Login to add exercises to users!");
		?></br><a href="login-user-form.php">Login</a><?
	}

?>
  
