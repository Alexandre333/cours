<?php
	// On initie la session
	session_start();

	// Si la variable de Session 'login' n'existe pas, on redirige vers la page de connexion.
	if(!isset($_SESSION['login'])){
		header("location:session_login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1 - les sessions en PHP</title>
</head>
<body>

	<h1>Page 1</h1>
	<h2>Hello <?php echo $_SESSION['login']; ?></h2>
	<a href="session_page2.php">Lien vers la page 2</a>
	<br>
	<br>
	<a href="session_logout.php">Se déconnecter</a>
</body>
</html>