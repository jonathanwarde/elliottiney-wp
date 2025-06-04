<?php

add_action( 'after_setup_theme', function() {
    add_theme_support( 'post-thumbnails', [ 'post', 'page', 'project' ] );
});
// NOTE: no longer attempting next js build on server due to memory issues - now building and deploying locally
//require_once get_template_directory() . '/functions/nextjsbuildhook.php';

require_once get_template_directory() . '/functions/custom-post-types/project.php';
require_once get_template_directory() . '/functions/custom-post-types/testimonial.php';

require_once get_template_directory() . '/functions/enqueue-scripts.php';
require_once get_template_directory() . '/functions/acf/blocks/acf-blocks.php';