<article class="article">
	<div class="comment-bal">
		
		<?php comments_number('0 Comentários','1 Comentário', '% Comentários') 
		?>
		
	</div>
	<a href="<?php the_permalink(); ?>">
		<?php 
			if( has_post_thumbnail() ){
				the_post_thumbnail( 'large' );
			}
		?>
		<div class="post-author-info">
			<span><?php echo get_the_date(); ?>, <?php the_author(); ?></span>
		</div>
		<div class="post-title">
			<?php the_title( $before = '<h3>', $after = '</h3>', $echo = true ) ?>
		</div>
		<div class="post-excerpt">
			<?php the_excerpt(); ?>
		</div>
	</a>
</article>