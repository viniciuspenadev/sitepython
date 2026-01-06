<?php
// Language Logic
$lang = $_GET['lang'] ?? 'en';
if (!in_array($lang, ['en', 'pt', 'es']))
    $lang = 'en';

$t = [
    'en' => [
        // Navigation
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
        'hero_title' => 'Reliable Road Transport',
        'hero_desc' => 'Seamless ground logistics with our own fleet for Pickup & Delivery. We ensure your cargo moves safely from door to door across the continent.',
        'hero_stat1' => 'Owned Fleet',
        'hero_stat2' => 'Nationwide Coverage',

        // Advantages
        'adv_title' => 'Why Choose Road Transport?',
        'adv_1_title' => 'Proprietary Pickup & Delivery',
        'adv_1_desc' => 'We operate our own fleet of trucks for first and last-mile delivery, giving us total control over security, timing, and handling quality.',
        'adv_2_title' => 'Flexible Solutions',
        'adv_2_desc' => 'From dedicated FTL trucks for large shipments to consolidated LTL options, we adapt to your schedule and volume needs.',
        'adv_3_title' => 'Real-Time Tracking',
        'adv_3_desc' => 'Monitor your shipment location 24/7 with our advanced GPS tracking systems installed in every vehicle.',

        // Types of Cargo
        'types_title' => 'Specialized Ground Logistics',
        'types_desc' => 'Comprehensive road freight options designed for speed, safety, and efficiency.',
        'type_1_title' => 'FTL (Full Truck Load)',
        'type_1_desc' => 'Exclusive truck use for your cargo, ensuring the fastest direct route and minimal handling.',
        'type_2_title' => 'LTL (Less than Truck Load)',
        'type_2_desc' => 'Cost-effective consolidation for smaller shipments that don\'t require a full vehicle.',
        'type_3_title' => 'First & Last Mile',
        'type_3_desc' => 'Our own fleet handles the critical initial pickup and final delivery steps with white-glove care.',
        'type_4_title' => 'Express Cargo',
        'type_4_desc' => 'Urgent ground transport solutions for time-critical deliveries within the region.',
        'type_5_title' => 'Hazardous Materials (HazMat)',
        'type_5_desc' => 'Certified handling for dangerous goods, fully compliant with safety regulations.',
        'type_6_title' => 'Perishable Cargo',
        'type_6_desc' => 'Temperature-controlled logistics to ensure freshness for time-sensitive goods.',

        // Process
        'process_title' => 'Road Transport Process',
        'step1' => 'Request & Planning',
        'step2' => 'Pickup (Own Fleet)',
        'step3' => 'Consolidation/Transit',
        'step4' => 'Real-Time Monitoring',
        'step5' => 'Delivery (Own Fleet)',

        // FAQ
        'faq_title' => 'Road Transport FAQ',
        'q1' => 'Do you use your own trucks?',
        'a1' => 'Yes! We pride ourselves on having our own proprietary fleet for pickup and delivery operations, ensuring higher reliability and accountability compared to outsourcing.',
        'q2' => 'What is the transit time for road freight?',
        'a2' => 'Transit times depend on the distance. Local deliveries are often same-day or next-day, while cross-country shipments can take 3-5 days.',

        'cta_title' => 'Move Your Cargo with Confidence',
        'cta_desc' => 'Get a quote for road transport with our own fleet today.',
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
        'hero_title' => 'Transporte Rodoviário',
        'hero_desc' => 'Logística terrestre integrada com nossa própria frota para Coleta e Entrega. Garantimos que sua carga viaje segura porta a porta.',
        'hero_stat1' => 'Frota Própria',
        'hero_stat2' => 'Cobertura Nacional',

        // Advantages
        'adv_title' => 'Por Que Escolher Transporte Rodoviário?',
        'adv_1_title' => 'Coleta e Entrega Própria',
        'adv_1_desc' => 'Operamos nossa própria frota de caminhões para coleta e entrega (first & last mile), garantindo controle total sobre segurança, prazos e qualidade.',
        'adv_2_title' => 'Soluções Flexíveis',
        'adv_2_desc' => 'Desde caminhões dedicados (FTL) para grandes cargas até opções consolidadas (LTL), nos adaptamos à sua agenda e volume.',
        'adv_3_title' => 'Rastreamento em Tempo Real',
        'adv_3_desc' => 'Monitore a localização da sua carga 24/7 com nossos sistemas avançados de GPS instalados em cada veículo.',

        // Types of Cargo
        'types_title' => 'Logística Terrestre Especializada',
        'types_desc' => 'Opções abrangentes de frete rodoviário projetadas para velocidade, segurança e eficiência.',
        'type_1_title' => 'Carga Fechada (FTL)',
        'type_1_desc' => 'Uso exclusivo do caminhão para sua carga, garantindo a rota direta mais rápida e manuseio mínimo.',
        'type_2_title' => 'Carga Fracionada (LTL)',
        'type_2_desc' => 'Consolidação econômica para envios menores que não requerem um veículo completo.',
        'type_3_title' => 'Coleta e Entrega (Last Mile)',
        'type_3_desc' => 'Nossa frota própria cuida das etapas críticas de coleta inicial e entrega final com o máximo cuidado.',
        'type_4_title' => 'Carga Expressa',
        'type_4_desc' => 'Soluções urgentes de transporte terrestre para entregas com prazo crítico na região.',
        'type_5_title' => 'Cargas Perigosas (HazMat)',
        'type_5_desc' => 'Manuseio certificado para produtos perigosos, em total conformidade com normas de segurança.',
        'type_6_title' => 'Cargas Perecíveis',
        'type_6_desc' => 'Logística com controle de temperatura para garantir o frescor de produtos sensíveis.',

        // Process
        'process_title' => 'Processo de Transporte',
        'step1' => 'Planejamento',
        'step2' => 'Coleta (Frota Própria)',
        'step3' => 'Consolidação/Trânsito',
        'step4' => 'Monitoramento',
        'step5' => 'Entrega (Frota Própria)',

        // FAQ
        'faq_title' => 'Dúvidas sobre Transporte Rodoviário',
        'q1' => 'Vocês utilizam caminhões próprios?',
        'a1' => 'Sim! Temos orgulho de possuir nossa própria frota para operações de coleta e entrega, garantindo maior confiabilidade e responsabilidade comparado à terceirização.',
        'q2' => 'Qual o tempo de trânsito rodoviário?',
        'a2' => 'Os tempos dependem da distância. Entregas locais são frequentemente no mesmo dia ou dia seguinte, enquanto envios interestaduais podem levar 3-5 dias.',

        'cta_title' => 'Mova Sua Carga com Confiança',
        'cta_desc' => 'Obtenha uma cotação para transporte rodoviário com frota própria hoje.',
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
        'hero_title' => 'Transporte Terrestre Confiable',
        'hero_desc' => 'Logística terrestre fluida con nuestra propia flota para Recogida y Entrega. Aseguramos que su carga viaje segura puerta a puerta.',
        'hero_stat1' => 'Flota Propia',
        'hero_stat2' => 'Cobertura Nacional',

        // Advantages
        'adv_title' => '¿Por Qué Elegir Transporte Terrestre?',
        'adv_1_title' => 'Recogida y Entrega Propia',
        'adv_1_desc' => 'Operamos nuestra propia flota de camiones para la primera y última milla, garantizando control total sobre seguridad y tiempos.',
        'adv_2_title' => 'Soluciones Flexibles',
        'adv_2_desc' => 'Desde camiones dedicados (FTL) para grandes envíos hasta opciones consolidadas (LTL), nos adaptamos a su horario.',
        'adv_3_title' => 'Rastreo en Tiempo Real',
        'adv_3_desc' => 'Monitoree la ubicación de su envío 24/7 con nuestros sistemas avanzados de GPS instalados en cada vehículo.',

        // Types of Cargo
        'types_title' => 'Logística Terrestre Especializada',
        'types_desc' => 'Opciones integrales de flete terrestre diseñadas para velocidad, seguridad y eficiencia.',
        'type_1_title' => 'Carga Completa (FTL)',
        'type_1_desc' => 'Uso exclusivo del camión para su carga, asegurando la ruta directa más rápida.',
        'type_2_title' => 'Carga Consolidada (LTL)',
        'type_2_desc' => 'Consolidación rentable para envíos más pequeños que no requieren un vehículo completo.',
        'type_3_title' => 'Primera y Última Milla',
        'type_3_desc' => 'Nuestra flota propia maneja los pasos críticos de recogida inicial y entrega final.',
        'type_4_title' => 'Carga Expresa',
        'type_4_desc' => 'Soluciones urgentes de transporte terrestre para entregas críticas en la región.',
        'type_5_title' => 'Materiales Peligrosos (HazMat)',
        'type_5_desc' => 'Manejo certificado para mercancías peligrosas, cumpliendo normativas de seguridad.',
        'type_6_title' => 'Carga Perecedera',
        'type_6_desc' => 'Logística con temperatura controlada para asegurar la frescura de bienes sensibles.',

        // Process
        'process_title' => 'Proceso de Transporte',
        'step1' => 'Planificación',
        'step2' => 'Recogida (Flota Propia)',
        'step3' => 'Consolidación/Tránsito',
        'step4' => 'Monitoreo',
        'step5' => 'Entrega (Flota Propia)',

        // FAQ
        'faq_title' => 'Preguntas Frecuentes',
        'q1' => '¿Utilizan sus propios camiones?',
        'a1' => '¡Sí! Nos enorgullece tener nuestra propia flota para operaciones de recogida y entrega, asegurando mayor fiabilidad.',
        'q2' => '¿Cuál es el tiempo de tránsito?',
        'a2' => 'Los tiempos dependen de la distancia. Entregas locales suelen ser el mismo día, nacionales 3-5 días.',

        'cta_title' => 'Mueva Su Carga con Confianza',
        'cta_desc' => 'Obtenga una cotización para transporte terrestre con flota propia hoy.',
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
    <title>Road Transport Services | Python Logistics</title>
    <meta name="description"
        content="Reliable Road Transport Services. FTL, LTL, and Proprietary Pickup & Delivery fleet for secure door-to-door logistics.">

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
                    keyframes: { float: { '0%, 100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-10px)' } } }
                }
            }
        }
    </script>
</head>

<body class="font-sans text-gray-700 antialiased bg-gray-50 selection:bg-primary selection:text-white">

    <!-- Navbar (Centralized) -->
    <?php include 'includes/navbar.php'; ?>

    <!-- IMMERSIVE HERO -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-[#2b2b2b]">
        <div class="absolute inset-0 z-0">
            <!-- Road Background -->
            <div
                class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1519003722824-194d4455a60c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center opacity-40 mix-blend-overlay">
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/80 to-transparent opacity-95">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <span
                        class="inline-block py-2 px-4 bg-secondary/20 text-secondary border border-secondary/20 rounded-full text-sm font-bold tracking-wide uppercase mb-6 backdrop-blur-sm">
                        <i class="fa-solid fa-truck-fast mr-2"></i>
                        <?php echo $txt['serv_road_title']; ?>
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
                            <i class="fa-solid fa-truck-ramp-box text-secondary text-2xl mb-1"></i>
                            <div class="text-sm text-gray-300 uppercase tracking-widest">
                                <?php echo $txt['hero_stat1']; ?>
                            </div>
                        </div>
                        <div
                            class="text-center px-6 py-4 bg-white/10 backdrop-blur-md rounded-xl border border-white/10">
                            <i class="fa-solid fa-map-location-dot text-secondary text-2xl mb-1"></i>
                            <div class="text-sm text-gray-300 uppercase tracking-widest">
                                <?php echo $txt['hero_stat2']; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visual -->
                <!-- Visual (Removed Floating Truck as requested) -->
                <!-- Image removed for cleaner background-focused hero -->
            </div>
        </div>
    </section>

    <!-- DETAILED SERVICES GRID -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl font-heading font-bold text-gray-900 mb-4">
                    <?php echo $txt['types_title']; ?>
                </h2>
                <p class="text-lg text-gray-600">
                    <?php echo $txt['types_desc']; ?>
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-secondary hover:shadow-lg transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-truck"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                        <?php echo $txt['type_1_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo $txt['type_1_desc']; ?>
                    </p>
                </div>
                <!-- Service 2 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-secondary hover:shadow-lg transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-boxes-packing"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                        <?php echo $txt['type_2_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo $txt['type_2_desc']; ?>
                    </p>
                </div>
                <!-- Service 3 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-secondary hover:shadow-lg transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-people-carry-box"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                        <?php echo $txt['type_3_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo $txt['type_3_desc']; ?>
                    </p>
                </div>
                <!-- Service 4 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-secondary hover:shadow-lg transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-stopwatch-20"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                        <?php echo $txt['type_4_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo $txt['type_4_desc']; ?>
                    </p>
                </div>
                <!-- Service 5 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-secondary hover:shadow-lg transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                        <?php echo $txt['type_5_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo $txt['type_5_desc']; ?>
                    </p>
                </div>
                <!-- Service 6 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-secondary hover:shadow-lg transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-snowflake"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                        <?php echo $txt['type_6_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo $txt['type_6_desc']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ADVANTAGES & FAQ -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Left: Rich Text Content -->
                <div>
                    <span class="text-secondary font-bold tracking-wider uppercase text-sm">
                        <?php echo $txt['adv_title']; ?>
                    </span>
                    <h2 class="text-3xl font-heading font-bold text-gray-900 mt-2 mb-6">
                        <?php echo $txt['adv_1_title']; ?>
                    </h2>
                    <div class="prose text-gray-600 leading-relaxed space-y-6">
                        <p class="font-semibold text-lg text-primary">
                            <?php echo $txt['adv_1_desc']; ?>
                        </p>
                        <p>
                            <?php echo $txt['adv_2_desc']; ?>
                        </p>
                        <p>
                            <?php echo $txt['adv_3_desc']; ?>
                        </p>

                        <div class="grid grid-cols-2 gap-4 pt-4">
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                <i class="fa-solid fa-key text-secondary text-xl mb-2"></i>
                                <h4 class="font-bold text-sm">Safe Handling</h4>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                <i class="fa-solid fa-clock text-secondary text-xl mb-2"></i>
                                <h4 class="font-bold text-sm">On-Time Delivery</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: FAQ Accordion -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-8">
                        <?php echo $txt['faq_title']; ?>
                    </h3>
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
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700">
                        <?php echo $txt['step1']; ?>
                    </span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-primary rounded-full flex items-center justify-center text-primary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <span class="text-sm font-bold text-primary">
                        <?php echo $txt['step2']; ?>
                    </span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-road"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700">
                        <?php echo $txt['step3']; ?>
                    </span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700">
                        <?php echo $txt['step4']; ?>
                    </span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-primary rounded-full flex items-center justify-center text-primary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-check-double"></i>
                    </div>
                    <span class="text-sm font-bold text-primary">
                        <?php echo $txt['step5']; ?>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

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