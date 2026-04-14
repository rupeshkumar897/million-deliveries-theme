<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white antialiased'); ?>>

<header x-data="{ mobileMenuOpen: false }" class="w-full bg-white z-[100] relative">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="flex justify-between items-center h-20 lg:h-24">
            
            <div class="flex-shrink-0">
                <?php 
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo '<a href="'.esc_url(home_url('/')).'" class="text-2xl font-black uppercase tracking-tighter text-gray-900">'.get_bloginfo('name').'</a>';
                }
                ?>
            </div>

            <nav class="hidden lg:flex items-center space-x-12">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'flex space-x-10 text-[15px] font-bold uppercase tracking-widest text-gray-800 hover:text-blue-600',
                    'fallback_cb'    => '__return_false',
                ) );
                ?>
                <a href="#" class="bg-black text-white px-8 py-3.5 text-[13px] font-bold uppercase tracking-[0.2em] hover:bg-gray-800 transition-all duration-300">
                    Contact Us
                </a>
            </nav>

            <div class="lg:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-900 focus:outline-none p-2">
                    <svg x-show="!mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-full"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="absolute top-20 left-0 w-full bg-white border-b border-gray-100 shadow-2xl lg:hidden z-[99]">
        <div class="px-8 py-10 flex flex-col space-y-6">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'flex flex-col space-y-6 text-xl font-bold uppercase tracking-wider text-gray-900',
            ) );
            ?>
            <a href="#" class="inline-block bg-black text-white text-center py-4 font-bold uppercase tracking-widest">
                Contact Us
            </a>
        </div>
    </div>
</header>