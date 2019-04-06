<?php
  
echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";

echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";


echo "<!-- Font Awesome -->
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>";
     
    //Jetal - Custom files
echo "<link rel='stylesheet' href='styles/faqstyle.css'>";

echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";

?>

<!-- header -->
<?php require_once 'body/header.php' ?>

<!-- main -->
<main id="listfaqs_admin">


  <h3>List of FAQs</h3>
<!-- Html part -->
    
<div class="container">
 <div class="row">
  
<?php

    require_once 'database/Database.php';
    require_once 'database/faq/FAQ.php';

    $db = Database:: getdb();
    $faq = new FAQ();
    $faqs =  $faq->getAllFAQs($db);


    foreach($faqs as $addedfaq)
    {
        echo "<ul class='list-group'>" .
             "<li class='list-group-item'>" .  $addedfaq->questions.'<br/>'. $addedfaq->answers . 
             "<form action='deletefaq_admin.php' method='post'>".
             "<input type='hidden' name = 'id' value='$addedfaq->id' />" .
             "<input type='submit' name='delete' value='Delete FAQ' class='delete-button' />" .
             "</form>" .
             "<form action='updatefaq_admin.php' method='post' class='form-horizontal'>".
                    "<input type='hidden' name = 'id' value='$addedfaq->id' />" .
                    "<input type='submit' name='edit' value='EditFAQ' />" .
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
