<?php
?>
<html> 
	<form action="process-login-user-form.php" method="POST">
		User name/ First Name: <input type="text"
						  name="userName"></br></br>
		Password: <input type="text"
						 name="password"></br></br>
				  <input type="submit"
						 name="submit"
						 value="Submit"></br></br>
	</form>
</html>
<?php


$dsn = "mysql:host=localhost;dbname=mathmari_TrainerApp";

$dbUsername = "mathmari_Trainer";
$dbPassword = "Emmanuel1997&&";

$pdo = new PDO($dsn, $dbUsername, $dbPassword); 

$stmt = $pdo->prepare("SELECT `firstName`, `password`, `userRole` FROM `user`" );

$stmt->execute();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
				echo("</br>"."Username :".$row[firstName]."</br>"."Password: ".$row[password]."</br>"."Userrole: ".$row[userRole]."</br></br>");
				
				}
				
?>