
<?php
/** Put form data into database table */
$exerciseName = $_POST["exerciseName"];
$image = $_POST["demonstrationImage"];
$description = $_POST["description"];

$dsn = "mysql:host=localhost;dbname=mathmari_TrainerApp";

$dbUsername = "mathmari_Trainer";
$dbPassword = "Emmanuel1997&&";

$pdo = new PDO($dsn, $dbUsername, $dbPassword); 

$stmt = $pdo->prepare("INSERT INTO `exercise` (`exerciseId`, `exerciseName`,`demoImage`, `description`) 
						VALUES (NULL, '$exerciseName','$image', '$description');");
$stmt->execute();

?>
</br><a href="insert-user-form.php">Insert User</a><br></br>
	<a href="insert-exercise-form.php">Insert Exercise</a></br></br>
	<a href="insert-program-item-form.php">Insert Program item</a></br></br>
	<a href="logout.php">Log Out</a>