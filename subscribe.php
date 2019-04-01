<?php  

  require_once 'menu/Database.php';
  require_once 'database/subscribe/Subscriber.php';
      
   if(isset($_POST['addsub']))
   {
    $emailid = $_POST['emailid'];

    $db = Database::getdb();
    $s = new subscriber();
    $n = $s->addsubscriber($emailid,$db);


    if($n){
      //header("Location:listsubscriber.php");
      echo "successfully";
    }
    else{
      echo "problem adding a subscriber";
    }
   }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Subscribe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- Your custom styles (optional) -->
  <link rel='stylesheet' type='text/css' href='styles/style.css'>
  <link rel='stylesheet' type='text/css' href='styles/subscribe.css'>
</head>

<body>
<!-- header.php -->

  <?php require_once 'body/header.php' ?>
<main id="subscribe_section">
   <div><img src="images/subscribe.jpg" alt="subscribe icon"/></div>
   <div id="subscribe">
   <fieldset>
     <legend>Please subscribe</legend>
	   <form action="" method="post">
         <div class="form-group">
          <label>Enter Your EmailID:</label>
          <input type="email" class="form-control" id="emailid" name="emailid">
         </div>
         <button type="submit" value="SUBMIT" name="addsub" class="btn btn-default" id="submit">SUBSCRRIBE</button>
	    </form>
   </fieldset>
   </div>
</main>
<!-- footer.php -->
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>
</body>
</html>