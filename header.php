<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="wp-content/themes/rupesh-task/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Million Menu Desktop Styles */
        .million-menu ul { display: flex !important; list-style: none !important; gap: 30px; align-items: center; margin: 0; padding: 0; }
        .million-menu ul li a { font-size: 13px; font-weight: 700; color: #333; text-transform: uppercase; transition: 0.3s; }
        .million-menu ul li a:hover { color: #0052cc; }

        /* Mobile Menu List Styling (Exact match to screenshot) */
        .mobile-nav-list ul { display: flex !important; flex-direction: column !important; list-style: none !important; padding: 0; }
        .mobile-nav-list ul li { border-bottom: 1px solid #222; width: 100%; }
        .mobile-nav-list ul li a { 
            font-size: 18px; 
            font-weight: 500; 
            color: #ffffff; 
            padding: 20px 0; 
            display: flex; 
            justify-content: space-between; 
            align-items: center;
            width: 100%;
        }
        /* Submenu (Dropdown) styling inside Mobile */
        .mobile-nav-list ul .sub-menu { display: none !important; background: #111; padding-left: 20px !important; }
        .mobile-nav-list ul li.active > .sub-menu { display: block !important; }

        .custom-logo-link img { max-height: 40px; width: auto; }
 /* --- Desktop Dropdown - Clean & Premium --- */
@media (min-width: 1280px) {
    /* Main Menu Item */
    .million-menu ul li {
        position: relative;
        padding: 10px 0;
    }

    /* Sub-menu Container */
    .million-menu ul li ul.sub-menu {
        position: absolute;
        top: 100%;
        left: 0;
        background: #ffffff;
        min-width: 240px;
        display: flex !important; /* Flex use karenge vertical list ke liye */
        flex-direction: column;
        
        /* Animation Effects */
        visibility: hidden;
        opacity: 0;
        transform: translateY(15px); /* Niche se upar aane ka effect */
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        
        /* Shadow & Border */
        box-shadow: 0 15px 35px -5px rgba(0, 0, 0, 0.1), 0 5px 15px -3px rgba(0, 0, 0, 0.05);
        border-top: 4px solid #0052cc; /* Blue top line */
        z-index: 100;
        padding: 15px 0 !important;
    }

    /* Hover State */
    .million-menu ul li:hover > ul.sub-menu {
        visibility: visible;
        opacity: 1;
        transform: translateY(0); /* Original position par aayega */
    }

    /* Dropdown Links */
    .million-menu ul li ul.sub-menu li {
        width: 100%;
        padding: 0 !important;
    }

    .million-menu ul li ul.sub-menu li a {
        display: block;
        padding: 12px 25px !important;
        color: #4b5563 !important;
        font-size: 14px !important;
        font-weight: 500 !important;
        text-transform: capitalize !important;
        transition: all 0.2s;
    }

    /* Dropdown Hover Effect */
    .million-menu ul li ul.sub-menu li a:hover {
        background-color: #f8fafc;
        color: #0052cc !important;
        padding-left: 30px !important; /* Halka sa right slide effect */
    }
}
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class('antialiased'); ?>>

<?php 
$phone = get_theme_mod( 'header_phone', '+1 (888) 645 4661' );
$email = get_theme_mod( 'header_email', 'info@milliondeliveries.com' );
?>

<header x-data="{ mobileOpen: false }" class="w-full relative">
    
    <div class="bg-[#0052cc] text-white py-2 px-6 lg:px-12 hidden md:flex justify-between items-center text-[12px]">
        <div class="flex space-x-6">
            <a href="tel:<?php echo esc_attr($phone); ?>" class="flex items-center gap-2 font-medium">
                <i class="fas fa-phone-alt text-[10px]"></i> <?php echo esc_html($phone); ?>
            </a>
            <a href="mailto:<?php echo esc_attr($email); ?>" class="flex items-center gap-2 font-medium">
                <i class="fas fa-envelope text-[10px]"></i> <?php echo esc_html($email); ?>
            </a>
        </div>
        <div class="flex items-center space-x-5">
            <i class="fab fa-facebook-f cursor-pointer"></i>
            <i class="fab fa-linkedin-in cursor-pointer"></i>
            <i class="fab fa-instagram cursor-pointer"></i>
        </div>
    </div>

    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm">
        <div class="max-w-[1440px] mx-auto flex justify-between items-center h-20">
            
            <div class="px-6 lg:px-12">
                <?php the_custom_logo(); ?>
            </div>

            <div class="hidden xl:block million-menu">
                <?php wp_nav_menu(['theme_location' => 'primary-menu', 'container' => false]); ?>
            </div>

            <div class="hidden lg:flex h-full items-stretch border-l border-gray-100">
                <a href="#" class="bg-[#0052cc] flex items-center px-8 text-white font-extrabold text-[11px] hover:bg-blue-800 transition uppercase tracking-tighter">
                    Track Your Order
                </a>
            </div>

            <div class="lg:hidden px-6">
                <button @click="mobileOpen = true" class="text-gray-900 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </div>
    </nav>

    <div x-show="mobileOpen" 
         x-transition:enter="transition ease-in-out duration-300"
         x-transition:enter-start="translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in-out duration-300"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
         class="fixed inset-0 bg-black z-[100] lg:hidden overflow-y-auto">
        
        <div class="p-6">
            <div class="flex justify-between items-center mb-10">
                <div class="w-40 brightness-0 invert"> <?php the_custom_logo(); ?>
                </div>
                <button @click="mobileOpen = false" class="text-white">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <div class="mobile-nav-list">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                ) );
                ?>
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sirf un links ko pakdo jinke niche sub-menu hai
    const menuItemsWithChildren = document.querySelectorAll('.mobile-nav-list li.menu-item-has-children');
    
    menuItemsWithChildren.forEach(item => {
        const link = item.querySelector('a');
        
        // Agar arrow pehle se nahi hai toh add karo
        if (!link.querySelector('i')) {
            link.innerHTML += '<i class="fas fa-chevron-down text-[12px] ml-2 transition-transform"></i>';
        }
        
        link.addEventListener('click', function(e) {
            // Agar mobile view hai toh dropdown toggle karo
            if (window.innerWidth < 1280) {
                e.preventDefault(); // Page reload hone se roko
                
                // Baki sab open dropdowns ko band karna hai toh ye line dalo (Optional)
                // menuItemsWithChildren.forEach(el => { if(el !== item) el.classList.remove('active'); });

                item.classList.toggle('active');
            }
        });
    });
});
</script>