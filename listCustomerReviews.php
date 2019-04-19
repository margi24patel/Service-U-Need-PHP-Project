<!-- List of Customer Reviews Client side -->

<?php


        
echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";

echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";

echo "<!-- Font Awesome -->
          <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>";
     
    //Margi - Custom files
echo "<link rel='stylesheet' href='styles/listCustomerReviews.css'>";

echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";

?>

<!-- header -->
<?php require_once 'body/header.php' ?>

<!-- main -->
<main id="listcustomerreviews_client_main">


  <h1>Customer Reviews</h1>
<!-- Html part -->

    
<div class="container-fluid">
    
    <div class="row">


<?php
require_once 'database/Database.php';
require_once 'class/CustomerReview.php';



// this will print customer reviews which has average rating (which is rating >=  3)
$dbcon = Database::getDb();
$r = new CustomerReview();
$rating =  $r->getAverageRating(Database::getDb());


foreach($rating as $averageratings) {
    echo    "<div class='col-sm-3 col-md-4'>" . "<div id='box' >" .
            //"<p id='customer_name'>" . $averageratings->customer_name  . "</p>" . "<br>" .
            "Customer Name: " . $averageratings->customer_name  . "</br>".
            "Rating :" . $averageratings->rating . "<br>" .
            "Comment: " . $averageratings->comment . "<br>" .
            "Date: " .  $averageratings->date . "<br>" .
        //    "Service Provider Name: " . $averageratings->name . 
        
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
