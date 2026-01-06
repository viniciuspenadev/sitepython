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
        'serv_insurance_title' => 'Cargo Insurance',

        // Hero
        'hero_title' => 'Forged in the Gateway to the Americas.',
        'hero_desc' => 'We are Python Logistics. Born in Miami, built for the world. Your neutral, strategic partner for global trade.',

        // Story
        'story_title' => 'Our Origin',
        'story_head' => 'Strategic Location. Global Reach.',
        'story_p1' => 'Phyton was born in Miami with a singular purpose: to be the premier logistics extension for forwarders who lack a physical presence in this critical trade hub.',
        'story_p2' => 'We are an uncompromisingly neutral provider. We do not compete with our partners by opening offices worldwide. Our focus is absolute: mastering cargo handling in Miami to serve your global needs.',

        // Neutrality Section
        'neutral_title' => 'Uncompromising Neutrality',
        'neutral_desc' => 'We act as your invisible backbone. Our infrastructure becomes your infrastructure. We protect your client relationships by remaining strictly a wholesale provider.',

        // Services/Industries
        'ind_title' => 'Industries We Serve',
        'ind_desc' => 'Providing specialized solutions for complex sectors.',
        'ind_1' => 'General Cargo',
        'ind_2' => 'Aviation & Aerospace',
        'ind_3' => 'Pharmaceuticals',
        'ind_4' => 'Automotive',
        'ind_5' => 'Project Cargo',
        'ind_6' => 'Fast Fashion',
        'ind_7' => 'Food & Perishables',
        'ind_8' => 'Life Science & Hospital',
        'ind_9' => 'Dangerous Goods (DG)',

        // Mission Vision Values
        'mvv_mission_title' => 'Mission',
        'mvv_mission_desc' => 'Provide a specialized, seamless service that facilitates the entire logistics process for our customers, removing friction from global trade.',
        'mvv_vision_title' => 'Vision',
        'mvv_vision_desc' => 'To become the undisputed reference in international freight and customs clearance excellence.',
        'mvv_values_title' => 'Values',
        'mvv_val_1' => 'Innovation',
        'mvv_val_2' => 'Human Capital',
        'mvv_val_3' => 'Social Responsibility',
        'mvv_val_4' => 'Professional Ethics',

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
        'serv_insurance_title' => 'Seguro de Carga',

        // Hero
        'hero_title' => 'Forjado no Portal das Américas.',
        'hero_desc' => 'Nós somos a Python Logistics. Nascidos em Miami, construídos para o mundo. Seu parceiro neutro e estratégico para o comércio global.',

        // Story
        'story_title' => 'Nossa Origem',
        'story_head' => 'Localização Estratégica. Alcance Global.',
        'story_p1' => 'A Phyton nasceu em Miami com um propósito singular: ser a principal extensão logística para agentes que não possuem presença física neste centro comercial crítico.',
        'story_p2' => 'Somos um provedor intransigentemente neutro. Não competimos com nossos parceiros abrindo escritórios pelo mundo. Nosso foco é absoluto: dominar o manuseio de cargas em Miami para atender às suas necessidades globais.',

        // Neutrality
        'neutral_title' => 'Neutralidade Intransigente',
        'neutral_desc' => 'Atuamos como sua espinha dorsal invisível. Nossa infraestrutura torna-se a sua infraestrutura. Protegemos seus relacionamentos com clientes mantendo-nos estritamente como um provedor de atacado.',

        // Industries
        'ind_title' => 'Indústrias que Atendemos',
        'ind_desc' => 'Fornecendo soluções especializadas para setores complexos.',
        'ind_1' => 'Carga Geral',
        'ind_2' => 'Aviação e Aeroespacial',
        'ind_3' => 'Farmacêutico',
        'ind_4' => 'Automotivo',
        'ind_5' => 'Carga Projeto',
        'ind_6' => 'Fast Fashion',
        'ind_7' => 'Alimentos e Perecíveis',
        'ind_8' => 'Life Science e Hospitalar',
        'ind_9' => 'Cargas Perigosas (DG)',

        // MVV
        'mvv_mission_title' => 'Missão',
        'mvv_mission_desc' => 'Prover um serviço especializado e fluido que facilite todo o processo logístico para nossos clientes, removendo atritos do comércio global.',
        'mvv_vision_title' => 'Visão',
        'mvv_vision_desc' => 'Tornar-se a referência indiscutível em excelência de frete internacional e desembaraço aduaneiro.',
        'mvv_values_title' => 'Valores',
        'mvv_val_1' => 'Inovação',
        'mvv_val_2' => 'Capital Humano',
        'mvv_val_3' => 'Responsabilidade Social',
        'mvv_val_4' => 'Ética Profissional',

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
        'serv_insurance_title' => 'Seguro de Carga',

        // Hero
        'hero_title' => 'Forjado en la Puerta de las Américas.',
        'hero_desc' => 'Somos Python Logistics. Nacidos en Miami, construidos para el mundo. Su socio neutral y estratégico para el comercio global.',

        // Story
        'story_title' => 'Nuestro Origen',
        'story_head' => 'Ubicación Estratégica. Alcance Global.',
        'story_p1' => 'Phyton nació en Miami con un propósito singular: ser la principal extensión logística para agentes que carecen de presencia física en este centro comercial crítico.',
        'story_p2' => 'Somos un proveedor intransigentemente neutral. No competimos con nuestros socios abriendo oficinas en todo el mundo. Nuestro enfoque es absoluto: dominar el manejo de carga en Miami para servir sus necesidades globales.',

        // Neutrality
        'neutral_title' => 'Neutralidad Intransigente',
        'neutral_desc' => 'Actuamos como su columna vertebral invisible. Nuestra infraestructura se convierte en su infraestructura. Protegemos sus relaciones con clientes manteniéndonos estrictamente como un proveedor mayorista.',

        // Industries
        'ind_title' => 'Industrias que Servimos',
        'ind_desc' => 'Proporcionando soluciones especializadas para sectores complejos.',
        'ind_1' => 'Carga General',
        'ind_2' => 'Aviación y Aeroespacial',
        'ind_3' => 'Farmacéutico',
        'ind_4' => 'Automotriz',
        'ind_5' => 'Carga Proyecto',
        'ind_6' => 'Fast Fashion',
        'ind_7' => 'Alimentos y Perecederos',
        'ind_8' => 'Life Science y Hospitalario',
        'ind_9' => 'Mercancías Peligrosas (DG)',

        // MVV
        'mvv_mission_title' => 'Misión',
        'mvv_mission_desc' => 'Proveer un servicio especializado y fluido que facilite todo el proceso logístico para nuestros clientes, eliminando fricciones del comercio global.',
        'mvv_vision_title' => 'Visión',
        'mvv_vision_desc' => 'Convertirse en la referencia indiscutible en excelencia de flete internacional y despacho de aduanas.',
        'mvv_values_title' => 'Valores',
        'mvv_val_1' => 'Innovación',
        'mvv_val_2' => 'Capital Humano',
        'mvv_val_3' => 'Responsabilidad Social',
        'mvv_val_4' => 'Ética Profesional',

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
    <title>
        <?php echo $txt['nav_about']; ?> | Python Logistics
    </title>
    <meta name="description" content="Python Logistics - Your neutral partner in Miami for global logistics.">

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
                    animation: {
                        'float-slow': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-dark {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-light {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: .5;
            }
        }
    </style>
</head>

<body
    class="font-sans text-gray-700 antialiased bg-gray-50 selection:bg-primary selection:text-white overflow-x-hidden">

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- HERO SECTION -->
    <section class="relative h-[80vh] min-h-[600px] flex items-center justify-center overflow-hidden bg-gray-900">
        <!-- Background Pattern (Continuous with next section) -->
        <div class="absolute inset-0 z-0">
            <div
                class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-10">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#0B1120] via-[#0B1120]/90 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 text-center pt-20">
            <span
                class="inline-block py-2 px-6 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white text-sm font-bold tracking-widest uppercase mb-8 animate-fade-in-up">
                EST. 2019 | Miami, FL
            </span>
            <h1 class="text-5xl md:text-7xl font-heading font-bold text-white leading-tight mb-8 drop-shadow-2xl">
                <?php echo $txt['hero_title']; ?>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto leading-relaxed font-light">
                <?php echo $txt['hero_desc']; ?>
            </p>
        </div>
    </section>

    <!-- OUR JOURNEY (Timeline & Strategic Hub) -->
    <section class="py-24 bg-[#0B1120] text-white relative overflow-hidden">
        <!-- Interactive Background -->
        <div class="absolute inset-0 z-0">
            <div
                class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-10">
            </div>
            <!-- Miami Pulse Effect -->
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-primary/20 rounded-full blur-[100px] animate-pulse">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <span class="text-secondary font-bold tracking-[0.2em] uppercase text-sm mb-4 block">Our
                    Trajectory</span>
                <h2 class="text-4xl lg:text-5xl font-heading font-bold mb-6 text-white">Strategic Location. Global
                    Reach.</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto font-light leading-relaxed">
                    Phyton was born in Miami to be the <strong>neutral backbone</strong> for global logistics. We don't
                    just move cargo; we connect worlds.
                </p>
            </div>

            <!-- Timeline -->
            <div class="relative">
                <!-- Line -->
                <div class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-800 -translate-y-1/2 hidden lg:block"></div>

                <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 lg:gap-4 relative">
                    <!-- 2020 -->
                    <div class="relative group cursor-default">

                        <div
                            class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-2xl hover:bg-white/10 transition-all duration-300 transform group-hover:-translate-y-2 relative overflow-hidden">
                            <div class="absolute top-0 right-0 p-4 opacity-10 text-6xl font-heading font-bold">2019
                            </div>
                            <div class="text-secondary font-bold text-xl mb-2">The Spark</div>
                            <p class="text-sm text-gray-400 leading-relaxed">Phyton Logistics is founded in Miami. A
                                pure vision of neutrality and service excellence in the Gateway to the Americas.</p>
                        </div>
                    </div>

                    <!-- 2021 -->
                    <div class="relative group cursor-default lg:mt-16">

                        <div
                            class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-2xl hover:bg-white/10 transition-all duration-300 transform group-hover:-translate-y-2 relative overflow-hidden">
                            <div class="absolute top-0 right-0 p-4 opacity-10 text-6xl font-heading font-bold">2021
                            </div>
                            <div class="text-white font-bold text-xl mb-2">Resilience</div>
                            <p class="text-sm text-gray-400 leading-relaxed">Navigating global chaos. We expanded our
                                team and solidified partnerships, proving that reliability is our currency.</p>
                        </div>
                    </div>

                    <!-- 2023 -->
                    <div class="relative group cursor-default">

                        <div
                            class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-2xl hover:bg-white/10 transition-all duration-300 transform group-hover:-translate-y-2 relative overflow-hidden">
                            <div class="absolute top-0 right-0 p-4 opacity-10 text-6xl font-heading font-bold">2023
                            </div>
                            <div class="text-white font-bold text-xl mb-2">Expansion</div>
                            <p class="text-sm text-gray-400 leading-relaxed">Launched dedicated Warehousing and Cargo
                                Insurance divisions. Integrating comprehensive solutions under one roof.</p>
                        </div>
                    </div>

                    <!-- 2025 -->
                    <div class="relative group cursor-default lg:mt-16">

                        <div
                            class="bg-gradient-to-br from-primary/80 to-secondary/80 border border-white/20 p-8 rounded-2xl shadow-2xl relative overflow-hidden hover:scale-105 transition-transform duration-300">
                            <div
                                class="absolute top-0 right-0 p-4 opacity-20 text-6xl font-heading font-bold text-white">
                                2025</div>
                            <div class="text-white font-bold text-xl mb-2">Global Future</div>
                            <p class="text-sm text-blue-100 leading-relaxed">Redefining logistics with technology. New
                                hubs in Rotterdam, Singapore, and Panama connect our clients to the future.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- "The Pulse" Visual (CSS Art) -->
            <div class="mt-32 relative flex justify-center items-center h-[400px]">
                <!-- Central Node (Miami - Logo Only) -->
                <div class="relative z-10">
                    <img src="https://pythonlogistics.com/wp-content/uploads/2020/10/logo-python.png"
                        alt="Python Logistics" class="w-32 drop-shadow-[0_0_20px_rgba(255,255,255,0.3)]">
                </div>

                <!-- Orbiting Nodes (Icons with Counter-Rotation) -->
                <!-- Orbit 1: Plane (20s) -->
                <div class="absolute w-[280px] h-[280px] border border-white/5 rounded-full"
                    style="animation: spin 20s linear infinite;">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        style="animation: spin 20s linear infinite reverse;">
                        <i
                            class="fa-solid fa-plane-up text-secondary text-2xl drop-shadow-[0_0_8px_rgba(43,172,226,0.8)]"></i>
                    </div>
                </div>

                <!-- Orbit 2: Ship & Warehouse (30s Reverse) -->
                <div class="absolute w-[450px] h-[450px] border border-white/5 rounded-full"
                    style="animation: spin 30s linear infinite reverse;">
                    <!-- Ship (Top) -->
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        style="animation: spin 30s linear infinite normal;">
                        <i class="fa-solid fa-ship text-white text-2xl drop-shadow-[0_0_8px_rgba(255,255,255,0.8)]"></i>
                    </div>
                    <!-- Warehouse (Bottom) -->
                    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2"
                        style="animation: spin 30s linear infinite normal;">
                        <i
                            class="fa-solid fa-warehouse text-secondary text-xl drop-shadow-[0_0_8px_rgba(43,172,226,0.8)]"></i>
                    </div>
                </div>

                <!-- Orbit 3: Truck & Insurance (45s) -->
                <div class="absolute w-[650px] h-[650px] border border-white/5 rounded-full"
                    style="animation: spin 45s linear infinite;">
                    <!-- Truck (Right) -->
                    <div class="absolute top-1/2 right-0 translate-x-1/2 -translate-y-1/2"
                        style="animation: spin 45s linear infinite reverse;">
                        <i
                            class="fa-solid fa-truck-fast text-white text-xl drop-shadow-[0_0_8px_rgba(255,255,255,0.8)]"></i>
                    </div>
                    <!-- Insurance (Left) -->
                    <div class="absolute top-1/2 left-0 -translate-x-1/2 -translate-y-1/2"
                        style="animation: spin 45s linear infinite reverse;">
                        <i
                            class="fa-solid fa-shield-halved text-secondary text-xl drop-shadow-[0_0_8px_rgba(43,172,226,0.8)]"></i>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- NEUTRALITY FEATURE (Dark) -->
    <section class="py-24 bg-[#2ea9e0] text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]">
        </div>

        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <div
                class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white/10 backdrop-blur-xl mb-8 border border-white/20 shadow-[0_0_30px_rgba(255,255,255,0.2)]">
                <i class="fa-solid fa-handshake-simple text-4xl text-white"></i>
            </div>
            <h2 class="text-4xl md:text-5xl font-heading font-bold mb-6 text-white">
                <?php echo $txt['neutral_title']; ?>
            </h2>
            <p class="text-xl md:text-2xl text-white leading-relaxed font-light">
                <?php echo $txt['neutral_desc']; ?>
            </p>
        </div>
    </section>

    <!-- INDUSTRIES GRID -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-heading font-bold text-gray-900 mb-4">
                    <?php echo $txt['ind_title']; ?>
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    <?php echo $txt['ind_desc']; ?>
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <?php
                $industries = [
                    ['icon' => 'fa-box-open', 'key' => 'ind_1'],
                    ['icon' => 'fa-plane', 'key' => 'ind_2'],
                    ['icon' => 'fa-pills', 'key' => 'ind_3'],
                    ['icon' => 'fa-car', 'key' => 'ind_4'],
                    ['icon' => 'fa-helmet-safety', 'key' => 'ind_5'],
                    ['icon' => 'fa-shirt', 'key' => 'ind_6'],
                    ['icon' => 'fa-utensils', 'key' => 'ind_7'],
                    ['icon' => 'fa-heart-pulse', 'key' => 'ind_8'],
                    ['icon' => 'fa-triangle-exclamation', 'key' => 'ind_9'],
                ];
                foreach ($industries as $ind) {
                    ?>
                    <div
                        class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 text-center group cursor-default">
                        <i
                            class="fa-solid <?php echo $ind['icon']; ?> text-3xl text-gray-300 group-hover:text-secondary mb-4 transition-colors"></i>
                        <h3 class="font-bold text-gray-800 group-hover:text-primary transition-colors">
                            <?php echo $txt[$ind['key']]; ?>
                        </h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- MISSION VISION VALUES -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Mission -->
                <div class="text-center lg:text-left">
                    <div
                        class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-primary text-2xl mb-6 mx-auto lg:mx-0">
                        <i class="fa-solid fa-flag"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        <?php echo $txt['mvv_mission_title']; ?>
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <?php echo $txt['mvv_mission_desc']; ?>
                    </p>
                </div>

                <!-- Vision -->
                <div class="text-center lg:text-left">
                    <div
                        class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-primary text-2xl mb-6 mx-auto lg:mx-0">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        <?php echo $txt['mvv_vision_title']; ?>
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <?php echo $txt['mvv_vision_desc']; ?>
                    </p>
                </div>

                <!-- Values -->
                <!-- Values -->
                <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-lg relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-8 opacity-5">
                        <i class="fa-solid fa-gem text-9xl text-primary"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-6 relative z-10 text-gray-900">
                        <?php echo $txt['mvv_values_title']; ?>
                    </h3>
                    <ul class="space-y-4 relative z-10">
                        <li class="flex items-center gap-3 text-gray-600">
                            <i class="fa-solid fa-check text-secondary"></i>
                            <?php echo $txt['mvv_val_1']; ?>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600">
                            <i class="fa-solid fa-check text-secondary"></i>
                            <?php echo $txt['mvv_val_2']; ?>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600">
                            <i class="fa-solid fa-check text-secondary"></i>
                            <?php echo $txt['mvv_val_3']; ?>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600">
                            <i class="fa-solid fa-check text-secondary"></i>
                            <?php echo $txt['mvv_val_4']; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <!-- Mobile Menu Script -->
    <script src="assets/js/mobile-menu.js"></script>
    <script>
        // Simple Sticky Header logic matching index
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
</body>

</html>