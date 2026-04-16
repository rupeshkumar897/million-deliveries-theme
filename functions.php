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

    // UPDATED SERVICES SECTION (With Images)
$meta_boxes[] = [
    'title'      => 'Our Services Settings',
    'post_types' => 'page',
    'fields'     => [
        [ 'name' => 'Section Title', 'id' => $prefix . 's_title', 'type' => 'text', 'std' => 'Services That Align With Your Needs' ],
        [ 'name' => 'Section Desc',  'id' => $prefix . 's_desc',  'type' => 'textarea' ],
        
        // Service 1
        [ 'name' => 'S1 Image', 'id' => $prefix . 's1_img', 'type' => 'single_image' ],
        // Service 2
        [ 'name' => 'S2 Image', 'id' => $prefix . 's2_img', 'type' => 'single_image' ],
        // Service 3
        [ 'name' => 'S3 Image', 'id' => $prefix . 's3_img', 'type' => 'single_image' ],
    ],
];
    // BENTO GRID - COMPREHENSIVE DELIVERY SOLUTIONS
$meta_boxes[] = [
    'title'      => 'Bento Grid Settings',
    'post_types' => 'page',
    'fields'     => [
        [ 'name' => 'Main Title', 'id' => $prefix . 'bento_main_title', 'type' => 'text', 'std' => 'Comprehensive Delivery Solutions' ],
        
        // Card 1 (Vertical)
        [ 'name' => 'Card 1 Image', 'id' => $prefix . 'b_img1', 'type' => 'single_image' ],
        [ 'name' => 'Card 1 Title', 'id' => $prefix . 'b_txt1', 'type' => 'textarea' ],

        // Card 2 (Top Wide)
        [ 'name' => 'Card 2 Image', 'id' => $prefix . 'b_img2', 'type' => 'single_image' ],
        [ 'name' => 'Card 2 Title', 'id' => $prefix . 'b_txt2', 'type' => 'textarea' ],

        // Card 3 (Packing)
        [ 'name' => 'Card 3 Image', 'id' => $prefix . 'b_img3', 'type' => 'single_image' ],
        [ 'name' => 'Card 3 Title', 'id' => $prefix . 'b_txt3', 'type' => 'textarea' ],

        // Card 4 (Blue Box)
        [ 'name' => 'Card 4 Blue Box Title', 'id' => $prefix . 'b_txt4', 'type' => 'text' ],

        // Card 5 (Small Bottom Image)
        [ 'name' => 'Card 5 Image', 'id' => $prefix . 'b_img5', 'type' => 'single_image' ],
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


function rupesh_portfolio_cpt() {
    register_post_type('portfolio', [
        'labels'      => ['name' => 'Portfolio', 'singular_name' => 'Portfolio'],
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-portfolio',
        'supports'    => ['title', 'thumbnail', 'editor'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'rupesh_portfolio_cpt');



// Million Settings Page (For Logos, Phone, Email & Form)
add_action('admin_menu', 'million_settings_page');
function million_settings_page() {
    add_menu_page('Million Settings', 'Million Settings', 'manage_options', 'million-settings', 'million_settings_html', 'dashicons-admin-generic', 25);
}

function million_settings_html() {
    if (isset($_POST['save_settings'])) {
        update_option('m_phone', sanitize_text_field($_POST['m_phone']));
        update_option('m_email', sanitize_text_field($_POST['m_email']));
        update_option('m_copy', sanitize_text_field($_POST['m_copy']));
        update_option('m_logos', sanitize_textarea_field($_POST['m_logos']));
        update_option('m_news_title', sanitize_text_field($_POST['m_news_title']));
        update_option('m_btn_text', sanitize_text_field($_POST['m_btn_text']));
        // Social Links Save Logic
        update_option('m_fb', esc_url_raw($_POST['m_fb']));
        update_option('m_insta', esc_url_raw($_POST['m_insta']));
        update_option('m_linkd', esc_url_raw($_POST['m_linkd']));
        echo '<div class="updated"><p>Settings Saved, Bhai!</p></div>';
    }
    $phone = get_option('m_phone', '+1 (888) 645 4661');
    $email = get_option('m_email', 'info@milliondeliveries.com');
    $copy = get_option('m_copy', '© 2026 Million Delivery.');
    $logos = get_option('m_logos', '');
    $news_title = get_option('m_news_title', 'Subscribe To Our Newsletter');
    $btn_text = get_option('m_btn_text', 'Submit');
    $fb    = get_option('m_fb', '#');
    $insta = get_option('m_insta', '#');
    $linkd = get_option('m_linkd', '#');
    ?>
    <div class="wrap">
        <h1>Million Delivery - Footer & Form Settings</h1>
        <form method="post">
            <table class="form-table">
                <tr><th>Newsletter Title</th><td><input type="text" name="m_news_title" value="<?php echo $news_title; ?>" class="regular-text"></td></tr>
                <tr><th>Button Text</th><td><input type="text" name="m_btn_text" value="<?php echo $btn_text; ?>" class="regular-text"></td></tr>
                <tr><th>Phone</th><td><input type="text" name="m_phone" value="<?php echo $phone; ?>" class="regular-text"></td></tr>
                <tr><th>Email</th><td><input type="text" name="m_email" value="<?php echo $email; ?>" class="regular-text"></td></tr>
                <tr><th>Copyright</th><td><input type="text" name="m_copy" value="<?php echo $copy; ?>" class="regular-text"></td></tr>
                <tr><th>Logos (URLs per line)</th><td><textarea name="m_logos" rows="6" class="large-text"><?php echo $logos; ?></textarea></td></tr>
                <tr style="background: #f0f0f0;"><th colspan="2"><b>Social Media Links</b></th></tr>
                <tr><th>Facebook URL</th><td><input type="url" name="m_fb" value="<?php echo $fb; ?>" class="regular-text"></td></tr>
                <tr><th>Instagram URL</th><td><input type="url" name="m_insta" value="<?php echo $insta; ?>" class="regular-text"></td></tr>
                <tr><th>LinkedIn URL</th><td><input type="url" name="m_linkd" value="<?php echo $linkd; ?>" class="regular-text"></td></tr>
            </table>
            <input type="submit" name="save_settings" class="button button-primary" value="Save Changes">
        </form>
    </div>
    
<?php } ?>

