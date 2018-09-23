<?php

	session_start();

$username = $_POST['userName'];
$password = $_POST['password'];

$dsn = "mysql:host=localhost;dbname=mathmari_TrainerApp";

$dbUsername = "mathmari_Trainer";
$dbPassword = "Emmanuel1997&&";

$pdo = new PDO($dsn, $dbUsername, $dbPassword); 

$stmt = $pdo->prepare("
	SELECT * 
	FROM `user`
	WHERE
	`firstName` = '$username' 
	AND `password` = '$password'");

$stmt->execute();

if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	
	$_SESSION['id'] = $row['userId'];
	$_SESSION['role'] = $row['userRole'];
	$_SESSION['username'] = $row['username'];
	echo ("User Id: ". $_SESSION['id']."</br></br>");
	echo ("User Role: ".$_SESSION['role']);
?>
	</br><a href="insert-user-form.php">Insert User</a><br></br>
	<a href="insert-exercise-form.php">Insert Exercise</a></br></br>
	<a href="insert-program-item-form.php">Insert Program item</a></br></br>
	<a href="logout.php">Log Out</a>
	
<?php
}else{
	echo("The username or password entered is invalid!. Please try again.");
	?>
	
	</br><a href="login-user-form.php">Login</a><br></br>
	<?php
}
?>