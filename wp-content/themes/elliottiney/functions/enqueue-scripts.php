<?php
function jw_youtube_embeds_block() {
    // Register (and enqueue) a script that depends on the editor packages
    wp_enqueue_script(
        'youtubeembed', 
        get_stylesheet_directory_uri() . '/template-parts/blocks/youtube/youtubeembed.js',
        array(
            'wp-blocks',       // registers wp.blocks
            'wp-dom-ready',    // ensures dom is ready
            'wp-edit-post'     // loads the editor context
        ),
        filemtime( get_stylesheet_directory() . '/template-parts/blocks/youtube/youtubeembed.js' ),
        true // load in footer
    );
}
add_action( 'enqueue_block_editor_assets', 'jw_youtube_embeds_block' );
