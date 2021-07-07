<?php 
    function corp_setup_theme()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');

        //custom menu
        register_nav_menu('header', __('Header Menu', 'corp'));


    }
    
?>