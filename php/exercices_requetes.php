<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercices SQL</title>
</head>
<body>
	
<?php
	// Récupérer et installer la table "prenoms_19.sql" de données sur PHPMyAdmin

	// On fait appel au fichier pour la connexion à la BDD
	include('bdd_connexion.php');

	echo '<h1>Les prénoms les plus donnés en France en 2019</h1>';

	echo '<h2>Exo 1 :</h2>';
	// Afficher les données dans un tableau avec deux colonnes


	echo '<h2>Exo 2 :</h2>';
	// Afficher toutes les lignes avec une phrase du style :
	// "Le prénom Gabriel a été donné 5010 fois en 2019."

	echo '<h2>Exo 3 :</h2>';
	// Créer un formulaire pour ajouter un nouveau prénom dans la BDD

	echo '<h2>Exo 4 :</h2>';
	// Afficher le nombre de prénoms qui ont été donnés plus de 3800 fois 

?>

</body>
</html>