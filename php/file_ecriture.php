<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ecriture et lecture d'un fichier</title>
</head>
<body>
	
	<?php
		/* ************************** */
		/* Pour le compteur de visite */
		/* ************************** */

		// Si le fichier "visiteurs.txt" existe, alors...
		if(file_exists('visiteurs.txt')){
			// On ouvre le fichier pour la lecture et l'écriture 
			$fic_visites = fopen('visiteurs.txt', 'r+');

			// On récupère le contenu du fichier texte dans une variable
			$nb_visites = fgets($fic_visites);
		}else{
			// Si pas de fichier dispo, on crée un fichier et on l'ouvre pour lecture et écriture
			$fic_visites = fopen('visiteurs.txt', 'a+');

			// On initialise la variable
			$nb_visites = 0;
		}

		// On incrémente notre variable, c-a-d on a une visite en plus
		$nb_visites++;

		// On place notre curseur au début du fichier
		fseek($fic_visites, 0);

		// On écrit dans notre fichier (ça écrase la précédente)
		fputs($fic_visites, $nb_visites);

		// On a terminé de travailler avec le fichier, on le ferme
		fclose($fic_visites);
		
		/* ******************************* */
		/* Pour la récupération d'un texte */
		/* ******************************* */

		// On ouvre le fichier en mode lecture seule
		$description = fopen('description.txt', 'r');

		// On récupère tout le contenu du fichier
		$description =  fread($description, filesize('description.txt'));
	?>

	<h1>Visiteurs</h1>
	<p>Il y a eu <?php echo $nb_visites; ?> visiteurs sur cette page !</p>

	<br>
	<p><?php echo $description; ?></p>
</body>
</html>