<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices</title>
</head>
<body>

<?php
	// Exercice 1 :
	// Afficher un "Hello World" dans une balise H1
	echo "<h1>Hello World</h1>";
	
	// Exercice 2 :
	// Modifier le code pour calculer la moyenne des notes
	$note_maths = 15;
	$note_francais = 12;
	$note_histoire_geo = 9;
	$moyenne = ($note_maths+$note_francais+$note_histoire_geo)/3;
	echo 'La moyenne est de '.$moyenne.' / 20.';
	
	// Exercice 3 :
	/* Avec une boucle FOR, affichez 15 fois "J'adore le PHP"
	avec le numéro de la ligne à coté*/
	echo "<br>";
	echo "<br>";
	for ($i=1; $i <= 15; $i++) { 
		echo $i." - J'adore le PHP <br>";
	}

	// Exercice 4 :
	/* Imaginons : on a un budget de 1500€ et on souhaite 
	acheter un produit à 1800€. Afficher si le budget le
	permet en le vérifiant avec une condition IF */
	echo "<br>";

	$budget = 1500;
	$produit = 1800;

	if($budget < $produit){
		echo "Désolé, mais on peut pas se payer ce produit";
	}else{
		echo "Génial ! Le produit est à nous !";
	}

	// Exercice 5 :
	// Afficher le 3ème élément de ce tableau
	echo "<br>";
	echo "<br>";

	$fruits = array('papaye', 'mangue', 'litchi', 'kaki', 'avocat');

	echo $fruits[3];

	// Exercice 6 :
	/* Compléter la fonction qui permet de convertir
	des euros en dollars pour un prix donné */
	echo "<br>";
	echo "<br>";

	$euros = 20;
	
	echo converDollar($euros)."$";

	function converDollar($prixEnEuros){
		// Prix de conversion en mars 2021
		$prixDollar = $prixEnEuros*1.1970;
		return $prixDollar;
	}

?>

	
</body>
</html>