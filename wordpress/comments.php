<div id="commentaires" class="comments">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments__title">
            <?php 
                echo get_comments_number();
                $nombre_comment = get_comments_number();
            ?> 
            commentaire<?php if ( $nombre_comment > 1 ){ echo "s"; }?>
        </h2>
    
        <ol class="comment__list">
            <?php            	
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 44,
                ) );
            ?>
        </ol>
        
        <?php 
    		
    		if ( ! comments_open() && get_comments_number() ) : 
    	?>
        <p class="comments__none">
            Il n'y a pas de commentaires pour le moment. Soyez le premier à en écrire un !
    	</p>
        <?php endif; ?>
    <?php endif; ?>
 
    <?php comment_form(); ?>
</div>