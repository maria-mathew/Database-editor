
<?php
/** Put form data into database table */
$user = $_POST["user"];
$exercise = $_POST["exercise"];

$dsn = "mysql:host=localhost;dbname=mathmari_TrainerApp";

$dbUsername = "mathmari_Trainer";
$dbPassword = "Emmanuel1997&&";

$pdo = new PDO($dsn, $dbUsername, $dbPassword); 

$stmt = $pdo->prepare("INSERT INTO `user_exercise_program` (`exerciseId`, `userId`) 
									VALUES ( '$exercise', '$user');");

$stmt->execute();

?>
</br><a href="insert-user-form.php">Insert User</a><br></br>
	<a href="insert-exercise-form.php">Insert Exercise</a></br></br>
	<a href="insert-program-item-form.php">Insert Program item</a></br></br>
	<a href="logout.php">Log Out</a>