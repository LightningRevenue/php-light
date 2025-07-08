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
    // Get form data
    $fullName = trim($_POST['nume'] ?? '');
    $nameParts = explode(' ', $fullName, 2);

    // Prepare the data for the API
    $data = [
        'firstName' => $nameParts[0] ?? '',
        'lastName' => $nameParts[1] ?? '',
        'emailAddress' => $_POST['email'] ?? '',
        'budgetProiectCurrency' => 'EUR',
        'budgetProiect' => (float)$_POST['buget'],
        'interestInService' => 'Promovare Digitala Completa',
        'description' => $_POST['mesaj'] ?? '',
        'phoneNumber' => $_POST['telefon'] ?? ''
    ];

    // Initialize cURL session
    $ch = curl_init('https://crm.lightning-revenue.com/api/v1/LeadCapture/1c2d8e63512ac868903d886b486c1637');

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

    curl_close($ch);

    // Send response back
    echo $response;

} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
} 