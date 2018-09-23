
<?php
/** Put form data from 'insert-user-form.php' into database table user */
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];

$dsn = "mysql:host=localhost;dbname=mathmari_TrainerApp";

$dbUsername = "mathmari_Trainer";
$dbPassword = "Emmanuel1997&&";

$pdo = new PDO($dsn, $dbUsername, $dbPassword); 

$stmt = $pdo->prepare("INSERT INTO `user` (`userId`, `firstName`, `lastName`, `email`, `password`)
						VALUES (NULL, '$firstName', '$lastName', '$email', '$password');");

$stmt->execute();
?>
</br><a href="insert-user-form.php">Insert User</a><br></br>
	<a href="insert-exercise-form.php">Insert Exercise</a></br></br>
	<a href="insert-program-item-form.php">Insert Program item</a></br></br>
	<a href="logout.php">Log Out</a>