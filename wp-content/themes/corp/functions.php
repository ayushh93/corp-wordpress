<?php 
    //setup
    define('corp_dev_mode', true);
    //includes
    include (get_theme_file_path('front/enqueue.php'));
    include (get_theme_file_path('front/setup.php'));
    include (get_theme_file_path('customizer/theme-customizer.php'));
    include (get_theme_file_path('customizer/contact.php'));




    //hooks
    add_action ('after_setup_theme', 'corp_setup_theme');
    add_action ('wp_enqueue_scripts', 'corp_enqueue');
    add_action ('customize_register', 'corp_customize_register');


?>