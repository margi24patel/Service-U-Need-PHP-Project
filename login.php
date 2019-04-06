<?php
require_once 'database/Database.php';
require_once 'database/clientregistration/Client.php';

if(isset($_POST['lo'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  $db = Database::getdb();
  $c = new Client();
  $n = $c->getAllClientsLogin($user,$pass,$db);
  
  if($row = $n){
    header('location:logout.php'); 
  }
  else{
    header('location:clientregistration.php');
    
  }

}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- Your custom styles (optional) -->
  <link rel='stylesheet' type='text/css' href='styles/style.css'>
  
</head>

<body>
<!-- header.php -->

  <?php require_once 'body/header.php' ?>



<main id="subscribe_section">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <!--<button class="btn btn-primary btn-sm" data-target="#login" data-toggle="modal">Login</button-->
          <div class="modal-dialog modal-lg">
            <div class="mode-content">
                <h4 class="modal-title">Login</h4>  
              </div>
              <div class="modal-body">
                <form action="" method="post">
                   <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" id="username" name="user">
                      <label>Password</label>
                      <input type="Password" class="form-control" id="password" name="pass">
                      <button class="btn btn-primary" name="lo">Login</button>
                   </div>
                </form>
              </div>
        </div>
      </div>
    </div>
  </div>
</main>
<footer>
  <?php require_once 'body/footer.php' ?>
</footer>
</body>
</html>