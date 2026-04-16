<?php 
// 1. Data Retrieval from Million Settings
$m_phone = get_option('m_phone', '+1 (888) 645 4661');
$m_email = get_option('m_email', 'info@milliondeliveries.com');
$m_copy  = get_option('m_copy', '© 2026 Million Delivery.');
$m_news  = get_option('m_news_title', 'Subscribe To Our Newsletter');
$m_btn   = get_option('m_btn_text', 'Submit');
$m_logos_raw = get_option('m_logos', '');
$m_fb    = get_option('m_fb', '#');
$m_insta = get_option('m_insta', '#');
$m_linkd = get_option('m_linkd', '#');
?>

<div class="bg-white py-5 border-b border-gray-100 overflow-hidden relative z-10">
    <div class="container mx-auto px-6">
        <div class="swiper logo-swiper">
            <div class="swiper-wrapper items-center">
                <?php 
                $m_logos = array_filter(explode("\n", str_replace("\r", "", $m_logos_raw))); 
                if (!empty($m_logos)) :
                    $final_logos = (count($m_logos) < 10) ? array_merge($m_logos, $m_logos, $m_logos) : $m_logos;
                    foreach ($final_logos as $line) : 
                        $img_url = trim(explode('|', $line)[0]);
                        if(!empty($img_url)):
                ?>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo esc_url($img_url); ?>" 
                             class="h-8 md:h-12 w-auto object-contain transition-transform duration-300 hover:scale-110" 
                             alt="Client Logo">
                    </div>
                <?php 
                        endif;
                    endforeach; 
                endif; 
                ?>
            </div>
        </div>
    </div>
</div>

<footer class="bg-[#0a0a0a] text-white relative z-20 overflow-visible">
    <div class="container mx-auto px-6 lg:px-12 relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-0">
            
            <div class="lg:col-span-8 pt-10 lg:pt-16 pb-10 pr-0 lg:pr-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-0 md:gap-8 mb-10 lg:mb-16">
                    <?php 
                    $locations = ['footer_quick_links' => 'Quick Link', 'footer_services' => 'Services', 'footer_legal' => 'Legal'];
                    foreach($locations as $loc => $title) : ?>
                        <div class="mobile-accordion border-b border-white/10 md:border-none">
                            <button class="w-full flex justify-between items-center py-4 md:py-0 md:cursor-default group">
                                <h4 class="text-l md:mb-6 tracking-widest "><?php echo $title; ?></h4>
                                <span class="md:hidden transition-transform duration-300 group-[.is-active]:rotate-180">
                                    <i class="fas fa-chevron-down text-xs opacity-50"></i>
                                </span>
                            </button>
                            
                            <div class="accordion-content hidden md:block pb-4 md:pb-0">
                                <div class="opacity-40 text-xs">
                                    <?php wp_nav_menu(array('theme_location' => $loc, 'container' => false, 'menu_class' => 'footer-menu-list')); ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-6 md:gap-0">
                    <p class="text-[12px] opacity-30 font-medium order-2 md:order-1"><?php echo esc_html($m_copy); ?></p>
                    <div class="flex gap-6 opacity-40 text-sm order-1 md:order-2">
                        <?php if($m_fb != '#'): ?><a href="<?php echo esc_url($m_fb); ?>" target="_blank" class="hover:opacity-100 transition"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
                        <?php if($m_insta != '#'): ?><a href="<?php echo esc_url($m_insta); ?>" target="_blank" class="hover:opacity-100 transition"><i class="fab fa-instagram"></i></a><?php endif; ?>
                        <?php if($m_linkd != '#'): ?><a href="<?php echo esc_url($m_linkd); ?>" target="_blank" class="hover:opacity-100 transition"><i class="fab fa-linkedin-in"></i></a><?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 relative order-first lg:order-last">
                <div class="relative lg:absolute lg:-top-20 lg:bottom-0 right-0 w-full bg-[#0052cc] p-6 md:p-5 z-50 flex flex-col justify-center shadow-2xl mb-10 lg:mb-0">
                    <span class="text-[8px] font-bold uppercase tracking-widest opacity-70 mb-1 block ">Stay In Touch</span>
                    <h2 class="text-xl md:text-3xl  leading-tight mb-3">Subscribe To Our Newsletter</h2>
                    
                    <form action="#" method="POST" class="space-y-3 mb-4">
                        <div class="border-b border-white/30 pb-1">
                            <input type="email" placeholder="Enter Your Email" class="w-full bg-transparent outline-none py-1 text-sm text-white border-none focus:ring-0">
                        </div>
                        <button type="submit" class="w-full bg-white text-[#0052cc] py-2 text-[10px] tracking-widest flex justify-center items-center gap-2 hover:bg-gray-100 transition shadow-lg font-bold uppercase">
                            Submit <span class="text-sm">↗</span>
                        </button>
                    </form>

                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-phone-alt rotate-90 text-lg opacity-60"></i>
                            <div>
                                <p class="text-[7px] uppercase font-bold opacity-40 leading-none mb-1">Give us a call</p>
                                <p class="text-lg font-bold leading-none"><?php echo esc_html($m_phone); ?></p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 border-t border-white/10 pt-4">
                            <i class="far fa-envelope text-lg opacity-60"></i>
                            <div>
                                <p class="text-[7px] uppercase font-bold opacity-40 leading-none mb-1">Send us an email</p>
                                <p class="text-sm font-bold break-all leading-none"><?php echo esc_html($m_email); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<style>
.footer-menu-list { list-style: none; padding: 0; margin: 0; }
.footer-menu-list li { margin-bottom: 10px; }
.footer-menu-list li a { text-decoration: none; color: inherit; transition: 0.3s; }
.footer-menu-list li a:hover { opacity: 1; color: #fff; }

/* Mobile Accordion Logic */
@media (max-width: 767px) {
    .mobile-accordion.is-active .accordion-content { display: block; }
    .mobile-accordion.is-active button h4 { opacity: 1; color: #0052cc; }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Swiper Init
    new Swiper('.logo-swiper', {
        slidesPerView: 2, spaceBetween: 40, loop: true, speed: 5000,
        autoplay: { delay: 0, disableOnInteraction: false },
        breakpoints: { 768: { slidesPerView: 4 }, 1024: { slidesPerView: 6 } }
    });

    // 2. Mobile Accordion Toggle
    const accordions = document.querySelectorAll('.mobile-accordion');
    accordions.forEach(acc => {
        const btn = acc.querySelector('button');
        btn.addEventListener('click', () => {
            if (window.innerWidth < 768) {
                // Close others
                accordions.forEach(other => {
                    if (other !== acc) other.classList.remove('is-active');
                });
                // Toggle current
                acc.classList.toggle('is-active');
            }
        });
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>