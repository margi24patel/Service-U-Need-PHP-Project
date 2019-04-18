<?php
require_once 'database/Database.php';
require_once  'class/ServiceProviderRegistration.php';

$name = $email = $phone = $city = "";

if(isset($_POST['id'])){
    $id= $_POST['id'];
    $db = Database::getDb();

    $s = new ServiceProviderRegistration();
    $serviceprovider = $s->getServiceProviderById($id, $db);

    $name =  $serviceprovider->name;
    $email = $serviceprovider->email;
    $phone = $serviceprovider->phone;
    $city = $serviceprovider->city;


}
if(isset($_POST['updateserviceprovider'])){
    $id= $_POST['aid'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $service = $_POST['subservice'];
    $city = $_POST['city'];

    $db = Database::getDb();
    $a = new ServiceProviderRegistration();
    $count = $a->updateServiceProvider($id, $name, $phone, $email, $service, $city, $db);

    if($count){
       header('Location:  listserviceproviders.php');
    } else {
        echo "problem updating service provider detail";
    }
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Service Provider</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Font Awesome -->
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
  <link rel='stylesheet' type='text/css' href='styles/style.css'>
</head>

<body>
<!-- header.php -->
    <?php require_once 'body/header.php' ?>

<main>
  <div class="wrapper">
<nav id="sidebar" class="bg-secondary">
      <div class="sidebar-header ">
        <h2>Admin Panel</h2>
      </div>

      <ul class="list-unstyled components">
        <h3>Pages</h3>
        <li class="active">
          <a href="blogAdmin.php">Blogs</a>
        </li>
        <li class="active">
          <a href="#careerSubmenu">Careers</a>
        </li> 
        <li class="active">
          <a href="#serviceSubmenu">Services</a>
        </li>
        <li class="active">
          <a href="#reviewSubmenu">Reviews</a>
        </li>              
      </ul>
    </nav>

    <div class="container">
  <h2>Service Provider</h2>
   

  <form class="form-horizontal" action="" method="post">
    <input type="hidden" name="aid" value="<?= $id; ?>" />
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?= $name; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= $email; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="<?= $phone; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="service">Service</label>
      <div class="col-sm-10">
        <?php
          $b = new Menu();

          $mymenu = $b->getAllMenus(Database::getDb());

        ?>
        <select name="service" id="service">
          <?php $categories = array(); ?>
          <?php 
          echo "<option class='dropbtn' value=''>--Select service--</option>";
          foreach($mymenu as $menu)
          {
            echo "<option class='dropbtn' value= '$menu->id'>$menu->name</option>"; 
          }    
          ?>
          </select>
      
        
        <span style="color:red;">
              <?php
                if(isset($service_err)){
                  echo $service_err;
                }
              ?>
        </span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="subservice">Sub Service</label>
      <div class="col-sm-10">
        <select name="subservice" id="subservice">


        </select>
      
        
        <span style="color:red;">
              <?php
                if(isset($service_err)){
                  echo $service_err;
                }
              ?>
        </span>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="city">City</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="city" name="city" value="<?= $city; ?>">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="updateserviceprovider" class="btn btn-default">Update Service provider</button>
      </div>
    </div>
  </form>
</div>
</div>
</main>
<!-- footer.php -->
<footer>
    <?php require_once 'body/footer.php' ?>
</footer>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="bootstrap/js/mdb.js"></script>
  <script type="text/javascript" src="script/service.js"></script>
  <script src="javascript/scriptAdmin.js"></script>
</body>
</html>