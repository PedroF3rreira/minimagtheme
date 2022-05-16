<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	<header class="header-site">
		<div class="header-top">
			<?php 
			if( has_nav_menu( 'secundary' ) ){
				wp_nav_menu( array(
					'theme_location'  => 'secundary',
					'container'       => 'div',
					'container_class' => 'menu-container container',
					'menu_class'      => 'menu-horizontal',
					'fallback_cb'     => false,
				) );
			}

			?>
		</div>
		<div class="header-center">
			<div class="container">
				<?php 
				if( has_custom_logo() ){
					the_custom_logo();
				}
				else{

					bloginfo();
				}
				?>
			</div>
		</div>
		<div class="header-bottom">
			
			<div class="header-bottom-nav container">
				<?php 
				if( has_nav_menu( 'primary' ) ){
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'container'       => 'nav',
						'container_class' => 'menu-container',
						'menu_class'      => 'menu-horizontal',
						'fallback_cb'     => false,
					) );
				}

				?>
				<div class="header-bottom-search">
					<?php get_search_form(); ?>
				</div>	
			</div>
			
			<div class="header-bottom-info container">
				<div class="text-info">
					<p>O que á de novo!</p>
				</div>
				<div class="social-info">
					<div class="title-social">
						<h3>Siga-nos:</h3>
					</div>
					<img src="<?php echo get_template_directory_uri().'/assets/img/instagram.png' ?>" alt="">
					<img src="<?php echo get_template_directory_uri().'/assets/img/gplus.png' ?>" alt="">
					<img src="<?php echo get_template_directory_uri().'/assets/img/facebook.png' ?>" alt="">
					<img src="<?php echo get_template_directory_uri().'/assets/img/youtube.png' ?>" alt="">
					<img src="<?php echo get_template_directory_uri().'/assets/img/twitter.png' ?>" alt="">
				</div>
			</div>
		</div>
	</header>
