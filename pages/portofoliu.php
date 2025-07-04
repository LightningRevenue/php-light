<?php
include('../config/config.php');
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofoliu | Lightning Revenue</title>
    <meta name="description" content="Descoperiți proiectele noastre de succes în marketing digital, dezvoltare web și creștere a afacerilor online.">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php 
include('../components/navbar.php');
renderNavbar('portofoliu');
?>

<main>
    <!-- Hero Section -->
    <section class="pt-20 pb-12 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-left">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Proiecte de <span class="text-blue-600">Succes</span> în Marketing Digital
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        Descoperiți cum am ajutat afacerile să crească prin strategii personalizate de marketing și dezvoltare web
                    </p>
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
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <div class="w-5 h-5 relative">
                                    <svg class="w-5 h-5 text-gray-200" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-2.5 h-5 text-yellow-400 absolute left-0 top-0" fill="currentColor" viewBox="0 0 10 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                            </div>
                            <span class="ml-2 text-lg font-semibold text-gray-900">4.5/5</span>
                            <span class="mx-2 text-gray-500">Rating</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-lg font-semibold text-gray-900">100+</span>
                            <span class="ml-2 text-gray-500">Proiecte Finalizate</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-100 rounded-3xl transform rotate-3"></div>
                    <img src="<?php echo BASE_URL; ?>assets/images/portofoliu.jpg" 
                         alt="Marketing Digital Portfolio" 
                         class="relative rounded-2xl shadow-lg w-full h-auto z-10">
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Studii de Caz</h2>
                <p class="text-xl text-gray-600">Rezultate concrete pentru clienții noștri</p>
            </div>

            <!-- Case Study 1 -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div class="space-y-6">
                    <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
                        E-commerce
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">FashionBoutique.ro</h3>
                    <div class="prose prose-lg text-gray-600">
                        <p>Un magazin online de modă care a înregistrat o creștere de 150% a vânzărilor în primele 6 luni de colaborare.</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Creștere vânzări: 150%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Trafic organic: +200%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Rata de conversie: 3.5%
                            </li>
                        </ul>
                        <div class="mt-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Servicii Implementate:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">SEO</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Google Ads</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Email Marketing</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Social Media</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-purple-100 rounded-3xl transform -rotate-3"></div>
                    <img src="<?php echo BASE_URL; ?>assets/images/g-ads-dashboard.jpg" 
                         alt="FashionBoutique Case Study" 
                         class="relative rounded-2xl shadow-lg w-full h-auto z-10">
                </div>
            </div>

            <!-- Case Study 2 -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div class="space-y-6">
                    <div class="inline-block px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold">
                        SaaS
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">TechCloud Solutions</h3>
                    <div class="prose prose-lg text-gray-600">
                        <p>O platformă SaaS B2B care și-a dublat numărul de clienți enterprise în doar 4 luni.</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Lead-uri calificate: +180%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Clienți enterprise: +100%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                ROI campanii: 380%
                            </li>
                        </ul>
                        <div class="mt-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Servicii Implementate:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">LinkedIn Ads</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Content Marketing</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Marketing Automation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-100 rounded-3xl transform rotate-3"></div>
                    <img src="<?php echo BASE_URL; ?>assets/images/dezvoltare-website-imagine.jpg" 
                         alt="TechCloud Solutions Case Study" 
                         class="relative rounded-2xl shadow-lg w-full h-auto z-10">
                </div>
            </div>

            <!-- Case Study 3 -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div class="space-y-6">
                    <div class="inline-block px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-semibold">
                        Restaurant
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">La Cucina Italiana</h3>
                    <div class="prose prose-lg text-gray-600">
                        <p>Un restaurant italian care și-a crescut prezența online și numărul de rezervări prin strategii digitale integrate.</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Rezervări online: +200%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Vizibilitate locală: Top 3 Google
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Engagement social media: +300%
                            </li>
                        </ul>
                        <div class="mt-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Servicii Implementate:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Local SEO</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Social Media</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Website Design</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-red-100 rounded-3xl transform rotate-3"></div>
                    <img src="<?php echo BASE_URL; ?>assets/images/email-marketing-imagine.jpg" 
                         alt="Restaurant Case Study" 
                         class="relative rounded-2xl shadow-lg w-full h-auto z-10">
                </div>
            </div>

            <!-- Case Study 4 -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div class="space-y-6">
                    <div class="inline-block px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-semibold">
                        Real Estate
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Premium Properties</h3>
                    <div class="prose prose-lg text-gray-600">
                        <p>O agenție imobiliară care a reușit să-și tripleze numărul de tranzacții prin marketing digital targetat.</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Lead-uri calificate: +250%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Tranzacții finalizate: +300%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Cost per achiziție: -40%
                            </li>
                        </ul>
                        <div class="mt-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Servicii Implementate:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Facebook Ads</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Google Ads</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Landing Pages</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-purple-100 rounded-3xl transform -rotate-3"></div>
                    <img src="<?php echo BASE_URL; ?>assets/images/dezvoltare-website-imagine.jpg" 
                         alt="Real Estate Case Study" 
                         class="relative rounded-2xl shadow-lg w-full h-auto z-10">
                </div>
            </div>

            <!-- Case Study 5 -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div class="space-y-6">
                    <div class="inline-block px-4 py-2 bg-orange-100 text-orange-800 rounded-full text-sm font-semibold">
                        Educație
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Academia Online</h3>
                    <div class="prose prose-lg text-gray-600">
                        <p>O platformă de cursuri online care și-a extins baza de cursanți prin strategii de marketing digital.</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Înscrieri noi: +400%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Retenție cursanți: 85%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Venit recurent: +200%
                            </li>
                        </ul>
                        <div class="mt-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Servicii Implementate:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Email Marketing</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Content Marketing</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">PPC</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-orange-100 rounded-3xl transform rotate-3"></div>
                    <img src="<?php echo BASE_URL; ?>assets/images/marketing-agency-hero-image-acasa.jpg" 
                         alt="Education Case Study" 
                         class="relative rounded-2xl shadow-lg w-full h-auto z-10">
                </div>
            </div>

            <!-- Case Study 6 -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div class="space-y-6">
                    <div class="inline-block px-4 py-2 bg-teal-100 text-teal-800 rounded-full text-sm font-semibold">
                        Healthcare
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">MedLife Plus</h3>
                    <div class="prose prose-lg text-gray-600">
                        <p>O clinică privată care și-a optimizat prezența digitală și a crescut numărul de programări online.</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Programări online: +150%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Pacienți noi: +120%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Satisfacție pacienți: 98%
                            </li>
                        </ul>
                        <div class="mt-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Servicii Implementate:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Local SEO</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Website Design</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Google Ads</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-teal-100 rounded-3xl transform -rotate-3"></div>
                    <img src="<?php echo BASE_URL; ?>assets/images/g-ads-dashboard.jpg" 
                         alt="Healthcare Case Study" 
                         class="relative rounded-2xl shadow-lg w-full h-auto z-10">
                </div>
            </div>

            <!-- Case Study 7 -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div class="space-y-6">
                    <div class="inline-block px-4 py-2 bg-indigo-100 text-indigo-800 rounded-full text-sm font-semibold">
                        Automotive
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">AutoLux Service</h3>
                    <div class="prose prose-lg text-gray-600">
                        <p>Un service auto premium care și-a dublat numărul de clienți prin marketing digital targetat.</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Programări service: +180%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Clienți recurenți: +90%
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                ROI campanii: 280%
                            </li>
                        </ul>
                        <div class="mt-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Servicii Implementate:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Local SEO</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Google Ads</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Social Media</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-indigo-100 rounded-3xl transform rotate-3"></div>
                    <img src="<?php echo BASE_URL; ?>assets/images/email-marketing-imagine.jpg" 
                         alt="Automotive Case Study" 
                         class="relative rounded-2xl shadow-lg w-full h-auto z-10">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-br from-blue-600 to-blue-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-8">Pregătit să Creștem Împreună?</h2>
            <p class="text-xl mb-8 text-blue-100">Programează o consultație gratuită și află cum putem ajuta afacerea ta să crească</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo BASE_URL; ?>contact" 
                    class="inline-flex items-center px-8 py-4 text-lg font-semibold rounded-lg text-blue-600 bg-white hover:bg-blue-50 transition duration-300">
                    Solicită Ofertă Personalizată
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main>

<?php 
include('../components/footer.php');
renderFooter();
?>

</body>
</html> 