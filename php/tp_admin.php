<?php
	// On initie la session
	session_start();

	// Si la variable de Session 'login' n'existe pas, on redirige vers la page de connexion.
	if(!isset($_SESSION['login'])){
		header("location:tp_login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Back office TP</title>
</head>
<body>
	
	<h1>Les commentaires du site</h1>

	<?php

		// On prépare la connexion à la base de données
		$host="localhost";
		$database="cours";
		$user="root";
		$passwd="";

		$connexion = mysqli_connect($host, $user, $passwd, $database);
		
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		// Si l'utilisateur a demandé une suppression d'un commentaire
		// On récupère l'ID du commentaire via le GET
		if(isset($_GET['delete'])){
			$id_delete = $_GET['delete'];
			
			$request_del = "DELETE FROM commentaires WHERE IDCommentaire = ".$id_delete;

			$resultat_del = mysqli_query($connexion, $request_del) or die(mysqli_error($connexion));

		}


		// Requête pour récupérer et afficher les commentaires
		$request1 = 
			"SELECT * FROM `commentaires`";

		$resultat1 = mysqli_query($connexion, $request1) or die(mysqli_error($connexion));
		
		$nb_resultat1 = mysqli_num_rows($resultat1);
		
		if($nb_resultat1 > 0){

			// J'affiche les résultats dans un tableau HTML
			echo "<table border='1'>";
			echo "<tr>
					<th>Nom</th>
				  	<th>Prénom</th>
				  	<th>Ville</th>
				  	<th>Message</th>
				  	<th>Action</th>
				  </tr>";

			while ($row=mysqli_fetch_array($resultat1)) {

				echo "<tr>
						<td>".$row['Nom']."</td>
						<td>".$row['Prenom']."</td>
						<td>".$row['Ville']."</td>
						<td>".$row['Message']."</td>
						<td><a href='tp_admin.php?delete=".$row['IDCommentaire']."'>Supprimer</a></td>
					  </tr>";
			}

			echo "</table>";
		}else{
			echo "<p>Aucun commentaire à afficher !</p>";
		}



	?>

</body>
</html>