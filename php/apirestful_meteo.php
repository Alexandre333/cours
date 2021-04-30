<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Utilisation des API avec PHP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

	<?php include 'apirestful_traitement.php'; ?>

	<div class="container">
		<h1 class="text-center mt-4 mb-4">Le bulletin météo</h1>

		<div class="card bg-info mt-4" style="max-width: 50%; margin-left: auto; margin-right: auto;">
			<div class="card-header font-weight-bold text-center lead text-white">
				A Paris
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Il fait actuellement <?php echo $meteo_actuelle; ?>°</li>
				<li class="list-group-item">L'humidité est de <?php echo $humidite; ?>%</li>
				<li class="list-group-item">Le vent souffle à environ <?php echo $vent; ?> km/h</li>
			</ul>
		</div>

	</div>
	
</body>
</html>