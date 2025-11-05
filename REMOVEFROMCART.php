<?php
session_start();

// Check if the request is a GET and if the 'index' parameter is present
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['index'])) {
    
    // 1. Sanitize the index provided via the URL (must be an integer)
    $index_to_remove = (int)$_GET['index'];

    // 2. Check if the cart exists and if the index is valid
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        
        if (array_key_exists($index_to_remove, $_SESSION['cart'])) {
            
            // 3. Remove the item from the session array using the index
            unset($_SESSION['cart'][$index_to_remove]);
            
            // 4. Re-index the array: This ensures array indexes are sequential (0, 1, 2...)
            // If you skip this, removing index 1 would leave indexes 0 and 2, which would break the next remove operation!
            $_SESSION['cart'] = array_values($_SESSION['cart']);
        }
    }
    
    // 5. Redirect the user back to the home page to see the updated cart
    header("Location: HOME.php");
    exit();
}

// Redirect back if accessed without a valid index
header("Location: HOME.php");
exit();
?>