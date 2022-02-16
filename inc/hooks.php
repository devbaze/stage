<?php 
/** Actions and Filters **/
//Register JavaScript and CSS for asset_handlea
add_action( 'wp_enqueue_scripts', 'stage_register_asset_handlea', 5 );

//Enqueue JavaScript and CSS for asset_handlea
add_action( 'wp_enqueue_scripts', 'stage_enqueue_asset_handlea', 10 );
