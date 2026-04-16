<?php get_header(); ?>

<main>
    <?php 
    $post_id = get_the_ID(); 
    // Hero Data
    $hero_title = rwmb_meta( 'task_hero_title', '', $post_id );
    $hero_desc  = rwmb_meta( 'task_hero_desc', '', $post_id );
    $video_url  = rwmb_meta( 'task_hero_video', '', $post_id );
    ?>

    <section class="relative min-h-[650px] flex items-center bg-black">
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
                <div class="w-full lg:w-3/6 text-white">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl mt-10 lg:mt-0 leading-[1.1] tracking-tight">
                        <?php echo esc_html($hero_title); ?>
                    </h1>
                    <p class="mt-6 text-xs text-gray-200 max-w-l leading-relaxed">
                        <?php echo esc_html($hero_desc); ?>
                    </p>
                    <div class="mt-10">
                        <a href="#" class="bg-[#0052cc] text-white px-5 py-2 tracking-widest hover:bg-blue-700 transition-all inline-flex items-center gap-2">
                            Get A Quote <span>↗</span>
                        </a>
                    </div>
                </div>

                <div class="w-[92%] md:w-[80%] lg:w-[420px] mx-auto lg:mx-0 bg-[#EAEEF0] p-8 lg:p-10 shadow-2xl rounded-sm frn-box relative lg:absolute lg:right-12 lg:bottom-0 lg:translate-y-1/2 z-50 mt-10 lg:mt-0">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center lg:text-left">
                        Track Your Delivery
                    </h3>
                    <div class="space-y-4">
                        <input type="text" placeholder="Enter Tracking Number" class="w-full p-3 border border-gray-200 bg-gray-50 focus:outline-none focus:border-[#0052cc] transition shadow-inner">
                        <button class="w-full bg-[#0052cc] text-white py-3  tracking-widest hover:bg-blue-800 transition shadow-lg flex items-center justify-center gap-2">
                            Track Your Order <i class="fas fa-location-dot text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <section class="py-24 h-[5] lg:pb-[20rem] mbh  bg-white relative overflow-hidden">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/Vector.png" 
             class="w-full h-full" 
             alt="background">
    </div>

        <div class="container mx-auto px-6 lg:px-12 relative z-10">
            <div class="flex flex-col lg:flex-row items-start relative">
                
                <div class="w-full lg:w-1/2 relative z-20 pt-4">
                    <div class="flex items-center gap-2 text-[#000] text-[12px] mb-6 uppercase font-bold tracking-widest">
                        <span class="bg-[#0052cc] text-white p-1 rounded-sm flex items-center justify-center">
                            <i class="fas fa-chevron-right text-[7px]"></i>
                        </span> 
                        Why Choose Us
                    </div>
                    <h2 class="text-2xl lg:text-5xl text-[#0b132a] leading-[1.1] mb-12 max-w-lg" style="font-weight:600;">
                        Your Trusted Partner in <br> 
                        <span class="text-[#0b132a]">Delivery Excellence</span>
                    </h2>
                    <a href="#" class="bg-[#0052cc] text-white px-5 py-2  text-[12px] font-bold inline-flex items-center gap-2 hover:bg-blue-800 transition shadow-lg">
                        Contact Us <span>↗</span>
                    </a>
                </div>

                <div class="w-full lg:w-3/4 flex flex-col md:flex-row gap-0 items-start lg:-ml-60 mt-20 lg:mt-0 relative z-10">
                    
                    <div class="w-full md:w-1/3 md:translate-y-64 "> 
                        <div class="bg-[#f0f3f6] p-6 transition-all hover:bg-white hover:shadow-2xl group border border-gray-100 overflow-hidden mb-2 lg:mb-0" style="height: 250px !important;">
                            <div class="text-[#0052cc] text-4xl mb-4 group-hover:scale-110 transition-transform">
                                 <i class="<?php echo esc_attr(rwmb_meta('task_wcu_c1_icon')); ?>"></i>
                            </div>
                            <h3 class="text-lg font-bold mb-2 text-[#0b132a] leading-tight"><?php echo rwmb_meta('task_wcu_c1_t'); ?></h3>
                            <p class="text-gray-500 text-[13px] leading-relaxed line-clamp-3"><?php echo rwmb_meta('task_wcu_c1_d'); ?></p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/3"> 
                        <div class="bg-[#f0f3f6] p-6 transition-all hover:bg-white hover:shadow-2xl group border border-gray-100 overflow-hidden mb-2 lg:mb-0" style="height: 258px !important;">
                            <div class="text-[#0052cc] text-4xl mb-4 group-hover:scale-110 transition-transform">
                                <i class="<?php echo esc_attr(rwmb_meta('task_wcu_c2_icon')); ?>"></i>
                            </div>
                            <h3 class="text-lg font-bold mb-2 text-[#0b132a] leading-tight"><?php echo rwmb_meta('task_wcu_c2_t'); ?></h3>
                            <p class="text-gray-500 text-[13px] leading-relaxed line-clamp-3"><?php echo rwmb_meta('task_wcu_c2_d'); ?></p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/3 md:translate-y-64"> 
                        <div class="bg-[#f0f3f6] p-6 transition-all hover:bg-white hover:shadow-2xl group border border-gray-100 overflow-hidden mb-2 lg:mb-0" style="height: 250px !important;">
                            <div class="text-[#0052cc] text-4xl mb-4 group-hover:scale-110 transition-transform">
                                <i class="<?php echo esc_attr(rwmb_meta('task_wcu_c3_icon')); ?>"></i>
                            </div>
                            <h3 class="text-lg font-bold mb-2 text-[#0b132a] leading-tight"><?php echo rwmb_meta('task_wcu_c3_t'); ?></h3>
                            <p class="text-gray-500 text-[13px] leading-relaxed line-clamp-3"><?php echo rwmb_meta('task_wcu_c3_d'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white"> 
        <div class="container mx-auto px-4 lg:px-12">
            <div class="flex flex-col md:flex-row justify-between items-start mb-8 gap-4">
                <div class="md:w-1/3">
                    <div class="flex items-center gap-2 text-[#0052cc] text-[10px] mb-2 uppercase tracking-widest">
                        <i class="fas fa-chevron-right bg-[#0052cc] text-white p-1 rounded-sm text-[7px]"></i> Our Services
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-[#111] leading-tight">
                        Services That Align With Your Needs
                    </h2>
                </div>
                <div class="md:w-1/2 flex flex-col items-start md:items-start" >
                    <p class="text-gray-500 text-l leading-relaxed mb-4 md:text-left max-w-l">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="#" class="bg-[#0052cc] text-white px-5 py-2 text-[10px] flex items-center gap-2 hover:bg-blue-800 transition w-full md:w-auto justify-center">
                        Request A Quote <span class="text-sm">↗</span>
                    </a>
                </div>
            </div>

            <div class="flex md:grid md:grid-cols-3 gap-4 overflow-x-auto md:overflow-visible pb-6 md:pb-0 snap-x snap-mandatory scrollbar-hide">
                <?php 
                for($i=1; $i<=3; $i++): 
                    $s_title = rwmb_meta("task_s{$i}_t") ?: 'Packaging Services'; 
                    $s_img = rwmb_meta("task_s{$i}_img", ['size' => 'full']);
                    $img_url = !empty($s_img) ? $s_img['url'] : 'https://via.placeholder.com/600x800';
                ?>
                <div class="min-w-[82%] md:min-w-full flex-shrink-0 flex flex-col group snap-center">
                    <div class="relative overflow-hidden h-[14rem] lg:h-72 md:h-[450px] rounded-sm">
                        <img src="<?php echo esc_url($img_url); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <a href="#" class="flex md:hidden bg-[#0052cc] text-white p-2 justify-between items-center group-hover:bg-blue-800 transition-colors">
                        <span class="text-l"><?php echo esc_html($s_title); ?></span>
                        <span class="text-l">↗</span>
                    </a>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

   

    <section class="py-16 bg-white mbh">
    <div class="container mx-auto px-6 lg:px-12">
        
        <div class="text-center mb-12"> 
            <div class="flex justify-center items-center gap-2 text-[#000] text-[10px] tracking-widest mb-3 uppercase font-bold">
                <span class="bg-[#0052cc] text-white p-1 rounded-sm flex items-center justify-center">
                    <i class="fas fa-chevron-right text-[7px]"></i>
                </span> Quick & Reliable
            </div>
            <h2 class="text-2xl lg:text-4xl font-bold text-[#111]">
                <?php echo rwmb_meta('task_bento_main_title') ?: 'Comprehensive Delivery Solutions'; ?>
            </h2>
        </div>
<?php 
$p_id = get_the_ID();
$prefix = 'task_';

/**
 * Ekdum Simple Function: Warning proof
 */
function get_bento_final_fix($meta_key, $post_id) {
    // 1. Meta Box se data lo (Directly post meta se)
    $val = get_post_meta($post_id, $meta_key, true);

    // 2. Agar value array hai (Meta Box image_advanced aise hi deta hai)
    if ( is_array($val) && !empty($val) ) {
        $img_id = $val[0]; // Pehli ID lo
        return wp_get_attachment_url($img_id);
    } 
    
    // 3. Agar value direct Number/ID hai
    if ( is_numeric($val) && (int)$val > 0 ) {
        return wp_get_attachment_url($val);
    }

    // 4. Agar Meta Box ka special format mil raha hai
    $mb_val = rwmb_meta($meta_key, ['size' => 'full'], $post_id);
    if ( is_array($mb_val) && !empty($mb_val) ) {
        $first = reset($mb_val);
        return isset($first['url']) ? $first['url'] : '';
    }

    return '';
}

// Images Fetch Karo
$img1 = get_bento_final_fix($prefix . 'b_img1', $p_id);
$img2 = get_bento_final_fix($prefix . 'b_img2', $p_id);
$img3 = get_bento_final_fix($prefix . 'b_img3', $p_id);
$img5 = get_bento_final_fix($prefix . 'b_img5', $p_id);

// Text Fetch Karo (Inme array ki problem nahi aati)
$txt1 = get_post_meta($p_id, $prefix . 'b_txt1', true);
$txt2 = get_post_meta($p_id, $prefix . 'b_txt2', true);
$txt3 = get_post_meta($p_id, $prefix . 'b_txt3', true);
$txt4 = get_post_meta($p_id, $prefix . 'b_txt4', true);
?>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 auto-rows-auto md:auto-rows-[300px]">
            
            <div class="md:col-span-4 md:row-span-2 relative group overflow-hidden rounded-sm min-h-[450px] md:min-h-full">
                <?php if($img1): ?>
                    <img src="<?php echo esc_url($img1); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <?php endif; ?>
                <div class="absolute inset-0 bg-black/30 p-10 flex flex-col justify-between">
                    <div class="w-32">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Image-Block.png" class="brightness-0 invert" alt="Logo">
                    </div>
                    <h3 class="text-white text-1.5xl lg:text-3xl leading-tight"><?php echo esc_html($txt1); ?></h3>
                </div>
            </div>

            <div class="md:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <div class="md:col-span-2 relative group overflow-hidden rounded-sm h-[260px] bg-gray-100">
                    <?php if($img2): ?>
                        <img src="<?php echo esc_url($img2); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <?php endif; ?>
                    <div class="absolute inset-0 p-10 bg-black/40 flex items-start">
                        <h3 class="text-white text-1.5xl lg:text-3xl leading-snug max-w-md"><?php echo esc_html($txt2); ?></h3>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-sm h-[340px] bg-[#EAEEF0]">
    <?php if($img3): ?>
        <img src="<?php echo esc_url($img3); ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
    <?php endif; ?>

    <div class="absolute inset-0 p-8 flex flex-col justify-end bg-gradient-to-t from-black/60 via-transparent to-transparent z-10">
        
        
        
        <h3 class="text-black text-1.5xl lg:text-3xl leading-tight">
            <?php echo esc_html($txt3); ?>
        </h3>
    </div>
</div>

                <div class="flex flex-col gap-4 h-[340px]">
                    <div class="bg-[#0052cc] flex-1 p-8 flex flex-col items-center justify-center text-center rounded-sm">
                        <h3 class="text-white text-1.5xl lg:text-3xl mb-6"><?php echo esc_html($txt4); ?></h3>
                        <a href="#" class="bg-white text-[#0052cc] px-5 py-2 text-[11px]  tracking-widest flex items-center gap-2 hover:bg-gray-100 transition shadow-lg">
                            Request A Quote <span class="text-sm">↗</span>
                        </a>
                    </div>
                    <div class="flex-1 relative overflow-hidden rounded-sm bg-gray-200">
                        <?php if($img5): ?>
                            <img src="<?php echo esc_url($img5); ?>" class="w-full h-full object-cover">
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>