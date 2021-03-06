<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Traitement form</title>
</head>
<body>

<?php

	// Transmission via URL avec GET
	if(isset($_GET['prenom'])){
		$prenom = $_GET['prenom'];
	}

	if(isset($_GET['nom'])){
		$nom = $_GET['nom'];
	}

	if(isset($prenom) AND isset($nom)){
		echo "<p><b>Via GET, mes valeurs sont</b> <br>";
		echo "Prénom : ".$prenom."<br>";
		echo "Nom : ".$nom."</p>";
	}
    

	// Transmission via formulaire avec POST
	if(isset($_POST['login'])){
		$login = htmlentities(urldecode($_POST['login']));
	}else{
		$login = "";
	}

	if(isset($_POST['mdp'])){
		$mdp = htmlentities(urldecode($_POST['mdp']));
		$mdp = sha1($mdp);
	}else{
		$mdp = "";
	}

	if (!empty($login) && !empty($mdp)){
		echo "<p><b>Via POST, mes valeurs sont</b> <br>";
		echo "Login : ".$login."<br>";
		echo "Mot de passe :"." ".$mdp."</p>";
	}
?>

<a href="formulaire.php">Retour aux formulaires</a>
	
</body>
</html>
