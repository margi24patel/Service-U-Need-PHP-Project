<?php  

  require_once 'database/Database.php';
  require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/Subscriber.php');
      
   if(isset($_POST['addsub']))
   {
    $emailid = $_POST['emailid'];

    $db = Database::getdb();
    $s = new subscriber();
    $n = $s->addsubscriber($emailid,$db);


    if($n){
      $message = "Thank you for subscribe";
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/styleAdmin.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="javascript/script.js"></script>
  <script src="javascript/scriptAdmin.js"></script>
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="styles/styleAdmin.css">
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
   <span style="color:green; font-size:20px;">
            <?php
                if(isset($message)){
                    echo $message;
                }
            ?></span>
   </div>
</main>
<!-- footer.php -->
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>
</body>
</html>