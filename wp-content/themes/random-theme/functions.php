<?php

function random_theme_styles()
{
    wp_enqueue_style("random-theme-style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "random_theme_styles");
