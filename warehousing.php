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
        'hero_title' => 'Strategic Warehousing',
        'hero_desc' => 'Secure storage, inventory management, and distribution solutions tailored to optimize your supply chain needs.',
        'hero_stat1' => 'Smart Inventory',
        'hero_stat2' => '24/7 Security',

        // Advantages
        'adv_title' => 'Why Choose Our Warehousing?',
        'adv_1_title' => 'Operational Efficiency',
        'adv_1_desc' => 'Reduce your overhead costs by leveraging our ready-to-use infrastructure and expert staff for all your storage needs.',
        'adv_2_title' => 'Strategic Locations',
        'adv_2_desc' => 'Our facilities are positioned near major ports and highways to minimize transit times and distribution costs.',
        'adv_3_title' => 'Scalability',
        'adv_3_desc' => 'Pay only for the space you need. Our flexible storage solutions grow instantly with your business demands.',

        // Types of Services
        'types_title' => 'Comprehensive Storage Solutions',
        'types_desc' => 'From simple storage to complex value-added services, we handle your goods with precision.',
        'type_1_title' => 'General Storage',
        'type_1_desc' => 'Secure racking and floor storage for palletized or loose cargo, fully insured and protected.',
        'type_2_title' => 'Pick & Pack',
        'type_2_desc' => 'Order fulfillment services including sorting, packaging, and labeling for e-commerce distribution.',
        'type_3_title' => 'Cross-Docking',
        'type_3_desc' => 'Rapid transfer of goods from inbound to outbound transport with minimal or no storage time.',
        'type_4_title' => 'Bonded Warehouse',
        'type_4_desc' => 'defer duty payments by storing imported goods in our customs-controlled facilities.',

        // Process
        'process_title' => 'Warehousing Workflow',
        'step1' => 'Inbound Receipt',
        'step2' => 'Quality Check',
        'step3' => 'Inventory System',
        'step4' => 'Order Picking',
        'step5' => 'Dispatch',

        // FAQ
        'faq_title' => 'Warehousing FAQ',
        'q1' => 'Do you offer temperature controlled storage?',
        'a1' => 'Yes, we have dedicated zones for temperature-sensitive goods, ensuring compliance with pharma and food safety standards.',
        'q2' => 'How can I check my inventory?',
        'a2' => 'We provide a customer portal connected to our WMS (Warehouse Management System) for real-time visibility of stock levels and order status.',

        'cta_title' => 'Optimize Your Stock Flow',
        'cta_desc' => 'Request a proposal for warehousing and distribution today.',
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
        'hero_title' => 'Armazenagem Estratégica',
        'hero_desc' => 'Armazenamento seguro, gestão de estoque e soluções de distribuição sob medida para otimizar sua cadeia de suprimentos.',
        'hero_stat1' => 'Estoque Inteligente',
        'hero_stat2' => 'Segurança 24/7',

        // Advantages
        'adv_title' => 'Por Que Nossa Armazenagem?',
        'adv_1_title' => 'Eficiência Operacional',
        'adv_1_desc' => 'Reduza seus custos fixos aproveitando nossa infraestrutura pronta e equipe especializada para todas as suas necessidades.',
        'adv_2_title' => 'Localização Estratégica',
        'adv_2_desc' => 'Nossas instalações estão posicionadas próximas aos principais portos e rodovias para minimizar tempos de trânsito.',
        'adv_3_title' => 'Escalabilidade',
        'adv_3_desc' => 'Pague apenas pelo espaço que precisar. Nossas soluções flexíveis crescem instantaneamente com sua demanda.',

        // Types of Services
        'types_title' => 'Soluções de Estoque Completas',
        'types_desc' => 'Do armazenamento simples a serviços de valor agregado, manuseamos suas mercadorias com precisão.',
        'type_1_title' => 'Armazenagem Geral',
        'type_1_desc' => 'Racks seguros e armazenamento de chão para carga paletizada ou solta, totalmente segurada.',
        'type_2_title' => 'Pick & Pack',
        'type_2_desc' => 'Serviços de atendimento de pedidos incluindo separação, embalagem e etiquetagem para distribuição.',
        'type_3_title' => 'Cross-Docking',
        'type_3_desc' => 'Transferência rápida de mercadorias da entrada para saída com tempo mínimo ou nulo de estocagem.',
        'type_4_title' => 'Armazém Alfandegado',
        'type_4_desc' => 'Adie o pagamento de impostos armazenando mercadorias importadas em nossas instalações controladas.',

        // Process
        'process_title' => 'Fluxo de Armazenagem',
        'step1' => 'Recebimento',
        'step2' => 'Controle Qualidade',
        'step3' => 'Sistema WMS',
        'step4' => 'Separação',
        'step5' => 'Expedição',

        // FAQ
        'faq_title' => 'Dúvidas sobre Armazenagem',
        'q1' => 'Vocês oferecem controle de temperatura?',
        'a1' => 'Sim, temos zonas dedicadas para mercadorias sensíveis à temperatura, garantindo conformidade com padrões farmacêuticos e alimentícios.',
        'q2' => 'Como posso checar meu estoque?',
        'a2' => 'Oferecemos um portal do cliente conectado ao nosso WMS para visibilidade em tempo real dos níveis de estoque e status dos pedidos.',

        'cta_title' => 'Otimize Seu Fluxo de Estoque',
        'cta_desc' => 'Solicite uma proposta para armazenagem e distribuição hoje.',
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
        'hero_title' => 'Almacenamiento Estratégico',
        'hero_desc' => 'Almacenamiento seguro, gestión de inventario y soluciones de distribución adaptadas para optimizar su cadena de suministro.',
        'hero_stat1' => 'Inventario Inteligente',
        'hero_stat2' => 'Seguridad 24/7',

        // Advantages
        'adv_title' => '¿Por Qué Elegir Nuestro Almacén?',
        'adv_1_title' => 'Eficiencia Operativa',
        'adv_1_desc' => 'Reduzca sus costos fijos aprovechando nuestra infraestructura lista para usar y personal experto.',
        'adv_2_title' => 'Ubicación Estratégica',
        'adv_2_desc' => 'Nuestras instalaciones están posicionadas cerca de los principales puertos y carreteras para minimizar tiempos.',
        'adv_3_title' => 'Escalabilidad',
        'adv_3_desc' => 'Pague solo por el espacio que necesita. Nuestras soluciones flexibles crecen instantáneamente con su demanda.',

        // Types of Services
        'types_title' => 'Soluciones de Stock Completas',
        'types_desc' => 'Desde almacenamiento simple hasta servicios de valor agregado, manejamos sus mercancías con precisión.',
        'type_1_title' => 'Almacenamiento General',
        'type_1_desc' => 'Racks seguros y almacenamiento en piso para carga paletizada o suelta, totalmente asegurada.',
        'type_2_title' => 'Pick & Pack',
        'type_2_desc' => 'Servicios de cumplimiento de pedidos incluyendo clasificación, embalaje y etiquetado.',
        'type_3_title' => 'Cross-Docking',
        'type_3_desc' => 'Transferencia rápida de mercancías de entrada a salida con tiempo mínimo de almacenamiento.',
        'type_4_title' => 'Almacén Fiscal',
        'type_4_desc' => 'Difiera el pago de impuestos almacenando mercancías importadas en nuestras instalaciones controladas.',

        // Process
        'process_title' => 'Flujo de Almacenamiento',
        'step1' => 'Recepción',
        'step2' => 'Control Calidad',
        'step3' => 'Sistema WMS',
        'step4' => 'Separación',
        'step5' => 'Despacho',

        // FAQ
        'faq_title' => 'Preguntas Frecuentes',
        'q1' => '¿Ofrecen control de temperatura?',
        'a1' => 'Sí, tenemos zonas dedicadas para mercancías sensibles a la temperatura, asegurando cumplimiento de estándares.',
        'q2' => '¿Cómo puedo verificar mi inventario?',
        'a2' => 'Ofrecemos un portal de cliente conectado a nuestro WMS para visibilidad en tiempo real de niveles de stock.',

        'cta_title' => 'Optimice Su Flujo de Stock',
        'cta_desc' => 'Solicite una propuesta para almacenamiento y distribución hoy.',
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
    <title>Warehousing Services | Python Logistics</title>
    <meta name="description"
        content="Secure Warehousing & Distribution Services. Inventory management, Pick & Pack, Cross-docking, and Bonded storage solutions.">

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
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-[#1f2937]">
        <div class="absolute inset-0 z-0">
            <!-- Warehouse Background -->
            <div
                class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center opacity-30 mix-blend-overlay">
            </div>
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-primary/80 to-transparent opacity-90">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <span
                        class="inline-block py-2 px-4 bg-secondary/20 text-secondary border border-secondary/20 rounded-full text-sm font-bold tracking-wide uppercase mb-6 backdrop-blur-sm">
                        <i class="fa-solid fa-warehouse mr-2"></i>
                        <?php echo $txt['serv_warehouse_title']; ?>
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
                            <i class="fa-solid fa-brands fa-searchengin text-secondary text-2xl mb-1"></i>
                            <div class="text-sm text-gray-300 uppercase tracking-widest">
                                <?php echo $txt['hero_stat1']; ?>
                            </div>
                        </div>
                        <div
                            class="text-center px-6 py-4 bg-white/10 backdrop-blur-md rounded-xl border border-white/10">
                            <i class="fa-solid fa-shield-halved text-secondary text-2xl mb-1"></i>
                            <div class="text-sm text-gray-300 uppercase tracking-widest">
                                <?php echo $txt['hero_stat2']; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visual -->
                <!-- Visual (Removed Floating Visual as requested) -->
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

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-secondary hover:shadow-lg transition-all group">
                    <div
                        class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-dolly"></i>
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
                        <i class="fa-solid fa-box-open"></i>
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
                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
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
                        <i class="fa-solid fa-file-contract"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                        <?php echo $txt['type_4_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo $txt['type_4_desc']; ?>
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
                                <i class="fa-solid fa-pallet text-secondary text-xl mb-2"></i>
                                <h4 class="font-bold text-sm">Organized</h4>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                <i class="fa-solid fa-video text-secondary text-xl mb-2"></i>
                                <h4 class="font-bold text-sm">Monitored</h4>
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
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700">
                        <?php echo $txt['step1']; ?>
                    </span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700">
                        <?php echo $txt['step2']; ?>
                    </span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-xl mb-4 shadow-lg scale-110">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <span class="text-sm font-bold text-primary">
                        <?php echo $txt['step3']; ?>
                    </span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-dolly"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700">
                        <?php echo $txt['step4']; ?>
                    </span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700">
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