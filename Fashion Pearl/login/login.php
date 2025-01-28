<?php
session_start(); 
@include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "SELECT * FROM user_form WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result === false) {
        die('Gabim SQL: ' . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if (password_verify($password, $row["password"])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_type'] = $row['user_type'];

            if ($row["user_type"] == "user") {
                header("Location: ../index user/indexUSER.php");
                exit;
            } elseif ($row["user_type"] == "admin") {
                header("Location: ../index admin/indexADMIN.php");
                exit;
            } else {
                echo "Lloji i përdoruesit është i panjohur!";
            }
        } else {
            $error[] = 'Passwordi është i gabuar!';
        }
    } else {
        $error[] = 'Përdoruesi nuk ekziston!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionHub | Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>

    <div class="background"></div> 
    <div class="container">
        <div class="logo-wrapper">
        </div>
        <form>
            <h2>Welcome Back</h2>
            <p>Sign in to continue exploring the latest trends.</p>

            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class = "error-msg">'.$error.'</span>';
                };
            };
            ?>

        <input type="text" name="username" placeholder="Username" id="username" required>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <br>
            <br>
            <button type="submit" name = "submit">Login</button>
            <p class="signup-link">New to FashionHub? <a href="../register/register.php">Create an account</a></p>
        </form>
    </div>
    
<body>
</body>
</html>
