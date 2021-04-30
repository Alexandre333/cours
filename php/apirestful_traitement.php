<?php

	// 1 - Initiation de la ressource via la librairie cURL
	$curl = curl_init();

	// 2 - Déclaration du token et des urls
	$url_endpoint = "api.openweathermap.org/data/2.5/weather?";
	$param = "q=Paris,fr&units=metric&APPID=";
	$api_key = "votre token";

	$url_api = $url_endpoint.$param.$api_key;

	// 3 - Configuration des options en tableau
	$options = [
		CURLOPT_URL            => $url_api, // Notre URL d'API
		CURLOPT_RETURNTRANSFER => true, // Envoi des données dans une variable
		CURLOPT_CONNECTTIMEOUT => 15 // Secondes avant annulation de tentatives de connexions
	];

	// Assignation des options pour la ressource cURL
	curl_setopt_array($curl, $options);

	// 4 - Execution de la requête et conversion au format JSON
	$response_api = curl_exec($curl);

	// 5 - Fermeture de la connexion
	curl_close($curl);

	// 6 - On récupère la donnée souhaitée et on arrondit les valeurs
	$response_api_json = json_decode($response_api, true);
	$meteo_actuelle = round($response_api_json['main']['temp']);
	
	$humidite = round($response_api_json['main']['humidity']);
	$vent = round($response_api_json['wind']['speed'] * 2.802);

	// Affichage de toutes les données reçues
	//var_dump($response_api_json);

?>