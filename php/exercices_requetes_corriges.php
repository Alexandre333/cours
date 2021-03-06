<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercices corrigés SQL</title>
</head>
<body>
	
<?php
	// Récupérer et installer la table "prenoms_19.sql" de données sur PHPMyAdmin

	// On fait appel au fichier pour la connexion à la BDD
	include('bdd_connexion.php');

	echo '<h1>Les prénoms les plus donnés en France en 2019</h1>';

	echo '<h2>Exo 1 :</h2>';

	// Afficher les données dans un tableau avec deux colonnes
	// Récupération des données
  	$request = "SELECT * FROM `prenoms_19`";
    $resultat = mysqli_query($connexion, $request) or die(mysqli_error($connexion));

    //Affichage dans un tableau
    $nb_resultat = mysqli_num_rows($resultat);
	if($nb_resultat > 0){

		echo "<table border='1'>";
		echo "<tr><th>Prénom</th><th>Nombre de naissances</th></tr>";
		while ($row=mysqli_fetch_assoc($resultat)) {
	    	echo "<tr><td>".utf8_encode($row['prenom'])."</td><td>".$row['nb_naissance']."</td></tr>";
	    }
		echo "</table>";
	}

	echo '<h2>Exo 2 :</h2>';
	// Afficher toutes les lignes avec une phrase du style :
	// "Le prénom Gabriel a été donné 5010 fois en 2019."
	
	// Récupération des données
  	$request2 = "SELECT * FROM `prenoms_19`";
    $resultat2 = mysqli_query($connexion, $request2) or die(mysqli_error($connexion));

	while ($row=mysqli_fetch_assoc($resultat2)) {
    	echo "Le prénom ".utf8_encode($row['prenom'])." a été donné ".$row['nb_naissance']." fois en 2019.<br>";
	}

	echo '<h2>Exo 3 :</h2>';
	// Créer un formulaire pour ajouter un nouveau prénom dans la BDD

?>

<form action="exercices_requetes_corriges.php" method="POST">
	<label for="prenom">Prénom :</label> 
	<br>
	<input type="text" id="prenom" name="prenom">
	<br><br>
	<label for="fois">Nombre de fois :</label> 
	<br>
	<input type="text" id="fois" name="fois">
	<br><br>

	<input type="submit" value="Ajouter">
</form>

<?php

	// Transmission via formulaire avec POST
	if(isset($_POST['prenom'])){
		$prenom = $_POST['prenom'];
	}else{
		$prenom = "";
	}

	if(isset($_POST['fois'])){
		$fois = $_POST['fois'];
	}else{
		$fois = "";
	}
	
	if (!empty($prenom) && !empty($fois)){
		// On crée un requête pour ajouter la nouvelle tuple
		$request3 = "INSERT INTO `prenoms_19` (`prenom`, `nb_naissance`) VALUES ('".$prenom."', '".$fois."');";

		$resultat3 = mysqli_query($connexion, $request3) or die(mysqli_error($connexion));

		echo "Nouveau prénom ajouté !";

	}

	echo '<h2>Exo 4 :</h2>';
	// Afficher le nombre de prénoms qui ont été donnés plus de 3800 fois 

	$request4 = "SELECT * FROM `prenoms_19` WHERE nb_naissance > 3800";
    $resultat4 = mysqli_query($connexion, $request4) or die(mysqli_error($connexion));

    //Affichage dans un tableau
    $nb_resultat = mysqli_num_rows($resultat4);
    echo "Il y a ".$nb_resultat." prénoms avec plus de 3800 naissances";
?>

</body>
</html>