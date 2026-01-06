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
        'hero_title' => 'Comprehensive Cargo Insurance',
        'hero_desc' => 'Protect your investment with our All-Risk coverage. We secure your goods against loss or damage from origin to final destination.',
        'hero_stat1' => 'All-Risk Coverage',
        'hero_stat2' => 'Fast Claims',

        // Advantages
        'adv_title' => 'Why Insure With Us?',
        'adv_1_title' => 'Peace of Mind',
        'adv_1_desc' => 'International shipping involves risks. Our policies ensure you are financially protected against unforeseen events like accidents, theft, or weather damage.',
        'adv_2_title' => 'Door-to-Door Protection',
        'adv_2_desc' => 'Coverage starts from the moment goods leave the warehouse until they are delivered to the consignee\'s door.',
        'adv_3_title' => 'Competitive Rates',
        'adv_3_desc' => 'We leverage our volume to offer premium insurance policies at a fraction of the cost of standalone providers.',

        // Types of Services
        'types_title' => 'Coverage Options',
        'types_desc' => 'Flexible insurance solutions tailored to your specific cargo type and route.',
        'type_1_title' => 'All-Risk Policy',
        'type_1_desc' => 'The most comprehensive coverage available, protecting against physical loss or damage from external causes.',
        'type_2_title' => 'General Average',
        'type_2_desc' => 'Covers your contribution to shared losses in maritime emergencies (a critical and often overlooked risk).',
        'type_3_title' => 'Single Shipment',
        'type_3_desc' => 'One-off coverage for specific high-value shipments, ideal for occasional exporters.',
        'type_4_title' => 'Open Policy',
        'type_4_desc' => 'Continuous annual coverage for frequent shippers, automatically insuring all your logistics operations.',

        // Process
        'process_title' => 'Insurance Process',
        'step1' => 'Quote Request',
        'step2' => 'Policy Issuance',
        'step3' => 'Shipment Transit',
        'step4' => 'Claims (if needed)',
        'step5' => 'Settlement',

        // FAQ
        'faq_title' => 'Insurance FAQ',
        'q1' => 'Is cargo insurance mandatory?',
        'a1' => 'While not always legally mandatory, it is highly recommended. Carrier liability is extremely limited and often calculated by weight, not value.',
        'q2' => 'What is General Average?',
        'a2' => 'It is a maritime law principle where all parties share the losses if cargo is voluntarily sacrificed to save the vessel. Insurance covers this potentially huge cost.',

        'cta_title' => 'Secure Your Cargo Today',
        'cta_desc' => 'Don\'t risk it. Get an instant cargo insurance quote now.',
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
        'hero_title' => 'Seguro de Carga Completo',
        'hero_desc' => 'Proteja seu investimento com nossa cobertura All-Risk. Garantimos suas mercadorias contra perda ou dano da origem ao destino final.',
        'hero_stat1' => 'Cobertura All-Risk',
        'hero_stat2' => 'Sinistros Rápidos',

        // Advantages
        'adv_title' => 'Por Que Segurar Conosco?',
        'adv_1_title' => 'Tranquilidade Total',
        'adv_1_desc' => 'O transporte internacional envolve riscos. Nossas apólices garantem proteção financeira contra acidentes, roubos ou danos climáticos.',
        'adv_2_title' => 'Proteção Porta a Porta',
        'adv_2_desc' => 'A cobertura começa no momento em que as mercadorias saem do armazém até serem entregues na porta do destinatário.',
        'adv_3_title' => 'Taxas Competitivas',
        'adv_3_desc' => 'Aproveitamos nosso volume para oferecer apólices premium por uma fração do custo de provedores avulsos.',

        // Types of Services
        'types_title' => 'Opções de Cobertura',
        'types_desc' => 'Soluções de seguro flexíveis adaptadas ao seu tipo de carga e rota específica.',
        'type_1_title' => 'Apólice All-Risk',
        'type_1_desc' => 'A cobertura mais abrangente disponível, protegendo contra perda física ou danos por causas externas.',
        'type_2_title' => 'Avaria Grossa',
        'type_2_desc' => 'Cobre sua contribuição para perdas compartilhadas em emergências marítimas (um risco crítico e muitas vezes ignorado).',
        'type_3_title' => 'Embarque Único',
        'type_3_desc' => 'Cobertura pontual para embarques específicos de alto valor, ideal para exportadores eventuais.',
        'type_4_title' => 'Apólice Aberta',
        'type_4_desc' => 'Cobertura anual contínua para embarcadores frequentes, segurando automaticamente todas as suas operações.',

        // Process
        'process_title' => 'Processo de Seguro',
        'step1' => 'Cotação',
        'step2' => 'Emissão Apólice',
        'step3' => 'Trânsito',
        'step4' => 'Sinistro (se houver)',
        'step5' => 'Indenização',

        // FAQ
        'faq_title' => 'Dúvidas sobre Seguro',
        'q1' => 'O seguro de carga é obrigatório?',
        'a1' => 'Embora nem sempre obrigatório por lei, é altamente recomendado. A responsabilidade do transportador é extremamente limitada e calculada por peso, não valor.',
        'q2' => 'O que é Avaria Grossa?',
        'a2' => 'É um princípio marítimo onde todos compartilham as perdas se a carga for sacrificada para salvar o navio. O seguro cobre esse custo potencialmente enorme.',

        'cta_title' => 'Proteja Sua Carga Hoje',
        'cta_desc' => 'Não arrisque. Obtenha uma cotação de seguro de carga agora.',
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
        'hero_title' => 'Seguro de Carga Integral',
        'hero_desc' => 'Proteja su inversión con nuestra cobertura Todo Riesgo. Aseguramos sus mercancías contra pérdida o daño desde el origen hasta el destino.',
        'hero_stat1' => 'Cobertura Todo Riesgo',
        'hero_stat2' => 'Reclamos Rápidos',

        // Advantages
        'adv_title' => '¿Por Qué Asegurar Con Nosotros?',
        'adv_1_title' => 'Tranquilidad Total',
        'adv_1_desc' => 'El transporte internacional conlleva riesgos. Nuestras pólizas aseguran protección financiera contra accidentes, robos o daños climáticos.',
        'adv_2_title' => 'Protección Puerta a Puerta',
        'adv_2_desc' => 'La cobertura comienza desde que las mercancías salen del almacén hasta que se entregan en la puerta del destinatario.',
        'adv_3_title' => 'Tarifas Competitivas',
        'adv_3_desc' => 'Aprovechamos nuestro volumen para ofrecer pólizas premium a una fracción del costo de proveedores independientes.',

        // Types of Services
        'types_title' => 'Opciones de Cobertura',
        'types_desc' => 'Soluciones de seguro flexibles adaptadas a su tipo de carga y ruta.',
        'type_1_title' => 'Póliza Todo Riesgo',
        'type_1_desc' => 'La cobertura más completa disponible, protegiendo contra pérdida física o daños por causas externas.',
        'type_2_title' => 'Avería Gruesa',
        'type_2_desc' => 'Cubre su contribución a pérdidas compartidas en emergencias marítimas (un riesgo crítico a menudo ignorado).',
        'type_3_title' => 'Embarque Único',
        'type_3_desc' => 'Cobertura puntual para embarques específicos de alto valor.',
        'type_4_title' => 'Póliza Abierta',
        'type_4_desc' => 'Cobertura anual continua para embarcadores frecuentes, asegurando todas sus operaciones.',

        // Process
        'process_title' => 'Proceso de Seguro',
        'step1' => 'Cotización',
        'step2' => 'Emisión Póliza',
        'step3' => 'Tránsito',
        'step4' => 'Reclamo (si aplica)',
        'step5' => 'Indemnización',

        // FAQ
        'faq_title' => 'Preguntas Frecuentes',
        'q1' => '¿Es obligatorio el seguro de carga?',
        'a1' => 'Aunque no siempre es legalmente obligatorio, es muy recomendable. La responsabilidad del transportista es limitada y se basa en peso, no en valor.',
        'q2' => '¿Qué es la Avería Gruesa?',
        'a2' => 'Es un principio marítimo donde todos comparten las pérdidas si se sacrifica carga para salvar el barco. El seguro cubre este costo.',

        'cta_title' => 'Asegure Su Carga Hoy',
        'cta_desc' => 'No se arriesgue. Obtenga una cotización de seguro de carga ahora.',
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
    <title>Cargo Insurance | Python Logistics</title>
    <meta name="description"
        content="International Cargo Insurance Services. All-Risk coverage, General Average protection, and Door-to-Door insurance for your shipments.">

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
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-[#0f172a]">
        <div class="absolute inset-0 z-0">
            <!-- Insurance/Protection Background -->
            <div
                class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center opacity-30 mix-blend-overlay">
            </div>
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-primary/60 to-transparent opacity-90">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <span
                        class="inline-block py-2 px-4 bg-secondary/20 text-secondary border border-secondary/20 rounded-full text-sm font-bold tracking-wide uppercase mb-6 backdrop-blur-sm">
                        <i class="fa-solid fa-shield-halved mr-2"></i>
                        <?php echo $txt['serv_insurance_title']; ?>
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
                            <i class="fa-solid fa-umbrella text-secondary text-2xl mb-1"></i>
                            <div class="text-sm text-gray-300 uppercase tracking-widest">
                                <?php echo $txt['hero_stat1']; ?>
                            </div>
                        </div>
                        <div
                            class="text-center px-6 py-4 bg-white/10 backdrop-blur-md rounded-xl border border-white/10">
                            <i class="fa-solid fa-file-signature text-secondary text-2xl mb-1"></i>
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
                        <i class="fa-solid fa-globe"></i>
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
                        <i class="fa-solid fa-scale-unbalanced-flip"></i>
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
                        <i class="fa-solid fa-box"></i>
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
                        <i class="fa-solid fa-calendar-check"></i>
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
                                <i class="fa-solid fa-lock text-secondary text-xl mb-2"></i>
                                <h4 class="font-bold text-sm">Secure</h4>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                <i class="fa-solid fa-hand-holding-dollar text-secondary text-xl mb-2"></i>
                                <h4 class="font-bold text-sm">Guaranteed</h4>
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
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700">
                        <?php echo $txt['step1']; ?>
                    </span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-file-contract"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700">
                        <?php echo $txt['step2']; ?>
                    </span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-xl mb-4 shadow-lg scale-110">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <span class="text-sm font-bold text-primary">
                        <?php echo $txt['step3']; ?>
                    </span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700">
                        <?php echo $txt['step4']; ?>
                    </span>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <div
                        class="w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full flex items-center justify-center text-secondary text-xl mb-4 shadow-sm">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
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