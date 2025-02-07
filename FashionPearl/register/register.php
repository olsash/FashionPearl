<?php
session_start();

@include '../login/config.php'; 
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_type = $_POST['user_type'] ?? 'user'; 

    $select = "SELECT * FROM user_form WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'Përdoruesi ose emaili ekziston!'; 
    } else {
        if ($password != $cpassword) {
            $error[] = 'Passwordi nuk përputhet!';
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $insert = "INSERT INTO user_form(username, email, password, user_type) VALUES('$username', '$email', '$hashed_password', '$user_type')";
            if (mysqli_query($conn, $insert)) {
                header('Location: ../login/login.php');
                exit();
            } else {
                echo "Gabim: " . mysqli_error($conn);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionHub | Register</title>
    <link rel="stylesheet" href="register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <div class="logo-wrapper">
        <!--    <img src="your-logo.png" alt="FashionHub Logo" class="logo"> -->
        </div>
        <form method="POST" action="register.php">
            <h2>Create Your Account</h2>
            <p>Join us and stay updated with the latest trends.</p>

            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class = "error-msg">'.$error.'</span>';
                };
            };
            ?>

            <input type="text" name="username" placeholder="Username" id="username" required>
            <input type="email" name="email" placeholder="Email Address" id="email" required>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="password" name="cpassword" placeholder="Confirm Password" id="confirm-password" required>
            <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
            <br>
            <button type="submit" name="submit">Register</button>
            <p class="login-link">Already have an account? <a href="../login/login.php">Log in</a></p>
        </form>
    </div>
</body>
</html>
