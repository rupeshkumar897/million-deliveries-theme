<header x-data="{ open: false }" class="w-full relative">
    
    <div class="bg-[#0052cc] text-white py-2 px-6 md:px-12 flex justify-between items-center text-[13px]">
        <div class="flex items-center space-x-6">
            <span class="flex items-center gap-2 font-medium">
               <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
               +1 (888) 645 4661
            </span>
            <span class="hidden sm:flex items-center gap-2 font-medium">
               <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
               info@milliondeliveries.com
            </span>
        </div>
        <div class="flex items-center space-x-4">
            </div>
    </div>

    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-[1440px] mx-auto flex justify-between items-center h-20 md:h-24">
            
            <div class="px-6 lg:px-12">
                <?php 
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo '<a href="'.home_url('/').'" class="text-2xl font-black uppercase tracking-tighter text-gray-900">'.get_bloginfo('name').'</a>';
                }
                ?>
            </div>

            <div class="hidden xl:flex items-center">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'flex items-center space-x-8 list-none m-0 p-0',
                    'add_li_class'   => 'inline-block', 
                    'add_link_class' => 'text-[14px] font-bold text-gray-800 uppercase tracking-tight hover:text-blue-600 transition',
                    'fallback_cb'    => '__return_false',
                ) );
                ?>
            </div>

            <div class="hidden lg:flex h-full items-stretch">
                <a href="#" class="flex items-center px-8 border-l border-gray-200 font-bold text-gray-800 hover:bg-gray-50 transition text-[15px]">
                    Get A Quote <span class="ml-1 text-lg">↗</span>
                </a>
                <a href="#" class="flex items-center px-10 bg-[#0052cc] text-white font-bold hover:bg-blue-800 transition text-[15px]">
                    Track Your Order
                </a>
            </div>

            <div class="xl:hidden px-6">
                <button @click="open = !open" class="text-gray-900 p-2">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </div>
    </nav>

    <div x-show="open" x-transition class="xl:hidden bg-white w-full border-t absolute z-[100] shadow-xl p-6">
        <div class="flex flex-col space-y-4">
            <?php 
            wp_nav_menu( array( 
                'theme_location' => 'primary-menu', 
                'menu_class' => 'flex flex-col space-y-4 font-bold uppercase text-gray-800' 
            ) ); 
            ?>
            <div class="pt-4 border-t border-gray-100 flex flex-col space-y-3">
                <a href="#" class="bg-gray-50 text-center py-3 font-bold rounded">Get A Quote</a>
                <a href="#" class="bg-[#0052cc] text-white text-center py-3 font-bold rounded">Track Your Order</a>
            </div>
        </div>
    </div>
</header>