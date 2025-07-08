<?php
require_once 'config/config.php';

header('Content-Type: application/json');

// Function to validate email
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate phone number (basic validation)
function isValidPhone($phone) {
    return preg_match('/^[0-9+\-\s()]{8,}$/', $phone);
}

try {
    // Check if it's a POST request
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method');
    }

    // Get and validate form data
    $nume = trim($_POST['nume'] ?? '');
    $prenume = trim($_POST['prenume'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telefon = trim($_POST['telefon'] ?? '');
    $mesaj = trim($_POST['mesaj'] ?? '');

    // Validation
    if (empty($nume) || empty($prenume)) {
        throw new Exception('Numele și prenumele sunt obligatorii');
    }

    if (!isValidEmail($email)) {
        throw new Exception('Adresa de email nu este validă');
    }

    if (!isValidPhone($telefon)) {
        throw new Exception('Numărul de telefon nu este valid');
    }

    // Prepare data for API
    $data = [
        'firstName' => $prenume,
        'lastName' => $nume,
        'emailAddress' => $email,
        'phoneNumber' => $telefon,
        'description' => $mesaj
    ];

    // Initialize cURL session
    $ch = curl_init('https://crm.lightning-revenue.com/api/v1/LeadCapture/c4256014f685198d99b6d690a2d7e5ed');

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);

    // Execute cURL request
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Check for cURL errors
    if (curl_errno($ch)) {
        throw new Exception('Error sending data: ' . curl_error($ch));
    }

    curl_close($ch);

    // Check response status
    if ($httpCode !== 200) {
        throw new Exception('API returned error: ' . $httpCode);
    }

    // Send success response
    echo json_encode([
        'success' => true,
        'message' => 'Mulțumim! Mesajul tău a fost trimis cu succes. Te vom contacta în curând.'
    ]);

} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
} 