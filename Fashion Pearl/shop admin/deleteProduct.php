<?php
@include '../login/config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("Access denied.");
}

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$user_id = $_SESSION['user_id'];
$product_name = $_POST['product_name'] ?? '';

if (!$product_name) {
    die("Invalid request: Product name missing.");
}

$query = "SELECT username FROM user_form WHERE id = ?";
$stmt = $conn->prepare($query);
if (!$stmt) {
    die("Prepare failed (User Query): " . $conn->error);
}

$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username);
$stmt->fetch();
$stmt->close();

if (!$username) {
    die("User not found.");
}

$get_product_query = "SELECT id, price, category, collections FROM products WHERE LOWER(product_name) = LOWER(?)";
$stmt = $conn->prepare($get_product_query);
if (!$stmt) {
    die("Prepare failed (Get Product Query): " . $conn->error);
}

$stmt->bind_param("s", $product_name);
$stmt->execute();
$stmt->bind_result($product_id, $price, $category, $collections);
$stmt->fetch();
$stmt->close();

if (!$product_id) {
    die("Product not found.");
}

$delete_query = "DELETE FROM products WHERE id = ?";
$stmt = $conn->prepare($delete_query);
if (!$stmt) {
    die("Prepare failed (Delete Query): " . $conn->error);
}

$stmt->bind_param("i", $product_id);
if ($stmt->execute()) {
    $log_query = "INSERT INTO product_logs (product_id, product_name, price, category, collection, action_type, user_id, username, action_timestamp) 
                  VALUES (?, ?, ?, ?, ?, 'delete', ?, ?, NOW())";
    
    $log_stmt = $conn->prepare($log_query);
    if (!$log_stmt) {
        die("Prepare failed (Log Query): " . $conn->error);
    }

    $log_stmt->bind_param("isdssis", $product_id, $product_name, $price, $category, $collections, $user_id, $username);
    $log_stmt->execute();
    $log_stmt->close();

    echo "Product deleted and action logged successfully.";
} else {
    die("Error deleting product: " . $stmt->error);
}

$stmt->close();
$conn->close();
?>
