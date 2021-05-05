<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Traitement.php</title>

	<style type="text/css">
		table, td {
		  border: 1px solid black;
		}

	</style>
</head>
<body>

<?php
	
	// On prépare la connexion à la base de données
	$host="localhost";
	$database="cours";
	$user="root";
	$passwd="";

	$connexion = mysqli_connect($host, $user, $passwd, $database);
	
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

	// On récupère les données du formulaire avec un minimum de sécurité
	if(isset($_POST['nom'])){
		$nom = $_POST['nom'];
	}else{
		$nom = "";
	}

	if(isset($_POST['prenom'])){
		$prenom = $_POST['prenom'];
	}else{
		$prenom = "";
	}

	if(isset($_POST['ville'])){
		$ville = $_POST['ville'];
	}else{
		$ville = "";
	}

	if(isset($_POST['message'])){
		$message = $_POST['message'];
	}else{
		$message = "";
	}
	

	// Tous les champs sont obligatoires sinon l'utilisateur doit compléter le formulaire
	if (!empty($nom) && !empty($prenom) && !empty($ville) && !empty($message)){
		
		// On prépare la requête pour envoyer les données dans la BDD
		$request1 = "INSERT INTO `commentaires` (`Nom`, `Prenom`, `Ville`, `Message`) VALUES ('".$nom."', '".$prenom."', '".$ville."', '".$message."');";

		$resultat1 = mysqli_query($connexion, $request1) or die(mysqli_error($connexion));

		echo "<p>Votre commentaire a bien été pris en compte !</p>";
	
	}

?>
	
</body>
</html>
