<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../components/navbar.php';

renderNavbar();
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicii SEO București | Optimizare SEO | Creștere Trafic Organic</title>
    <meta name="description" content="Servicii profesionale de optimizare SEO în București. Creștem vizibilitatea afacerii tale în Google prin strategii SEO dovedite și optimizare pentru cuvinte cheie relevante.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <main>
        <!-- Hero Section -->
        <div class="bg-white">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                        Servicii SEO București și Optimizare Site
                    </h1>
                    <p class="max-w-3xl mt-6 mx-auto text-xl text-gray-500">
                        Creștem afacerea ta prin <span class="text-blue-600">optimizare SEO profesională</span> și strategii dovedite de creștere a vizibilității în Google
                    </p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="prose prose-lg max-w-3xl mx-auto">
                <!-- Introducere -->
                <section class="mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        Ce Este SEO, Pe Înțelesul Tuturor
                    </h2>
                    <p class="text-gray-600 mb-4">
                        SEO (Search Engine Optimization) este procesul prin care facem site-ul tău mai vizibil în Google atunci când potențialii clienți caută produsele sau serviciile tale. La fel cum <a href="<?php echo BASE_URL; ?>promovare-google-ads-promovare-online" class="text-blue-600 hover:underline">promovarea online</a> aduce rezultate imediate, SEO construiește fundația pentru succesul pe termen lung.
                    </p>
                    <p class="text-gray-600">
                        Spre exemplu, dacă ai o florărie în București, vrei să apari în primele rezultate când cineva caută "florărie București" sau "livrare flori sector 1". Combinând <a href="<?php echo BASE_URL; ?>promovare-google-ads" class="text-blue-600 hover:underline">strategiile Google Ads</a> cu optimizarea SEO, poți domina atât rezultatele plătite cât și cele organice.
                    </p>
                </section>

                <!-- De ce este important -->
                <section class="mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        De Ce Este SEO Important Pentru Afacerea Ta?
                    </h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">
                                1. Atragi Clienți Care Deja Te Caută
                            </h3>
                            <p class="text-gray-600">
                                Nu mai trebuie să convingi pe nimeni să cumpere. Oamenii care caută pe Google sunt deja interesați să cumpere ce vinzi tu.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">
                                2. Este Cost-Eficient
                            </h3>
                            <p class="text-gray-600">
                                Odată ce ești bine poziționat în Google, primești trafic constant fără să plătești pentru fiecare click, cum se întâmplă la reclame.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">
                                3. Construiești Încredere
                            </h3>
                            <p class="text-gray-600">
                                Oamenii au mai multă încredere în rezultatele organice din Google decât în reclamele plătite.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">
                                4. Rezultate Pe Termen Lung
                            </h3>
                            <p class="text-gray-600">
                                Investiția în SEO aduce beneficii pe termen lung, spre deosebire de publicitatea tradițională care funcționează doar cât plătești.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Cum funcționează -->
                <section class="mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        Cum Funcționează SEO, Pe Scurt
                    </h2>
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">
                                Conținut Relevant
                            </h3>
                            <p class="text-gray-600">
                                Google vrea să ofere cele mai bune răspunsuri la căutările oamenilor. Cu cât conținutul tău răspunde mai bine la ceea ce caută oamenii, cu atât vei apărea mai sus în rezultate.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">
                                Experiență Bună Pe Site
                            </h3>
                            <p class="text-gray-600">
                                Site-ul tău trebuie să se încarce rapid și să fie ușor de folosit pe telefon. Google preferă site-urile care oferă o experiență bună vizitatorilor.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">
                                Autoritate În Domeniu
                            </h3>
                            <p class="text-gray-600">
                                Cu cât mai multe site-uri de încredere fac referire la tine (prin link-uri), cu atât Google te va considera mai relevant pentru domeniul tău.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Exemple concrete -->
                <section class="mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        Exemple Concrete de Impact SEO
                    </h2>
                    <div class="bg-blue-50 p-6 rounded-lg mb-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">
                            Cazul unui Restaurant Local
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Un restaurant din București a crescut numărul de rezervări cu 70% după <a href="<?php echo BASE_URL; ?>optimizare-seo-bucuresti" class="text-blue-600 hover:underline">optimizarea SEO</a> pentru căutări precum "restaurant italian București" și "paste fresh sector 3". Prin <a href="<?php echo BASE_URL; ?>servicii-seo/optimizare-locala" class="text-blue-600 hover:underline">optimizare locală</a> și strategii specifice industriei HoReCa, am obținut rezultate remarcabile.
                        </p>
                        <ul class="list-disc list-inside text-gray-600 space-y-2">
                            <li>A adăugat meniul complet pe site</li>
                            <li>A inclus poze de calitate cu mâncarea și localul</li>
                            <li>A colectat și afișat recenzii de la clienți</li>
                            <li>A optimizat pentru căutări locale</li>
                        </ul>
                    </div>

                    <div class="bg-blue-50 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">
                            Magazin Online de Haine
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Un boutique online a crescut vânzările cu 120% focusându-se pe optimizarea descrierilor produselor și a categoriilor pentru căutări specifice.
                        </p>
                        <ul class="list-disc list-inside text-gray-600 space-y-2">
                            <li>A creat descrieri detaliate pentru fiecare produs</li>
                            <li>A optimizat imaginile pentru încărcare rapidă</li>
                            <li>A adăugat ghiduri de mărime și styling</li>
                            <li>A îmbunătățit experiența de cumpărare pe mobil</li>
                        </ul>
                    </div>
                </section>

                <!-- Pași de început -->
                <section class="mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        Cum Să Începi cu SEO
                    </h2>
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                1. Analizează Situația Actuală
                            </h3>
                            <p class="text-gray-600">
                                Vezi pentru ce cuvinte cheie apare site-ul tău acum în Google și care sunt cele mai importante pagini.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                2. Identifică Cuvintele Cheie Potrivite
                            </h3>
                            <p class="text-gray-600">
                                Gândește-te cum te-ar căuta clienții tăi și ce termeni folosesc ei când caută servicii sau produse ca ale tale.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                3. Optimizează Conținutul Existent
                            </h3>
                            <p class="text-gray-600">
                                Îmbunătățește textele de pe site pentru a include natural aceste cuvinte cheie și a oferi informații valoroase.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                4. Creează Conținut Nou și Valoros
                            </h3>
                            <p class="text-gray-600">
                                Adaugă articole, ghiduri sau pagini de produs care să răspundă la întrebările frecvente ale clienților tăi.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Secțiune nouă despre Keywords -->
                <section class="mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        Cuvinte Cheie și Strategii de Optimizare
                    </h2>
                    <div class="bg-white p-8 rounded-xl shadow-sm mb-8">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                            Tipuri de Cuvinte Cheie pentru Afacerea Ta
                        </h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-900 mb-3">Cuvinte Cheie Locale</h4>
                                <ul class="list-disc list-inside text-gray-600 space-y-2">
                                    <li>"servicii SEO București"</li>
                                    <li>"optimizare site [oraș]"</li>
                                    <li>"agenție SEO [sector/zonă]"</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-900 mb-3">Cuvinte Cheie pentru Servicii</h4>
                                <ul class="list-disc list-inside text-gray-600 space-y-2">
                                    <li>"optimizare SEO magazin online"</li>
                                    <li>"servicii optimizare website"</li>
                                    <li>"consultanță SEO profesională"</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-blue-50 to-blue-100 p-8 rounded-xl">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                            Strategii de Optimizare pentru Rezultate
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <div>
                                    <h4 class="text-lg font-medium text-gray-900">Optimizare On-Page</h4>
                                    <p class="text-gray-600">Implementăm cele mai bune practici de <a href="<?php echo BASE_URL; ?>servicii-seo/optimizare-on-page" class="text-blue-600 hover:underline">optimizare on-page</a> pentru a maximiza relevanța paginilor tale pentru cuvintele cheie țintă.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                <div>
                                    <h4 class="text-lg font-medium text-gray-900">Optimizare Tehnică</h4>
                                    <p class="text-gray-600">Asigurăm performanța tehnică a site-ului tău prin <a href="<?php echo BASE_URL; ?>servicii-seo/optimizare-tehnica" class="text-blue-600 hover:underline">optimizare tehnică avansată</a> și îmbunătățiri ale vitezei de încărcare.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                                </svg>
                                <div>
                                    <h4 class="text-lg font-medium text-gray-900">Content Marketing</h4>
                                    <p class="text-gray-600">Dezvoltăm <a href="<?php echo BASE_URL; ?>servicii-seo/content-marketing" class="text-blue-600 hover:underline">strategii de content marketing</a> care combină optimizarea pentru cuvinte cheie cu conținut valoros pentru utilizatori.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Secțiune nouă despre Servicii Conexe -->
                <section class="mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        Servicii Complementare pentru Creștere Online
                    </h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Google Ads</h3>
                            <p class="text-gray-600 mb-4">
                                Maximizează rezultatele prin <a href="<?php echo BASE_URL; ?>promovare-google-ads" class="text-blue-600 hover:underline">campanii Google Ads</a> în timp ce construiești vizibilitate organică.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Social Media</h3>
                            <p class="text-gray-600 mb-4">
                                Crește autoritatea domeniului prin <a href="<?php echo BASE_URL; ?>promovare-social-media" class="text-blue-600 hover:underline">strategii de social media</a> integrate cu SEO.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Email Marketing</h3>
                            <p class="text-gray-600 mb-4">
                                Convertește traficul organic prin <a href="<?php echo BASE_URL; ?>email-marketing-bucuresti" class="text-blue-600 hover:underline">strategii de email marketing</a> optimizate.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Secțiune Servicii Complete -->
                <section class="bg-gray-50 p-8 rounded-xl mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        Servicii Complete de Marketing Online
                    </h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Promovare Google Ads</h3>
                                <p class="text-gray-600">
                                    Obține rezultate rapide prin <a href="<?php echo BASE_URL; ?>promovare-google-ads-promovare-online" class="text-blue-600 hover:underline">campanii de promovare online</a> optimizate pentru conversii.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Dezvoltare Website</h3>
                                <p class="text-gray-600">
                                    Creăm <a href="<?php echo BASE_URL; ?>dezvoltare-siteuri-bucuresti" class="text-blue-600 hover:underline">website-uri optimizate SEO</a> care convertesc vizitatorii în clienți.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Email Marketing</h3>
                                <p class="text-gray-600">
                                    Implementăm <a href="<?php echo BASE_URL; ?>email-marketing-bucuresti" class="text-blue-600 hover:underline">strategii de email marketing</a> pentru creșterea loialității clienților.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Secțiune CTA -->
                <section class="bg-blue-600 text-white p-8 rounded-xl mb-16">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold mb-4">Începe Optimizarea SEO Astăzi</h2>
                        <p class="text-xl mb-8">
                            Combină puterea SEO cu <a href="<?php echo BASE_URL; ?>promovare-google-ads-promovare-online" class="text-white underline hover:text-blue-100">promovarea online</a> pentru rezultate maxime
                        </p>
                        <div class="flex justify-center space-x-4">
                            <a href="<?php echo BASE_URL; ?>contact" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                                Contactează-ne
                            </a>
                            <a href="<?php echo BASE_URL; ?>promovare-google-ads" class="bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-800 transition-colors">
                                Vezi Servicii Google Ads
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php 
    require_once __DIR__ . '/../components/footer.php';
    renderFooter();
    ?>
</body>
</html> 