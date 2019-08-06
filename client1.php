<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>post</title>
	</head>

<body>

<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=gestionstock', 'root','passe12');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO clients(numerodupci,nomdupci,sexe, telephone) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['numerodupci'], $_POST['nomdupci'], $_POST['sexe'], $_POST['telephone']));

if($req) echo"Clients Engeristre";
header('location: Clients.php');

?>


</body>
</html>