<?php

function my_child_theme_assets()
{
    wp_enqueue_style("parent-style", get_template_directory_uri() . "/style.css");

    wp_enqueue_style("funky-style", get_stylesheet_directory_uri() . "/css/broccoli_taco.css");
}

add_action("wp_enqueue_scripts", "my_child_theme_assets");
