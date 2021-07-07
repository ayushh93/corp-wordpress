<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="BizBite corporate business template or agency and marketing template helps you easily create websites for your business.">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <?php wp_head(); ?>

    
   
</head>
<body>

<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->

<!--header section start-->
<header class="header">
    <!--topbar start-->
    <div id="header-top-bar" class="primary-bg py-2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 col-lg-7 d-none d-md-block d-lg-block">
                    <div class="topbar-text text-white">
                        <ul class="list-inline">
                        <?php 
                        if(get_theme_mod('corp_email_handle')){
                        ?>
                            <li class="list-inline-item"><span class="fas fa-envelope mr-1"></span> <a href="mailto:support@yourdomain.com"><?php echo get_theme_mod('corp_email_handle'); ?></a></li>
                            <?php } ?>

                            <?php 
                            if(get_theme_mod('corp_address_handle')){
                            ?>
                            <li class="list-inline-item"><span class="fas fa-map-marker mr-1"></span><?php echo get_theme_mod('corp_address_handle'); ?></li>

                            <?php } ?>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text text-white">
                        <ul class="list-inline text-md-right text-lg-right text-left">
                            <li class="list-inline-item"><span class="ti-phone mr-2"></span> Call Now: <strong><?php echo get_theme_mod('corp_phone_handle'); ?></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--topbar end-->
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top white-bg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
            <?php if (has_custom_logo()){
                the_custom_logo();
            }
            else{

            ?>
                <a href="<?php home_url('/'); ?>"> <?php bloginfo(); ?></a>
<?php } ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                    <?php 
                        if(has_nav_menu('header'))
                        {
                        wp_nav_menu([
                            'theme-location' => 'header',
                            'container' => false, 
                            'menu_class' => 'navbar-nav ml-auto menu',
                            'fallback_cb' => false, 
                            'depth' => 4
                        ]); 
                        }                   
                    ?>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->