<?php

function custom_universal_setup() {
    add_theme_support('block-templates');
    add_theme_support('editor-styles');
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'custom_universal_setup');

function custom_universal_enqueue_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/path/to/tailwind.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'custom_universal_enqueue_styles');

function custom_universal_register_block_patterns() {
    $pattern_files = glob(get_template_directory() . '/patterns/*.php');
    foreach ($pattern_files as $file) {
        require $file;
    }
}
add_action('init', 'custom_universal_register_block_patterns');