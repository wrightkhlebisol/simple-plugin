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

add_action(
    'wp_footer',
    'wu_footer_shoutout_v2',
    5
);

function wu_footer_shoutout_v2()
{
    echo 'Hooked footer shoutourt was here. Version 2 <br>';
}

add_action('wp_footer', 'wu_footer');

function wu_footer()
{
    do_action('wu_custom_footer');
}

add_action('wu_custom_footer', 'wu_kill_wp');

function wu_kill_wp()
{
    echo 'Custom hook';
}
