<!-- List of Customer Reviews for Service Providers -->

<?php


        
echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";

echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";

echo "<!-- Font Awesome -->
          <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>";
     
    //Margi - Custom files
echo "<link rel='stylesheet' href='styles/serviceproviderInterface.css'>";

echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";

?>

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

<!-- footer -->
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>
