<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulaires</title>
	<style type="text/css">
		table, td {
		  border: 1px solid black;
		}

	</style>
</head>
<body>


	<h2>Transmission via URL avec GET</h2>

	<form action="traitement_form.php" method="GET">
	  <label for="prenom">Prénom:</label>
	  <br>
	  <input type="text" id="prenom" name="prenom">
	  <br><br>
	  <label for="nom">Nom:</label>
	  <br>
	  <input type="text" id="nom" name="nom">
	  <br><br>

	  <input type="submit" value="Envoyer">
	</form>

	
	<hr>

	<h2>Transmission via formulaire avec POST</h2>
	<form action="traitement_form.php" method="POST">
	  <label for="login">Login:</label>
	  <br>
	  <input type="text" id="login" name="login">
	  <br><br>
	  <label for="mdp">Mot de passe:</label>
	  <br>
	  <input type="password" id="mdp" name="mdp">
	  <br><br>

	  <input type="submit" value="Envoyer">

	</form>


</body>
</html>