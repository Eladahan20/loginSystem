<?php

include_once('cardentials.php'); 
//Api
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username'])) {
        if ($_POST['username'] == USERNAME) {
            http_response_code(200);
            header('Content-Type: application/json');
            echo json_encode($password_changed);
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
    <form id="form-forgot" class="form-signin" action="forgot-password.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Retrieve Password</h1>
      <small id="forgot-instructions">Enter your email address and we will retrieve your lost password.</small>
      <input type="email" name="username" id="inputEmailRetrive" class="form-control mt-2" placeholder="Email address" required="" autofocus=""
      value="<?php 
        echo (isset($_SESSION['lasttry']))?$_SESSION['lasttry']:'';
      ?>">
      <button class="btn btn-lg btn-dark btn-block mt-4" type="submit">Retrieve</button>
    </form>
</div>
<?php include_once('footer.php'); ?>