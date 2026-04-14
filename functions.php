<?php
/**
 * 1. Global Header Settings (Customizer)
 */
function rupesh_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'header_settings' , array(
        'title'      => 'Header Settings',
        'priority'   => 30,
    ) );

    // Phone & Email
    $wp_customize->add_setting( 'header_phone' , array( 'default' => '+1 (888) 645 4661' ) );
    $wp_customize->add_control( 'header_phone_control', array( 'label' => 'Phone', 'section' => 'header_settings', 'settings' => 'header_phone' ) );

    $wp_customize->add_setting( 'header_email' , array( 'default' => 'info@milliondeliveries.com' ) );
    $wp_customize->add_control( 'header_email_control', array( 'label' => 'Email', 'section' => 'header_settings', 'settings' => 'header_email' ) );

    // Social Links
    $wp_customize->add_setting( 'social_fb' , array( 'default' => '#' ) );
    $wp_customize->add_control( 'social_fb_control', array( 'label' => 'Facebook Link', 'section' => 'header_settings', 'settings' => 'social_fb', 'type' => 'url' ) );

    $wp_customize->add_setting( 'social_in' , array( 'default' => '#' ) );
    $wp_customize->add_control( 'social_in_control', array( 'label' => 'LinkedIn Link', 'section' => 'header_settings', 'settings' => 'social_in', 'type' => 'url' ) );

    $wp_customize->add_setting( 'social_ig' , array( 'default' => '#' ) );
    $wp_customize->add_control( 'social_ig_control', array( 'label' => 'Instagram Link', 'section' => 'header_settings', 'settings' => 'social_ig', 'type' => 'url' ) );
}
add_action( 'customize_register', 'rupesh_customize_register' );

/**
 * 2. Registering Meta Boxes (Hero + Why Choose Us)
 */
add_filter( 'rwmb_meta_boxes', 'rupesh_register_all_meta' );

function rupesh_register_all_meta( $meta_boxes ) {
    $prefix = 'task_';

    // HERO SECTION
    $meta_boxes[] = [
        'title'      => 'Home Banner Settings',
        'post_types' => 'page',
        'fields'     => [
            [ 'name' => 'Banner Title', 'id' => $prefix . 'hero_title', 'type' => 'text', 'std' => 'Seamless Service, Right To Your Door.' ],
            [ 'name' => 'Banner Description', 'id' => $prefix . 'hero_desc', 'type' => 'textarea' ],
            [ 'name' => 'Button Text', 'id' => $prefix . 'hero_btn_text', 'type' => 'text', 'std' => 'Get A Quote' ],
            [ 'name' => 'Banner Image', 'id' => $prefix . 'hero_bg', 'type' => 'single_image' ],
            [ 'name' => 'Banner Video (MP4)', 'id' => $prefix . 'hero_video', 'type' => 'file_input', 'desc' => 'Video link ya path yahan dalo' ],
        ],
    ];

    // WHY CHOOSE US SECTION (Dynamic Icons Added)
    $meta_boxes[] = [
        'title'      => 'Why Choose Us Settings',
        'post_types' => 'page',
        'fields'     => [
            [ 'name' => 'Main Title', 'id' => $prefix . 'wcu_title', 'type' => 'text', 'std' => 'Your Trusted Partner in Delivery Excellence' ],
            
            // Card 1
            [ 'name' => 'Card 1 Title', 'id' => $prefix . 'wcu_c1_t', 'type' => 'text', 'std' => 'Delivered On Time' ],
            [ 'name' => 'Card 1 Icon Class', 'id' => $prefix . 'wcu_c1_icon', 'type' => 'text', 'std' => 'far fa-clock', 'desc' => 'e.g. far fa-clock' ],
            [ 'name' => 'Card 1 Desc',  'id' => $prefix . 'wcu_c1_d', 'type' => 'textarea' ],
            
            // Card 2
            [ 'name' => 'Card 2 Title', 'id' => $prefix . 'wcu_c2_t', 'type' => 'text', 'std' => 'Fastest Delivery' ],
            [ 'name' => 'Card 2 Icon Class', 'id' => $prefix . 'wcu_c2_icon', 'type' => 'text', 'std' => 'fas fa-truck-fast', 'desc' => 'e.g. fas fa-truck-fast' ],
            [ 'name' => 'Card 2 Desc',  'id' => $prefix . 'wcu_c2_d', 'type' => 'textarea' ],
            
            // Card 3
            [ 'name' => 'Card 3 Title', 'id' => $prefix . 'wcu_c3_t', 'type' => 'text', 'std' => 'Cost Effective' ],
            [ 'name' => 'Card 3 Icon Class', 'id' => $prefix . 'wcu_c3_icon', 'type' => 'text', 'std' => 'fas fa-hand-holding-dollar', 'desc' => 'e.g. fas fa-hand-holding-dollar' ],
            [ 'name' => 'Card 3 Desc',  'id' => $prefix . 'wcu_c3_d', 'type' => 'textarea' ],
        ],
    ];
    
    return $meta_boxes;
}

/**
 * 3. Theme Setup: Menus and Logo
 */
function rupesh_task_setup() {
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'rupesh-task' ),
    ) );

    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'rupesh_task_setup' );

/**
 * 4. Enqueue Scripts, Tailwind, and FontAwesome 6 (Latest)
 */
function rupesh_task_scripts() {
    wp_enqueue_script( 'tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false );
    // Version 6.5.1 use kiya hai taki sack-dollar jaise naye icons chalein
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'rupesh_task_scripts' );

/**
 * 5. Menu Layout & Arrows
 */
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_link_class($atts, $item, $args) {
    if (isset($args->add_link_class)) {
        $atts['class'] = $args->add_link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

function rupesh_add_menu_arrow( $title, $item, $args, $depth ) {
    if ( in_array( 'menu-item-has-children', $item->classes ) && $depth === 0 ) {
        $title .= ' <i class="fas fa-chevron-down text-[10px] ml-1"></i>';
    }
    return $title;
}
add_filter( 'nav_menu_item_title', 'rupesh_add_menu_arrow', 10, 4 );