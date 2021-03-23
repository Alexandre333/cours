<?php 
/* 
Template Name: header 
*/ 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>

<body>

<!--<div class="header_template">
	<?php
		/*wp_nav_menu(
			array(
				'theme_location' => 'menu-header',
				'menu_id'        => 'menu-header',
				'container' => 'ul',
				'menu_class' => 'menu',
			)
		);*/
	?>
</div>-->

<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'menu-header',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>

<br>