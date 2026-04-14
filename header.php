<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="bg-white py-4 border-b border-gray-100 sticky top-0 z-50">
    <div class="container mx-auto px-6 md:px-12 flex justify-between items-center">
        
        <div class="logo">
            <?php 
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="text-2xl font-bold">' . get_bloginfo( 'name' ) . '</a>';
            }
            ?>
        </div>

        <nav class="hidden md:block">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'flex space-x-8 text-sm font-semibold text-gray-700',
                'fallback_cb'    => '__return_false',
            ) );
            ?>
        </nav>

        <div class="hidden md:block">
            <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-bold hover:bg-blue-700 transition">
                Get Started
            </a>
        </div>

    </div>
</header>