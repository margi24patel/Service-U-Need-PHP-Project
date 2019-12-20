
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/listCustomerReviews.css">

</head>

<body class="container" style="padding-left: 0px;
padding-right: 0px; margin: 0 auto; width: 1200px;">



<!-- header -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/header.php'); ?>



<!-- header -->
<?php require_once 'body/header.php' ?>

<!-- main -->
<main id="serviceprovider_customer_reviewed_main">


  <h1>Service Provider Reviews</h1>
<!-- Html part -->

    
<div class="container-fluid">
    
<div class="row">
       

<?php
require_once 'database/Database.php';
require_once 'class/CustomerReview.php';


// this will print customer reviews which has average rating (which is rating >=  3)
$dbcon = Database::getDb();
$spr = new CustomerReview();
$serviceproviderating =  $spr->getCountRatingServiceProvider(Database::getDb());


foreach($serviceproviderating as $spaveragerating) {
    echo "<div class='col-sm-3 col-md-4'>" . "<div id='box'>" .
            "<h4>"."Service Provider : " . $spaveragerating->name  . "</h4>" .
            "Rating :" . $spaveragerating->rating . "<br>" .
          /* "<p id='customer_name'>" . $spaveragerating->customer_name  . "</p>" . "<br>" .
             "Rating :" . $spaveragerating->rating . "<br>" .
            "Comment: " . $spaveragerating->comment . "<br>" .
            "Date: " .  $spaveragerating->date . "<br>" . */
        
        "</div>" .
        "</div>";
}

?>
        
</div>
</div>

</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/footer.php'); ?>
    </body>
    <!-- footer -->
</html>