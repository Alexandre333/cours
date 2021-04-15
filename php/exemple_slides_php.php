<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

		echo "<h2>Boucle while</h2>";

		$a = 1;

		while($a <= 5){
			echo $a;
			echo "<br>";

			$a++;
		}

		echo '<hr>';
		echo "<h2>Boucle for</h2>";

		for($b = 1; $b <= 5; $b++){
			echo $b;
			echo "<br>";
		}


		echo '<hr>';
		echo "<h2>Boucle foreach</h2>";

		$artiste = array('Mozart', "Verdi", "Vivaldi");

		foreach($artiste as $key => $value){

			echo "A la ligne n°".$key.", j'ai la valeur : ".$value."<br>";

		}

		echo '<hr>';
		echo "<h2>Tableau numéroté</h2>";

		$artiste_num = array('Mozart', "Verdi", "Vivaldi");
		//echo $artiste_num[1];

		/*echo "<table border='1'>";

		foreach($artiste_num as $key => $value){
			echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
		}

		echo "</table>";*/

		// Ajout d'un nouvel élément
		array_push($artiste_num, "Liszt");

		// Supprimer un élément
		//array_splice($artiste_num, 1, 1);

		echo '<table border="1">';

		foreach($artiste_num as $value){
			echo "<tr><td>".$value."</td></tr>";
		}

		echo '</table>';


		echo '<hr>';
		echo "<h2>Tableau associatif</h2>";

		$tableau_asso = array('Mozart' => 'Autrichien', 'Vivaldi' => 'Italien', 'Beethoven' => 'Allemand', 'Verdi' => 'Italien');

		foreach($tableau_asso as $key => $value){
			echo "<p>L'artiste ".$key." est ".$value.'</p>';
		}


		echo '<hr>';
		echo "<h2>Ma fonction direBonjour</h2>";

		echo direBonjour('Alex');
		echo direBonjour('Chandler');
		echo direBonjour('Monica');

		function direBonjour($prenom){
			$phrase = "Bonjour, ".$prenom."<br>";
			
			return $phrase;
		}

		echo '<hr>';
		echo "<h2>Ma fonction Mettre en majuscule</h2>";

		$texte_en_maj = "jE Suis uNe MAJUSCULE";
		echo "Texte original : ".$texte_en_maj;

		echo '<br>';

		echo "Texte modifié : ".mettreEnMin($texte_en_maj);

		function mettreEnMin($textATraiter){

			// Je vais mettre tout en miniscule
			$texte = strtolower($textATraiter);

			// Premier caractère en maj
			$textefinal = ucfirst($texte);

			return $textefinal;

		}
	?>

	
</body>
</html>