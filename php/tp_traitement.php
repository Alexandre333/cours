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
	
	// On récupère les données avec un minimum de sécurité
	if(isset($_POST['nom'])){
		$nom = htmlentities(urldecode($_POST['nom']));
	}else{
		$nom = "";
	}

	if(isset($_POST['prenom'])){
		$prenom = htmlentities(urldecode($_POST['prenom']));
	}else{
		$prenom = "";
	}

	if(isset($_POST['ville'])){
		$ville = htmlentities(urldecode($_POST['ville']));
	}else{
		$ville = "";
	}

	if(isset($_POST['message'])){
		$message = htmlentities(urldecode($_POST['message']));
	}else{
		$message = "";
	}
	

	// Tous les champs sont obligatoires sinon l'utilisateur doit compléter le formulaire
	if (!empty($nom) && !empty($prenom) && !empty($ville) && !empty($message)){
		
		// On vérifie si le nom de l'utilisateur est différent de "toto"
		if( $nom != "toto" ){
			// OK l'utilisateur ne s'appelle pas "toto"

			// On met la première lettre en majuscule pour le nom, le prénom et la ville
			$nom = premiereLettreMaj($nom);
			$prenom = premiereLettreMaj($prenom);
			$ville = premiereLettreMaj($ville);

			

			// On vérifie maintenant si le message contient le mot "hacker"
			if(strpos($message, "hacker") !== false){
				// Le message contient le mot
				$if_contain_hacker = "Oui";
			}else{
				// Le message ne contient pas le mot
				$if_contain_hacker = "Non";
			}

			// On vérifie si le nombre de caractères du message est supérieur à 100
			$nb_cars = strlen($message);
			if($nb_cars > 100){
				// Oui, le message a plus de 100 caractères
				$if_more_100 = "Oui";
			}else{
				// Non, le message ne contient pas plus de 100 caractères
				$if_more_100 = "Non";
			}

			// On récupère la date et l'heure de maintenant
			$date_heure = date("d-m-Y H:i"); 

			// On a toutes nos variables, on les mets dans un tableau associatif.
			$tableau_asso = array('Nom' => $nom, 'Prénom' => $prenom, 
			'Ville de naissance' => $ville, 'Message' => $message, 'Date et heure de l’envoi' => $date_heure, 'Caractères message > 100 ?' => $if_more_100, 'Contient le mot “hacker” ?' => $if_contain_hacker);

			// Afficher les valeurs dans un tableau HTML
			echo "<h1>Voici le tableau :</h1>";
			echo "<table>";

			// Une boucle FOREACH pour récupérer et afficher chaque ligne

			foreach($tableau_asso as $cle => $valeur){
				echo "<tr><td><b>".$cle."</b></td><td>".$valeur."</td></tr>";
			}

			echo "</table>";

		}else{
			// L'utilisateur s'appelle "toto", il ne peut pas voir son message
			echo "Désolé mais vous vous appelez Toto ! Pas de message pour vous !";
		}

	}else{
		echo "Tous les champs sont obligatoires, veuillez compléter le formulaire";
	}

	function premiereLettreMaj($textATraiter){
		// On met tout en minuscule
		$texte = strtolower($textATraiter);

		// On met la première lettre en majuscule
		$texte = ucfirst($texte);
	
		// On retourne la variable traitée
		return $texte;
	}
?>
	
</body>
</html>
