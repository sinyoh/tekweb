<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
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
    <title>Landing</title>
</head>
<body>
    <a href="logout.php">Logout</a>

    <div class="row">
      <div class="col-xs-1-12">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Title</h3>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>
      <div class="col-xs-1-12">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Title</h3>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>
    </div>

</body>
</html>