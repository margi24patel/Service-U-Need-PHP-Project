<?php
  require_once 'database/Database.php';
  require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/Client.php');
//Get the information from the submitted form
if(isset($_POST['login']))
{
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  $db = Database::getdb();
  $c = new Client();
  $n = $c->getAllClientsLogin($user,$db);
  //checking for user name and password already exits or not
  /*if($row = $n){
    header('location:logout.php'); //if match then go to the logout page
      }
  else{
    header('location:clientregistration.php');//if not then go to the registration page
     }*/
  if($n->password==$pass)
  {
    if ($n->privilege == "user") {
          header('location:logout.php');
           }
    else if($n->privilege == "admin"){
           echo "success you are admin";
         }
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/styleAdmin.css">
  <script src="javascript/script.js"></script>
  <script src="javascript/scriptAdmin.js"></script>
</head>
<body class="container" style="padding-left: 0px;
padding-right: 0px; margin: 0 auto; width: 1200px;">
<!-- header.php -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/header.php'); ?>
<main id="subscribe_section">
  
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
          <div class="modal-dialog modal-lg">
            <div class="mode-content">
                <h2 class="modal-title">Login</h2>  
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                   <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" id="username" name="user" required/>
                      <label>Password</label>
                      <input type="Password" class="form-control" id="password" name="pass" required/>
                      <button class="btn btn-primary" name="login">Login</button>
                   </div>
                </form>
                <label>If you don't have account please register</label>
                <div class="btn btn-primary btn-sm"><a href="clientregistration.php" style="color:white;">REGISTER</a></div>
            </div>
        </div>
      </div>
    </div>
  </div>
</main>
<footer>
  <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/footer.php'); ?>
</footer>
</body>
</html>