<?php
function renderFooter() {
    $year = date('Y');
    ?>
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">LightningRevenue</h3>
                    <p class="text-gray-400">Agentie de Marketing Digital Bucuresti si Dezvoltare Website pentru afaceri mici si mijlocii</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Servicii</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="<?php echo BASE_URL; ?>promovare-google-ads-promovare-online" class="text-gray-400 hover:text-white transition duration-150">
                                Promovare Online Bucuresti
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>dezvoltare-siteuri-bucuresti" class="text-gray-400 hover:text-white transition duration-150">
                                Dezvoltare Website Bucuresti
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>email-marketing-bucuresti" class="text-gray-400 hover:text-white transition duration-150">
                                Email Marketing Bucuresti
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Servicii Detaliate</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="<?php echo BASE_URL; ?>promovare-google-ads" class="text-gray-400 hover:text-white transition duration-150">
                                Promovare Google Ads Bucuresti
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>promovare-social-media" class="text-gray-400 hover:text-white transition duration-150">
                                Promovare Social Media Bucuresti
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Company Pages -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Companie</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="<?php echo BASE_URL; ?>agentie-marketing-online-bucuresti" class="text-gray-400 hover:text-white transition duration-150">
                                Despre Agentia Noastra De Marketing
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>recenzii" class="text-gray-400 hover:text-white transition duration-150">
                                Recenzii Clienti LightningRevenue
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>resurse-tehnice" class="text-gray-400 hover:text-white transition duration-150">
                                Resurse Tehnice
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>contact" class="text-gray-400 hover:text-white transition duration-150">
                                Contacteaza-ne
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Legal & Social -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Legal</h3>
                    <ul class="space-y-2 mb-6">
                        <li>
                            <a href="<?php echo BASE_URL; ?>termeni-si-conditii" class="text-gray-400 hover:text-white transition duration-150">
                                Termeni și Condiții
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>politica-cookie" class="text-gray-400 hover:text-white transition duration-150">
                                Politica Cookie
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>politica-confidentialitate" class="text-gray-400 hover:text-white transition duration-150">
                                Politica de Confidențialitate
                            </a>
                        </li>
                    </ul>

                    <h3 class="text-xl font-bold mb-4">Urmărește-ne pe:</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/profile.php?id=61574910389308" class="text-gray-400 hover:text-white transition duration-150">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="https://github.com/LightningRevenue" class="text-gray-400 hover:text-white transition duration-150">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-8 pt-8 border-t border-gray-800 text-center">
                <p class="text-gray-400">&copy; <?php echo $year; ?> LightningRevenue | Agentie Marketing Bucuresti <br> Toate Drepturile Rezervate</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <div class="fixed bottom-4 right-4 z-50 flex items-end flex-row-reverse gap-4">
        <!-- WhatsApp Button -->
        <button onclick="window.open('https://wa.me/40743959914', '_blank')" 
                class="bg-green-500 hover:bg-green-600 text-white rounded-full p-4 flex items-center justify-center shadow-lg transition-all duration-300 hover:scale-105 flex-shrink-0">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
        </button>

        <!-- Popup Message -->
        <div id="whatsapp-popup" class="bg-white rounded-lg shadow-lg p-4 max-w-xs relative">
            <button onclick="closeWhatsAppPopup()" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <p class="text-gray-800 font-medium pr-6">Hey! 👋 Suntem aici pentru tine!</p>
            <p class="text-gray-600 text-sm mt-1">Ai întrebări? Scrie-ne pe WhatsApp și îți răspundem imediat.</p>
        </div>
    </div>

    <script>
        // Store popup state in localStorage
        const popupState = localStorage.getItem('whatsappPopupClosed');
        
        if (popupState !== 'true') {
            document.getElementById('whatsapp-popup').style.display = 'block';
        } else {
            document.getElementById('whatsapp-popup').style.display = 'none';
        }

        function closeWhatsAppPopup() {
            const popup = document.getElementById('whatsapp-popup');
            popup.style.display = 'none';
            // Save state in localStorage
            localStorage.setItem('whatsappPopupClosed', 'true');
        }
    </script>
</body>
</html>
    <?php
}
?> 