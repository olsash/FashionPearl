<?php
@include '../login/config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("Access denied.");
}
$user_id = $_SESSION['user_id'];

$query = "SELECT username FROM user_form WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username);
$stmt->fetch();
$stmt->close();

if (!$username) {
    die("User not found.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = isset($_POST['product_name']) ? htmlspecialchars($_POST['product_name']) : '';
    $price = isset($_POST['price']) ? filter_var($_POST['price'], FILTER_VALIDATE_FLOAT) : 0;
    $category = isset($_POST['category']) ? htmlspecialchars($_POST['category']) : '';
    $collections = isset($_POST['collections']) ? htmlspecialchars($_POST['collections']) : '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $image = basename($_FILES['image']['name']);
        $image_tmp = $_FILES['image']['tmp_name'];
        $target_file = $target_dir . $image;

        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($_FILES['image']['type'], $allowed_types) && $_FILES['image']['size'] < 5000000) {
            if (!move_uploaded_file($image_tmp, $target_file)) {
                die("Failed to move uploaded file.");
            }
        } else {
            die("Invalid file type or file size too large.");
        }
    } else {
        die("No image uploaded.");
    }

    $query = "INSERT INTO products (product_name, collections, price, category, image, user_id, username) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssissis", $product_name, $collections, $price, $category, $target_file, $user_id, $username);

    if ($stmt->execute()) {
        echo "Product added successfully!";
        
        $product_id = $stmt->insert_id; 

        $log_query = "INSERT INTO product_logs (product_id, product_name, price, category, collection, action_type, user_id, username, action_timestamp) 
                      VALUES (?, ?, ?, ?, ?, 'add', ?, ?, NOW())";

        $log_stmt = $conn->prepare($log_query);
        $log_stmt->bind_param("isdssis", $product_id, $product_name, $price, $category, $collections, $user_id, $username);
        $log_stmt->execute();
        $log_stmt->close();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    die("Invalid request.");
}
?>
