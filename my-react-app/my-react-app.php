<?php

/**
 * Plugin Name: My React Plugin
 * Description: A simple React plugin.
 * Version: 1.0
 * Author: Hiten Chotaliya
 */

function my_plugin_enqueue_scripts()
{
    wp_enqueue_script('my-plugin-react', plugins_url('dist/bundle.js', __FILE__), array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_plugin_enqueue_scripts');

function my_plugin_add_root_div()
{
    echo '<div id="root"></div>';
}
add_action('wp_footer', 'my_plugin_add_root_div');
