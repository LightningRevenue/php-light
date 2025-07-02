<?php
require_once '../components/navbar.php';
require_once '../components/footer.php';
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagină negăsită - 404 Error</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <?php renderNavbar('404'); ?>

    <main class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="max-w-xl w-full text-center">
            <h1 class="text-6xl font-bold text-blue-600 mb-4">404</h1>
            <h2 class="text-2xl font-semibold text-gray-900 mb-4">Pagină negăsită</h2>
            <p class="text-gray-600 mb-8">Ne pare rău, dar pagina pe care o căutați nu există sau a fost mutată.</p>
            <a href="/" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                Înapoi la pagina principală
                <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </a>
        </div>
    </main>

    <?php renderFooter(); ?>
</body>
</html> 