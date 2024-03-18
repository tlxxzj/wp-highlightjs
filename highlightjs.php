<?php
/*
 * Plugin Name: Hightlight.js
 * Plugin URI: https://github.com/tlxxzj/wp-highlightjs
 * Version: 0.0.1
 * Author: Lang Tian
 * 
*/

// Prevent direct access
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Load Highlight.js assets
function enqueue_highlight_assets() {
    // Load Highlight.js
    wp_enqueue_script(
        "highlight.min.js",
        "https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/highlight.min.js",
    );

    // Load Highlight.js CSS
    wp_enqueue_style(
        "highlight.min.css",
        "https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/styles/default.min.css",
    );

    // Load Highlight.js inline script
    wp_add_inline_script(
        "highlight.min.js",
        "hljs.highlightAll();"
    );
}

// Add action to enqueue assetss
add_action("wp_enqueue_scripts", "enqueue_highlight_assets");

