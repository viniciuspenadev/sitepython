<?php
// Language Logic
$lang = $_GET['lang'] ?? 'en';
if (!in_array($lang, ['en', 'pt', 'es']))
    $lang = 'en';

$t = [
    'en' => [
        // Navigation (Reused keys will come from navbar include mostly, but defining here for standalone safety/consistency if needed in page body)
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
        'hero_title' => 'Global Ocean Freight',
        'hero_desc' => 'Cost-effective and reliable maritime shipping solutions. We connect continents with tailored Full Container Load (FCL) and Less than Container Load (LCL) services.',
        'hero_stat1' => 'Major Ports',
        'hero_stat2' => 'Vessel Tracking',

        // Advantages (SEO Rich)
        'adv_title' => 'Why Choose Ocean Freight?',
        'adv_1_title' => 'Cost Efficiency',
        'adv_1_desc' => 'The most economical solution for large volumes and long-distance shipments, significantly lowering your supply chain costs.',
        'adv_2_title' => 'Massive Capacity',
        'adv_2_desc' => 'From a single pallet to heavy machinery, ocean vessels handle virtually any size or weight of cargo.',
        'adv_3_title' => 'Eco-Friendly',
        'adv_3_desc' => 'Maritime transport has a lower carbon footprint per ton-mile compared to air or road transport.',

        // Types of Cargo (SEO)
        'types_title' => 'Specialized Maritime Solutions',
        'types_desc' => 'Comprehensive sea freight options tailored to your specific cargo requirements.',
        'type_1_title' => 'FCL Shipping',
        'type_1_desc' => 'Full Container Load for exclusive use, offering maximum security and faster transit.',
        'type_2_title' => 'LCL Shipping',
        'type_2_desc' => 'Less than Container Load for smaller shipments, paying only for the space you use.',
        'type_3_title' => 'Reefer Containers',
        'type_3_desc' => 'Temperature-controlled units for keeping perishables fresh across the ocean.',
        'type_4_title' => 'Project Cargo',
        'type_4_desc' => 'Heavy lift and breakbulk services for oversized industrial equipment.',

        // Process
        'process_title' => 'Ocean Shipping Process',
        'step1' => 'Booking & Pickup',
        'step2' => 'Container Loading',
        'step3' => 'Port Handling',
        'step4' => 'Ocean Transit',
        'step5' => 'Customs & Delivery',

        // FAQ
        'faq_title' => 'Ocean Freight FAQ',
        'q1' => 'What is the difference between FCL and LCL?',
        'a1' => 'FCL (Full Container Load) means you rent the entire container. LCL (Less than Container Load) means you share container space with other shippers, ideal for smaller volumes.',
        'q2' => 'How long does ocean freight take?',
        'a2' => 'Transit times vary by route, typically ranging from 15 to 45 days. We provide estimated arrival times for all major global ports.',

        'cta_title' => 'Scale Your Global Trade',
        'cta_desc' => 'Get a competitive ocean freight quote today.',
        'copyright' => '© 2024 Python Logistics. All rights reserved.'
    ],
    'pt' => [
        // Navigation
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
        'hero_title' => 'Frete Marítimo Global',
        'hero_desc' => 'Soluções de transporte marítimo econômicas e confiáveis. Conectamos continentes com serviços sob medida de Contêiner Completo (FCL) e Carga Consolidada (LCL).',
        'hero_stat1' => 'Principais Portos',
        'hero_stat2' => 'Rastreio Naval',

        // Advantages
        'adv_title' => 'Por Que Escolher Frete Marítimo?',
        'adv_1_title' => 'Eficiência de Custo',
        'adv_1_desc' => 'A solução mais econômica para grandes volumes e longas distâncias, reduzindo significativamente seus custos logísticos.',
        'adv_2_title' => 'Capacidade Massiva',
        'adv_2_desc' => 'De um único palete a maquinário pesado, navios lidam com praticamente qualquer tamanho ou peso de carga.',
        'adv_3_title' => 'Eco-Friendly',
        'adv_3_desc' => 'O transporte marítimo possui uma pegada de carbono menor por tonelada-milha comparado ao aéreo ou rodoviário.',

        // Types of Cargo
        'types_title' => 'Soluções Marítimas Especializadas',
        'types_desc' => 'Opções abrangentes de frete marítimo adaptadas aos requisitos específicos da sua carga.',
        'type_1_title' => 'Transporte FCL',
        'type_1_desc' => 'Contêiner Completo para uso exclusivo, oferecendo segurança máxima e trânsito mais rápido.',
        'type_2_title' => 'Transporte LCL',
        'type_2_desc' => 'Carga Consolidada para remessas menores, pagando apenas pelo espaço que você utiliza.',
        'type_3_title' => 'Contêineres Reefer',
        'type_3_desc' => 'Unidades com temperatura controlada para manter perecíveis frescos através do oceano.',
        'type_4_title' => 'Carga Projeto',
        'type_4_desc' => 'Serviços de carga pesada e breakbulk para equipamentos industriais sobredimensionados.',

        // Process
        'process_title' => 'Processo de Envio Marítimo',
        'step1' => 'Reserva e Coleta',
        'step2' => 'Estufagem',
        'step3' => 'Manuseio Portuário',
        'step4' => 'Trânsito Oceânico',
        'step5' => 'Entrega Final',

        // FAQ
        'faq_title' => 'Dúvidas sobre Frete Marítimo',
        'q1' => 'Qual a diferença entre FCL e LCL?',
        'a1' => 'FCL (Full Container Load) significa que você aluga o contêiner inteiro. LCL (Less than Container Load) significa que você compartilha o espaço com outros exportadores, ideal para volumes menores.',
        'q2' => 'Quanto tempo leva o frete marítimo?',
        'a2' => 'Os tempos de trânsito variam por rota, geralmente variando de 15 a 45 dias. Fornecemos estimativas de chegada para todos os principais portos globais.',

        'cta_title' => 'Escale Seu Comércio Global',
        'cta_desc' => 'Obtenha uma cotação competitiva de frete marítimo hoje.',
        'copyright' => '© 2024 Python Logistics. Todos os direitos reservados.'
    ],
    'es' => [
        // Navigation
        'nav_home' => 'Inicio',
        'nav_about' => 'Acerca de',
        'nav_services' => 'Servicios',
        'nav_quote' => 'Cotización',
        'btn_quote' => 'Solicitar Cotización',
        'serv_air_title' => 'Flete Aéreo',
        'serv_ocean_title' => 'Flete Marítimo',
        'serv_road_title' => 'Transporte Terrestre',
        'serv_warehouse_title' => 'Almacenamiento',

        // Hero
        'hero_title' => 'Flete Marítimo Global',
        'hero_desc' => 'Soluciones de transporte marítimo rentables y confiables. Conectamos continentes con servicios personalizados de Carga Completa de Contenedor (FCL) y Carga Fraccionada (LCL).',
        'hero_stat1' => 'Puertos Principales',
        'hero_stat2' => 'Rastreo de Buques',

        // Advantages
        'adv_title' => '¿Por Qué Elegir Flete Marítimo?',
        'adv_1_title' => 'Eficiencia de Costos',
        'adv_1_desc' => 'La solución más económica para grandes volúmenes y envíos de larga distancia, reduciendo significativamente sus costos de cadena de suministro.',
        'adv_2_title' => 'Capacidad Masiva',
        'adv_2_desc' => 'Desde un solo palet hasta maquinaria pesada, los buques manejan prácticamente cualquier tamaño o peso de carga.',
        'adv_3_title' => 'Eco-Amigable',
        'adv_3_desc' => 'El transporte marítimo tiene una huella de carbono menor por tonelada-milla en comparación con el transporte aéreo o terrestre.',

        // Types of Cargo
        'types_title' => 'Soluciones Marítimas Especializadas',
        'types_desc' => 'Opciones integrales de flete marítimo adaptadas a los requisitos específicos de su carga.',
        'type_1_title' => 'Transporte FCL',
        'type_1_desc' => 'Carga Completa de Contenedor para uso exclusivo, ofreciendo máxima seguridad y tránsito más rápido.',
        'type_2_title' => 'Transporte LCL',
        'type_2_desc' => 'Carga Fraccionada para envíos más pequeños, pagando solo por el espacio que utiliza.',
        'type_3_title' => 'Contenedores Reefer',
        'type_3_desc' => 'Unidades con temperatura controlada para mantener productos perecederos frescos a través del océano.',
        'type_4_title' => 'Carga de Proyecto',
        'type_4_desc' => 'Servicios de carga pesada y breakbulk para equipos industriales sobredimensionados.',

        // Process
        'process_title' => 'Proceso de Envío Marítimo',
        'step1' => 'Reserva y Recogida',
        'step2' => 'Carga de Contenedor',
        'step3' => 'Manejo Portuario',
        'step4' => 'Tránsito Oceánico',
        'step5' => 'Despacho y Entrega',

        // FAQ
        'faq_title' => 'Preguntas Frecuentes sobre Flete Marítimo',
        'q1' => '¿Cuál es la diferencia entre FCL y LCL?',
        'a1' => 'FCL (Carga Completa de Contenedor) significa que alquila el contenedor completo. LCL (Carga Fraccionada) significa que comparte el espacio del contenedor con otros exportadores, ideal para volúmenes menores.',
        'q2' => '¿Cuánto tiempo toma el flete marítimo?',
        'a2' => 'Los tiempos de tránsito varían según la ruta, generalmente oscilan entre 15 y 45 días. Proporcionamos tiempos de llegada estimados para todos los principales puertos globales.',

        'cta_title' => 'Escale Su Comercio Global',
        'cta_desc' => 'Obtenga una cotización competitiva de flete marítimo hoy.',
        'copyright' => '© 2024 Python Logistics. Todos los derechos reservados.'
    ]
];
$txt = $t[$lang];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean Freight Services | Python Logistics</title>
    <meta name="description"
        content="Global Ocean Freight Services (FCL & LCL). Cost-effective international shipping, container transport, and customs clearance.">

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
                    animation: { 'float-slow': 'float 8s ease-in-out infinite' },
                    keyframes: { float: { '0%, 100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-15px)' } } }
                }
            }
        }
    </script>
</head>

<body class="font-sans text-gray-700 antialiased bg-gray-50 selection:bg-primary selection:text-white">

    <!-- Navbar (Centralized) -->
    <?php include 'includes/navbar.php'; ?>

    <!-- IMMERSIVE HERO -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-[#36b5e8]">
        <div class="absolute inset-0 z-0">
            <!-- Ocean Background -->
            <div
                class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1543788289-5431688d052a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center opacity-30 mix-blend-overlay">
            </div>
            <div class="absolute inset-0 bg-gradient-to-br from-[#36b5e8] via-primary to-transparent opacity-90">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <span
                        class="inline-block py-2 px-4 bg-secondary/20 text-secondary border border-secondary/20 rounded-full text-sm font-bold tracking-wide uppercase mb-6 backdrop-blur-sm">
                        <i class="fa-solid fa-ship mr-2"></i> <?php echo $txt['serv_ocean_title']; ?>
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
                            <i class="fa-solid fa-anchor text-secondary text-2xl mb-1"></i>
                            <div class="text-sm text-gray-300 uppercase tracking-widest">
                                <?php echo $txt['hero_stat1']; ?>
                            </div>
                        </div>
                        <div
                            class="text-center px-6 py-4 bg-white/10 backdrop-blur-md rounded-xl border border-white/10">
                            <i class="fa-solid fa-satellite-dish text-secondary text-2xl mb-1"></i>
                            <div class="text-sm text-gray-300 uppercase tracking-widest">
                                <?php echo $txt['hero_stat2']; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3D Ship Visual -->
                <div class="relative hidden lg:block h-[400px]">
                    <!-- Placeholder for Container Ship PNG -->
                    <img src="https://purepng.com/public/uploads/large/purepng.com-cargo-shipcargo-shipvesselmerchant-shipcarrier-cargo-1701528461536dm7d2.png"
                        alt="Container Ship"
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-2xl drop-shadow-2xl animate-float-slow z-20 object-contain ml-8">
                    <!-- Ripple/Water Effect -->
                    <div
                        class="absolute top-2/3 left-1/2 -translate-x-1/2 w-[600px] h-[100px] bg-secondary/10 rounded-[100%] blur-3xl z-10">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DETAILED SERVICES GRID (SEO) -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl font-heading font-bold text-[#1a5f7a] mb-4"><?php echo $txt['types_title']; ?>
                </h2>
                <p class="text-lg text-gray-600"><?php echo $txt['types_desc']; ?></p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-secondary hover:shadow-lg transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-box-open"></i>
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
                        <i class="fa-solid fa-boxes-stacked"></i>
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
                        <i class="fa-solid fa-snowflake"></i>
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
                        <i class="fa-solid fa-industry"></i>
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
                    <h2 class="text-3xl font-heading font-bold text-[#1a5f7a] mt-2 mb-6">
                        <?php echo $txt['adv_1_title']; ?> & <?php echo $txt['adv_2_title']; ?>
                    </h2>
                    <div class="prose text-gray-600 leading-relaxed space-y-6">
                        <p><?php echo $txt['adv_1_desc']; ?></p>
                        <p><?php echo $txt['adv_2_desc']; ?></p>
                        <p><?php echo $txt['adv_3_desc']; ?></p>
                        <ul class="space-y-4 pt-4">
                            <li class="flex items-center gap-3"><i class="fa-solid fa-check-circle text-secondary"></i>
                                Flexible container options</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-check-circle text-secondary"></i>
                                Global port coverage</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-check-circle text-secondary"></i>
                                Eco-friendly solutions</li>
                        </ul>
                    </div>
                </div>

                <!-- Right: FAQ Accordion -->
                <div>
                    <h3 class="text-2xl font-bold text-[#1a5f7a] mb-8"><?php echo $txt['faq_title']; ?></h3>
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

    <!-- PROCESS BAR -->
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
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700"><?php echo $txt['step1']; ?></span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-dolly"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700"><?php echo $txt['step2']; ?></span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-anchor"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700"><?php echo $txt['step3']; ?></span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-xl mb-4 shadow-lg scale-110">
                        <i class="fa-solid fa-ship"></i>
                    </div>
                    <span class="text-sm font-bold text-primary"><?php echo $txt['step4']; ?></span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-truck-fast"></i>
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