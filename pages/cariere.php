<?php
include('../config/config.php');
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cariere - Oportunități de Angajare în Marketing Digital</title>
    <meta name="description" content="Descoperă oportunitățile de carieră în marketing digital la Lightning Revenue. Alătură-te echipei noastre și dezvoltă-te într-un mediu dinamic și inovator.">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php 
include('../components/navbar.php');
renderNavbar('cariere');
?>

<main>
    <!-- Hero Section -->
    <section class="pt-20 pb-12 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-left">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Cariere <span class="text-blue-600">LightningRevenue</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        Alătură-te echipei noastre și contribuie la succesul clienților noștri prin strategii inovatoare si dezvoltare de software.
                    </p>
                    <div class="mt-8 flex items-center gap-8">
                        <div class="flex items-center">
                            <span class="text-lg font-semibold text-gray-900">15+</span>
                            <span class="ml-2 text-gray-500">Profesioniști în Echipă</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-lg font-semibold text-gray-900">100%</span>
                            <span class="ml-2 text-gray-500">Remote Work</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-100 rounded-3xl transform rotate-3"></div>
                    <img src="<?php echo BASE_URL; ?>assets/images/marketing-agency-hero-image-acasa.jpg" 
                         alt="Cariere în Marketing Digital" 
                         class="relative rounded-2xl shadow-lg w-full h-auto z-10">
                </div>
            </div>
        </div>
    </section>

    <!-- Company Culture Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Cultura Noastră</h2>
                <p class="text-xl text-gray-600">Descoperă valorile care ne ghidează și mediul în care vei lucra</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Inovație Continuă</h3>
                    <p class="text-gray-600">Încurajăm gândirea creativă și adoptarea noilor tehnologii pentru a oferi cele mai bune soluții clienților noștri.</p>
                </div>

                <!-- Value 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dezvoltare Personală</h3>
                    <p class="text-gray-600">Investim în creșterea profesională a echipei prin training-uri, certificări și mentoring continuu.</p>
                </div>

                <!-- Value 3 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Colaborare și Echipă</h3>
                    <p class="text-gray-600">Lucrăm într-un mediu colaborativ unde fiecare idee contează și contribuie la succesul echipei.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Beneficii</h2>
                <p class="text-xl text-gray-600">Ce oferim angajaților noștri</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Benefit 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h3 class="font-semibold text-gray-900">Program Flexibil</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Echilibru între viața profesională și personală</p>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <h3 class="font-semibold text-gray-900">Remote Work</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Lucrează de oriunde</p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <h3 class="font-semibold text-gray-900">Training & Dezvoltare</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Acces la cursuri și certificări</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Poziții Deschise</h2>
                <p class="text-xl text-gray-600">Explorează oportunitățile disponibile</p>
            </div>

            <div class="space-y-6">
                <!-- Co-Founder Position -->
                <div class="bg-gradient-to-r from-blue-50 to-white p-6 rounded-xl shadow-sm border border-blue-100 hover:shadow-md transition-all duration-300">
                    <div class="flex justify-between items-start">
                        <div>
                            <div class="flex items-center gap-3 mb-2">
                                <h3 class="text-2xl font-bold text-gray-900">Co-Founder</h3>
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">Poziție Cheie</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Leadership</span>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Equity Opportunity</span>
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">Remote/Hybrid</span>
                            </div>
                            <div class="prose prose-sm text-gray-600">
                                <p class="text-lg">Căutăm un Co-Founder pasionat pentru a construi împreună viitorul marketingului digital în România.</p>
                            </div>
                        </div>
                        <a href="<?php echo BASE_URL; ?>pozitii/co-founder" class="inline-flex items-center px-6 py-3 text-base font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
                            Vezi Detalii
                            <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-br from-blue-600 to-blue-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-8">Nu Găsești Poziția Potrivită?</h2>
            <p class="text-xl mb-8 text-blue-100">Trimite-ne CV-ul tău și te vom contacta când apare o oportunitate care se potrivește profilului tău</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo BASE_URL; ?>contact" 
                    class="inline-flex items-center px-8 py-4 text-lg font-semibold rounded-lg text-blue-600 bg-white hover:bg-blue-50 transition duration-300">
                    Trimite CV-ul Tău
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