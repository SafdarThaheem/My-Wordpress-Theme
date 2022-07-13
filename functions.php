<?php 
    register_nav_menus(
        array('primary-menu' => 'Top menu')
    );

    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');

    function wpCubeTech_theme_scripts(){
        wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css');
    }
    add_action('wp_enqueue_scripts','wpCubeTech_theme_scripts');

?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/js/bootstrap.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    