<!-- Customer Review Page-->
<?php
echo " <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";
    
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";

echo "<!-- Font Awesome -->
          <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>";

 //Margi - Custom files
echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>
        <link rel='stylesheet' href='styles/customer_review.css'>";

?>

<!-- header -->
<?php require_once 'body/header.php' ?>

<!-- main -->
<main id="customer_review_main">
<div class="container">
  <h1>Customer Reviews</h1>
  <h2>Write your Reviews</h2>

    <form class="form-horizontal" action="customer_review.php">
      
      <div class="form-group"><label class="control-label col-sm-2" >Customer Name:</label></div>
      
      <div class="form-group">
          <label class="control-label col-sm-2"  for="rating" >Rating:</label>
          <div class="col-sm-offset-2 col-sm-10">
              <div class="radio">
                <label><input type="radio" name="rating" value="1-star" checked> 1 star</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="rating" value="2-star"> 2 stars</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="rating" value="3-star"> 3 stars</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="rating" value="4-star"> 4 stars</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="rating" value="5-star"> 5 stars</label>
              </div>
          </div>
          <br>
          <p class="para">5 stars - Excellent | 1 star - I'm not Happy!</p>
      </div>
      <br>
      <div class="form-group">
      <label class="control-label col-sm-2" for="service_provider">Service Provider:</label>
      <div class="col-sm-offset-2 col-sm-10">
      <select name="service_provider">
          <option value="John">John</option>
          <option value="Riaan">Riaan</option>
          <option value="Rogers">Rogers</option>
          <option value="Jay">Jay</option>
      </select>
          </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="comment">Write A Review:</label>
      <div class="col-sm-4">
          <textarea class="form-control" rows="5" name="comment"></textarea>
      </div>
      
    </div>
    
      <div class="form-group"> 
      <label class="control-label col-sm-2" for="date">Date:</label>
        <div class="col-sm-4">
            <input type="date" name="date" class="form-control" ><!-- TO SET VALUE value="2019-03-11" min="2018-01-01" max="2018-12-31"-->
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

<!-- footer -->
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>