<?php

include_once('cardentials.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username'])) {
        if ($_POST['username'] == USERNAME) {
            header('Content-Type: application/json');
            echo json_encode($password_changed);
            exit();
    } else {
      header('Content-Type: application/json');
      echo json_encode($error);
      exit();
    }
}
}
include_once('header.php'); 

?>

<div class="maindiv text-center" cz-shortcut-listen="true">
    <form class="form-signin" action="forgot-password.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Retrieve Password</h1>
      <small >Enter your email address and we will retrive your lost password.</small>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="username" id="inputEmail" class="form-control mt-2" placeholder="Email address" required="" autofocus="">
      <button class="btn btn-lg btn-dark btn-block mt-4" type="submit">Retrive</button>
    </form>
</div>
<?php include_once('footer.php'); ?>