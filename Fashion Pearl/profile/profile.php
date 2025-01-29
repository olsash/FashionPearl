<?php
session_start();
@include '../login/config.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];

if (empty($username)) {
    echo "Përdoruesi nuk është gjetur!";
    exit();
}

$username = mysqli_real_escape_string($conn, $username);

$query = "SELECT * FROM user_form WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if ($result) {
    $user = mysqli_fetch_assoc($result);
    if (!$user) {
        echo "Përdoruesi nuk është gjetur në bazën e të dhënave!";
        exit();
    }
} else {
    echo "Gabim në ekzekutimin e query-t: " . mysqli_error($conn);
    exit();
}
?>