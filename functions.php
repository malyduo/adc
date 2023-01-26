<?php

require 'src/Helper/WalkerNavMenuClass.php';

//initial setup
if (!function_exists('theme_setup')) :
    function theme_setup()
    {

        add_theme_support('post-thumbnails');
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'krove_menu'),
        ));
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

        //scripts
        function theme_scripts()
        {
            wp_enqueue_script('krove-js', get_template_directory_uri() . '/public/dist/js/front.min.js', array(), '1.0.0', 'true');
            wp_enqueue_style('krove-css', get_template_directory_uri() . '/public/dist/css/front.min.css');
        }

        add_action('wp_enqueue_scripts', 'theme_scripts');
    }
endif;
add_action('after_setup_theme', 'theme_setup');

//menu
function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

function add_menu_list_item_class($classes, $item, $args)
{
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

//hero block
function block_hero()
{
    if (function_exists('acf_register_block')) {

        acf_register_block(array(
            'name' => 'hero',
            'title' => __('Hero'),
            'description' => __('A custom hero block.'),
            'render_callback' => 'hero_block_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('hero'),
        ));
    }
}

add_action('acf/init', 'block_hero');

function hero_block_render_callback($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(get_theme_file_path("/templates/block/content-{$slug}.php"))) {
        include(get_theme_file_path("/templates/block/content-{$slug}.php"));
    }
}