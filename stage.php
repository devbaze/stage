<?php
                

/**
* Plugin Name: stage
* Plugin URI: 
* Description: Hello world
* Version: 0.0.1
* Requires at least: 5.7
* Requires PHP:      7.1.0
* Author:            Devbaze
* Author URI:        
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       stage
* Domain Path:       /languages
*/

/**
* Include the autoloader
*/
add_action( 'plugins_loaded', function () {
    if ( file_exists(__DIR__ . '/vendor/autoload.php' ) ) {
        include __DIR__ . '/vendor/autoload.php';
    }
}, 1 );

include_once dirname( __FILE__ ). '/inc/functions.php';
include_once dirname( __FILE__ ). '/inc/hooks.php';

/**
* Register dealer Custom Post Type
*/
add_action( 'init', function(){
    $args = [
        'labels'             => [
            'name'                  => _x( 'dealer', 'Post type general name', 'stage' ),
            'singular_name'         => _x( 'Dealer', 'Post type singular name', 'stage' ),
            'menu_name'             => _x( 'Dealer', 'Admin Menu text', 'stage' ),
            'name_admin_bar'        => _x( 'Dealer', 'Add New on Toolbar', 'stage' ),
            'add_new'               => __( 'Add New Dealer', 'stage' ),
            'add_new_item'          => __( 'Add New Dealer', 'stage' ),
            'new_item'              => __( 'New Dealer', 'stage' ),
            'edit_item'             => __( 'Edit New Dealer', 'stage' ),
            'view_item'             => __( 'View Dealer', 'stage' ),
            'all_items'             => __( 'All Dealers', 'stage' ),
            'search_items'          => __( 'Search Dealers', 'stage' ),
            'not_found'             => __( 'No Dealers Found', 'stage' ),
            'not_found_in_trash'    => __( 'No Dealers Found', 'stage' ),
            'featured_image'        => _x( '', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'stage' ),
            'set_featured_image'    => _x( '', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'stage' ),
            'remove_featured_image' => _x( '', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'stage' ),
            'use_featured_image'    => _x( 'Use Dealer Featured Image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'stage' ),
            'archives'              => _x( 'Dealer Archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'stage' ),
            'insert_into_item'      => _x( 'Insert Into Dealers ', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'stage' ),
            'uploaded_to_this_item' => _x( 'Upload Tp Dealer ', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'stage' ),
            'filter_items_list'     => _x( 'Fitler  Dealers ', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'stage' ),
            'items_list_navigation' => _x( 'Dealers List Navigation ', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'stage' ),
            'items_list'            => _x( 'Dealers List ', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'stage' ),
        ],
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 25,
        'supports'           => ['title', 'editor', 'custom-fields'],
    ];

    register_post_type( 'dealer', $args );
});

include_once dirname( __FILE__ ) . '/admin/general/init.php';
