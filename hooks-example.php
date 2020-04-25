<?php

/**
 * Plugin Name: Hooks Example
 */

add_filter('the_title', 'wu_title');

function wu_title($title)
{
    return 'Hooked: ' . $title;
}

add_action('wp_footer', 'wu_footer_shoutout');

function wu_footer_shoutout()
{
    echo 'Hooked footer shoutourt was here <br>';
}

add_action('wp_footer', 'wu_footer_shoutout_v2');

function wu_footer_shoutout_v2()
{
    echo 'Hooked footer shoutourt was here. Version 2';
}
