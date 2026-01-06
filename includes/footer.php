<?php
// Fallback translations for footer if not defined in page (prevents Undefined array key errors)
if (!isset($txt['footer_desc'])) {
    $footer_translations = [
        'en' => [
            'footer_desc' => 'Python Logistics is committed to providing efficient, reliable, and secure logistics solutions globally.',
            'quick_links' => 'Quick Links',
            'contact_us' => 'Contact Us',
            'copyright' => '© 2026 Python Logistics. All rights reserved.',
        ],
        'pt' => [
            'footer_desc' => 'A Python Logistics está comprometida em fornecer soluções logísticas eficientes, confiáveis e seguras globalmente.',
            'quick_links' => 'Links Rápidos',
            'contact_us' => 'Fale Conosco',
            'copyright' => '© 2026 Python Logistics. Todos os direitos reservados.',
        ],
        'es' => [
            'footer_desc' => 'Python Logistics está comprometida en proporcionar soluciones logísticas eficientes, confiables y seguras a nivel global.',
            'quick_links' => 'Enlaces Rápidos',
            'contact_us' => 'Contáctenos',
            'copyright' => '© 2026 Python Logistics. Todos los derechos reservados.',
        ]
    ];
    $current_lang = $lang ?? 'en';
    if (!isset($footer_translations[$current_lang]))
        $current_lang = 'en';
    // Merge fallback translations into main $txt array
    $txt = array_merge($txt ?? [], $footer_translations[$current_lang]);
}
?>
<footer class="bg-[#36b5e8] pt-16 pb-8 border-t border-white/20 relative text-white">
    <!-- Background Layers matching Quote Section -->
    <div class="absolute inset-0 bg-primary opacity-50 mix-blend-multiply"></div>
    <div class="absolute inset-0 bg-[url('assets/images/backgrounds/5.jpg')] bg-cover bg-fixed opacity-20"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class=" grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
            <div>
                <img src="https://pythonlogistics.com/wp-content/uploads/2020/10/logo-python.png" alt="Python"
                    class="h-8 mb-6 brightness-0 invert">
                <p class="text-white/90 mb-6">
                    <?php echo $txt['footer_desc']; ?>
                </p>
                <div class="flex gap-4 text-white">
                    <a href="#" class="hover:text-secondary transition-colors"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-secondary transition-colors"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-secondary transition-colors"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div>
                <h4 class="font-bold text-white mb-6">
                    <?php echo $txt['quick_links']; ?>
                </h4>
                <ul class="space-y-3 text-white/80">
                    <li><a href="#" class="hover:text-white transition-colors">
                            <?php echo $txt['nav_home']; ?>
                        </a>
                    </li>
                    <li><a href="about.php?lang=<?php echo $lang; ?>" class="hover:text-white transition-colors">
                            <?php echo $txt['nav_about']; ?>
                        </a></li>
                    <li><a href="#services" class="hover:text-white transition-colors">
                            <?php echo $txt['nav_services']; ?>
                        </a></li>
                    <li><a href="#quote" class="hover:text-white transition-colors">
                            <?php echo $txt['nav_quote']; ?>
                        </a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-white mb-6">
                    <?php echo $txt['contact_us']; ?>
                </h4>
                <ul class="space-y-3 text-white/90">
                    <li class="flex items-start"><i class="fa-solid fa-location-dot mr-3 text-white mt-1"></i>
                        <span>1915 NW 79th Avenue - Doral, FL 33126</span>
                    </li>
                    <li class="flex items-center"><i class="fa-solid fa-phone mr-3 text-white"></i> +1 305-901-5931</li>
                    <li class="flex items-center"><i class="fa-solid fa-envelope mr-3 text-white"></i>
                        pricing@pythonlogistics.com</li>
                </ul>
            </div>
        </div>
        <div
            class="text-center pt-8 border-t border-white/20 text-white/60 flex flex-col md:flex-row justify-between items-center gap-4">
            <p>
                <?php echo $txt['copyright']; ?>
            </p>

            <!-- Developer Credit -->
            <a href="https://www.bluedigitalhub.com.br" target="_blank"
                class="font-[Inter] text-[15px] tracking-tighter hover:opacity-80 transition-opacity">
                <span class="font-bold text-white">BlueDigital</span><span class="font-light text-blue-200">Hub</span>
            </a>
        </div>
    </div>
</footer>