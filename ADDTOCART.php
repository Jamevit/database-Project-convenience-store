<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Get product details from the submitted form
    $name = $_POST['product_name'] ?? 'Unknown Product';
    // Ensure price is treated as a float (number)
    $price = (float)($_POST['product_price'] ?? 0.00);
    $action = $_POST['action_type'] ?? 'add_to_cart'; 

    // 2. Initialize the cart array if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // 3. Add the new item to the cart array
    $_SESSION['cart'][] = [
        'name' => $name,
        'price' => $price
    ];

    // 4. Redirect the user (Post-Redirect-Get pattern)
    if ($action === 'buy_now') {
        header("Location: checkout.php"); 
    } else {
        header("Location: HOME.php"); 
    }
    // EXIT is CRITICAL here to stop execution before any output is sent
    exit();
}

// Redirect if accessed directly without POST data
header("Location: HOME.php");
exit();
?>