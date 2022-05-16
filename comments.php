<?php 
if( post_password_required() ){
	return;
}
if( have_comments() ){
	foreach ( $comments as $comment ) {
		?>
		<div class="comment">
			<div class="comment-avatar">
				<?php echo get_avatar( $comment, 50 ); ?>
				<span><?php comment_author( $comment->ID );?></span>
			</div>
			
			<?php comment_text(); ?>
		</div>
		<?php 
	}
}

comment_form();