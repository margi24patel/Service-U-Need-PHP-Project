<!DOCTYPE html>
<html>
<head>
  <title>Service Provider Registration</title>
</head>

  <!-- Material Design Bootstrap -->
  <link href="bootstrap/css/mdb.min.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- Your custom styles (optional) -->
  <link rel='stylesheet' type='text/css' href='styles/style.css'>
<body>
<!-- header.php -->

  <?php require_once 'body/header.php' ?>

<main>
  <div class="container">
  <h2>Service Provider Registration</h2>
  <img src="images/join_our_team.jpg">
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="service">Service:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="service" placeholder="Enter Service" name="service">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="city">City:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
      </div>
    </div>    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
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
</body>
</html>