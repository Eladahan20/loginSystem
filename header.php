<?php 
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/main.css" />
    <script src="assets/jquery-3.3.1.min.js"></script>
</head>
<div class="sticky-nav text-right pt-2 pr-2">
    <a href="index.php">Home</a>
    |
    <a href="login.php"><?php echo (isset($_SESSION['authenticated']))?'Logout':'Login' ?></a>
</div>




    
