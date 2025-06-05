<?php
/**
 * Enqueue and localize a custom block‐editor script that exposes `whitelistedBlocks`.
 */

function jw_enqueue_gutenblocks_script() {
    $handle    = 'allowed-guttenberg-blocks-js';
    $src       = get_stylesheet_directory_uri() . '/js/allowed-guttenberg-blocks.js';
    $version   = filemtime( get_stylesheet_directory() . '/js/allowed-guttenberg-blocks.js' );
    wp_enqueue_script(
        $handle,
        $src,
        array( 'wp-blocks', 'wp-element', 'wp-i18n', 'wp-editor' ), // Gutenberg dependencies
        $version,
        true // load in footer
    );
    $localized_data = array();
    $localized_data = apply_filters( 'my_localized_gutenblock_data_filter', $localized_data );
    wp_localize_script( $handle, 'gutenblockHelpers', $localized_data );
}
add_action( 'enqueue_block_editor_assets', 'jw_enqueue_gutenblocks_script' );

/**
 * Populate the `whitelistedBlocks` array via filter.
 */
add_filter( 'my_localized_gutenblock_data_filter', function( $localized_data ) {
    $localized_data['whitelistedBlocks'] = array(
        'core/image',
        'core/paragraph',
        'core/heading',
        'core/list',
        'core/quote',
        'core/code',
        'core/gallery',
        'core/file',
        'core/embed',
        'core-embed/youtube',
        'core-embed/vimeo',
        'acf/acf-youtubeembeds'
    );
    return $localized_data;
}, 10, 1 );