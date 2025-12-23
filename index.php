<?php
// Language Logic (Ported from V2)
$lang = $_GET['lang'] ?? 'en';
if (!in_array($lang, ['en', 'pt', 'es']))
    $lang = 'en';

$t = [
    'en' => [
        'nav_home' => 'Home',
        'nav_about' => 'About Us',
        'nav_services' => 'Services',
        'nav_quote' => 'Request Quote',
        'nav_news' => 'News',
        'nav_contact' => 'Contact',
        'btn_quote' => 'Get a Quote',
        'slide1_sub' => 'Warehouse Solutions',
        'slide1_title' => 'Optimize Your Inventory.',
        'slide1_desc' => 'Secure, scalable, and efficient warehousing solutions designed for your business growth.',
        'slide1_btn' => 'Explore Warehousing',
        'slide2_sub' => 'Global Air Freight',
        'slide2_title' => 'Speed Meets Reliability.',
        'slide2_desc' => 'Delivering your urgent cargo to any destination worldwide with top-tier airlines.',
        'slide2_btn' => 'Get an Air Quote',
        'slide3_sub' => 'Ocean Freight',
        'slide3_title' => 'Seamless Shipping Across Borders.',
        'slide3_desc' => 'Cost-effective and sustainable ocean freight for your high-volume goods.',
        'slide3_btn' => 'View Ocean Services',
        'slide4_sub' => 'Pickup & Delivery',
        'slide4_title' => 'Nationwide Coverage.',
        'slide4_desc' => 'Comprehensive pickup and delivery services throughout the entire United States, door-to-door.',
        'slide4_btn' => 'Request Pickup',
        'trusted_title' => 'Trusted by Industry Leaders Worldwide',
        'years_exp' => 'Years Experience',
        'deliv_parcels' => 'Delivered Parcels',
        'global_partners' => 'Global Partners',
        'satisfaction' => 'Satisfaction',
        'about_sub' => 'Who We Are',
        'about_title' => 'We Are Python Logistics',
        'about_desc' => 'Python Logistics is a leading provider of supply chain management and global logistics solutions. We combine industry expertise with cutting-edge technology to deliver exceptional service.',
        'feat_tracking' => 'Real-time Tracking Systems',
        'feat_network' => 'Global Network of Carriers',
        'feat_success' => 'Dedicated Success Managers',
        'feat_cost' => 'Cost-Effective Routing',
        'about_btn' => 'Learn More About Us',
        'services_sub' => 'What We Do',
        'services_title' => 'Our Expertise',
        'services_desc' => 'We offer a complete range of logistics services to keep your business moving.',
        'serv_air_title' => 'Air Freight',
        'serv_air_desc' => 'Rapid delivery for urgent shipments. We collaborate with major airlines to ensure your cargo arrives on time.',
        'serv_ocean_title' => 'Ocean Freight',
        'serv_ocean_desc' => 'Economical solutions for large shipments. Full Container Load (FCL) and Less than Container Load (LCL).',
        'serv_road_title' => 'Road Transport',
        'serv_road_desc' => 'Flexible road freight services. From small parcels to full truckloads, we handle domestic shipping.',
        'serv_warehouse_title' => 'Warehousing',
        'serv_warehouse_desc' => 'Secure storage and inventory management. Our facilities are equipped to handle diverse goods.',
        'serv_pickup_title' => 'Pickup & Delivery',
        'serv_pickup_desc' => 'Nationwide pickup and delivery services across the USA. Door-to-door solutions for your convenience.',
        'serv_insurance_title' => 'Cargo Insurance',
        'serv_insurance_desc' => 'Comprehensive cargo protection. Safeguard your shipments with tailored insurance coverage.',
        'quote_sub' => 'Get A Quote',
        'quote_title' => 'Request a Free Estimate',
        'quote_desc' => 'Fill out the form below and we will get back to you with a tailored logistics solution.',
        'form_name' => 'Full Name',
        'form_email' => 'Email Address',
        'form_transport' => 'Transport Type',
        'form_dest' => 'Destination (City/Country)',
        'form_msg' => 'Message / Details',
        'form_btn' => 'Submit Request',
        'trans_air' => 'Air Freight',
        'trans_ocean' => 'Ocean Freight',
        'trans_road' => 'Road Transport',
        'trans_warehouse' => 'Warehousing',
        'blog_sub' => 'Latest News',
        'blog_title' => 'Logistics Insights',
        'blog_desc' => 'Stay updated with the latest trends in supply chain and transport.',
        'read_more' => 'Read More →',
        'blog1_title' => 'Optimizing Supply Chains in 2025',
        'blog1_desc' => 'Key strategies to reduce costs and improve efficiency in the coming year.',
        'blog2_title' => 'Smart Warehousing Technologies',
        'blog2_desc' => 'How automation and AI are transforming the way we store and manage inventory.',
        'blog3_title' => 'Sustainable Shipping Practices',
        'blog3_desc' => 'The future of green logistics and carbon footprint reduction in freight.',
        'footer_desc' => 'Python Logistics is committed to providing efficient, reliable, and secure logistics solutions globally.',
        'quick_links' => 'Quick Links',
        'contact_us' => 'Contact Us',
        'copyright' => '© 2024 Python Logistics. All rights reserved.',
        'map_sub' => 'Global Presence',
        'map_title' => 'Connecting the World',
        'loc_headquarters' => 'Headquarters',
        'loc_latam' => 'LatAm Hub',
        'loc_europe' => 'Euro Center',
        'loc_me' => 'ME Gateway',
        'loc_asia' => 'Asia Pacific'
    ],
    'pt' => [
        'nav_home' => 'Início',
        'nav_about' => 'Sobre Nós',
        'nav_services' => 'Serviços',
        'nav_quote' => 'Cotação',
        'nav_news' => 'Notícias',
        'nav_contact' => 'Contato',
        'btn_quote' => 'Solicitar Cotação',
        'slide1_sub' => 'Soluções de Armazenagem',
        'slide1_title' => 'Otimize Seu Estoque.',
        'slide1_desc' => 'Soluções de armazenag em seguras, escaláveis e eficientes projetadas para o crescimento do seu negócio.',
        'slide1_btn' => 'Explorar Armazenagem',
        'slide2_sub' => 'Frete Aéreo Global',
        'slide2_title' => 'Velocidade Encontra Confiabilidade.',
        'slide2_desc' => 'Entregando sua carga urgente para qualquer destino mundial com as melhores companhias aéreas.',
        'slide2_btn' => 'Cotação Aérea',
        'slide3_sub' => 'Frete Marítimo',
        'slide3_title' => 'Transporte Marítimo Sem Fronteiras.',
        'slide3_desc' => 'Envio marítimo econômico e sustentável para seus bens de grande volume.',
        'slide3_btn' => 'Ver Serviços Marítimos',
        'slide4_sub' => 'Coleta & Entrega',
        'slide4_title' => 'Cobertura Nacional.',
        'slide4_desc' => 'Serviços completos de coleta e entrega em todo território dos Estados Unidos, porta a porta.',
        'slide4_btn' => 'Solicitar Coleta',
        'trusted_title' => 'Confiado por Líderes da Indústria Mundialmente',
        'years_exp' => 'Anos de Experiência',
        'deliv_parcels' => 'Pacotes Entregues',
        'global_partners' => 'Parceiros Globais',
        'satisfaction' => 'Satisfação',
        'about_sub' => 'Quem Somos',
        'about_title' => 'Nós Somos Python Logistics',
        'about_desc' => 'A Python Logistics é líder no fornecimento de gestão de cadeia de suprimentos e soluções logísticas globais. Combinamos expertise da indústria com tecnologia de ponta para entregar um serviço excepcional.',
        'feat_tracking' => 'Sistemas de Rastreio em Tempo Real',
        'feat_network' => 'Rede Global de Transportadoras',
        'feat_success' => 'Gerentes de Sucesso Dedicados',
        'feat_cost' => 'Roteamento Custo-Efetivo',
        'about_btn' => 'Saiba Mais Sobre Nós',
        'services_sub' => 'O Que Fazemos',
        'services_title' => 'Nossa Expertise',
        'services_desc' => 'Oferecemos uma gama completa de serviços logísticos para manter seu negócio em movimento.',
        'serv_air_title' => 'Frete Aéreo',
        'serv_air_desc' => 'Entrega rápida para remessas urgentes. Colaboramos com grandes companhias aéreas para garantir que sua carga chegue no prazo.',
        'serv_ocean_title' => 'Frete Marítimo',
        'serv_ocean_desc' => 'Soluções econômicas para grandes remessas. Carga Total de Contêiner (FCL) e Carga Fracionada (LCL).',
        'serv_road_title' => 'Transporte Rodoviário',
        'serv_road_desc' => 'Serviços flexíveis de frete rodoviário. De pequenos pacotes a cargas completas, cuidamos do transporte doméstico.',
        'serv_warehouse_title' => 'Armazenagem',
        'serv_warehouse_desc' => 'Armazenamento seguro e gestão de estoque. Nossas instalações são equipadas para lidar com diversos bens.',
        'serv_pickup_title' => 'Coleta & Entrega',
        'serv_pickup_desc' => 'Serviços de coleta e entrega em todo território dos EUA. Soluções porta a porta para sua conveniência.',
        'serv_insurance_title' => 'Seguro de Carga',
        'serv_insurance_desc' => 'Proteção abrangente de carga. Proteja seus envios com cobertura de seguro personalizada.',
        'quote_sub' => 'Faça uma Cotação',
        'quote_title' => 'Solicite um Orçamento Grátis',
        'quote_desc' => 'Preencha o formulário abaixo e retornaremos com uma solução logística sob medida.',
        'form_name' => 'Nome Completo',
        'form_email' => 'Endereço de E-mail',
        'form_transport' => 'Tipo de Transporte',
        'form_dest' => 'Destino (Cidade/País)',
        'form_msg' => 'Mensagem / Detalhes',
        'form_btn' => 'Enviar Solicitação',
        'trans_air' => 'Frete Aéreo',
        'trans_ocean' => 'Frete Marítimo',
        'trans_road' => 'Transporte Rodoviário',
        'trans_warehouse' => 'Armazenagem',
        'blog_sub' => 'Últimas Notícias',
        'blog_title' => 'Insights de Logística',
        'blog_desc' => 'Mantenha-se atualizado com as últimas tendências em cadeia de suprimentos e transporte.',
        'read_more' => 'Ler Mais →',
        'blog1_title' => 'Otimizando Cadeias de Suprimentos em 2025',
        'blog1_desc' => 'Estratégias chave para reduzir custos e melhorar eficiência no próximo ano.',
        'blog2_title' => 'Tecnologias de Armazenagem Inteligente',
        'blog2_desc' => 'Como automação e IA estão transformando a maneira como armazenamos e gerenciamos estoque.',
        'blog3_title' => 'Práticas de Envio Sustentável',
        'blog3_desc' => 'O futuro da logística verde e redução da pegada de carbono no frete.',
        'footer_desc' => 'A Python Logistics está comprometida em fornecer soluções logísticas eficientes, confiáveis e seguras globalmente.',
        'quick_links' => 'Links Rápidos',
        'contact_us' => 'Fale Conosco',
        'copyright' => '© 2024 Python Logistics. Todos os direitos reservados.',
        'map_sub' => 'Presença Global',
        'map_title' => 'Conectando o Mundo',
        'loc_headquarters' => 'Sede',
        'loc_latam' => 'Hub LatAm',
        'loc_europe' => 'Centro Euro',
        'loc_me' => 'Gateway OM',
        'loc_asia' => 'Ásia Pacífico'
    ],
    'es' => [
        'nav_home' => 'Inicio',
        'nav_about' => 'Acerca de',
        'nav_services' => 'Servicios',
        'nav_quote' => 'Cotización',
        'nav_news' => 'Noticias',
        'nav_contact' => 'Contacto',
        'btn_quote' => 'Solicitar Cotización',
        'slide1_sub' => 'Soluciones de Almacenamiento',
        'slide1_title' => 'Optimice Su Inventario.',
        'slide1_desc' => 'Soluciones de almacenamiento seguras, escalables y eficientes diseñadas para el crecimiento de su negocio.',
        'slide1_btn' => 'Explorar Almacenamiento',
        'slide2_sub' => 'Flete Aéreo Global',
        'slide2_title' => 'Velocidad Con Fiabilidad.',
        'slide2_desc' => 'Entregando su carga urgente a cualquier destino mundial con las mejores aerolíneas.',
        'slide2_btn' => 'Cotización Aérea',
        'slide3_sub' => 'Flete Marítimo',
        'slide3_title' => 'Transporte Marítimo Sin Fronteras.',
        'slide3_desc' => 'Envío marítimo económico y sostenible para sus mercancías de gran volumen.',
        'slide3_btn' => 'Ver Servicios Marítimos',
        'slide4_sub' => 'Recogida y Entrega',
        'slide4_title' => 'Cobertura Nacional.',
        'slide4_desc' => 'Servicios completos de recogida y entrega en todo el territorio de los Estados Unidos, puerta a puerta.',
        'slide4_btn' => 'Solicitar Recogida',
        'trusted_title' => 'Confiado por Líderes de la Industria a Nivel Mundial',
        'years_exp' => 'Años de Experiencia',
        'deliv_parcels' => 'Paquetes Entregados',
        'global_partners' => 'Socios Globales',
        'satisfaction' => 'Satisfacción',
        'about_sub' => 'Quiénes Somos',
        'about_title' => 'Somos Python Logistics',
        'about_desc' => 'Python Logistics es líder en la provisión de gestión de cadena de suministro y soluciones logísticas globales. Combinamos experiencia de la industria con tecnología de vanguardia para ofrecer un servicio excepcional.',
        'feat_tracking' => 'Sistemas de Rastreo en Tiempo Real',
        'feat_network' => 'Red Global de Transportistas',
        'feat_success' => 'Gerentes de Éxito Dedicados',
        'feat_cost' => 'Enrutamiento Rentable',
        'about_btn' => 'Conozca Más Sobre Nosotros',
        'services_sub' => 'Lo Que Hacemos',
        'services_title' => 'Nuestra Experiencia',
        'services_desc' => 'Ofrecemos una gama completa de servicios logísticos para mantener su negocio en movimiento.',
        'serv_air_title' => 'Flete Aéreo',
        'serv_air_desc' => 'Entrega rápida para envíos urgentes. Colaboramos con grandes aerolíneas para garantizar que su carga llegue a tiempo.',
        'serv_ocean_title' => 'Flete Marítimo',
        'serv_ocean_desc' => 'Soluciones económicas para grandes envíos. Carga Completa de Contenedor (FCL) y Carga Fraccionada (LCL).',
        'serv_road_title' => 'Transporte Terrestre',
        'serv_road_desc' => 'Servicios flexibles de flete terrestre. Desde pequeños paquetes hasta cargas completas, manejamos el transporte doméstico.',
        'serv_warehouse_title' => 'Almacenamiento',
        'serv_warehouse_desc' => 'Almacenamiento seguro y gestión de inventario. Nuestras instalaciones están equipadas para manejar diversos productos.',
        'serv_pickup_title' => 'Recogida y Entrega',
        'serv_pickup_desc' => 'Servicios de recogida y entrega en todo el territorio de EE.UU. Soluciones puerta a puerta para su conveniencia.',
        'serv_insurance_title' => 'Seguro de Carga',
        'serv_insurance_desc' => 'Protección integral de carga. Proteja sus envíos con cobertura de seguro personalizada.',
        'quote_sub' => 'Solicite una Cotización',
        'quote_title' => 'Solicite un Presupuesto Gratuito',
        'quote_desc' => 'Complete el formulario a continuación y nos pondremos en contacto con una solución logística personalizada.',
        'form_name' => 'Nombre Completo',
        'form_email' => 'Correo Electrónico',
        'form_transport' => 'Tipo de Transporte',
        'form_dest' => 'Destino (Ciudad/País)',
        'form_msg' => 'Mensaje / Detalles',
        'form_btn' => 'Enviar Solicitud',
        'trans_air' => 'Flete Aéreo',
        'trans_ocean' => 'Flete Marítimo',
        'trans_road' => 'Transporte Terrestre',
        'trans_warehouse' => 'Almacenamiento',
        'blog_sub' => 'Últimas Noticias',
        'blog_title' => 'Perspectivas Logísticas',
        'blog_desc' => 'Manténgase actualizado con las últimas tendencias en cadena de suministro y transporte.',
        'read_more' => 'Leer Más →',
        'blog1_title' => 'Optimizando Cadenas de Suministro en 2025',
        'blog1_desc' => 'Estrategias clave para reducir costos y mejorar la eficiencia en el próximo año.',
        'blog2_title' => 'Tecnologías de Almacenamiento Inteligente',
        'blog2_desc' => 'Cómo la automatización y la IA están transformando la forma en que almacenamos y gestionamos el inventario.',
        'blog3_title' => 'Prácticas de Envío Sostenible',
        'blog3_desc' => 'El futuro de la logística verde y la reducción de la huella de carbono en el flete.',
        'footer_desc' => 'Python Logistics está comprometida en proporcionar soluciones logísticas eficientes, confiables y seguras a nivel global.',
        'quick_links' => 'Enlaces Rápidos',
        'contact_us' => 'Contáctenos',
        'copyright' => '© 2024 Python Logistics. Todos los derechos reservados.',
        'map_sub' => 'Presencia Global',
        'map_title' => 'Conectando el Mundo',
        'loc_headquarters' => 'Sede Central',
        'loc_latam' => 'Hub LatAm',
        'loc_europe' => 'Centro Europeo',
        'loc_me' => 'Gateway MO',
        'loc_asia' => 'Asia Pacífico'
    ]
];
$txt = $t[$lang];
?>
<!DOCTYPE html>
<!-- Using class 'scroll-smooth' for smooth anchor links -->
<html lang="<?php echo $lang; ?>" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Logistics | <?php echo $txt['slide1_title']; ?></title>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Modern CSS (Menu Mobile e outros estilos) -->
    <link rel="stylesheet" href="assets/css/modern.css">

    <!-- Tailwind CSS with BRAND COCONFIG -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Inter"', 'sans-serif'],
                        heading: ['"Outfit"', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            DEFAULT: '#3e4197', // Brand Primary
                            dark: '#2a2d6e',
                        },
                        secondary: {
                            DEFAULT: '#2bace2', // Brand Secondary
                        },
                        // Keeping standard grays for UI
                    },
                    boxShadow: {
                        'glass': '0 8px 32px 0 rgba(62, 65, 151, 0.15)',
                    },
                    animation: {
                        'progress': 'progress 5000ms linear',
                    },
                    keyframes: {
                        progress: {
                            '0%': { transform: 'scaleX(0)' },
                            '100%': { transform: 'scaleX(1)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-header {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(62, 65, 151, 0.1);
        }
    </style>
</head>

<body class="font-sans text-gray-700 antialiased bg-gray-50 selection:bg-primary selection:text-white">

    <?php include 'includes/navbar.php'; ?>

    <!-- HERO SECTION (High Impact Slider) -->
    <section class="relative h-[85vh] min-h-[600px] flex items-center overflow-hidden bg-gray-900">
        <!-- Background Images -->
        <div class="absolute inset-0 z-0">
            <!-- Slide 1 BG -->
            <div class="hero-bg absolute inset-0 bg-cover bg-center transition-all duration-[2000ms] ease-in-out opacity-100 scale-105"
                style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');"
                id="bg-1"></div>
            <!-- Slide 2 BG -->
            <div class="hero-bg absolute inset-0 bg-cover bg-center transition-all duration-[2000ms] ease-in-out opacity-0 scale-100"
                style="background-image: url('https://images.unsplash.com/photo-1570710891163-6d3b5c47248b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');"
                id="bg-2"></div>
            <!-- Slide 3 BG -->
            <div class="hero-bg absolute inset-0 bg-cover bg-center transition-all duration-[2000ms] ease-in-out opacity-0 scale-100"
                style="background-image: url('assets/images/sliders/maritimo.jpg');" id="bg-3"></div>
            <!-- Slide 4 BG -->
            <div class="hero-bg absolute inset-0 bg-cover bg-center transition-all duration-[2000ms] ease-in-out opacity-0 scale-100"
                style="background-image: url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');"
                id="bg-4"></div>

            <!-- Overlays -->
            <div class="absolute inset-0 bg-gray-900/20 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/50 via-gray-900/30 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 via-transparent to-transparent opacity-90">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full pt-20">
            <div class="grid lg:grid-cols-12 gap-12 items-center">

                <!-- Text Slides -->
                <div class="lg:col-span-12 relative h-[400px] flex items-center">

                    <!-- Slide 1 Text -->
                    <div class="hero-content absolute inset-0 flex flex-col justify-center transition-all duration-1000 transform translate-y-0 opacity-100"
                        id="content-1">
                        <div class="overflow-hidden mb-6">
                            <span
                                class="inline-block py-2 px-4 bg-secondary/80 text-white rounded-full text-sm font-bold tracking-wide uppercase shadow-lg shadow-secondary/30 backdrop-blur-sm border border-white/20">
                                <i class="fa-solid fa-warehouse mr-2"></i> <?php echo $txt['slide1_sub']; ?>
                            </span>
                        </div>
                        <h1
                            class="text-5xl lg:text-7xl font-heading font-extrabold text-white leading-tight mb-6 drop-shadow-2xl">
                            <?php echo $txt['slide1_title']; ?>
                        </h1>
                        <p
                            class="text-xl text-gray-200 mb-8 leading-relaxed max-w-xl drop-shadow-lg font-light border-l-4 border-secondary pl-6">
                            <?php echo $txt['slide1_desc']; ?>
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#services"
                                class="px-8 py-4 bg-secondary text-white font-bold rounded-xl hover:bg-white hover:text-secondary transition-all shadow-xl shadow-secondary/40 hover:-translate-y-1 flex items-center gap-2 group">
                                <?php echo $txt['slide1_btn']; ?> <i
                                    class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Slide 2 Text -->
                    <div class="hero-content absolute inset-0 flex flex-col justify-center transition-all duration-1000 transform translate-y-8 opacity-0 pointer-events-none"
                        id="content-2">
                        <div class="overflow-hidden mb-6">
                            <span
                                class="inline-block py-2 px-4 bg-blue-600/80 text-white rounded-full text-sm font-bold tracking-wide uppercase shadow-lg shadow-blue-500/30 backdrop-blur-sm border border-white/20">
                                <i class="fa-solid fa-plane-up mr-2"></i> <?php echo $txt['slide2_sub']; ?>
                            </span>
                        </div>
                        <h1
                            class="text-5xl lg:text-7xl font-heading font-extrabold text-white leading-tight mb-6 drop-shadow-2xl">
                            <?php echo $txt['slide2_title']; ?>
                        </h1>
                        <p
                            class="text-xl text-gray-200 mb-8 leading-relaxed max-w-xl drop-shadow-lg font-light border-l-4 border-blue-500 pl-6">
                            <?php echo $txt['slide2_desc']; ?>
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#quote"
                                class="px-8 py-4 bg-blue-600 text-white font-bold rounded-xl hover:bg-white hover:text-blue-600 transition-all shadow-xl shadow-blue-600/40 hover:-translate-y-1 flex items-center gap-2 group">
                                <?php echo $txt['slide2_btn']; ?> <i
                                    class="fa-solid fa-plane group-hover:-translate-y-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Slide 3 Text -->
                    <div class="hero-content absolute inset-0 flex flex-col justify-center transition-all duration-1000 transform translate-y-8 opacity-0 pointer-events-none"
                        id="content-3">
                        <div class="overflow-hidden mb-6">
                            <span
                                class="inline-block py-2 px-4 bg-teal-600/80 text-white rounded-full text-sm font-bold tracking-wide uppercase shadow-lg shadow-teal-500/30 backdrop-blur-sm border border-white/20">
                                <i class="fa-solid fa-ship mr-2"></i> <?php echo $txt['slide3_sub']; ?>
                            </span>
                        </div>
                        <h1
                            class="text-5xl lg:text-7xl font-heading font-extrabold text-white leading-tight mb-6 drop-shadow-2xl">
                            <?php echo $txt['slide3_title']; ?>
                        </h1>
                        <p
                            class="text-xl text-gray-200 mb-8 leading-relaxed max-w-xl drop-shadow-lg font-light border-l-4 border-teal-500 pl-6">
                            <?php echo $txt['slide3_desc']; ?>
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#services"
                                class="px-8 py-4 bg-teal-600 text-white font-bold rounded-xl hover:bg-white hover:text-teal-600 transition-all shadow-xl shadow-teal-600/40 hover:-translate-y-1 flex items-center gap-2 group">
                                <?php echo $txt['slide3_btn']; ?> <i
                                    class="fa-solid fa-anchor group-hover:rotate-12 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Slide 4 Text -->
                    <div class="hero-content absolute inset-0 flex flex-col justify-center transition-all duration-1000 transform translate-y-8 opacity-0 pointer-events-none"
                        id="content-4">
                        <div class="overflow-hidden mb-6">
                            <span
                                class="inline-block py-2 px-4 bg-orange-600/80 text-white rounded-full text-sm font-bold tracking-wide uppercase shadow-lg shadow-orange-500/30 backdrop-blur-sm border border-white/20">
                                <i class="fa-solid fa-truck-fast mr-2"></i> <?php echo $txt['slide4_sub']; ?>
                            </span>
                        </div>
                        <h1
                            class="text-5xl lg:text-7xl font-heading font-extrabold text-white leading-tight mb-6 drop-shadow-2xl">
                            <?php echo $txt['slide4_title']; ?>
                        </h1>
                        <p
                            class="text-xl text-gray-200 mb-8 leading-relaxed max-w-xl drop-shadow-lg font-light border-l-4 border-orange-500 pl-6">
                            <?php echo $txt['slide4_desc']; ?>
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#quote"
                                class="px-8 py-4 bg-orange-600 text-white font-bold rounded-xl hover:bg-white hover:text-orange-600 transition-all shadow-xl shadow-orange-600/40 hover:-translate-y-1 flex items-center gap-2 group">
                                <?php echo $txt['slide4_btn']; ?> <i
                                    class="fa-solid fa-truck group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Loading Indicator -->
        <div class="absolute bottom-0 left-0 w-full z-30">
            <div class="w-full h-1 bg-white/5">
                <div id="slide-progress" class="h-full bg-secondary/70 origin-left transform scale-x-0"></div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="bg-white py-12 border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h5 class="text-center text-gray-400 font-bold uppercase tracking-widest text-sm mb-8">
                <?php echo $txt['trusted_title']; ?>
            </h5>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div>
                    <h3 class="text-3xl font-bold text-primary">10+</h3>
                    <p class="text-sm text-gray-500 font-medium"><?php echo $txt['years_exp']; ?></p>
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-secondary">25k+</h3>
                    <p class="text-sm text-gray-500 font-medium"><?php echo $txt['deliv_parcels']; ?></p>
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-primary">300+</h3>
                    <p class="text-sm text-gray-500 font-medium"><?php echo $txt['global_partners']; ?></p>
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-secondary">100%</h3>
                    <p class="text-sm text-gray-500 font-medium"><?php echo $txt['satisfaction']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Global Map Section -->
    <section class="py-20 bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 relative">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-secondary font-bold tracking-wider uppercase text-sm"><?php echo $txt['map_sub']; ?>
                </span>
                <h2 class="text-3xl font-heading font-bold text-[#1a5f7a] mt-2"><?php echo $txt['map_title']; ?>
                </h2>
            </div>

            <div class="relative w-full max-w-5xl mx-auto">
                <img src="assets/images/mapa mundi aberto.svg" alt="World Map" class="w-full h-auto opacity-80">

                <!-- Pulsing Pin 1: Miami (Headquarters) - Badge sempre visível -->
                <div
                    class="absolute top-[48%] left-[24%] -translate-x-1/2 -translate-y-1/2 flex items-center justify-center group cursor-pointer z-10">
                    <span class="absolute inline-flex h-8 w-8 rounded-full bg-secondary opacity-50 animate-ping"></span>
                    <span
                        class="relative inline-flex rounded-full h-4 w-4 bg-primary border-2 border-white shadow-lg transition-transform hover:scale-125"></span>
                    <div
                        class="absolute bottom-full mb-3 left-1/2 -translate-x-1/2 px-4 py-2 bg-white text-primary border border-primary/10 text-xs font-bold rounded-lg shadow-xl whitespace-nowrap z-20 flex flex-col items-center">
                        <span
                            class="uppercase tracking-wider text-[10px] text-gray-400"><?php echo $txt['loc_headquarters']; ?>
                        </span>
                        <span class="text-sm">Miami, USA</span>
                        <div
                            class="absolute top-full left-1/2 -translate-x-1/2 -mt-1 border-4 border-transparent border-t-white">
                        </div>
                    </div>
                </div>

                <!-- Pin 1b: Los Angeles - Badge apenas no hover -->
                <div
                    class="absolute top-[40%] left-[15%] -translate-x-1/2 -translate-y-1/2 flex items-center justify-center group cursor-pointer z-10">
                    <span
                        class="absolute inline-flex h-6 w-6 rounded-full bg-secondary opacity-30 animate-ping delay-200"></span>
                    <span
                        class="relative inline-flex rounded-full h-3 w-3 bg-secondary border-2 border-white shadow-lg transition-transform hover:scale-125"></span>
                    <div
                        class="absolute bottom-full mb-3 left-1/2 -translate-x-1/2 px-4 py-2 bg-white text-secondary border border-secondary/10 text-xs font-bold rounded-lg shadow-xl whitespace-nowrap z-20 flex-col items-center opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300">
                        <span class="uppercase tracking-wider text-[10px] text-gray-400">West Coast</span>
                        <span class="text-sm">Los Angeles, USA</span>
                        <div
                            class="absolute top-full left-1/2 -translate-x-1/2 -mt-1 border-4 border-transparent border-t-white">
                        </div>
                    </div>
                </div>

                <!-- Pin 1c: Chicago - Badge apenas no hover -->
                <div
                    class="absolute top-[38%] left-[22%] -translate-x-1/2 -translate-y-1/2 flex items-center justify-center group cursor-pointer z-10">
                    <span
                        class="absolute inline-flex h-6 w-6 rounded-full bg-secondary opacity-30 animate-ping delay-400"></span>
                    <span
                        class="relative inline-flex rounded-full h-3 w-3 bg-secondary border-2 border-white shadow-lg transition-transform hover:scale-125"></span>
                    <div
                        class="absolute bottom-full mb-3 left-1/2 -translate-x-1/2 px-4 py-2 bg-white text-secondary border border-secondary/10 text-xs font-bold rounded-lg shadow-xl whitespace-nowrap z-20 flex-col items-center opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300">
                        <span class="uppercase tracking-wider text-[10px] text-gray-400">Midwest</span>
                        <span class="text-sm">Chicago, USA</span>
                        <div
                            class="absolute top-full left-1/2 -translate-x-1/2 -mt-1 border-4 border-transparent border-t-white">
                        </div>
                    </div>
                </div>

                <!-- Pin 1d: Houston - Badge apenas no hover -->
                <div
                    class="absolute top-[52%] left-[21%] -translate-x-1/2 -translate-y-1/2 flex items-center justify-center group cursor-pointer z-10">
                    <span
                        class="absolute inline-flex h-6 w-6 rounded-full bg-secondary opacity-30 animate-ping delay-600"></span>
                    <span
                        class="relative inline-flex rounded-full h-3 w-3 bg-secondary border-2 border-white shadow-lg transition-transform hover:scale-125"></span>
                    <div
                        class="absolute bottom-full mb-3 left-1/2 -translate-x-1/2 px-4 py-2 bg-white text-secondary border border-secondary/10 text-xs font-bold rounded-lg shadow-xl whitespace-nowrap z-20 flex-col items-center opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300">
                        <span class="uppercase tracking-wider text-[10px] text-gray-400">South</span>
                        <span class="text-sm">Houston, USA</span>
                        <div
                            class="absolute top-full left-1/2 -translate-x-1/2 -mt-1 border-4 border-transparent border-t-white">
                        </div>
                    </div>
                </div>

                <!-- Pulsing Pin 2: South America (São Paulo) -->
                <div
                    class="absolute top-[75%] left-[32%] -translate-x-1/2 -translate-y-1/2 flex items-center justify-center group cursor-pointer z-10">
                    <span
                        class="absolute inline-flex h-8 w-8 rounded-full bg-secondary opacity-50 animate-ping delay-300"></span>
                    <span
                        class="relative inline-flex rounded-full h-4 w-4 bg-primary border-2 border-white shadow-lg transition-transform hover:scale-125"></span>
                    <div
                        class="absolute bottom-full mb-3 left-1/2 -translate-x-1/2 px-4 py-2 bg-white text-primary border border-primary/10 text-xs font-bold rounded-lg shadow-xl whitespace-nowrap z-20 flex flex-col items-center">
                        <span
                            class="uppercase tracking-wider text-[10px] text-gray-400"><?php echo $txt['loc_latam']; ?>
                        </span>
                        <span class="text-sm">São Paulo, BRA</span>
                        <div
                            class="absolute top-full left-1/2 -translate-x-1/2 -mt-1 border-4 border-transparent border-t-white">
                        </div>
                    </div>
                </div>

                <!-- Pulsing Pin 3: Europe (Hamburg) -->
                <div
                    class="absolute top-[28%] left-[51%] -translate-x-1/2 -translate-y-1/2 flex items-center justify-center group cursor-pointer z-10">
                    <span
                        class="absolute inline-flex h-8 w-8 rounded-full bg-secondary opacity-50 animate-ping delay-700"></span>
                    <span
                        class="relative inline-flex rounded-full h-4 w-4 bg-primary border-2 border-white shadow-lg transition-transform hover:scale-125"></span>
                    <div
                        class="absolute bottom-full mb-3 left-1/2 -translate-x-1/2 px-4 py-2 bg-white text-primary border border-primary/10 text-xs font-bold rounded-lg shadow-xl whitespace-nowrap z-20 flex flex-col items-center">
                        <span class="uppercase tracking-wider text-[10px] text-gray-400">
                            <?php echo $txt['loc_europe']; ?>
                        </span>
                        <span class="text-sm">Hamburg, DE</span>
                        <div
                            class="absolute top-full left-1/2 -translate-x-1/2 -mt-1 border-4 border-transparent border-t-white">
                        </div>
                    </div>
                </div>

                <!-- Pulsing Pin 4: Middle East (Dubai) -->
                <div
                    class="absolute top-[42%] left-[62%] -translate-x-1/2 -translate-y-1/2 flex items-center justify-center group cursor-pointer z-10">
                    <span
                        class="absolute inline-flex h-8 w-8 rounded-full bg-secondary opacity-50 animate-ping delay-1000"></span>
                    <span
                        class="relative inline-flex rounded-full h-4 w-4 bg-primary border-2 border-white shadow-lg transition-transform hover:scale-125"></span>
                    <div
                        class="absolute bottom-full mb-3 left-1/2 -translate-x-1/2 px-4 py-2 bg-white text-primary border border-primary/10 text-xs font-bold rounded-lg shadow-xl whitespace-nowrap z-20 flex flex-col items-center">
                        <span class="uppercase tracking-wider text-[10px] text-gray-400">
                            <?php echo $txt['loc_me']; ?>
                        </span>
                        <span class="text-sm">Dubai, UAE</span>
                        <div
                            class="absolute top-full left-1/2 -translate-x-1/2 -mt-1 border-4 border-transparent border-t-white">
                        </div>
                    </div>
                </div>

                <!-- Pulsing Pin 5: Asia (Shanghai) -->
                <div
                    class="absolute top-[38%] left-[80%] -translate-x-1/2 -translate-y-1/2 flex items-center justify-center group cursor-pointer z-10">
                    <span
                        class="absolute inline-flex h-8 w-8 rounded-full bg-secondary opacity-50 animate-ping delay-[1.5s]"></span>
                    <span
                        class="relative inline-flex rounded-full h-4 w-4 bg-primary border-2 border-white shadow-lg transition-transform hover:scale-125"></span>
                    <div
                        class="absolute bottom-full mb-3 left-1/2 -translate-x-1/2 px-4 py-2 bg-white text-primary border border-primary/10 text-xs font-bold rounded-lg shadow-xl whitespace-nowrap z-20 flex flex-col items-center">
                        <span class="uppercase tracking-wider text-[10px] text-gray-400">
                            <?php echo $txt['loc_asia']; ?>
                        </span>
                        <span class="text-sm">Shanghai, CN</span>
                        <div
                            class="absolute top-full left-1/2 -translate-x-1/2 -mt-1 border-4 border-transparent border-t-white">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2">
                    <img src="assets/images/sliders/freteaereo-delphifretes.jpg"
                        onerror="this.src='https://images.unsplash.com/photo-1566576912906-25433db91384?ixlib=rb-4.0.3'"
                        alt="Team" class="rounded-3xl shadow-xl w-full">
                </div>
                <div class="w-full lg:w-1/2">
                    <span
                        class="text-secondary font-bold tracking-wider uppercase text-sm"><?php echo $txt['about_sub']; ?></span>
                    <h2 class="text-4xl font-heading font-bold text-[#1a5f7a] mt-2 mb-6">
                        <?php echo $txt['about_title']; ?>
                    </h2>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        <?php echo $txt['about_desc']; ?>
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fa-solid fa-check-circle text-secondary text-xl"></i>
                            <?php echo $txt['feat_tracking']; ?>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fa-solid fa-check-circle text-secondary text-xl"></i>
                            <?php echo $txt['feat_network']; ?>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fa-solid fa-check-circle text-secondary text-xl"></i>
                            <?php echo $txt['feat_success']; ?>
                        </li>
                    </ul>
                    <a href="#"
                        class="inline-block mt-8 px-8 py-3 bg-gray-100 text-primary font-bold rounded-lg hover:bg-gray-200 transition-colors">
                        <?php echo $txt['about_btn']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="text-secondary font-bold tracking-wider uppercase text-sm"><?php echo $txt['services_sub']; ?></span>
                <h2 class="text-4xl font-heading font-bold text-[#1a5f7a] mt-2 mb-4">
                    <?php echo $txt['services_title']; ?>
                </h2>
                <p class="text-gray-600 text-lg"><?php echo $txt['services_desc']; ?></p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- S1 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:shadow-primary/10 transition-all duration-300 group border border-transparent hover:border-primary/20">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-plane-departure"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo $txt['serv_air_title']; ?></h3>
                    <p class="text-gray-600 mb-4 text-sm"><?php echo $txt['serv_air_desc']; ?></p>
                </div>
                <!-- S2 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:shadow-secondary/10 transition-all duration-300 group border border-transparent hover:border-secondary/20">
                    <div
                        class="w-16 h-16 bg-secondary/10 rounded-xl flex items-center justify-center text-secondary text-2xl mb-6 group-hover:bg-secondary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-ship"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo $txt['serv_ocean_title']; ?></h3>
                    <p class="text-gray-600 mb-4 text-sm"><?php echo $txt['serv_ocean_desc']; ?></p>
                </div>
                <!-- S3 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:shadow-primary/10 transition-all duration-300 group border border-transparent hover:border-primary/20">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo $txt['serv_road_title']; ?></h3>
                    <p class="text-gray-600 mb-4 text-sm"><?php echo $txt['serv_road_desc']; ?></p>
                </div>
                <!-- S4 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:shadow-secondary/10 transition-all duration-300 group border border-transparent hover:border-secondary/20">
                    <div
                        class="w-16 h-16 bg-secondary/10 rounded-xl flex items-center justify-center text-secondary text-2xl mb-6 group-hover:bg-secondary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-warehouse"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo $txt['serv_warehouse_title']; ?></h3>
                    <p class="text-gray-600 mb-4 text-sm"><?php echo $txt['serv_warehouse_desc']; ?></p>
                </div>
                <!-- S5 - NEW: Pickup & Delivery -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:shadow-primary/10 transition-all duration-300 group border border-transparent hover:border-primary/20">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo $txt['serv_pickup_title']; ?></h3>
                    <p class="text-gray-600 mb-4 text-sm"><?php echo $txt['serv_pickup_desc']; ?></p>
                </div>
                <!-- S6 - NEW: Cargo Insurance -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:shadow-secondary/10 transition-all duration-300 group border border-transparent hover:border-secondary/20">
                    <div
                        class="w-16 h-16 bg-secondary/10 rounded-xl flex items-center justify-center text-secondary text-2xl mb-6 group-hover:bg-secondary group-hover:text-white transition-colors">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo $txt['serv_insurance_title']; ?></h3>
                    <p class="text-gray-600 mb-4 text-sm"><?php echo $txt['serv_insurance_desc']; ?></p>
                </div>
            </div>
        </div>
    </section>



    <!-- Request Quote Section -->
    <section id="quote" class="py-24 bg-[#36b5e8] relative text-white">
        <div class="absolute inset-0 bg-primary opacity-50 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-[url('assets/images/backgrounds/5.jpg')] bg-cover bg-fixed opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16">
                <div>
                    <span
                        class="text-secondary font-bold tracking-wider uppercase text-sm"><?php echo $txt['quote_sub']; ?></span>
                    <h2 class="text-4xl font-heading font-bold mt-2 mb-6"><?php echo $txt['quote_title']; ?></h2>
                    <p class="text-lg text-gray-300 mb-8"><?php echo $txt['quote_desc']; ?></p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-secondary"></i> +1 (555)
                            123-4567</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-secondary"></i>
                            info@pythonlogistics.com</li>
                    </ul>
                </div>

                <div class="bg-white/10 backdrop-blur-md p-8 rounded-3xl border border-white/20">
                    <form action="request-quote.php" method="POST" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium mb-1"><?php echo $txt['form_name']; ?></label>
                            <input type="text" name="name"
                                class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:bg-white/30 text-white placeholder-gray-300"
                                placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1"><?php echo $txt['form_email']; ?></label>
                            <input type="email" name="email"
                                class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:bg-white/30 text-white placeholder-gray-300"
                                placeholder="john@company.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1"><?php echo $txt['form_transport']; ?></label>
                            <select name="service"
                                class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:bg-white/30 text-white [&>option]:text-gray-800">
                                <option value="Air Freight"><?php echo $txt['trans_air']; ?></option>
                                <option value="Ocean Freight"><?php echo $txt['trans_ocean']; ?></option>
                                <option value="Road Freight"><?php echo $txt['trans_road']; ?></option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1"><?php echo $txt['form_msg']; ?></label>
                            <textarea name="message" rows="3"
                                class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 focus:outline-none focus:bg-white/30 text-white placeholder-gray-300"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full py-4 bg-secondary font-bold rounded-lg hover:bg-white hover:text-secondary transition-all">
                            <?php echo $txt['form_btn']; ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ (Static as per V2) -->
    <section id="faq" class="py-24 bg-gray-50">
        <div class="max-w-3xl mx-auto px-4">
            <h2 class="text-3xl font-heading font-bold text-center text-[#1a5f7a] mb-12">FAQ</h2>
            <div class="space-y-4">
                <details class="group bg-white p-6 rounded-xl shadow-sm [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-gray-900">
                        Do you handle hazardous materials?
                        <span class="ml-4 flex-shrink-0 transition duration-300 group-open:-rotate-180">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>
                    <p class="mt-4 leading-relaxed text-gray-600">
                        Yes, we are fully certified to transport hazardous materials (HAZMAT) across all modes of
                        transport, strictly adhering to international safety regulations.
                    </p>
                </details>

                <details class="group bg-white p-6 rounded-xl shadow-sm [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-gray-900">
                        How can I track my shipment?
                        <span class="ml-4 flex-shrink-0 transition duration-300 group-open:-rotate-180">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>
                    <p class="mt-4 leading-relaxed text-gray-600">
                        You can track your shipment instantly using the Quick Track widget at the top of this page, or
                        via our dedicated client portal.
                    </p>
                </details>

                <details class="group bg-white p-6 rounded-xl shadow-sm [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-gray-900">
                        Do you offer customs brokerage?
                        <span class="ml-4 flex-shrink-0 transition duration-300 group-open:-rotate-180">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>
                    <p class="mt-4 leading-relaxed text-gray-600">
                        Absolutely. Our in-house customs brokerage team ensures smooth clearance for your goods,
                        handling all documentation and compliance duties.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Footer -->
    <!-- Footer -->
    <footer class="bg-[#36b5e8] pt-16 pb-8 border-t border-[#36b5e8] relative text-white">
        <!-- Background Layers matching Quote Section -->
        <div class="absolute inset-0 bg-primary opacity-50 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-[url('assets/images/backgrounds/5.jpg')] bg-cover bg-fixed opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class=" grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <div>
                    <img src="https://pythonlogistics.com/wp-content/uploads/2020/10/logo-python.png" alt="Python"
                        class="h-8 mb-6 brightness-0 invert">
                    <p class="text-gray-300 mb-6">
                        <?php echo $txt['footer_desc']; ?>
                    </p>
                    <div class="flex gap-4 text-white/60">
                        <a href="#" class="hover:text-white transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-6">
                        <?php echo $txt['quick_links']; ?>
                    </h4>
                    <ul class="space-y-3 text-gray-300">
                        <li><a href="#" class="hover:text-white transition-colors"><?php echo $txt['nav_home']; ?></a>
                        </li>
                        <li><a href="#about" class="hover:text-white transition-colors">
                                <?php echo $txt['nav_about']; ?>
                            </a></li>
                        <li><a href="#services"
                                class="hover:text-white transition-colors"><?php echo $txt['nav_services']; ?></a></li>
                        <li><a href=" #quote" class="hover:text-white transition-colors">
                                <?php echo $txt['nav_quote']; ?>
                            </a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-6">
                        <?php echo $txt['contact_us']; ?>
                    </h4>
                    <ul class="space-y-3 text-gray-300">
                        <li><i class="fa-solid fa-location-dot mr-2 text-secondary"></i> 1915 NW 79th Avenue - Doral, FL
                            33126</li>
                        <li><i class="fa-solid fa-phone mr-2 text-secondary"></i> +1 305-901-5931</li>
                        <li><i class="fa-solid fa-envelope mr-2 text-secondary"></i> contact@pythonlogistics.com</li>
                    </ul>
                </div>
            </div>
            <div class="text-center pt-8 border-t border-[#36b5e8] text-gray-400">
                <p>
                    <?php echo $txt['copyright']; ?>
                </p>
            </div>
        </div>
    </footer>

    <!-- WIDGETS -->

    <!-- Announcement Popup
    <div id="announcementPopup"
        class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/60 backdrop-blur-sm opacity-0 invisible transition-all duration-300">
        <div class="bg-white w-[90%] max-w-lg rounded-2xl shadow-2xl transform translate-y-4 scale-95 transition-all duration-300 overflow-hidden"
            id="popupCard">
            <div class="bg-secondary p-5 flex justify-between items-center text-white">
                <h3 class="font-bold text-lg flex items-center gap-2"><i class="fa fa-exclamation-triangle"></i> Service
                    Alert</h3>
                <button onclick="closePopup()"
                    class="text-2xl leading-none opacity-80 hover:opacity-100">&times;</button>
            </div>
            <div class="p-6">
                <h4 class="font-bold text-gray-800 mb-3">Hurricane Catrina Update</h4>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    <strong>Miami Ports & Airports Closed:</strong> Due to the impact of Tornado Catrina, all logistics
                    operations in the Miami area are temporarily suspended. We are monitoring the situation closely.
                </p>
                <div class="text-right">
                    <button onclick="closePopup()"
                        class="px-5 py-2 bg-secondary text-white font-semibold rounded-lg hover:bg-secondary/90 transition-colors">Understood</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Accessibility Side Tab -->
    <button onclick="toggleAccMenu()"
        class="fixed top-1/2 right-0 -translate-y-1/2 w-14 h-14 bg-primary text-white flex items-center justify-center rounded-l-lg shadow-lg z-[9990] hover:w-16 transition-all duration-300 group">
        <i class="fa fa-universal-access text-2xl group-hover:scale-110 transition-transform"></i>
    </button>

    <div id="accMenu"
        class="fixed top-1/2 right-16 -translate-y-1/2 bg-white p-6 rounded-l-xl shadow-2xl z-[9989] w-64 opacity-0 invisible translate-x-4 transition-all duration-300">
        <h5 class="font-bold text-gray-800 border-b border-gray-100 pb-2 mb-4">Acessibilidade</h5>
        <div onclick="toggleTextSize()"
            class="flex justify-between items-center p-3 rounded-lg hover:bg-gray-50 cursor-pointer text-gray-600 transition-colors mb-2">
            <span>Aumentar Texto</span>
            <i class="fa fa-text-height text-secondary"></i>
        </div>
        <div onclick="toggleContrast()"
            class="flex justify-between items-center p-3 rounded-lg hover:bg-gray-50 cursor-pointer text-gray-600 transition-colors mb-2">
            <span>Alto Contraste</span>
            <i class="fa fa-adjust text-secondary"></i>
        </div>
        <div onclick="toggleGrayscale()"
            class="flex justify-between items-center p-3 rounded-lg hover:bg-gray-50 cursor-pointer text-gray-600 transition-colors">
            <span>Escala de Cinza</span>
            <i class="fa fa-eye-slash text-secondary"></i>
        </div>
    </div>

    <!-- WhatsApp -->
    <a href="https://wa.me/5511999999999"
        class="fixed bottom-6 right-6 w-14 h-14 bg-[#25D366] text-white rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform z-[9980]">
        <i class="fab fa-whatsapp text-3xl"></i>
    </a>

    <script>
        // Sticky Header Logic
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

        // Popup Logic
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('announcementPopup').classList.remove('opacity-0', 'invisible');
                document.getElementById('popupCard').classList.remove('translate-y-4', 'scale-95');
            }, 1000);
        });
        function closePopup() {
            document.getElementById('announcementPopup').classList.add('opacity-0', 'invisible');
        }

        // Accessibility Logic
        function toggleAccMenu() {
            const menu = document.getElementById('accMenu');
            menu.classList.toggle('opacity-0');
            menu.classList.toggle('invisible');
            menu.classList.toggle('translate-x-4');
        }
        function toggleTextSize() { document.body.classList.toggle('text-lg'); }
        function toggleContrast() {
            document.body.classList.toggle('grayscale');
            document.body.classList.toggle('invert');
        }
        function toggleGrayscale() { document.body.classList.toggle('grayscale'); }

        // Hero Slider Logic
        let currentSlide = 1;
        const totalSlides = 4;
        let slideInterval;

        function showSlide(n) {
            // Reset all
            for (let i = 1; i <= totalSlides; i++) {
                // Backgrounds
                const bg = document.getElementById(`bg-${i}`);
                bg.classList.remove('opacity-100', 'scale-105');
                bg.classList.add('opacity-0', 'scale-100');

                // Content
                const content = document.getElementById(`content-${i}`);
                content.classList.remove('opacity-100', 'translate-y-0');
                content.classList.add('opacity-0', 'translate-y-8', 'pointer-events-none');
            }

            // Activate new
            const activeBg = document.getElementById(`bg-${n}`);
            activeBg.classList.remove('opacity-0', 'scale-100');
            activeBg.classList.add('opacity-100', 'scale-105');

            const activeContent = document.getElementById(`content-${n}`);
            activeContent.classList.remove('opacity-0', 'translate-y-8', 'pointer-events-none');
            activeContent.classList.add('opacity-100', 'translate-y-0');

            // Reset and Start Progress Bar
            resetProgressBar();

            currentSlide = n;
        }

        function resetProgressBar() {
            const bar = document.getElementById('slide-progress');
            bar.classList.remove('animate-progress');
            void bar.offsetWidth; // Force reflow
            bar.classList.add('animate-progress');
        }

        function nextSlide() {
            let next = currentSlide + 1;
            if (next > totalSlides) next = 1;
            showSlide(next);
        }

        function manualSlide(n) {
            clearInterval(slideInterval);
            showSlide(n);
            startSlider(); // Restart timer
        }

        function startSlider() {
            resetProgressBar(); // Start for initial slide
            slideInterval = setInterval(nextSlide, 5000); // 5 seconds
        }

        // Start
        window.addEventListener('load', startSlider);
    </script>

    <!-- Mobile Menu Script -->
    <script src="assets/js/mobile-menu.js"></script>
</body>


</html>