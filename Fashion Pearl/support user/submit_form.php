
<?php
session_start();
@include '../login/config.php';


$username = $_SESSION['username'];

if (empty($username)) {
    echo "Përdoruesi nuk është gjetur!";
    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    echo "Your message has been sent successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
