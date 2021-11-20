<?php 

include 'config.php';

session_start();

error_reporting(0);

// ganti header location sama file landing page
if (isset($_SESSION['username'])) {
    header("Location: landing.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
        // gant header location sama file landing page
		header("Location: landing.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
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
    
    <title>Landing</title>
</head>
<body>
    <div class="container">
        <form class="login-email" method="POST">
            <p class="login-text" style="font-size: 2rem; padding-bottom:25px">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
                <button class="btn" name="submit">Login</button>
            </div>
            <p class="login-register-text">Don't Have Account? <a href="register.php">Register Here</a></p>
        </form>
    </div>
</body>
</html>