<?php 
/*
Template Name: single
*/

?>

<?php get_header(); ?>

<aside class="site__sidebar rightcolumn border p-1">
   	<ul>
      	<?php dynamic_sidebar('blog-sidebar'); ?>
    </ul>
</aside>

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
					Article publié le <?php the_time( get_option( 'date_format' ) ); ?>
					par <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?> <?php the_author(); ?>
				</p>
				<p>
					Il y a <?php comments_number(); ?> dans cet article					
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
						Dans la catégorie : <?php the_category(', '); ?>

						<?php 
							if(the_tags()){
								echo "Avec les étiquettes :".the_tags(' ');
							}

						?>

					</p>
					
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