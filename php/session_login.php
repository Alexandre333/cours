<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>

	<?php
		// Si l'utilisateur est déjà connecté, on le redirige vers la page 1
		if(isset($_SESSION['login'])){
			header("location: session_page1.php");
		}

		// Si l'utilisateur a envoyé le formulaire
		if (isset($_POST['submit'])){

			// On récupère les valeurs de nos champs
			if(isset($_POST['login'])){
				$login = $_POST['login'];
		    }else{
		        $login = "";
		    }

		    if(isset($_POST['mdp'])){
	        	$password = $_POST['mdp'];
			}else{
				$password = "";
			}

			// On vérifie si le login et le mot de passe sont bons
			if($login == 'root' && $password == 'root'){
		    	// Oui, donc on initie la session
		    	session_start();

		    	// On assigne des valeurs dans les variables de session
				$_SESSION['login'] = "Alex";
				$_SESSION['mdp'] = $password;

				// On redirige l'utilisateur vers la page 1
				header("location: session_page1.php");
			}
		}
	?>

	<h1>Login</h1>

	<form action="session_login.php" method="POST">
		<label for="login">Votre identifiant :</label>
		<br>
		<input type="password" name="login" id="login">
		<br>
		<br>
		<label for="mdp">Votre mot de passe :</label>
		<br>
		<input type="password" name="mdp" id="mdp"><br>
		<br>
		<input type="submit" name="submit" value="Se connecter">

	</form>
	
</body>
</html>
