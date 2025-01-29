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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../profile/profile.css">
</head>
<body>

<div class="sidebar-header">
    <span>Hello, <?php echo htmlspecialchars($user['username']); ?> !</span>
    <button onclick="closeSidebar()" style="border: none; background: none; font-size: 24px; cursor: pointer;">&times;</button>
</div>

<div class="sidebar-content">
    <p>Welcome to your account dashboard.</p>
    <p>Username: <?php echo htmlspecialchars($user['username']); ?></p>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <p>UserType: <?php echo htmlspecialchars($user['user_type']); ?></p>
    <ul>
        <li><a href="#">Customer Service</a></li>
        <li><a href="#">Privacy Policy</a></li>
    </ul>
    <a href="../login/logout.php" class="logout-button">Log out</a>
</div>
</body>
</html>