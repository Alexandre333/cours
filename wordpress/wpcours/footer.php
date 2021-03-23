<?php 
/* 
Template Name: footer 
*/ 
?>
<br>
<footer class="footer_template">
	<div class="container">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-footer',
					'menu_id'        => 'menu-footer',
					'container' => 'ul',
					'menu_class' => 'menu',
				)
			);
		?>
		<br>
		<br>
		<p>Mon super site en WordPress</p>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
