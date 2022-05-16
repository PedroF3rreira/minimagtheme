<?php get_header(); ?>
<main class="main">
	<div class="content container">
		<div class="posts-container full-width">
			<?php if( have_posts() ): ?>
				<?php while( have_posts() ): ?>
					<?php the_post(); ?>
					
					<article class="article single">
						
						<div class="single-image">
							<?php 
							if( has_post_thumbnail() ){
								the_post_thumbnail( 'large' );
							}
							?>
						</div>
						<div class="post-author-info">
							<span><?php echo get_the_date(); ?>, <?php the_author(); ?></span>
						</div>
						
						<div class="post-title">
							<?php the_title( $before = '<h3>', $after = '</h3>', $echo = true ) ?>
						</div>

						<div class="post-excerpt">
							<?php the_content(); ?>
						</div>
					</a>
					<div class="comments-number">
						<?php 
						comments_number( '0 Comentários', 'um Commentário', '% Comentários' ); 
						?>
					</div>
					<div class="comments">
						<?php 
						if( comments_open() ){
							comments_template();
						}
						?>
					</div>
					</article>	
					
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="pagination-blog">
				<div><?php previous_post_link(); ?></div>
				<div><?php next_post_link(); ?></div>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>

</main>
<?php get_footer(); ?>