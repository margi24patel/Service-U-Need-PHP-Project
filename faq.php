<!DOCTYPE html>
<html>
<head>
	<title>FAQ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script type="text/javascript" src="script/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="script/faq.js" ></script>
  <!-- Your custom styles (optional) -->
  <link rel='stylesheet' type='text/css' href='styles/style.css'>
  <link rel='stylesheet' type='text/css' href='styles/faq.css'>
</head>

<body>
<!-- header.php -->
	<?php require_once 'body/header.php' ?>
<main id="faq-main">
    <div><img src="images/faq_icon.png" alt="faq icon image"></div>
    <div class="container">
      <div class="row">
        <?php
          require_once 'database/Database.php';
          require_once 'database/faq/FAQ.php';

          $db = Database:: getdb();
          $faq = new FAQ();
          $faqs =  $faq->getAllFAQs($db);


          foreach($faqs as $addedfaq)
           {//print question and answer.
             echo  '<h3>'.'<a>'.  $addedfaq->questions.'</a>'.'</h3>'."<li class='list-group-item'>". $addedfaq->answers .'</li>' ;
            }
        ?>  
     </div>
   </div>
 </main>   
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>
</body>
</html>