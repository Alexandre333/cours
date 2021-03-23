<?php 
/*
Template Name: single-recettes
*/

?>

<?php get_header(); ?>

<div class="container">
	<h1>
		<?php 
			// On met le titre de l'article ici
			the_title(); 
		?>
	</h1>

	<?php
		// On vérifie s'il existe des posts
		if(have_posts()){
			// Oui, alors on parcourt chaque post (article)
			while(have_posts()){
				// on récupère toutes les données du post
				the_post();

				// on commence à afficher les données en HTML
	?>
				<p>
					Recette publiée le <?php the_time( get_option( 'date_format' ) ); ?>
					par <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?> <?php the_author(); ?>
				</p>
				<p>
					Il y a <?php comments_number(); ?> dans cette recette					
				</p>

				
				<div class="card">
					<div class="img_illustration">
						<?php
							// On affiche l'image mise en avant de l'article 
							the_post_thumbnail(); 
						?>
					</div>
					<div class="card-body">
						<p class="card-text">
							<?php 
								// On met tout l'article ici
								the_content(); 
							?>							
						</p>
					</div>

					<p>
						Pour les moments suivants : <?php the_terms(get_the_ID() , 'moment-recettes', '', ', ', '.' ); ?>
					</p>
					<p>
						Nuage de mots-clés : <?php the_terms(get_the_ID() , 'motcle-recettes', '', ', ', '.' ); ?>
					</p>

					<div class="card text-white bg-primary mb-3">
						<div class="card-body">
							<h5 class="card-title">Notre avis</h5>
							<p class="card-text"><?php the_field('avis'); ?></p>
						</div>
						<hr>
						<div class="card-body">
							<div class="row">
								<div class="col-sm">
									<h5 class="card-title">La difficulté</h5>
									<p class="card-text"><?php the_field('difficulte'); ?></p>
								</div>
								<div class="col-sm">
									<h5 class="card-title">Le prix</h5>
									<p class="card-text"><?php the_field('prix'); ?>€</p>
								</div>
								<div class="col-sm">
									<h5 class="card-title">Le temps</h5>
									<p class="card-text"><?php the_field('temps_de_preparation'); ?></p>
								</div>
							</div>
						</div>					
					</div>
					
				</div>
				<?php comments_template(); ?>
				
	<?php
			}
		}
	?>

	<div class="pagination">
		<div class="avant">
			<?php previous_post_link('%link', '🠔 Article précédent' ); ?>
			
		</div>
		<div class="apres">
			<?php next_post_link('%link', 'Article suivant ➔' ); ?>
		</div>
	</div>
	<br>

	<?php get_template_part( 'template-parts/newsletter' ); ?>
	
</div>

<?php get_footer(); ?>