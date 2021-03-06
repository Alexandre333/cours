<?php
	// Connexion à la base de données
	$host="localhost";
	$database="cours";
	$user="root";
	$passwd="";

	$connexion = mysqli_connect($host, $user, $passwd, $database);
	
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

?>