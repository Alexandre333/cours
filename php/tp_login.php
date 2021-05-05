<?php
	// On initie la session
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>

	<?php
		// Si l'utilisateur est déjà connecté, on le redirige vers le back-office
		if(isset($_SESSION['login'])){
			header("location:tp_admin.php");
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

		    	// On crée notre variable de session
		    	$_SESSION['login'] = "Alex";

				// On redirige l'utilisateur vers le back-office
				header("location: tp_admin.php");
			}else{
				echo "Erreur lors de la connexion";
			}
		}
	?>

	<h1>Login au back-office</h1>

	<form action="tp_login.php" method="POST">
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
