<?php
global $post;
$header_class = $post && get_post_meta( $post->ID, "header_color", true ) ? get_post_meta( $post->ID, "header_color", true ) : ""; 
$header_class = apply_filters( 'avf_header_class_filter', $header_class );
?>

<div id="header" class="header <?php echo $header_class; ?>">
	<div class="header-inner">
		<div class="header-logo">
			<a href="<?php echo bloginfo('url'); ?>" class="logo">
				<?php echo do_shortcode("[logo]"); ?>
			</a>
		</div>
		<div class="header-menu">
			<?php
				$args = array(
					'theme_location'	=> 'avia',
					'menu_id' 			=> '',
					'menu_class'		=> 'main-menu',
					'container_class'	=> '',
					'fallback_cb' 		=> 'avia_fallback_menu',
					'walker' 			=> new avia_responsive_mega_menu()
				);
				wp_nav_menu( $args );
			?>
		</div>
		<button class="hamburger-toggle">
			<div class="burger-box"></div>
		</button>
	</div>
	<div class="hamburger-overlay"></div>
	<div class="hamburger-content">
		<div class="hamburger-content-inner">
			<?php
				$args = array(
					'theme_location'	=> 'avia',
					'menu_id' 			=> '',
					'menu_class'		=> 'main-menu',
					'container_class'	=> '',
					'fallback_cb' 		=> 'avia_fallback_menu',
					'walker' 			=> new avia_responsive_mega_menu()
				);
				wp_nav_menu( $args );
			?>
		</div>
	</div>
</div>