<!DOCTYPE html>
<html>
<head>
	<title>Book an appointment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="bootstrap/css/mdb.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- Your custom styles (optional) -->
  <link rel='stylesheet' type='text/css' href='styles/style.css'>
  <link rel='stylesheet' type='text/css' href='styles/bookanappointment.css'>
</head>

<body>
<!-- header.php -->

	<?php require_once 'body/header.php' ?>

<main>
	<div class="container">
  <h2>Book an appointment</h2>
  
  
  <div class="view overlay z-depth-1-half">
    <img src="images/bookappointment_banner.jpg" alt="banner_bookAnAppointment" class="card-img-top img-fluid">
    <div class="mask rgba-white-light"></div>
  </div>
   

  <form class="form-horizontal" action="">
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
      <label class="control-label col-sm-2" for="date">Date:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="date" name="date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="time">Time:</label>
      <div class="col-sm-10">
        <input type="time" class="form-control" id="time" name="time">
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