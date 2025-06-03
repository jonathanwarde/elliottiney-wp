<?php
/**
 * When content is published/updated, call Next.js to rebuild.
 */
function nextjs_on_publish_hook( $post_id ) {
    // Only real posts/pages, only real users.
    if ( wp_is_post_revision( $post_id ) || wp_is_post_autosave( $post_id ) ) {
        return;
    }
    $user = wp_get_current_user();
    if ( empty( $user->roles ) || ! array_intersect( [ 'administrator', 'editor', 'author' ], $user->roles ) ) {
        return;
    }

    $url = add_query_arg(
        'secret',
        'd4f7a8b3c9e2f1d0a6b5c4d3e2f1a0b7',
        'https://elliottiney.whitestranddigital.co.uk/rebuild.php'
    );

    error_log( "[nextjs_hook] POSTing to: $url" );
    $response = wp_remote_post( $url, [
        'timeout'   => 5,
        'blocking'  => true,
        'sslverify' => true,
    ] );
    error_log( "[nextjs_hook] Response: " . print_r( $response, true ) );
}
add_action( 'save_post',    'nextjs_on_publish_hook' );
add_action( 'publish_post', 'nextjs_on_publish_hook' );
add_action( 'publish_page','nextjs_on_publish_hook' );
