<!DOCTYPE html>
<html>
<head>
  <title>Book an appointment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- Your custom styles (optional) -->
  <link rel='stylesheet' type='text/css' href='styles/style.css'>
  <link rel='stylesheet' type='text/css' href='styles/registration.css'>
</head>

<body>
<!-- header.php -->

	<?php require_once 'body/header.php' ?>
<main id="signup_section"> 
    <h1>Sign Up</h1>
	<form action="" method="post" class="form-horizontal">
     <div class="form-group">
       <label class="control-label col-sm-2" for="first_name">Frist name</label>
       <div class="col-sm-6">
        <input type="text" class="form-control" id="first_name">
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-2">Last name</label>
       <div class="col-sm-6">
        <input type="text" class="form-control" id="last_name">
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-2">User name</label>
       <div class="col-sm-6">
        <input type="text" class="form-control" id="user_name"/>
       </div>
     </div>

     <div class="form-group">
       <label class="control-label col-sm-2">Password</label>
       <div class="col-sm-6">
        <input type="password" class="form-control" id="password"/>
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-2">EmailID</label>
       <div class="col-sm-6">
        <input type="email" class="form-control" id="emailid"/>
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-2">Phone number</label>
       <div class="col-sm-6">
        <input type="text" class="form-control" id="phone_number"/>
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-2">Street name</label>
       <div class="col-sm-6">
        <input type="text" class="form-control" id="street_name"/>
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-2">City</label>
       <div class="col-sm-6">
        <input type="text" class="form-control" id="city"/>
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-2">Postal code</label>
       <div class="col-sm-6">
        <input type="text" class="form-control" id="postal_code"/>
       </div>
     </div>
    <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" class="btn btn-default" id="submit_btn">Submit</button>
    </div>
  </div>
 </form>
</main>
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>
</body>
</html>
