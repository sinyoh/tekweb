<?php

include 'config.php';

error_reporting(0);

session_start();


// if(isset($_SESSION['username'])){
//     header("Location : index.php");
// }

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm_password']);

    if($password == $confirm_password){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)) {
            echo "<script>alert('Error, Email already Exist')</script>";
        } else{
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "<script>alert('Register Success!')</script>";
                $username = '';
                $email = '';
                $_POST['password'] = "";
                $_POST['confirm_password'] = "";
            }
            else{
                echo "<script>alert('Error, Something Happened')</script>";
            }
        }
    }
    else{
        echo "<script>alert('Password doesn't matches.')</script>";
    };
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="register-text" style="font-size: 2rem; padding-bottom:25px">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="confirm_password" required>
            </div>
            <div class="input-group">
                <button class="btn" name="submit">Register</button>
            </div>
            <p class="login-register-text">Have and Account? <a href="index.php">Login Here</a></p>
        </form>
    </div>
</body>
</html>