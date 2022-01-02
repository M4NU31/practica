<?php
/**
 * Logo shortcode, place <svg> or <img> shortcode here, prefer SVG if logo is available in that format, it's not too heavy and it doens't include raster images in it. If those requeriments are not met fallback to a img element, use loading='lazy' and set alt equal to bloginfo( 'name' )
 */
add_shortcode( 'logo', function() {
    ob_start();
    ?>
        Logo
    <?php
    return ob_get_clean();
} );

add_shortcode( 'logo_alternate', function() {
    ob_start();
    ?>
    
    <?php
    return ob_get_clean();
} );