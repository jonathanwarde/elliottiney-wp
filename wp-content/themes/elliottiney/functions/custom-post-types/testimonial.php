<?php

function testimonial_cpt() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'elliottiney' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'elliottiney' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'elliottiney' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'elliottiney' ),
        'add_new'               => __( 'Add New', 'elliottiney' ),
        'add_new_item'          => __( 'Add New Testimonial', 'elliottiney' ),
        'new_item'              => __( 'New Testimonial', 'elliottiney' ),
        'edit_item'             => __( 'Edit Testimonial', 'elliottiney' ),
        'view_item'             => __( 'View Testimonial', 'elliottiney' ),
        'all_items'             => __( 'All Testimonials', 'elliottiney' ),
        'search_items'          => __( 'Search Testimonials', 'elliottiney' ),
        'parent_item_colon'     => __( 'Parent Testimonials:', 'elliottiney' ),
        'not_found'             => __( 'No testimonials found.', 'elliottiney' ),
        'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'elliottiney' ),
        'featured_image'        => _x( 'Client Photo', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'elliottiney' ),
        'set_featured_image'    => _x( 'Set client photo', 'elliottiney' ),
        'remove_featured_image' => _x( 'Remove client photo', 'elliottiney' ),
        'use_featured_image'    => _x( 'Use as client photo', 'elliottiney' ),
        'archives'              => _x( 'Testimonial Archives', 'elliottiney' ),
        'insert_into_item'      => _x( 'Insert into testimonial', 'elliottiney' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this testimonial', 'elliottiney' ),
        'filter_items_list'     => _x( 'Filter testimonials list', 'elliottiney' ),
        'items_list_navigation' => _x( 'Testimonials list navigation', 'elliottiney' ),
        'items_list'            => _x( 'Testimonials list', 'elliottiney' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-testimonial',
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'       => true, // Enable Gutenberg editor
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 6,
    );

    register_post_type( 'testimonial', $args );
}
add_action( 'init', 'testimonial_cpt' );
