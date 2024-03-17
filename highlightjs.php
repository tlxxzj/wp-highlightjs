<?php
/*
 * Plugin Name: Hightlight.js
 * Version: 0.0.1
 * Author: Lang Tian
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

function enqueue_highlight_assets() {
    wp_enqueue_script(
        "highlight.min.js",
        "https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/highlight.min.js",
    );

    wp_enqueue_style(
        "highlight.min.css",
        "https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/styles/default.min.css",
    );

    wp_add_inline_script(
        "highlight.min.js",
        "hljs.highlightAll();"
    );
}

add_action("wp_enqueue_scripts", "enqueue_highlight_assets");

