<?php
//business_customize_register
 function business_customize_register($wp_customize){
     //== Banner Section == 
     $wp_customize->add_section('banner', array(
         'title' => __('Banner', 'business'),
         'description' => sprintf(__('Options for homepage banner', 'business')),
         'priority' => 130
     ));

     //Heading Setting
     $wp_customize->add_setting('banner_heading', array(
         'default' => _x('Banner Heading', 'business'),
         'type'    => 'theme_mod'
     ));

     //Heading Control
     $wp_customize->add_control('banner_heading', array(
        'label'      => __('Heading', 'business'),
        'section'    => 'banner',
        'priority'   => 30
    ));
    
     //Text Setting
     $wp_customize->add_setting('banner_text', array(
        'default' => _x('Welcome to the wordpress Business Theme. This theme uses the Twitter Bootstrap 3 framework and can be customized to your liking ', 'business'),
        'type'    => 'theme_mod'
    ));

    //Text Control
    $wp_customize->add_control('banner_text', array(
       'label'      => __('Text', 'business'),
       'section'    => 'banner',
       'priority'   => 30
   ));
       
     //Button Text Setting
     $wp_customize->add_setting('banner_btn_text', array(
        'default' => _x('Sing Up today', 'business'),
        'type'    => 'theme_mod'
    ));

    //Button Control
    $wp_customize->add_control('banner_btn_text', array(
       'label'      => __('Button Text', 'business'),
       'section'    => 'banner',
       'priority'   => 30
   ));
    //Button Text Setting
    $wp_customize->add_setting('banner_btn_url', array(
        'default' => _x('http://test.com', 'business'),
        'type'    => 'theme_mod'
    ));

    //Button Control
    $wp_customize->add_control('banner_btn_url', array(
        'label'      => __('Button URL', 'business'),
        'section'    => 'banner',
        'priority'   => 30
    ));
    
    //Background Image Setting
    $wp_customize->add_setting('banner_image', array(
        'default' =>get_bloginfo('template_directory').'/img/banner.jpg',
        'type'    => 'theme_mod'
    ));

    //Background Image Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
        'label'   => __('Background Image', 'business'),
        'section' => 'banner',
        'settings' => 'banner_image'
    )));


    //== Services Section == 
    $wp_customize->add_section('services', array(
        'title' => __('Services', 'business'),
        'description' => sprintf(__('Options for homepage Services', 'business')),
        'priority' => 130
    ));
   //Service 1
        //Service 1 Heading Setting
        $wp_customize->add_setting('service1_heading', array(
            'default' => _x('Service 1 Heading', 'business'),
            'type'    => 'theme_mod'
        ));
        //Service 1 Heading Control
        $wp_customize->add_control('service1_heading', array(
            'label'      => __('Service 1 Heading', 'business'),
            'section'    => 'services',
            'priority'   => 30
        ));

        //Service 1 Text Setting
        $wp_customize->add_setting('service1_text', array(
            'default' => _x('Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.', 'business'),
            'type'    => 'theme_mod'
        ));
        //Service 1 Heading Control
        $wp_customize->add_control('service1_text', array(
            'label'      => __('Service 1 Text', 'business'),
            'section'    => 'services',
            'priority'   => 30
        ));

        //Service 1 Icon Setting
        $wp_customize->add_setting('service1_icon', array(
            'default' => _x('bar-chart', 'business'),
            'type'    => 'theme_mod'
        ));
        //Service 1 Heading Control
        $wp_customize->add_control('service1_icon', array(
            'label'      => __('Service 1 icon', 'business'),
            'section'    => 'services',
            'priority'   => 30
        ));

        //Service 2
        //Service 2 Heading Setting
        $wp_customize->add_setting('service2_heading', array(
            'default' => _x('Service 2 Heading', 'business'),
            'type'    => 'theme_mod'
        ));
        //Service 2 Heading Control
        $wp_customize->add_control('service2_heading', array(
            'label'      => __('Service 2 Heading', 'business'),
            'section'    => 'services',
            'priority'   => 30
        ));

        //Service 2 Text Setting
        $wp_customize->add_setting('service2_text', array(
            'default' => _x('Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.', 'business'),
            'type'    => 'theme_mod'
        ));
        //Service 2 Heading Control
        $wp_customize->add_control('service2_text', array(
            'label'      => __('Service 2 Text', 'business'),
            'section'    => 'services',
            'priority'   => 30
        ));

        //Service 2 Icon Setting
        $wp_customize->add_setting('service2_icon', array(
            'default' => _x('code', 'business'),
            'type'    => 'theme_mod'
        ));
        //Service 2 Heading Control
        $wp_customize->add_control('service2_icon', array(
            'label'      => __('Service 2 icon', 'business'),
            'section'    => 'services',
            'priority'   => 30
        ));
           //Service 3
        //Service 3 Heading Setting
        $wp_customize->add_setting('service3_heading', array(
            'default' => _x('Service 3 Heading', 'business'),
            'type'    => 'theme_mod'
        ));
        //Service 3 Heading Control
        $wp_customize->add_control('service3_heading', array(
            'label'      => __('Service 3 Heading', 'business'),
            'section'    => 'services',
            'priority'   => 30
        ));

        //Service 3 Text Setting
        $wp_customize->add_setting('service3_text', array(
            'default' => _x('Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.', 'business'),
            'type'    => 'theme_mod'
        ));
        //Service 3 Heading Control
        $wp_customize->add_control('service3_text', array(
            'label'      => __('Service 3 Text', 'business'),
            'section'    => 'services',
            'priority'   => 30
        ));

        //Service 3 Icon Setting
        $wp_customize->add_setting('service3_icon', array(
            'default' => _x('desktop', 'business'),
            'type'    => 'theme_mod'
        ));
        //Service 3 Heading Control
        $wp_customize->add_control('service3_icon', array(
            'label'      => __('Service 3 icon', 'business'),
            'section'    => 'services',
            'priority'   => 30
        ));
 }
 add_action('customize_register','business_customize_register');