<?php
	// On initie la session
    session_start();

    // On détruit toutes les variables de session
    session_destroy();

    // On redirige vers la page de connexion, car ici il n'y a rien à voir
    header ('location: session_login.php');
 ?>