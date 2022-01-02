<?php

/**
 * Site constants
 */
define( 'SITE_NAME', 'Child' );
define( 'SITE_SLUG', 'child' );
define( 'REMOTE_URL', 'https://google.com/' );
define( 'THEME_VERSION', '1' );
define( 'THEME_ENV', 'dev' );
define( 'THEME_ASSETS', get_stylesheet_directory_uri() . '/assets/' ); 
define( 'THEME_INCLUDES', get_stylesheet_directory() . '/includes/' ); 

/** 
 * Init Theme
*/
function enfold_child_setup() {  
	add_theme_support( 'avia_template_builder_custom_post_type_grid' );
	add_theme_support( 'add_avia_builder_post_type_option' );
	add_theme_support( 'deactivate_layerslider' );

	remove_filter( 'the_title', 'wptexturize' );
	remove_filter( 'avia_ampersand', 'avia_ampersand' );
	remove_action( 'init', 'portfolio_register' );
	 
	add_filter( 'kriesi_backlink', '__return_false' );

	update_option( 'image_default_size', 'full' );

	add_filter( 'wp_img_tag_add_srcset_and_sizes_attr', '__return_false' );
}
add_action( 'after_setup_theme', 'enfold_child_setup', 51 );

/**
 * Enqueue scripts and styles.
 */
function enfold_child_scripts() {
	wp_enqueue_style( 'avia-module-main', THEME_ASSETS . 'css/main.css', array(), THEME_VERSION, 'all' );
	wp_enqueue_script( 'avia-module-main', THEME_ASSETS . 'js/main.js', array(), THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'enfold_child_scripts', 100 );

function enfold_child_admin_scripts() {
	wp_enqueue_style( 'main-admin', THEME_ASSETS . 'css/dist/admin.css', array(), THEME_VERSION, 'all' );
}
add_action( 'admin_enqueue_scripts', 'enfold_child_admin_scripts', 100 );


function enfold_child_footer_assets() {
    ?>
    <link rel="stylesheet" href="<?php echo THEME_ASSETS; ?>css/body.css?v=<?php echo THEME_VERSION; ?>">
    <?php
}
add_action( 'wp_footer', 'enfold_child_footer_assets', 100 );

function enfold_child_ie_hook() {
	?>
	<script>
	if( window.MSInputMethodContext && document.documentMode ){
		document.write('<link rel="stylesheet" href="<?php echo THEME_ASSETS; ?>css/ie.css">');
	}
	</script>
	<?php
}
add_action( 'wp_head', 'enfold_child_ie_hook', 20, 1 );

require THEME_INCLUDES . 'theme-functions.php';
require THEME_INCLUDES . 'theme-shortcodes.php';
require THEME_INCLUDES . 'theme-hooks.php';
require THEME_INCLUDES . 'theme-ep-hooks.php';