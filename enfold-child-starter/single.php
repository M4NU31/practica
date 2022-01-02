<?php

if ( !defined('ABSPATH') ){ die(); }
	
global $avia_config;

get_header();

do_action( 'ava_after_main_title' );

if( have_posts() ) :
	while( have_posts() ) : the_post();
	$post_id = get_the_ID();
	$post_title =  get_the_title( $post_id );

?>

<div class="single-hero-section avia-section alternate_color avia-section-huge avia-no-border-styling avia-builder-el-0 el_before_av_section avia-builder-el-first container_wrap fullsize">
	<div class="container">
		<div class="content">
			<h1><?php echo $post_title; ?></h1>
		</div>
	</div>
</div>

<div class="single-content-section avia-section main_color avia-section-default avia-no-border-styling container_wrap fullsize">
	<div class="container">
		<div class="content">
			<div class="entry-content-wrapper">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<?php

endwhile;
endif;

get_footer();

?>