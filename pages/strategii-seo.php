<?php
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../components/navbar.php');
require_once(__DIR__ . '/../components/footer.php');
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategii SEO Eficiente pentru Afaceri | Lightning Revenue</title>
    <meta name="description" content="Descoperiți strategiile SEO de top care vă pot ajuta să vă îmbunătățiți vizibilitatea online și să atrageți mai mult trafic organic către site-ul dvs.">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <?php renderNavbar('seo'); ?>

    <main>
        <!-- Hero Section -->
        <section class="py-20 bg-gradient-to-r from-blue-600 to-blue-800">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                        Strategii SEO pentru Creșterea Vizibilității Online
                    </h1>
                    <p class="text-xl text-blue-100">
                        Ghidul complet pentru optimizarea prezenței tale în motoarele de căutare
                    </p>
                </div>
            </div>
        </section>

        <!-- Content Section -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <!-- Introducere -->
                    <div class="prose prose-lg max-w-none mb-12">
                        <p class="text-gray-600 mb-8">
                            În era digitală, prezența online puternică este esențială pentru succesul oricărei afaceri. 
                            La <a href="<?php echo BASE_URL; ?>agentie-marketing-online-bucuresti" class="text-blue-600 hover:text-blue-800">Lightning Revenue</a>, 
                            ne concentrăm pe implementarea celor mai eficiente strategii SEO pentru a ajuta afacerile să 
                            se poziționeze mai bine în rezultatele căutărilor.
                        </p>
                    </div>

                    <!-- Cuprins -->
                    <div class="bg-white p-6 rounded-xl shadow-sm mb-12">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Cuprins:</h2>
                        <ul class="space-y-2">
                            <li>
                                <a href="#on-page-seo" class="text-blue-600 hover:text-blue-800">1. Strategii On-Page SEO</a>
                            </li>
                            <li>
                                <a href="#off-page-seo" class="text-blue-600 hover:text-blue-800">2. Strategii Off-Page SEO</a>
                            </li>
                            <li>
                                <a href="#technical-seo" class="text-blue-600 hover:text-blue-800">3. SEO Tehnic</a>
                            </li>
                            <li>
                                <a href="#local-seo" class="text-blue-600 hover:text-blue-800">4. SEO Local</a>
                            </li>
                            <li>
                                <a href="#content-seo" class="text-blue-600 hover:text-blue-800">5. Strategii de Content pentru SEO</a>
                            </li>
                        </ul>
                    </div>

                    <!-- On-Page SEO -->
                    <div id="on-page-seo" class="mb-12">
                        <div class="bg-white p-8 rounded-xl shadow-sm">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">1. Strategii On-Page SEO</h2>
                            <div class="prose prose-lg max-w-none">
                                <p>
                                    Optimizarea on-page este fundamentală pentru succesul în SEO. La 
                                    <a href="<?php echo BASE_URL; ?>dezvoltare-siteuri-bucuresti" class="text-blue-600 hover:text-blue-800">dezvoltarea website-urilor</a>, 
                                    implementăm următoarele practici:
                                </p>
                                <ul class="space-y-4 mt-4">
                                    <li>Optimizarea titlurilor și meta descrierilor</li>
                                    <li>Structurarea corectă a heading-urilor (H1-H6)</li>
                                    <li>Optimizarea imaginilor și conținutului multimedia</li>
                                    <li>Implementarea unei structuri URL prietenoase</li>
                                    <li>Optimizarea vitezei de încărcare a paginilor</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Off-Page SEO -->
                    <div id="off-page-seo" class="mb-12">
                        <div class="bg-white p-8 rounded-xl shadow-sm">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">2. Strategii Off-Page SEO</h2>
                            <div class="prose prose-lg max-w-none">
                                <p>
                                    Strategiile off-page completează eforturile de optimizare on-page și sunt esențiale pentru 
                                    construirea autorității domeniului. În paralel cu 
                                    <a href="<?php echo BASE_URL; ?>promovare-google-ads" class="text-blue-600 hover:text-blue-800">promovarea în Google Ads</a>, 
                                    folosim:
                                </p>
                                <ul class="space-y-4 mt-4">
                                    <li>Link building natural și de calitate</li>
                                    <li>Marketing de conținut și guest posting</li>
                                    <li>Prezență activă pe social media</li>
                                    <li>Monitorizarea și gestionarea mențiunilor brandului</li>
                                    <li>Parteneriate strategice cu alte website-uri relevante</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Technical SEO -->
                    <div id="technical-seo" class="mb-12">
                        <div class="bg-white p-8 rounded-xl shadow-sm">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">3. SEO Tehnic</h2>
                            <div class="prose prose-lg max-w-none">
                                <p>
                                    SEO-ul tehnic este crucial pentru performanța website-ului. Ca parte din serviciile noastre de 
                                    <a href="<?php echo BASE_URL; ?>dezvoltare-siteuri-bucuresti" class="text-blue-600 hover:text-blue-800">dezvoltare web</a>, 
                                    ne concentrăm pe:
                                </p>
                                <ul class="space-y-4 mt-4">
                                    <li>Optimizarea pentru mobile-first indexing</li>
                                    <li>Implementarea HTTPS și securitatea site-ului</li>
                                    <li>Optimizarea structurii XML sitemap</li>
                                    <li>Gestionarea fișierului robots.txt</li>
                                    <li>Rezolvarea erorilor de crawling și indexare</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Local SEO -->
                    <div id="local-seo" class="mb-12">
                        <div class="bg-white p-8 rounded-xl shadow-sm">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">4. SEO Local</h2>
                            <div class="prose prose-lg max-w-none">
                                <p>
                                    Pentru afacerile locale, optimizarea SEO locală este vitală. Ca 
                                    <a href="<?php echo BASE_URL; ?>agentie-marketing-online-bucuresti" class="text-blue-600 hover:text-blue-800">agenție de marketing din București</a>, 
                                    oferim:
                                </p>
                                <ul class="space-y-4 mt-4">
                                    <li>Optimizarea profilului Google My Business</li>
                                    <li>Gestionarea recenziilor locale</li>
                                    <li>Optimizarea pentru căutări locale</li>
                                    <li>Crearea de conținut relevant local</li>
                                    <li>Construirea de citații locale consistente</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Content SEO -->
                    <div id="content-seo" class="mb-12">
                        <div class="bg-white p-8 rounded-xl shadow-sm">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">5. Strategii de Content pentru SEO</h2>
                            <div class="prose prose-lg max-w-none">
                                <p>
                                    Conținutul de calitate este esențial pentru SEO. Combinăm strategiile SEO cu 
                                    <a href="<?php echo BASE_URL; ?>email-marketing-bucuresti" class="text-blue-600 hover:text-blue-800">email marketing</a> 
                                    și alte canale pentru:
                                </p>
                                <ul class="space-y-4 mt-4">
                                    <li>Crearea de conținut optimizat pentru intenția de căutare</li>
                                    <li>Implementarea strategiei de keywords long-tail</li>
                                    <li>Optimizarea conținutului existent</li>
                                    <li>Crearea de conținut evergreen</li>
                                    <li>Optimizarea pentru featured snippets</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="bg-blue-50 p-8 rounded-xl shadow-sm">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">
                            Pregătit să-ți îmbunătățești strategia SEO?
                        </h2>
                        <p class="text-gray-600 mb-6">
                            Contactează-ne pentru o analiză gratuită a website-ului tău și află cum te putem ajuta să-ți 
                            îmbunătățești vizibilitatea online.
                        </p>
                        <a href="<?php echo BASE_URL; ?>contact" 
                           class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                            Contactează-ne Acum
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php renderFooter(); ?>
</body>
</html> 