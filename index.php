
<?php get_header(); ?>

<main>
    <?php 
    $post_id = get_the_ID(); 
    // Hero Data
    $hero_title = rwmb_meta( 'task_hero_title', '', $post_id );
    $hero_desc  = rwmb_meta( 'task_hero_desc', '', $post_id );
    $video_url  = rwmb_meta( 'task_hero_video', '', $post_id );
    ?>

    <section class="relative min-h-[650px] flex items-center  bg-black">
        <div class="absolute inset-0 z-0">
            <?php if($video_url): ?>
                <video autoplay muted loop playsinline class="w-full h-full object-cover">
                    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                </video>
            <?php endif; ?>
            <div class="absolute inset-0 bg-black/60 z-10"></div>
        </div>

        <div class="container mx-auto px-6 lg:px-12 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-3/5 text-white">
                    <h1 class="text-2xl md:text-6xl lg:text-7xl font-black leading-[1.1] tracking-tight uppercase">
                        <?php echo esc_html($hero_title); ?>
                    </h1>
                    <p class="mt-6 text-sm text-gray-200 max-w-xl leading-relaxed">
                        <?php echo esc_html($hero_desc); ?>
                    </p>
                    <div class="mt-10">
                        <a href="#" class="bg-[#0052cc] text-white px-10 py-4 font-bold uppercase tracking-widest hover:bg-blue-700 transition-all inline-flex items-center gap-2">
                            Get A Quote <span>↗</span>
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-[420px] bg-[#EAEEF0] p-8 lg:p-10 shadow-2xl rounded-sm frn-box">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Track Your Delivery</h3>
                    <div class="space-y-4">
                        <input type="text" placeholder="Enter Tracking Number" class="w-full p-4 border border-gray-200 bg-gray-50 focus:outline-none focus:border-blue-600 transition">
                        <button class="w-full bg-[#0052cc] text-white py-4 font-bold uppercase hover:bg-blue-800 transition shadow-lg flex items-center justify-center gap-2">
                            Track Your Order <i class="fas fa-location-dot text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10 pointer-events-none hidden xl:block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/road-path.svg" class="w-full h-full object-contain" alt="path">
        </div>

        <div class="container mx-auto px-6 lg:px-12 relative z-10">
            <div class="flex flex-col lg:flex-row items-center lg:items-stretch gap-8 lg:gap-12">
                
                <div class="w-full lg:w-1/3 flex flex-col justify-center py-10 text-center lg:text-left">
                    <div class="flex items-center justify-center lg:justify-start gap-2 text-[#0052cc] font-bold text-sm mb-6 uppercase tracking-widest">
                        <span class="bg-[#0052cc] text-white p-1 rounded-sm flex items-center justify-center">
                            <i class="fas fa-chevron-right text-[8px]"></i>
                        </span> 
                        Why Choose Us
                    </div>
                    <h2 class="text-2xl lg:text-2xl font-black text-[#0b132a] leading-tight mb-10">
                        <?php echo rwmb_meta('task_wcu_title'); ?>
                    </h2>
                    <div>
                        <a href="#" class="bg-[#0052cc] text-white px-10 py-4 font-bold uppercase text-[12px] inline-flex items-center gap-2 hover:bg-blue-800 transition shadow-lg">
                            Contact Us <span>↗</span>
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-1/4 flex flex-col justify-end">
                    <div class="bg-[#f8fafc] p-5 border border-gray-100 shadow-sm min-h-[150] flex flex-col justify-center hover:bg-white hover:shadow-2xl transition-all group">
                        <div class="text-[#0052cc] text-5xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="<?php echo esc_attr(rwmb_meta('task_wcu_c2_icon')); ?>"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-[#0b132a]"><?php echo rwmb_meta('task_wcu_c2_t'); ?></h3>
                        <p class="text-gray-500 text-sm leading-relaxed"><?php echo rwmb_meta('task_wcu_c2_d'); ?></p>
                    </div>
                </div>

                <div class="w-full lg:w-1/4 flex flex-col justify-start">
                    <div class="bg-[#f8fafc] p-5 border border-gray-100 shadow-sm min-h-[150] flex flex-col justify-center hover:bg-white hover:shadow-xl transition-all group">
                        <div class="text-[#0052cc] text-5xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="<?php echo esc_attr(rwmb_meta('task_wcu_c1_icon')); ?>"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-[#0b132a]"><?php echo rwmb_meta('task_wcu_c1_t'); ?></h3>
                        <p class="text-gray-500 text-sm leading-relaxed"><?php echo rwmb_meta('task_wcu_c1_d'); ?></p>
                    </div>
                </div>

                <div class="w-full lg:w-1/4 flex flex-col justify-center lg:pt-52">
                    <div class="bg-[#f8fafc] p-5 border border-gray-100 shadow-sm min-h-[150] flex flex-col justify-center hover:bg-white hover:shadow-xl transition-all group">
                        <div class="text-[#0052cc] text-5xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="<?php echo esc_attr(rwmb_meta('task_wcu_c3_icon')); ?>"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-[#0b132a]"><?php echo rwmb_meta('task_wcu_c3_t'); ?></h3>
                        <p class="text-gray-500 text-sm leading-relaxed"><?php echo rwmb_meta('task_wcu_c3_d'); ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>