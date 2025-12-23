<?php
// Language Logic (Same as index_v3.php)
$lang = $_GET['lang'] ?? 'en';
if (!in_array($lang, ['en', 'pt']))
    $lang = 'en';

$t = [
    'en' => [
        // Navigation (Reused)
        'nav_home' => 'Home',
        'nav_about' => 'About Us',
        'nav_services' => 'Services',
        'nav_quote' => 'Request Quote',
        'btn_quote' => 'Get a Quote',
        'serv_air_title' => 'Air Freight',
        'serv_ocean_title' => 'Ocean Freight',
        'serv_road_title' => 'Road Transport',
        'serv_warehouse_title' => 'Warehousing',

        // Hero
        'hero_title' => 'Global Air Freight Logistics',
        'hero_desc' => 'Fast, secure, and reliable air cargo solutions for critical shipments worldwide. We connect your business to the world\'s major markets with speed and precision.',
        'hero_stat1' => 'Global Reach',
        'hero_stat2' => '24/7 Support',

        // Advantages (SEO Rich)
        'adv_title' => 'Advantages of Air Freight',
        'adv_1_title' => 'Unmatched Speed',
        'adv_1_desc' => 'The fastest shipping method for time-sensitive cargo, ensuring your goods arrive in hours, not weeks.',
        'adv_2_title' => 'Global Connectivity',
        'adv_2_desc' => 'Direct access to any major airport worldwide, facilitating international trade for businesses of all sizes.',
        'adv_3_title' => 'Enhanced Security',
        'adv_3_desc' => 'Strict airport safety controls and reduced transit time significantly lower the risk of theft and damage.',

        // Types of Cargo (New Section for SEO)
        'types_title' => 'Specialized Air Cargo Solutions',
        'types_desc' => 'We handle diverse cargo types with specific protocols ensuring compliance and safety.',
        'type_1_title' => 'General Cargo',
        'type_1_desc' => 'Electronics, textiles, machine parts, and consumer goods handled with care.',
        'type_2_title' => 'Perishable Goods',
        'type_2_desc' => 'Climate-controlled solutions for food, flowers, and pharmaceuticals.',
        'type_3_title' => 'Hazardous Materials',
        'type_3_desc' => 'Certified IATA handling for dangerous goods and chemicals.',
        'type_4_title' => 'Oversized Cargo',
        'type_4_desc' => 'Charter options for heavy machinery and out-of-gauge shipments.',

        // Process
        'process_title' => 'Our Air Freight Process',
        'step1' => 'Consultation',
        'step2' => 'Pickup & Transport',
        'step3' => 'Customs Clearance',
        'step4' => 'Air Transit',
        'step5' => 'Final Delivery',

        // FAQ (SEO)
        'faq_title' => 'Air Freight Questions',
        'q1' => 'How is air freight cost calculated?',
        'a1' => 'Air freight is calculated based on the greater of actual weight or volumetric weight (Chargeable Weight). Our experts optimize this for you.',
        'q2' => 'What documents do I need?',
        'a2' => 'Typically, a Commercial Invoice, Packing List, and Air Waybill (AWB) are required. We handle the documentation for you.',

        'cta_title' => 'Accelerate Your Supply Chain',
        'cta_desc' => 'Get a custom air freight quote today.',
        'copyright' => '© 2024 Python Logistics. All rights reserved.'
    ],
    'pt' => [
        // Navigation (Reused)
        'nav_home' => 'Início',
        'nav_about' => 'Sobre Nós',
        'nav_services' => 'Serviços',
        'nav_quote' => 'Cotação',
        'btn_quote' => 'Solicitar Cotação',
        'serv_air_title' => 'Frete Aéreo',
        'serv_ocean_title' => 'Frete Marítimo',
        'serv_road_title' => 'Transporte Rodoviário',
        'serv_warehouse_title' => 'Armazenagem',

        // Hero
        'hero_title' => 'Logística de Frete Aéreo Global',
        'hero_desc' => 'Soluções de carga aérea rápidas, seguras e confiáveis para remessas críticas em todo o mundo. Conectamos sua empresa aos principais mercados com velocidade e precisão.',
        'hero_stat1' => 'Alcance Global',
        'hero_stat2' => 'Suporte 24/7',

        // Advantages
        'adv_title' => 'Vantagens do Frete Aéreo',
        'adv_1_title' => 'Velocidade Inigualável',
        'adv_1_desc' => 'O modal mais rápido para cargas urgentes, garantindo que suas mercadorias cheguem em horas, não semanas.',
        'adv_2_title' => 'Conectividade Global',
        'adv_2_desc' => 'Acesso direto a qualquer grande aeroporto do mundo, facilitando o comércio internacional para empresas de todos os portes.',
        'adv_3_title' => 'Segurança Reforçada',
        'adv_3_desc' => 'Rigorosos controles aeroportuários e tempo de trânsito reduzido diminuem drasticamente o risco de roubo e danos.',

        // Types of Cargo
        'types_title' => 'Soluções Especializadas de Carga Aérea',
        'types_desc' => 'Lidamos com diversos tipos de carga com protocolos específicos garantindo conformidade e segurança.',
        'type_1_title' => 'Carga Geral',
        'type_1_desc' => 'Eletrônicos, têxteis, peças de máquinas e bens de consumo manuseados com cuidado.',
        'type_2_title' => 'Perecíveis',
        'type_2_desc' => 'Soluções com temperatura controlada para alimentos, flores e produtos farmacêuticos.',
        'type_3_title' => 'Cargas Perigosas',
        'type_3_desc' => 'Manuseio certificado IATA para produtos perigosos e químicos.',
        'type_4_title' => 'Cargas Sobredimensionadas',
        'type_4_desc' => 'Opções de fretamento (Charter) para maquinário pesado e cargas fora de padrão.',

        // Process
        'process_title' => 'Nosso Processo de Transporte',
        'step1' => 'Consultoria',
        'step2' => 'Coleta e Transporte',
        'step3' => 'Despacho Aduaneiro',
        'step4' => 'Trânsito Aéreo',
        'step5' => 'Entrega Final',

        // FAQ
        'faq_title' => 'Dúvidas sobre Frete Aéreo',
        'q1' => 'Como é calculado o custo do frete aéreo?',
        'a1' => 'O frete aéreo é calculado com base no maior valor entre o peso real ou o peso volumétrico (Peso Tributável). Nossos especialistas otimizam isso para você.',
        'q2' => 'Quais documentos eu preciso?',
        'a2' => 'Geralmente, são necessários a Fatura Comercial (Invoice), Packing List e Conhecimento Aéreo (AWB). Nós cuidamos da documentação para você.',

        'cta_title' => 'Acelere Sua Cadeia de Suprimentos',
        'cta_desc' => 'Obtenha uma cotação personalizada de frete aéreo hoje.',
        'copyright' => '© 2024 Python Logistics. Todos os direitos reservados.'
    ]
];
$txt = $t[$lang];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Freight Services | Python Logistics</title>
    <meta name="description"
        content="Professional Global Air Freight Services. Fast, secure, and reliable international cargo shipping. Certified HAZMAT handling and customs brokerage.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Modern CSS (Menu Mobile) -->
    <link rel="stylesheet" href="assets/css/modern.css">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['"Inter"', 'sans-serif'], heading: ['"Outfit"', 'sans-serif'] },
                    colors: {
                        primary: { DEFAULT: '#3e4197', dark: '#2a2d6e' },
                        secondary: { DEFAULT: '#2bace2' }
                    },
                    animation: { 'float': 'float 6s ease-in-out infinite' },
                    keyframes: { float: { '0%, 100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-20px)' } } }
                }
            }
        }
    </script>
</head>

<body class="font-sans text-gray-700 antialiased bg-gray-50 selection:bg-primary selection:text-white">

    <!-- Navbar (Centralized) -->
    <?php include 'includes/navbar.php'; ?>

    <!-- IMMERSIVE HERO -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-primary-dark">
        <div class="absolute inset-0 z-0">
            <div
                class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center opacity-30 mix-blend-overlay">
            </div>
            <div class="absolute inset-0 bg-gradient-to-br from-primary-dark via-primary to-transparent opacity-90">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <span
                        class="inline-block py-2 px-4 bg-secondary/20 text-secondary border border-secondary/20 rounded-full text-sm font-bold tracking-wide uppercase mb-6 backdrop-blur-sm">
                        <i class="fa-solid fa-plane-departure mr-2"></i> <?php echo $txt['serv_air_title']; ?>
                    </span>
                    <h1
                        class="text-5xl lg:text-6xl font-heading font-extrabold text-white leading-tight mb-6 drop-shadow-lg">
                        <?php echo $txt['hero_title']; ?>
                    </h1>
                    <p class="text-xl text-gray-200 mb-8 leading-relaxed max-w-lg border-l-4 border-secondary pl-6">
                        <?php echo $txt['hero_desc']; ?>
                    </p>
                    <div class="flex gap-4">
                        <div
                            class="text-center px-6 py-4 bg-white/10 backdrop-blur-md rounded-xl border border-white/10">
                            <i class="fa-solid fa-earth-americas text-secondary text-2xl mb-1"></i>
                            <div class="text-sm text-gray-300 uppercase tracking-widest">
                                <?php echo $txt['hero_stat1']; ?>
                            </div>
                        </div>
                        <div
                            class="text-center px-6 py-4 bg-white/10 backdrop-blur-md rounded-xl border border-white/10">
                            <i class="fa-solid fa-headset text-secondary text-2xl mb-1"></i>
                            <div class="text-sm text-gray-300 uppercase tracking-widest">
                                <?php echo $txt['hero_stat2']; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3D Plane Visual -->
                <div class="relative hidden lg:block h-[400px]">
                    <img src="https://pngimg.com/d/plane_PNG101235.png" alt="Cargo Plane"
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-2xl drop-shadow-2xl animate-float z-20 object-contain ml-12 filter brightness-110">
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-secondary/20 rounded-full blur-3xl z-10">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DETAILED SERVICES GRID (SEO) -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl font-heading font-bold text-primary-dark mb-4"><?php echo $txt['types_title']; ?>
                </h2>
                <p class="text-lg text-gray-600"><?php echo $txt['types_desc']; ?></p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-secondary hover:shadow-lg transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-box"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                        <?php echo $txt['type_1_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed"><?php echo $txt['type_1_desc']; ?></p>
                </div>
                <!-- Service 2 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-secondary hover:shadow-lg transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-temperature-arrow-down"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                        <?php echo $txt['type_2_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed"><?php echo $txt['type_2_desc']; ?></p>
                </div>
                <!-- Service 3 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-secondary hover:shadow-lg transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                        <?php echo $txt['type_3_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed"><?php echo $txt['type_3_desc']; ?></p>
                </div>
                <!-- Service 4 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-secondary hover:shadow-lg transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                        <?php echo $txt['type_4_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed"><?php echo $txt['type_4_desc']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENT & FAQ SECTION -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Left: Rich Text Content -->
                <div>
                    <span
                        class="text-secondary font-bold tracking-wider uppercase text-sm"><?php echo $txt['adv_title']; ?></span>
                    <h2 class="text-3xl font-heading font-bold text-primary-dark mt-2 mb-6">
                        <?php echo $txt['adv_1_title']; ?> & <?php echo $txt['adv_2_title']; ?>
                    </h2>
                    <div class="prose text-gray-600 leading-relaxed space-y-6">
                        <p><?php echo $txt['adv_1_desc']; ?></p>
                        <p><?php echo $txt['adv_2_desc']; ?></p>
                        <p><?php echo $txt['adv_3_desc']; ?></p>
                        <ul class="space-y-4 pt-4">
                            <li class="flex items-center gap-3"><i class="fa-solid fa-check-circle text-secondary"></i>
                                Express customs clearance</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-check-circle text-secondary"></i>
                                Door-to-door delivery options</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-check-circle text-secondary"></i>
                                Real-time shipment tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- Right: FAQ Accordion -->
                <div>
                    <h3 class="text-2xl font-bold text-primary-dark mb-8"><?php echo $txt['faq_title']; ?></h3>
                    <div class="space-y-4">
                        <details
                            class="group bg-white p-6 rounded-xl shadow-sm border border-gray-100 [&_summary::-webkit-details-marker]:hidden open:border-secondary/50">
                            <summary
                                class="flex items-center justify-between cursor-pointer text-lg font-medium text-gray-900 group-hover:text-primary transition-colors">
                                <?php echo $txt['q1']; ?>
                                <span
                                    class="ml-4 flex-shrink-0 transition duration-300 group-open:-rotate-180 text-secondary">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </span>
                            </summary>
                            <p class="mt-4 leading-relaxed text-gray-600 border-t border-gray-100 pt-4">
                                <?php echo $txt['a1']; ?>
                            </p>
                        </details>

                        <details
                            class="group bg-white p-6 rounded-xl shadow-sm border border-gray-100 [&_summary::-webkit-details-marker]:hidden open:border-secondary/50">
                            <summary
                                class="flex items-center justify-between cursor-pointer text-lg font-medium text-gray-900 group-hover:text-primary transition-colors">
                                <?php echo $txt['q2']; ?>
                                <span
                                    class="ml-4 flex-shrink-0 transition duration-300 group-open:-rotate-180 text-secondary">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </span>
                            </summary>
                            <p class="mt-4 leading-relaxed text-gray-600 border-t border-gray-100 pt-4">
                                <?php echo $txt['a2']; ?>
                            </p>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS BAR (Simplified Visual) -->
    <section class="py-16 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h4 class="text-center text-gray-400 font-bold uppercase tracking-widest text-sm mb-12">
                <?php echo $txt['process_title']; ?>
            </h4>
            <div class="flex flex-wrap justify-between items-center text-center gap-8 relative opacity-80">
                <!-- Connecting Line -->
                <div class="hidden md:block absolute top-[2rem] left-0 w-full h-0.5 bg-gray-200 -z-10"></div>

                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-clipboard-list"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700"><?php echo $txt['step1']; ?></span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-truck"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700"><?php echo $txt['step2']; ?></span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-stamp"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700"><?php echo $txt['step3']; ?></span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-xl mb-4 shadow-lg scale-110">
                        <i class="fa-solid fa-plane-up"></i>
                    </div>
                    <span class="text-sm font-bold text-primary"><?php echo $txt['step4']; ?></span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700"><?php echo $txt['step5']; ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Same as index) -->
    <footer class="bg-gray-900 py-8 text-center text-gray-400 border-t border-gray-800 mt-auto">
        <p><?php echo $txt['copyright']; ?></p>
    </footer>

    <script>
        const navContainer = document.getElementById('nav-container');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navContainer.classList.replace('bg-white/80', 'bg-white/95');
                navContainer.classList.add('shadow-xl', 'scale-[0.98]');
            } else {
                navContainer.classList.replace('bg-white/95', 'bg-white/80');
                navContainer.classList.remove('shadow-xl', 'scale-[0.98]');
            }
        });
    </script>

    <!-- Mobile Menu Script -->
    <script src="assets/js/mobile-menu.js"></script>
</body>

</html>