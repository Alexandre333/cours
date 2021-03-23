<?php 
/* 
Template Name: archive-recettes
*/ 
?>

<?php get_header(); ?>

<div class="container">
	<?php 
		if(is_tax('moment-recettes')){
			$term_slug = get_queried_object()->name;
			$titreh1 = "Recettes pour : ".$term_slug;
		}else if(is_tax('motcle-recettes')){
			$term_slug = get_queried_object()->name;
			$titreh1 = "Mot-clé : ".$term_slug;

		}else{
			$titreh1 = "Mes délicieuses recettes";	
		}

	?>
	<h1 class="text-primary"><?php echo $titreh1; ?></h1>
	<p>Ma page archive-recettes.php</p>

	<?php
		// On vérifie s'il existe des posts
		if(have_posts()){
			// Oui, alors on parcourt chaque post (article)
			while(have_posts()){
				// on récupère toutes les données du post
				the_post();

				// on commence à afficher les données en HTML
	?>
				<div class="card mb-3 border-primary">
					<div class="img_illustration">
						<?php
							// On affiche l'image mise en avant de l'article 
							the_post_thumbnail(); 
						?>
					</div>
					<div class="card-body">
						<h4 class="card-title">
							<?php 
								// On met le titre de l'article ici
								the_title(); 
							?>								
						</h4>
						<p class="card-text">
							<?php 
								// On met l'extrait de l'article ici
								the_excerpt(); 
							?>							
						</p>
					</div>

					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							Recette publiée le <?php the_time( get_option( 'date_format' ) ); ?>
						</li>
						<li class="list-group-item">
							Recette par <?php the_author(); ?>
						</li>
						<li class="list-group-item">
							Il y a <?php comments_number(); ?>
						</li>
					</ul>

					<div class="card-body">
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la recette</a>
					</div>
				</div>
				
				<br>
	<?php
			}
		}
	?>
	
	<?php the_posts_pagination(); ?>
	<br>
</div>

<?php get_footer(); ?>
