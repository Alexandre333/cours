<?php 
/* 
Template Name: category-mieux-manger 
*/ 
?>

<?php get_header(); ?>

<aside class="site__sidebar rightcolumn border p-1">
   	<ul>
      	<?php dynamic_sidebar('blog-sidebar'); ?>
    </ul>
</aside>

<div class="container">
	<h1>Mes articles sur le 'Mieux manger'</h1>
	<p>Ma page category-mieux-manger.php</p>

	<?php 
		$url_img = get_template_directory_uri().'/assets/img/brunch.png';
	?>
	<img src="<?php echo $url_img; ?>" class="imgmieuxmanger">
	<br>
	<?php
		// On vérifie s'il existe des posts
		if(have_posts()){
			// Oui, alors on parcourt chaque post (article)
			while(have_posts()){
				// on récupère toutes les données du post
				the_post();

				// on commence à afficher les données en HTML
	?>
				<div class="card border-dark mb-3">
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
							Article publié le <?php the_time( get_option( 'date_format' ) ); ?>
						</li>
						<li class="list-group-item">
							Article écrit par <?php the_author(); ?>
						</li>
						<li class="list-group-item">
							Il y a <?php comments_number(); ?>
						</li>

						<li class="list-group-item">
							Dans la catégorie : <?php the_category(', '); ?>
						</li>

						<li class="list-group-item">
							Avec les étiquettes : <?php the_tags(' ', ', '); ?>
						</li>
					</ul>

					<div class="card-body">
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire l'article</a>
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