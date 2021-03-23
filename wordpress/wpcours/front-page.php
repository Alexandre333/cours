<?php 
/* 
Template Name: front-page 
*/ 
?>

<?php get_header(); ?>

<div class="container">
	<h1>Bienvenue sur mon site "<?php bloginfo('name'); ?>"!</h1>
	<h2>Tagline du site : <?php bloginfo('description'); ?></h2>

	<p>La page front-page</p>

	<?php get_search_form(); ?>

	<?php get_template_part( 'template-parts/newsletter' ); ?>
</div>

<?php get_footer(); ?>
