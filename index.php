<?php get_header(); ?>
<main class="main">
	<div class="content container">
		<div class="posts-container">
			<?php if( have_posts() ): ?>
				<?php while( have_posts() ): ?>
					<?php the_post(); ?>
					<?php get_template_part( 'template_parts/post' ); ?>
				<?php endwhile; ?>
				<div class="pagination-blog">
					<?php previous_posts_link();?>
					<?php next_posts_link(); ?>
				</div>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>

</main>
<?php get_footer(); ?>