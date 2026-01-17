// Shortcode to display custom utility content

<?php
/*
Plugin Name: WP Utility Plugin
Description: A simple WordPress utility plugin that adds a custom shortcode.
Version: 1.0
Author: Vaibhav Singh
*/

function wp_utility_shortcode() {
    return "<p>This content is added using a custom WordPress plugin shortcode.</p>";
}

add_shortcode('utility', 'wp_utility_shortcode');
