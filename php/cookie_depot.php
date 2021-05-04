<?php
	// On met en place le cookie pour cette page pour 1 mois
	setcookie('auteur_vue', 'Guy Delisle', time()+30*24*3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookie de publicité page 1</title>
</head>
<body>

	<h1>Résultat de recherche...</h1>
	<hr>
	<h2>Chroniques de jeunesse</h2>
	<h3>Guy Delisle (Dessinateur)</h3>

	<img src="https://static.fnac-static.com/multimedia/Images/FR/NR/90/5b/c1/12671888/1507-1/tsp20200911070415/Chroniques-de-jeunee.jpg" alt="image de couverture">

	<p>Vous ne le saviez peut-être pas mais avant d'être un célèbre auteur de bandes dessinées, le jeune étudiant Guy Delisle a travaillé trois étés dans une usine à papier. A partir de cette expérience de jeunesse, il dresse un portrait drôle et tendre du monde du travail et questionne les relations qu'il entretient avec son père, lui-même salarié dans l'usine.</p>

	<button>Acheter ce produit</button>

	<br>
	<br>
	<hr>
	<a href="cookie_lecture.php">Voir la partie marketing</a>
</body>
</html>