<?php 
    function corp_contact_customizer_section($wp_customize)
    {
        //changing site identity label
        $wp_customize->get_section('title_tagline')->title = "General settings"; 
        //adding panel
        $wp_customize->add_panel('contact_banner',[
            'title' => __('Header section', 'corp'),
            'priority' => 30,
            'description' => '<p> Contains banner and contact sections </p>'
        ]);


        //contact section
        //section
        $wp_customize->add_section('corp_contact_section',[
            'title' => __('Contact section', 'corp'),
            'priority' => 30,
            'panel' => 'contact_banner'
        ]);

        //settings
        $wp_customize->add_setting('corp_email_handle', [
            'default' => ''
        ]);
        $wp_customize->add_setting('corp_phone_handle', [
            'default' => ''
        ]);
        $wp_customize->add_setting('corp_address_handle', [
            'default' => ''
        ]);
        $wp_customize->add_setting('corp_address_handle', [
            'default' => ''
        ]);
        $wp_customize->add_setting('corp_logo2_handle', [
            'default' => '' ,
            'transport' => 'refresh',
            'height' => 320
        ]);
        //controls
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'corp_email_handle_input', array(
            'label' => __('Email Address', 'corp'),
            'section' => 'corp_contact_section',
            'settings' => 'corp_email_handle',
            'input_attrs' => array(
                'placeholder' => __( 'Enter your email address', 'corp' )
        ))));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'corp_phone_handle_input', array(
            'label' => __('Phone Number', 'corp'),
            'section' => 'corp_contact_section',
            'settings' => 'corp_phone_handle',
            'input_attrs' => array(
                'placeholder' => __( 'Enter your phone number', 'corp' )
        ))));
                $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'corp_address_handle_input', array(
            'label' => __('Address', 'corp'),
            'section' => 'corp_contact_section',
            'settings' => 'corp_address_handle',
            'input_attrs' => array(
                'placeholder' => __( 'Enter your address', 'corp' )
        ))));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'corp_logo2_handle_input', array(
            'label' => __('Logo 2', 'corp'),
            'section' => 'corp_contact_section',
            'settings' => 'corp_logo2_handle'
        )));


        //banner section
        //section
        $wp_customize->add_section('corp_banner_section',[
            'title' => __('Banner section', 'corp'),
            'priority' => 30,
            'panel' => 'contact_banner'

        ]);

         //settings
         $wp_customize->add_setting('corp_title_handle', [
            'default' => ''
        ]);
        $wp_customize->add_setting('corp_subtitle_handle', [
            'default' => ''
        ]);
        $wp_customize->add_setting('corp_content_handle', [
            'default' => ''
        ]);
        $wp_customize->add_setting('corp_link_handle', [
            'default' => ''
        ]);$wp_customize->add_setting('corp_image_handle', [
            'default' => '' ,
            'transport' => 'refresh',
            'height' => 320
        ]);
        
        //controls
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'corp_title_handle_input', array(
            'label' => __('Title', 'corp'),
            'section' => 'corp_banner_section',
            'settings' => 'corp_title_handle',
            'input_attrs' => array(
                'placeholder' => __( 'Enter title', 'corp' )
        ))));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'corp_subtitle_handle_input', array(
            'label' => __('Subtitle', 'corp'),
            'section' => 'corp_banner_section',
            'settings' => 'corp_subtitle_handle',
            'input_attrs' => array(
                'placeholder' => __( 'Enter subtitle', 'corp' )
        ))));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'corp_content_handle_input', array(
            'label' => __('Content', 'corp'),
            'section' => 'corp_banner_section',
            'settings' => 'corp_content_handle',
            'type' => 'textarea',
            'input_attrs' => array(
                'placeholder' => __( 'Enter content', 'corp' )
        ))));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'corp_link_handle_input', array(
            'label' => __('link', 'corp'),
            'section' => 'corp_banner_section',
            'settings' => 'corp_link_handle',
            'type' => 'textarea',
            'input_attrs' => array(
                'placeholder' => __( 'Enter link', 'corp' )
        ))));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'corp_image_handle_input', array(
            'label' => __('image', 'corp'),
            'section' => 'corp_banner_section',
            'settings' => 'corp_image_handle'
        )));


    }
?>