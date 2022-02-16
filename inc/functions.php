<?php 
/** Functions **/

/**
* Registers JavaScript and CSS for asset_handlea
* @uses "wp_enqueue_script" action
*/
function stage_register_asset_handlea() {
    $handle = 'asset_handlea';
    $dependencies = [];
    $version = '0.0.1';

    wp_register_script(
        $handle,
        plugins_url("/inc/$handle/index.js", __DIR__ ),
        $dependencies,
        $version
    );
    wp_register_style(
        $handle,
        plugins_url("/inc/$handle/index.css", __DIR__ ),
        [],
        $version
    );
}

/**
* Enqueue JavaScript and CSS for asset_handlea
* @uses "wp_enqueue_script" action
*/
function stage_enqueue_asset_handlea() {
    $handle = 'asset_handlea';
    wp_enqueue_script(
        'asset_handlea',
    );
    wp_enqueue_style(
        'asset_handlea'
    );
}
