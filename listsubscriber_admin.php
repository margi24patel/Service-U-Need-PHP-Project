<?php
  
echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";

echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";


echo "<!-- Font Awesome -->
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>";
     
    //jetal custon style
echo "<link rel='stylesheet' href='styles/listclientsubscriber.css'>";

echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";

?>

<!-- header -->
<?php require_once 'body/header.php' ?>
<main id="listofsubcribers_adminside">


   <h1>Subscribers</h1>
<!-- Html part -->
    
<div class="container">
 <div class="row">
  
<?php

  require_once 'menu/Database.php';
  require_once 'database/subscribe/Subscriber.php';

    $db = Database::getdb();
    $s = new subscriber();
    $subscribers =  $s->getAllSubscribers($dbcon);


    foreach($subscribers as $subscriber)
    {
        echo "<ul class='list-group'>" .
             "<li class='list-group-item'>" .  $subscriber->emailid  . 
             "<form action='deletesubscriber_admin.php' method='post'>".
             "<input type='hidden' name = 'id' value='$subscriber->id' />" .
             "<input type='submit' name='delete' value='Delete subscriber' class='delete-button' />" .
             "</form>" .
             "</li>" .
             "</ul>";
    }

?>  
     
 </div>
</div>
</main>
<!-- footer -->
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>