<?php
include_once('header.php');

if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
    header('Location: login.php');
} 


?>


<h3 class="text-center mt-5">Hello, <br> Welcome to our home page, You are logged in.</h3>

<?php include_once('footer.php'); ?>
