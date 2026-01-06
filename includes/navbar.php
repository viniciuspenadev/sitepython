<?php
// Fallback translations for navbar if not defined in page (prevents Undefined array key errors)
if (!isset($txt['serv_insurance_title']) || !isset($txt['nav_home'])) {
    $navbar_translations = [
        'en' => [
            'nav_home' => 'Home',
            'nav_about' => 'About Us',
            'nav_services' => 'Services',
            'nav_quote' => 'Request Quote',
            'nav_news' => 'News',
            'nav_contact' => 'Contact',
            'serv_air_title' => 'Air Freight',
            'serv_ocean_title' => 'Ocean Freight',
            'serv_road_title' => 'Road Transport',
            'serv_warehouse_title' => 'Warehousing',
            'serv_pickup_title' => 'Pickup & Delivery',
            'serv_insurance_title' => 'Cargo Insurance',
        ],
        'pt' => [
            'nav_home' => 'Início',
            'nav_about' => 'Sobre Nós',
            'nav_services' => 'Serviços',
            'nav_quote' => 'Cotação',
            'nav_news' => 'Notícias',
            'nav_contact' => 'Contato',
            'serv_air_title' => 'Frete Aéreo',
            'serv_ocean_title' => 'Frete Marítimo',
            'serv_road_title' => 'Transporte Rodoviário',
            'serv_warehouse_title' => 'Armazenagem',
            'serv_pickup_title' => 'Coleta & Entrega',
            'serv_insurance_title' => 'Seguro de Carga',
        ],
        'es' => [
            'nav_home' => 'Inicio',
            'nav_about' => 'Acerca de',
            'nav_services' => 'Servicios',
            'nav_quote' => 'Cotización',
            'nav_news' => 'Noticias',
            'nav_contact' => 'Contacto',
            'serv_air_title' => 'Flete Aéreo',
            'serv_ocean_title' => 'Flete Marítimo',
            'serv_road_title' => 'Transporte Terrestre',
            'serv_warehouse_title' => 'Almacenamiento',
            'serv_pickup_title' => 'Recogida y Entrega',
            'serv_insurance_title' => 'Seguro de Carga',
        ]
    ];
    $current_lang = $lang ?? 'en';
    if (!isset($navbar_translations[$current_lang]))
        $current_lang = 'en';
    // Merge fallback translations into main $txt array
    $txt = array_merge($txt ?? [], $navbar_translations[$current_lang]);
}

$current_page = basename($_SERVER['PHP_SELF']);
$is_home = ($current_page == 'index.php');
$is_about = ($current_page == 'about.php');
$home_link = $is_home ? '#' : './';
?>
<!-- Navigation (Centralized) -->
<nav class="fixed top-0 w-full z-50 transition-all duration-300 pt-4 px-4" id="navbar">
    <div class="max-w-7xl mx-auto bg-white/80 backdrop-blur-md rounded-2xl shadow-lg border border-white/40 transition-all duration-300"
        id="nav-container">
        <div class="px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="<?php echo $home_link; ?>" class="flex-shrink-0 flex items-center gap-2 group">
                    <img src="https://pythonlogistics.com/wp-content/uploads/2020/10/logo-python.png"
                        alt="Python Logistics"
                        class="h-14 w-auto group-hover:scale-105 transition-transform duration-300">
                </a>

                <!-- Desktop Menu -->
                <div
                    class="hidden md:flex space-x-1 items-center bg-gray-100/50 p-1.5 rounded-full border border-gray-200/50">
                    <a href="<?php echo $home_link; ?>"
                        class="px-5 py-2 text-sm font-semibold text-gray-700 rounded-full hover:bg-white hover:text-primary hover:shadow-sm transition-all duration-300"><?php echo $txt['nav_home']; ?></a>

                    <!-- Services Dropdown -->
                    <div class="relative group">
                        <button
                            class="px-5 py-2 text-sm font-semibold text-gray-700 rounded-full hover:bg-white hover:text-primary hover:shadow-sm transition-all duration-300 flex items-center gap-1">
                            <?php echo $txt['nav_services']; ?> <i
                                class="fa-solid fa-chevron-down text-xs opacity-50 bg-transparent"></i>
                        </button>
                        <!-- Dropdown Menu -->
                        <div
                            class="absolute top-full left-0 mt-2 w-56 bg-white/90 backdrop-blur-md rounded-2xl shadow-xl border border-white/40 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 overflow-hidden">
                            <div class="p-2">
                                <a href="air-freight?lang=<?php echo $lang; ?>"
                                    class="block px-4 py-3 rounded-xl hover:bg-secondary/10 hover:text-secondary transition-colors text-sm font-medium flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-blue-50 text-secondary flex items-center justify-center">
                                        <i class="fa-solid fa-plane-up"></i>
                                    </div>
                                    <?php echo $txt['serv_air_title']; ?>
                                </a>
                                <a href="ocean-freight?lang=<?php echo $lang; ?>"
                                    class="block px-4 py-3 rounded-xl hover:bg-secondary/10 hover:text-secondary transition-colors text-sm font-medium flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-blue-50 text-secondary flex items-center justify-center">
                                        <i class="fa-solid fa-ship"></i>
                                    </div>
                                    <?php echo $txt['serv_ocean_title']; ?>
                                </a>
                                <a href="road-transport?lang=<?php echo $lang; ?>"
                                    class="block px-4 py-3 rounded-xl hover:bg-secondary/10 hover:text-secondary transition-colors text-sm font-medium flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-blue-50 text-secondary flex items-center justify-center">
                                        <i class="fa-solid fa-truck-fast"></i>
                                    </div>
                                    <?php echo $txt['serv_road_title']; ?>
                                </a>
                                <a href="warehousing?lang=<?php echo $lang; ?>"
                                    class="block px-4 py-3 rounded-xl hover:bg-secondary/10 hover:text-secondary transition-colors text-sm font-medium flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-blue-50 text-secondary flex items-center justify-center">
                                        <i class="fa-solid fa-warehouse"></i>
                                    </div>
                                    <?php echo $txt['serv_warehouse_title']; ?>
                                </a>
                                <a href="cargo-insurance?lang=<?php echo $lang; ?>"
                                    class="block px-4 py-3 rounded-xl hover:bg-secondary/10 hover:text-secondary transition-colors text-sm font-medium flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-blue-50 text-secondary flex items-center justify-center">
                                        <i class="fa-solid fa-shield-halved"></i>
                                    </div>
                                    <?php echo $txt['serv_insurance_title']; ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="about?lang=<?php echo $lang; ?>"
                        class="px-5 py-2 text-sm font-semibold rounded-full hover:bg-white hover:text-primary hover:shadow-sm transition-all duration-300 <?php echo $is_about ? 'bg-white text-primary shadow-sm' : 'text-gray-700'; ?>"><?php echo $txt['nav_about']; ?></a>
                    <a href="<?php echo $is_home ? '#quote' : './#quote'; ?>"
                        class="px-5 py-2 text-sm font-semibold text-gray-700 rounded-full hover:bg-white hover:text-primary hover:shadow-sm transition-all duration-300"><?php echo $txt['nav_quote']; ?></a>
                </div>

                <!-- Right Actions -->
                <div class="hidden md:flex items-center gap-4">
                    <!-- Language Switcher -->
                    <div
                        class="flex items-center gap-2 px-3 py-1.5 rounded-lg hover:bg-gray-100 transition-colors cursor-pointer relative group">
                        <a href="?lang=en"
                            class="opacity-50 hover:opacity-100 transition-opacity <?php echo $lang == 'en' ? '!opacity-100 scale-110' : ''; ?>">
                            <img src="https://flagcdn.com/w20/us.png" alt="EN" class="rounded-sm shadow-sm">
                        </a>
                        <span class="text-gray-300">|</span>
                        <a href="?lang=es"
                            class="opacity-50 hover:opacity-100 transition-opacity <?php echo $lang == 'es' ? '!opacity-100 scale-110' : ''; ?>">
                            <img src="https://flagcdn.com/w20/es.png" alt="ES" class="rounded-sm shadow-sm">
                        </a>
                        <span class="text-gray-300">|</span>
                        <a href="?lang=pt"
                            class="opacity-50 hover:opacity-100 transition-opacity <?php echo $lang == 'pt' ? '!opacity-100 scale-110' : ''; ?>">
                            <img src="https://flagcdn.com/w20/br.png" alt="PT" class="rounded-sm shadow-sm">
                        </a>
                    </div>

                    <a href="<?php echo $is_home ? '#quote' : './#quote'; ?>"
                        class="px-6 py-2.5 bg-secondary text-white font-bold rounded-xl hover:bg-primary transition-all duration-300 shadow-lg shadow-secondary/20 transform hover:-translate-y-0.5 flex items-center gap-2">
                        <?php echo $txt['btn_quote']; ?> <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn"
                    class="md:hidden relative w-10 h-10 flex items-center justify-center focus:outline-none z-50"
                    aria-label="Toggle menu">
                    <div class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="mobile-menu-overlay">
    <div class="mobile-menu-content">
        <!-- Mobile Menu Header -->
        <div class="mobile-menu-header">
            <img src="https://pythonlogistics.com/wp-content/uploads/2020/10/logo-python.png" alt="Python Logistics"
                class="h-10 w-auto">
            <button id="mobile-menu-close" class="mobile-menu-close-btn" aria-label="Close menu">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>

        <!-- Mobile Menu Links -->
        <nav class="mobile-menu-nav">
            <a href="<?php echo $home_link; ?>" class="mobile-menu-link">
                <i class="fa-solid fa-home"></i>
                <span><?php echo $txt['nav_home']; ?></span>
                <i class="fa-solid fa-chevron-right text-xs opacity-30"></i>
            </a>

            <!-- Services Dropdown Mobile -->
            <div class="mobile-menu-dropdown">
                <button class="mobile-menu-link mobile-dropdown-toggle">
                    <i class="fa-solid fa-box"></i>
                    <span><?php echo $txt['nav_services']; ?></span>
                    <i class="fa-solid fa-chevron-down text-xs dropdown-arrow"></i>
                </button>
                <div class="mobile-dropdown-content">
                    <a href="air-freight?lang=<?php echo $lang; ?>" class="mobile-submenu-link">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-secondary flex items-center justify-center">
                            <i class="fa-solid fa-plane-up"></i>
                        </div>
                        <span><?php echo $txt['serv_air_title']; ?></span>
                    </a>
                    <a href="ocean-freight?lang=<?php echo $lang; ?>" class="mobile-submenu-link">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-secondary flex items-center justify-center">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <span><?php echo $txt['serv_ocean_title']; ?></span>
                    </a>
                    <a href="road-transport?lang=<?php echo $lang; ?>" class="mobile-submenu-link">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-secondary flex items-center justify-center">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <span><?php echo $txt['serv_road_title']; ?></span>
                    </a>
                    <a href="warehousing?lang=<?php echo $lang; ?>" class="mobile-submenu-link">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-secondary flex items-center justify-center">
                            <i class="fa-solid fa-warehouse"></i>
                        </div>
                        <span><?php echo $txt['serv_warehouse_title']; ?></span>
                    </a>
                    <a href="cargo-insurance?lang=<?php echo $lang; ?>" class="mobile-submenu-link">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-secondary flex items-center justify-center">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <span><?php echo $txt['serv_insurance_title']; ?></span>
                    </a>
                </div>
            </div>

            <a href="about?lang=<?php echo $lang; ?>" class="mobile-menu-link">
                <i class="fa-solid fa-info-circle"></i>
                <span><?php echo $txt['nav_about']; ?></span>
                <i class="fa-solid fa-chevron-right text-xs opacity-30"></i>
            </a>

            <a href="<?php echo $is_home ? '#quote' : './#quote'; ?>" class="mobile-menu-link">
                <i class="fa-solid fa-calculator"></i>
                <span><?php echo $txt['nav_quote']; ?></span>
                <i class="fa-solid fa-chevron-right text-xs opacity-30"></i>
            </a>
        </nav>

        <!-- Mobile Menu Footer -->
        <div class="mobile-menu-footer">
            <!-- Language Switcher -->
            <div class="mobile-lang-switcher">
                <a href="?lang=en" class="mobile-lang-btn <?php echo $lang == 'en' ? 'active' : ''; ?>">
                    <img src="https://flagcdn.com/w20/us.png" alt="EN">
                    <span>English</span>
                </a>
                <a href="?lang=es" class="mobile-lang-btn <?php echo $lang == 'es' ? 'active' : ''; ?>">
                    <img src="https://flagcdn.com/w20/es.png" alt="ES">
                    <span>Español</span>
                </a>
                <a href="?lang=pt" class="mobile-lang-btn <?php echo $lang == 'pt' ? 'active' : ''; ?>">
                    <img src="https://flagcdn.com/w20/br.png" alt="PT">
                    <span>Português</span>
                </a>
            </div>

            <!-- CTA Button -->
            <a href="<?php echo $is_home ? '#quote' : './#quote'; ?>" class="mobile-cta-btn">
                <?php echo $txt['btn_quote']; ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>