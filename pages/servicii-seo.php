<?php
require_once('../config/config.php');
require_once('../components/navbar.php');
require_once('../components/footer.php');
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicii SEO București ⭐ Optimizare SEO Profesională</title>
    
    <!-- Meta Tags -->
    <meta name="description" content="Servicii SEO București ⭐ Optimizare SEO Profesională ✓ Creștere Trafic Organic ✓ Poziționare Google ✓ Audit SEO ✓ Link Building">
    <meta name="keywords" content="servicii seo bucuresti, optimizare seo, seo profesional, audit seo, link building, pozitionare google, optimizare website">
    <meta name="author" content="Lightning Revenue">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo BASE_URL; ?>servicii-seo">
    <meta property="og:title" content="Servicii SEO București ⭐ Optimizare SEO Profesională">
    <meta property="og:description" content="Servicii complete de optimizare SEO pentru afaceri. Creștem vizibilitatea și traficul organic al website-ului tău prin strategii SEO dovedite.">
    <meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/servicii-seo.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo BASE_URL; ?>servicii-seo">
    <meta property="twitter:title" content="Servicii SEO București ⭐ Optimizare SEO Profesională">
    <meta property="twitter:description" content="Servicii complete de optimizare SEO pentru afaceri. Creștem vizibilitatea și traficul organic al website-ului tău prin strategii SEO dovedite.">
    <meta property="twitter:image" content="<?php echo BASE_URL; ?>assets/images/servicii-seo.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>assets/images/logo-lightning-revenue.webp">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>assets/images/logo-lightning-revenue.webp">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL; ?>assets/images/logo-lightning-revenue.webp">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo BASE_URL; ?>servicii-seo">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Servicii SEO București",
        "provider": {
            "@type": "Organization",
            "name": "Lightning Revenue",
            "url": "<?php echo BASE_URL; ?>"
        },
        "description": "Servicii profesionale de optimizare SEO pentru website-uri. Strategii personalizate de creștere a vizibilității în Google și generare de trafic organic.",
        "areaServed": {
            "@type": "City",
            "name": "București"
        },
        "serviceType": "SEO Services",
        "offers": {
            "@type": "AggregateOffer",
            "priceCurrency": "RON",
            "offerCount": "3",
            "offers": [
                {
                    "@type": "Offer",
                    "name": "Pachet SEO Start-up",
                    "description": "Optimizare SEO pentru afaceri mici",
                    "priceSpecification": {
                        "@type": "UnitPriceSpecification",
                        "priceType": "https://schema.org/InvoicePrice",
                        "price": "De la 300€/lună"
                    }
                },
                {
                    "@type": "Offer",
                    "name": "Pachet SEO Professional",
                    "description": "Optimizare completă și link building",
                    "priceSpecification": {
                        "@type": "UnitPriceSpecification",
                        "priceType": "https://schema.org/InvoicePrice",
                        "price": "De la 500€/lună"
                    }
                },
                {
                    "@type": "Offer",
                    "name": "Pachet SEO Enterprise",
                    "description": "Soluții SEO pentru corporații",
                    "priceSpecification": {
                        "@type": "UnitPriceSpecification",
                        "priceType": "https://schema.org/InvoicePrice",
                        "price": "De la 1000€/lună"
                    }
                }
            ]
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Servicii SEO",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Audit SEO"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Optimizare On-Page"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Link Building"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Content Marketing"
                    }
                }
            ]
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "75",
            "bestRating": "5",
            "worstRating": "1"
        }
    }
    </script>
</head>
<body class="bg-gray-50">
    <?php renderNavbar('seo'); ?>

    <main>
        <!-- Hero Section -->
        <section class="pt-20 pb-12 bg-gradient-to-br from-gray-50 to-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="text-left">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                            Servicii SEO pentru <span class="text-blue-600">Prima Pagină în Google</span>
                        </h1>
                        <p class="text-xl text-gray-600 mb-8">
                            Creștem traficul organic și vizibilitatea afacerii tale prin strategii de optimizare SEO personalizate, focusate pe rezultate pe termen lung.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="<?php echo BASE_URL; ?>contact" 
                                class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
                                Solicită Audit SEO Gratuit
                                <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                            <a href="tel:0743959914" 
                                class="inline-flex items-center px-8 py-4 border border-blue-200 text-lg font-semibold rounded-lg text-blue-600 hover:bg-blue-50 transition duration-300">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                0743 959 914
                            </a>
                        </div>
                        <div class="mt-8 flex items-center gap-8">
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" class="opacity-50"/>
                                </svg>
                            </div>
                            <span class="ml-2 text-lg font-semibold text-gray-900">4.5/5</span>
                            <span class="mx-2 text-gray-500">Rating</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-lg font-semibold text-gray-900">100+</span>
                            <span class="ml-2 text-gray-500">Clienți Mulțumiți</span>
                        </div>
                    </div>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-blue-100 rounded-3xl transform -rotate-3"></div>
                        <img src="<?php echo BASE_URL; ?>assets/images/servicii-seo.jpg" alt="Servicii SEO Profesionale" class="relative rounded-2xl shadow-lg w-full h-auto z-10">
                    </div>
                </div>
            </div>
        </section>

        <!-- Tags Section -->
        <section class="py-8 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap gap-3 justify-center">
                    <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">Optimizare SEO</span>
                    <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">Servicii SEO Bucuresti</span>
                    <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">Link Building</span>
                    <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">Audit SEO</span>
                    <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">SEO On-Page</span>
                    <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">Content Marketing</span>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Pilonii Strategiei Noastre SEO</h2>
                    <p class="text-xl text-gray-600">Abordarea noastră completă asigură o creștere organică sustenabilă.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-blue-500 transition-colors">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Audit SEO Aprofundat</h3>
                        <p class="text-gray-600">Identificăm toate problemele tehnice, on-page și off-page care îți afectează vizibilitatea.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-blue-500 transition-colors">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Keyword Research Strategic</h3>
                        <p class="text-gray-600">Descoperim cuvintele cheie cu potențial maxim de conversie pentru nișa ta.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-blue-500 transition-colors">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Optimizare On-Page</h3>
                        <p class="text-gray-600">Optimizăm fiecare element al paginilor tale, de la titluri și meta-descrieri la structura de conținut.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-blue-500 transition-colors">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Content Marketing de Calitate</h3>
                        <p class="text-gray-600">Creăm conținut relevant și valoros care atrage, informează și convertește publicul țintă.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-blue-500 transition-colors">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Link Building Eficient</h3>
                        <p class="text-gray-600">Construim un profil de backlink-uri puternic și natural de la surse autoritare din industria ta.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-blue-500 transition-colors">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Raportare Transparentă</h3>
                        <p class="text-gray-600">Oferim rapoarte clare și detaliate despre evoluția pozițiilor, a traficului și a conversiilor.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Details -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Servicii Complete de Implementare SEO</h2>
                    <p class="text-xl text-gray-600">Descoperă soluțiile noastre personalizate pentru succesul afacerii tale</p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12">
                    <!-- Left Column - Services List -->
                    <div class="space-y-8">
                        <!-- Google Ads Service -->
                        <div class="group bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors">
                                        SEO Tehnic
                                        <span class="inline-block ml-2 transform group-hover:translate-x-1 transition-transform">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </span>
                                    </h3>
                                    <p class="mt-2 text-gray-600">Optimizare Tehnica SEO pentru website-ul tau, tintita spre rezultate de durata.</p>
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-full">Page Speed Optimiziation</span>
                                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-full">Mobile-First Design</span>
                                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-full">Implementare Sitemap</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Service -->
                        <div class="group bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-purple-600 transition-colors">
                                        On-Page SEO
                                        <span class="inline-block ml-2 transform group-hover:translate-x-1 transition-transform">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </span>
                                    </h3>
                                    <p class="mt-2 text-gray-600">Optimizare Website pentru rezultate de durata, si structura corecta.</p>
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-sm font-medium rounded-full">Optimizare Descrieri si Tags</span>
                                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-sm font-medium rounded-full">Optimizare META Tags</span>
                                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-sm font-medium rounded-full">Optimizare Structura Continut</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Email Marketing Service -->
                        <div class="group bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600 transition-colors">
                                        Imbunatatire Imagini si Video
                                        <span class="inline-block ml-2 transform group-hover:translate-x-1 transition-transform">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </span>
                                    </h3>
                                    <p class="mt-2 text-gray-600">Optimizare Imagini si Continut Media pentru un Website Rapid</p>
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-green-50 text-green-700 text-sm font-medium rounded-full">Optimizare si Creare Imagini</span>
                                        <span class="px-3 py-1 bg-green-50 text-green-700 text-sm font-medium rounded-full">Implementare Videoclipuri Business</span>
                                        <span class="px-3 py-1 bg-green-50 text-green-700 text-sm font-medium rounded-full">Aliniere Continut Media si Continut Scris</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Featured Content -->
                    <div class="lg:pl-8">
                        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">De Ce Să Alegi Serviciile Noastre?</h3>
                            
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Expertiză Dovedită</h4>
                                        <p class="mt-1 text-gray-600">Peste 100 de clienți mulțumiți și campanii de succes în diverse industrii.</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Rezultate Rapide</h4>
                                        <p class="mt-1 text-gray-600">Primele rezultate vizibile în 24-48 de ore de la implementare.</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Raportare Transparentă</h4>
                                        <p class="mt-1 text-gray-600">Acces 24/7 la statistici și rapoarte detaliate despre performanța campaniilor.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <a href="<?php echo BASE_URL; ?>contact" class="inline-flex items-center justify-center w-full px-6 py-3 text-base font-medium text-white bg-blue-600 border border-transparent rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Solicită o Consultație Gratuită
                                    <svg class="w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Solicită o Analiză SEO Gratuită</h2>
                    <p class="text-xl text-gray-600">Completează formularul și află cum poți îmbunătăți performanța site-ului tău.</p>
                </div>
                <form action="<?php echo BASE_URL; ?>submit-form.php" method="POST" class="space-y-6 bg-white rounded-xl shadow-sm p-8 border border-gray-100">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div><label for="nume" class="block text-sm font-medium text-gray-700 mb-1">Nume și Prenume *</label><input type="text" name="nume" id="nume" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></div>
                        <div><label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label><input type="email" name="email" id="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></div>
                        <div><label for="telefon" class="block text-sm font-medium text-gray-700 mb-1">Telefon *</label><input type="tel" name="telefon" id="telefon" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></div>
                        <div><label for="website" class="block text-sm font-medium text-gray-700 mb-1">Website *</label><input type="url" name="website" id="website" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></div>
                    </div>
                    <div class="flex justify-center"><button type="submit" class="px-8 py-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300 flex items-center">Trimite Solicitarea</button></div>
                </form>
            </div>
        </section>

        <!-- Detailed Information Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Tot ce Trebuie să Știi Despre Serviciile SEO în 2025</h2>
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Cât Durează să Vezi Rezultate SEO?</h3>
                        <p class="prose prose-lg text-gray-600 max-w-none mb-4">Optimizarea SEO este un maraton, nu un sprint. Rezultatele se construiesc în timp și aduc beneficii pe termen lung:</p>
                        <ul class="space-y-4 mb-6">
                            <li class="flex items-start"><span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-1 mr-3"><span class="text-blue-600 text-sm font-semibold">1</span></span><div><span class="font-semibold text-gray-900">Luna 1:</span> Audit Tehnic și On-Page. Stabilim fundația, rezolvăm erorile critice și optimizăm conținutul existent.</div></li>
                            <li class="flex items-start"><span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-1 mr-3"><span class="text-blue-600 text-sm font-semibold">2</span></span><div><span class="font-semibold text-gray-900">Lunile 2-4:</span> Content Marketing și Link Building. Creăm conținut nou, relevant și începem să construim autoritatea domeniului prin backlink-uri de calitate.</div></li>
                            <li class="flex items-start"><span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-1 mr-3"><span class="text-blue-600 text-sm font-semibold">3</span></span><div><span class="font-semibold text-gray-900">Lunile 4-6:</span> Creștere Vizibilă. Începem să vedem o îmbunătățire semnificativă a pozițiilor în Google și o creștere a traficului organic.</div></li>
                            <li class="flex items-start"><span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-1 mr-3"><span class="text-blue-600 text-sm font-semibold">4</span></span><div><span class="font-semibold text-gray-900">6+ Luni:</span> Dominare și Stabilitate. Consolidăm pozițiile obținute și ne concentrăm pe extinderea pe noi cuvinte cheie pentru a domina nișa.</div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Pachete de Servicii SEO</h2>
                    <p class="text-xl text-gray-600">Soluții personalizate pentru orice dimensiune de business</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">SEO Start</h3>
                        <p class="text-gray-600 mb-6">Ideal pentru afaceri locale și site-uri noi.</p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Audit SEO Inițial</span></li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Optimizare On-Page (până la 10 pagini)</span></li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Optimizare Google Business Profile</span></li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Raportare lunară</span></li>
                        </ul>
                        <a href="<?php echo BASE_URL; ?>contact" class="block w-full text-center px-6 py-3 border border-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition duration-300">Solicită Ofertă</a>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg border-2 border-blue-500 relative">
                        <div class="absolute top-0 right-0 bg-blue-500 text-white px-4 py-1 rounded-bl-lg text-sm font-semibold">Popular</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">SEO Growth</h3>
                        <p class="text-gray-600 mb-6">Pentru afaceri care doresc o creștere accelerată.</p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Totul din pachetul Start</span></li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Optimizare On-Page completă</span></li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Strategie de Content Marketing</span></li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Campanii de Link Building (4-6 link-uri/lună)</span></li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Optimizare SEO Tehnică avansată</span></li>
                        </ul>
                        <a href="<?php echo BASE_URL; ?>contact" class="block w-full text-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">Solicită Ofertă</a>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">SEO Dominator</h3>
                        <p class="text-gray-600 mb-6">Pentru afaceri care vor să domine nișa.</p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Totul din pachetul Growth</span></li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Strategie de Link Building agresivă (10+ link-uri/lună)</span></li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Consultant SEO dedicat</span></li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Analiză competitivă avansată</span></li>
                        </ul>
                        <a href="<?php echo BASE_URL; ?>contact" class="block w-full text-center px-6 py-3 border border-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition duration-300">Solicită Ofertă</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Ești gata să domini rezultatele Google?</h2>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">Hai să discutăm despre cum putem crește afacerea ta prin optimizare SEO performantă.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="<?php echo BASE_URL; ?>contact" class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition duration-300">Programează o Consultație Gratuită</a>
                    <a href="tel:0743959914" class="inline-flex items-center px-8 py-4 border border-blue-200 text-lg font-semibold rounded-lg text-blue-600 hover:bg-blue-50 transition duration-300"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>Sună Acum</a>
                </div>
            </div>
        </section>
    </main>

    <?php renderFooter(); ?>
</body>
</html>
