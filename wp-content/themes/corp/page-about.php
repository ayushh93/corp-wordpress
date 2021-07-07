<?php /* Template Name: About us */ ?>

<?php get_header('v2'); ?>
<?php while(have_posts()): the_post(); ?>

<!--body content wrap start-->
<div class="main">

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('<?php echo the_post_thumbnail_url(); ?>')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0"><?php echo the_title(); ?></h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="<?php echo home_url('/');?>">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href=":javascript">Pages</a></li>
                                <li class="list-inline-item breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--promo section start-->
    <section class="promo-section pt-100">
        <div class="container">
            <div class="row">
            <?php
            $args=array(
                'post_type'=> 'banners',
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $banners=new WP_Query($args);
            while($banners->have_posts()) : $banners->the_post();
        
        ?>
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                        <div class="promo-block-icon mr-4">
                            <span class="<?php the_field('svg'); ?>"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5><?php the_title(); ?></h5>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
               
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!--about us section start-->
    <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-5">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2>Our Mission & Vission</h2>
                        <p><?php echo the_field('mission_content'); ?></p>
                        
                        
                        <div class="action-btns mt-4">
                            <a href="about-us.html#" class="btn primary-solid-btn mr-2">View Our Services</a>
                            <a href="<?php echo site_url('/contact-us'); ?>" class="btn outline-btn">Contact Us</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="card border-0 shadow-sm text-white">
                    <?php 
                    $image_id = get_field('mission_image');
                    $mission_image = wp_get_attachment_image_src($image_id, 'mission'); 
                    ?>
                        <img src="<?php echo $mission_image[0] ;?>" alt="video" class="img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

    <!--our work process section start-->
    <section class="work-process-new ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>We Deliver Our Services Few Process</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                            disseminate outsourcing through revolutionary.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="work-process-wrap text-center">
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap secondary-bg rounded-circle">
                                <i class="ti-vector icon-md text-white"></i>
                                <span class="process-step primary-bg text-white shadow-sm">1</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Generate Ideas</h5>
                                <p>Compellingly harness reliable methodologies and web services. </p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap secondary-bg rounded-circle">
                                <i class="ti-layout-list-thumb icon-md text-white"></i>
                                <span class="process-step primary-bg text-white shadow-sm">2</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Collect Contents</h5>
                                <p>Proactively pursue high-quality cooperative applications.  </p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap secondary-bg rounded-circle">
                                <i class="ti-palette icon-md text-white"></i>
                                <span class="process-step primary-bg text-white shadow-sm">3</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Create Design</h5>
                                <p>Continually exploit worldwide products maximizing alignments. </p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap secondary-bg rounded-circle">
                                <i class="ti-cup icon-md text-white"></i>
                                <span class="process-step primary-bg text-white shadow-sm">4</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Launch Project</h5>
                                <p>Dramatically exploit strategic innovation market-driven schemas. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our work process section end-->

    <!--team two section start-->
    <section class="team-two-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Meet our lovely team</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Globally administrate 24/7 interfaces and end-to-end platforms.</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
            $args=array(
                'post_type'=> 'teams',
                'orderby' => 'title',
                'post_per_page'=> -1,
                'order' => 'ASC'
            );
            $banners=new WP_Query($args);
            while($banners->have_posts()) : $banners->the_post();
        
        ?>
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0"><?php the_title(); ?></h5>
                                <span><?php echo the_field('position');?></span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="<?php echo the_field('facebook');?>" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="<?php echo the_field('linkedin');?>" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="<?php echo the_field('pinterest');?>" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote"><?php echo the_excerpt();?> </p><a
                                    href="about-us.html#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white"><?php the_title(); ?></h5></a>
                                <span class="teacher-field text-white"><?php echo the_field('position');?></span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="<?php echo the_field('facebook');?>" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="<?php echo the_field('linkedin');?>" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="<?php echo the_field('pinterest');?>" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="<?php the_permalink(); ?>" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
                
            </div>
        </div>
    </section>
    <!--team two section end-->

    <!--testimonial section start-->
    <section class="testimonial-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>Testimonials What Clients Say</h2>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="owl-carousel owl-theme client-testimonial custom-arrow custom-arrow-bottom-center mb-5">
                    <?php
            $args=array(
                'post_type'=> 'testimonials',
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $banners=new WP_Query($args);
            while($banners->have_posts()) : $banners->the_post();
        
        ?>
                        <div class="item">
                            <div class="testimonial-single shadow-sm white-bg rounded p-4">
                                <blockquote>
                                    <?php the_excerpt(); ?>
                                </blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                        <div class="client-info">
                                            <h5 class="mb-0"> <?php the_title(); ?></h5>
                                            <small class="mb-0"> <?php the_field('position'); ?></small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial section end-->


    <!--client section start-->
    <div class="client-section ptb-100">
        <div class="container">
            <!--clients logo start-->
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                    <?php
            $args=array(
                'post_type'=> 'clients',
                'post-per-page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $banners=new WP_Query($args);
            while($banners->have_posts()) : $banners->the_post();
        
        ?>
                        <div class="item single-client">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="client logo" class="client-img">
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                        
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </div>
    <!--client section start-->

</div>
<!--body content wrap end-->
<?php endwhile; ?>



<?php get_footer(); ?>
