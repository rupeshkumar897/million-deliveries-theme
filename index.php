<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical Task - Rupesh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50'); ?>>

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-600">LOGO</div>
            <nav class="hidden md:flex space-x-8 font-medium">
                <a href="#" class="hover:text-blue-600">Home</a>
                <a href="#" class="hover:text-blue-600">Services</a>
                <a href="#" class="hover:text-blue-600">About</a>
                <a href="#" class="hover:text-blue-600">Contact</a>
            </nav>
            <a href="#" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">Get Started</a>
        </div>
    </header>

    <?php 
    // Fetching Meta Box Data for Home Page (assuming ID is 7 based on your screenshot)
    $post_id = get_the_ID(); 
    $hero_title = rwmb_meta( 'task_hero_title', '', $post_id );
    $hero_desc  = rwmb_meta( 'task_hero_desc', '', $post_id );
    $hero_btn   = rwmb_meta( 'task_hero_btn', '', $post_id );
    ?>

    <section class="relative bg-white py-20 lg:py-32 overflow-hidden">
        <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2">
                <h1 class="text-4xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
                    <?php echo esc_html( $hero_title ? $hero_title : 'Expert Solutions for Your Business' ); ?>
                </h1>
                <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                    <?php echo esc_html( $hero_desc ? $hero_desc : 'We provide top-notch services to help your brand grow in the digital landscape.' ); ?>
                </p>
                <div class="mt-10">
                    <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-blue-700 transition">
                        <?php echo esc_html( $hero_btn ? $hero_btn : 'View Our Work' ); ?>
                    </a>
                </div>
            </div>
            <div class="lg:w-1/2 mt-12 lg:mt-0">
                <div class="bg-blue-100 rounded-2xl h-80 w-full flex items-center justify-center text-blue-400">
                    [Hero Image from Figma]
                </div>
            </div>
        </div>
    </section>

    <?php wp_footer(); ?>
</body>
</html>