<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
include_once('cardentials.php');

//Logout system
if (isset($_SESSION['authenticated'])) {
  $_SESSION = array();    
  session_destroy();
}

//API implementation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $_SESSION['lasttry']=$_POST['username'];
        if ($_POST['username'] == USERNAME && $_POST['password'] == PASSWORD) {
            $_SESSION['authenticated'] = true;
            http_response_code(200);
            header('Content-Type: application/json');
            echo json_encode($user);
            exit();
    } else {
      http_response_code(400);
      echo json_encode($error);
      exit();
    }
}
}
include_once('header.php');




?>

<div class="maindiv text-center" cz-shortcut-listen="true">
    <form id="form-signin" class="form-signin" action="login.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="username" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      <div class="checkbox mb-3">
        <p><a href="forgot-password.php">Forgot Password?</a></p>
      </div>
      <button class="btn btn-lg btn-dark btn-block" type="submit">Sign in</button>
    </form>
</div>

<?php include_once('footer.php'); ?>