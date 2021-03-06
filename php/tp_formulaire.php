<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TP</title>
	<style type="text/css">
		table, td {
		  border: 1px solid black;
		}

	</style>
</head>
<body>


	<h2>Ajouter un nouveau commentaire</h2>
	<p>Veuillez renseigner tous les champs.</p>

	<form action="tp_traitement.php" method="POST">
	  <label for="nom">Votre nom :</label>
	  <br>
	  <input type="text" id="nom" name="nom" required>
	  <br><br>

	  <label for="prenom">Votre prénom :</label>
	  <br>
	  <input type="text" id="prenom" name="prenom" required>
	  <br><br>

	  <label for="ville">Votre ville de naissance :</label>
	  <br>
	  <input type="text" id="ville" name="ville" required>
	  <br><br>

	  <label for="message">Votre message :</label>
	  <br>
	  <textarea id="message" name="message" rows="4" cols="50" required></textarea>

	  <br><br>

	  <input type="submit" value="Envoyer le commentaire">

	</form>


</body>
</html>