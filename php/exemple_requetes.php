<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>SQL</title>
</head>
<body>
	
<?php
	
	// On fait appel au fichier pour la connexion à la BDD
	include('bdd_connexion.php');

	echo '<h2>Exemples avec SELECT</h2>';

  	// Requête pour récupérer tous les titres de notre table
  	$request = 
  		"SELECT * FROM `titres`";

    $resultat = mysqli_query($connexion, $request) or die(mysqli_error($connexion));
    
    $nb_resultat = mysqli_num_rows($resultat);
    
	if($nb_resultat > 0){

		echo "<h3>On affiche tout</h3>";
		while ($row=mysqli_fetch_array($resultat)) {
	    	echo "ID n°".$row['IDTitre']." - La musique '".utf8_encode($row['Nom'])."' a été composée par ".$row['Nom_musicien']." et elle dure ".str_replace(".",":",$row['Duree'])." minutes. <br>";
	    }
	}


	// Requête pour récupérer que les titres des Daft Punk
  	$request2 = 
  		"SELECT * FROM `titres` WHERE `Nom_musicien` = 'Daft Punk'";

    $resultat2 = mysqli_query($connexion, $request2) or die(mysqli_error($connexion));
    
    $nb_resultat2 = mysqli_num_rows($resultat2);
    
	if($nb_resultat2 > 0){

		echo "<h3>On affiche que les musiques de Daft Punk</h3>";
		while ($row=mysqli_fetch_array($resultat2)) {
	    	echo "La musique '".utf8_encode($row['Nom'])."' a été composée par ".$row['Nom_musicien']." et elle dure ".str_replace(".",":",$row['Duree'])." minutes. <br>";
	    } 
	}


	// Requête pour récupérer que les titres supérieurs à 5 minutes
  	$request3 = 
  		"SELECT * FROM `titres` WHERE `Duree` > 5";

    $resultat3 = mysqli_query($connexion, $request3) or die(mysqli_error($connexion));
    
    $nb_resultat3 = mysqli_num_rows($resultat3);
    
	if($nb_resultat3 > 0){

		echo "<h3>On affiche que les musiques supérieures à 5 minutes</h3>";
		while ($row=mysqli_fetch_array($resultat3)) {
	    	echo "La musique '".utf8_encode($row['Nom'])."' a été composée par ".$row['Nom_musicien']." et elle dure ".str_replace(".",":",$row['Duree'])." minutes. <br>";
	    } 
	}

	echo '<br>';
	echo '<h2>Exemple avec INSERT INTO</h2>';
?>

<form action="exemple_requete.php" method="POST">
	<label for="titre">Nom du titre :</label> 
	<br>
	<input type="text" id="titre" name="titre">
	<br><br>
	<label for="musicien">Musicien :</label> 
	<br>
	<input type="text" id="musicien" name="musicien">
	<br><br>
	<label for="duree">Durée :</label> 
	<br>
	<input type="number" step=0.01 id="duree" name="duree">
	<br><br>

	<input type="submit" value="Ajouter">
</form>

<?php 
	// Transmission via formulaire avec POST
	if(isset($_POST['titre'])){
		$titre = $_POST['titre'];
	}else{
		$titre = "";
	}

	if(isset($_POST['musicien'])){
		$musicien = $_POST['musicien'];
	}else{
		$musicien = "";
	}

	if(isset($_POST['duree'])){
		$duree = $_POST['duree'];
	}else{
		$duree = "";
	}
	
	if (!empty($titre) && !empty($musicien) && !empty($duree)){
		// On crée un requête pour ajouter la nouvelle tuple
		$request4 = "INSERT INTO `titres` (`Nom`, `Nom_musicien`, `Duree`) VALUES ('".$titre."', '".$musicien."', ".$duree.");";

		$resultat4 = mysqli_query($connexion, $request4) or die(mysqli_error($connexion));

		echo "La nouvelle musique a été ajoutée !";

	}

?>

<br>
<h2>Exemple avec UPDATE</h2>
<p>Mettre à jour le nom du titre grâce à l'ID du titre</p>
<form action="exemple_requete.php" method="POST">
	<label for="titre_id">ID du titre</label> 
	<br>
	<input type="text" id="titre_id" name="titre_id">
	<br><br>

	<label for="titre_new">Nouveau nom de titre:</label> 
	<br>
	<input type="text" id="titre_new" name="titre_new">
	<br><br>

	<input type="submit" value="Mettre à jour">
</form>

<?php 
	// Transmission via formulaire avec POST
	if(isset($_POST['titre_id'])){
		$titre_id = $_POST['titre_id'];
	}else{
		$titre_id = "";
	}

	if(isset($_POST['titre_new'])){
		$titre_new = $_POST['titre_new'];
	}else{
		$titre_new = "";
	}

	if (!empty($titre_id) && !empty($titre_new)){
		// On crée un requête pour modifier une tuple précise
		$request5 = "UPDATE titres SET Nom = '".$titre_new."' WHERE IDTitre = ".$titre_id;	

		$resultat5 = mysqli_query($connexion, $request5) or die(mysqli_error($connexion));

		echo "Le nom du titre a été updaté !";
	}

?>

<br>
<h2>Exemple avec DELETE</h2>
<p>Supprimer un titre grâce à son ID</p>
<form action="exemple_requete.php" method="POST">
	<label for="titre_id_suppr">ID du titre à supprimer</label> 
	<br>
	<input type="text" id="titre_id_suppr" name="titre_id_suppr">
	<br><br> 
	<input type="submit" value="Supprimer">
</form>

<?php 
	// Transmission via formulaire avec POST
	if(isset($_POST['titre_id_suppr'])){
		$titre_id_suppr = $_POST['titre_id_suppr'];
	}else{
		$titre_id_suppr = "";
	}

	if (!empty($titre_id_suppr)){
		// On crée un requête pour modifier une tuple précise
		$request6 = "DELETE FROM titres WHERE IDTitre = ".$titre_id_suppr;

		$resultat6 = mysqli_query($connexion, $request6) or die(mysqli_error($connexion));

		echo "Le titre a été supprimé !";
	}

?>

</body>
</html>