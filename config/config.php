<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'my_website');

// Website configuration
define('SITE_NAME', 'My PHP Website');
define('SITE_URL', 'http://localhost/php-lightning');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Time zone
date_default_timezone_set('Europe/Bucharest');

// Session configuration
session_start();

// Detectează automat URL-ul de bază
function getBaseUrl() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    $scriptName = dirname($_SERVER['SCRIPT_NAME']);
    
    // Elimină /php-light din cale când site-ul e în producție
    $basePath = str_replace('/php-light', '', $scriptName);
    
    return rtrim($protocol . $host . $basePath, '/');
}

// Configurare globală
define('BASE_URL', getBaseUrl());
define('ASSETS_URL', BASE_URL . '/assets');
define('IMAGES_URL', ASSETS_URL . '/images');
define('CSS_URL', ASSETS_URL . '/css');

// Helper function pentru generarea URL-urilor
function url($path = '') {
    return BASE_URL . '/' . ltrim($path, '/');
}

// Helper function pentru assets
function asset($path = '') {
    return ASSETS_URL . '/' . ltrim($path, '/');
}

// Helper function pentru imagini
function image($path = '') {
    return IMAGES_URL . '/' . ltrim($path, '/');
}

// Helper function pentru CSS
function css($path = '') {
    return CSS_URL . '/' . ltrim($path, '/');
}

// Database connection function
function getDBConnection() {
    try {
        $conn = new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
            DB_USER,
            DB_PASS
        );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
} 