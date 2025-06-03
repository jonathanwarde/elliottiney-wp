<?php
function project_cpt() {
    $labels = array(
        'name'                  => _x( 'Projects', 'Post type general name', 'elliottiney' ),
        'singular_name'         => _x( 'Project', 'Post type singular name', 'elliottiney' ),
        'menu_name'             => _x( 'Projects', 'Admin Menu text', 'elliottiney' ),
        'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'elliottiney' ),
        'add_new'               => __( 'Add New', 'elliottiney' ),
        'add_new_item'          => __( 'Add New Project', 'elliottiney' ),
        'new_item'              => __( 'New Project', 'elliottiney' ),
        'edit_item'             => __( 'Edit Project', 'elliottiney' ),
        'view_item'             => __( 'View Project', 'elliottiney' ),
        'all_items'             => __( 'All Projects', 'elliottiney' ),
        'search_items'          => __( 'Search Projects', 'elliottiney' ),
        'parent_item_colon'     => __( 'Parent Projects:', 'elliottiney' ),
        'not_found'             => __( 'No projects found.', 'elliottiney' ),
        'not_found_in_trash'    => __( 'No projects found in Trash.', 'elliottiney' ),
        'featured_image'        => _x( 'Project Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'elliottiney' ),
        'set_featured_image'    => _x( 'Set project cover image', 'elliottiney' ),
        'remove_featured_image' => _x( 'Remove project cover image', 'elliottiney' ),
        'use_featured_image'    => _x( 'Use as project cover image', 'elliottiney' ),
        'archives'              => _x( 'Project Archives', 'elliottiney' ),
        'insert_into_item'      => _x( 'Insert into project', 'elliottiney' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'elliottiney' ),
        'filter_items_list'     => _x( 'Filter projects list', 'elliottiney' ),
        'items_list_navigation' => _x( 'Projects list navigation', 'elliottiney' ),
        'items_list'            => _x( 'Projects list', 'elliottiney' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-portfolio',
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'       => true, // Enable Gutenberg editor
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 5,
    );

    register_post_type( 'project', $args );
}
add_action( 'init', 'project_cpt' );