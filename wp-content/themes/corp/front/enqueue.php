<?php 
    function corp_enqueue()
    {
        $url=get_theme_file_uri();
        $ver = corp_dev_mode ? time() : false;
        //css register
        wp_register_style('google_font', '"https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&display=swap" rel="stylesheet', [], $ver);
        wp_register_style('favicon', $url . '/img/favicon.png', [], $ver) ;
        wp_register_style('bootstrap', $url . '/assets/css/bootstrap.min.css', [], $ver) ;
        wp_register_style('magnific', $url . '/assets/css/magnific-popup.css', [], $ver) ;
        wp_register_style('themify', $url . '/assets/css/themify-icons.css', [], $ver) ;
        wp_register_style('all', $url . '/assets/css/all.min.css', [], $ver) ;
        wp_register_style('animate', $url . '/assets/css/animate.min.css', [], $ver) ;
        wp_register_style('ytplayer', $url . '/assets/css/jquery.mb.YTPlayer.min.css', [], $ver) ;
        wp_register_style('owl', $url . '/assets/css/owl.carousel.min.css', [], $ver) ;
        wp_register_style('owl2', $url . '/assets/css/owl.theme.default.min.css', [], $ver) ;
        wp_register_style('style', $url . '/assets/css/style.css', [], $ver) ;
        wp_register_style('responsive', $url . '/assets/css/responsive.css', [], $ver) ;

        //css enqueue
        wp_enqueue_style('google_font');
        wp_enqueue_style('favicon');
        wp_enqueue_style('themify');
        wp_enqueue_style('all');
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('magnific');
        wp_enqueue_style('animate');
        wp_enqueue_style('ytplayer');
        wp_enqueue_style('owl');
        wp_enqueue_style('owl2');
        wp_enqueue_style('style');
        wp_enqueue_style('responsive');

        //js register scripts
        wp_register_script('popper', $url . '/assets/js/popper.min.js', [], $ver, true);
        wp_register_script('bootstrap', $url . '/assets/js/bootstrap.min.js', [], $ver, true);
        wp_register_script('magnific', $url . '/assets/js/jquery.magnific-popup.min.js', [], $ver, true);
        wp_register_script('easing', $url . '/assets/js/jquery.easing.min.js', [], $ver, true);
        wp_register_script('ytplayer', $url . '/assets/js/jquery.mb.YTPlayer.min.js', [], $ver, true);
        wp_register_script('mixitup', $url . '/assets/js/mixitup.min.js', [], $ver, true);
        wp_register_script('wow', $url . '/assets/js/wow.min.js', [], $ver, true);
        wp_register_script('owl', $url . '/assets/js/owl.carousel.min.js', [], $ver, true);
        wp_register_script('countdown', $url . '/assets/js/jquery.countdown.min.js', [], $ver, true);
        wp_register_script('scripts', $url . '/assets/js/scripts.js' , [], $ver, true);

        //js enqueue scripts
        wp_enqueue_script('jquery');
        wp_enqueue_script('popper');
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('magnific');
        wp_enqueue_script('easing');
        wp_enqueue_script('ytplayer');
        wp_enqueue_script('mixitup');
        wp_enqueue_script('wow');
        wp_enqueue_script('owl');
        wp_enqueue_script('countdown');
        wp_enqueue_script('scripts');



       
    
       
    }

?>