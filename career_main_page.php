<!--Career Page Client Side (list of jobs) -->
<?php

echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";
        
echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";
     
    //Margi - Custom files
echo "<link rel='stylesheet' href='styles/career_main_page.css'>";

echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";

?>

<!-- header -->
<?php require_once 'body/header.php' ?>

<!-- main -->
<main id="career_main">
<div class="container">

  <h1>Open Positions</h1>
<form class="form-horizontal" action="addemployee_client_index.php">    
    
<!-- Html part -->
<h2>Apply For A Job</h2>
    
    
<div class="container-fluid">

  <p> we're looking for hard-working, passionate people to help us create the next million jobs in Canada.</p>
    <h3>Positions</h3>
    <div class="row">

    <div class='col-sm-3 col-md-4'>
        <div>
            <h4>Job Title</h4>
        </div>
        <div>
            <p>Descrption</p>
        </div>
        <div class='applay-job'>
            <input type='submit' name='applay' value='Apply for a Job' />
        </div>
    </div>
        
    <div class='col-sm-3 col-md-4'>
        <div>
            <h4>Job Title</h4>
        </div>
        <div>
            <p>Descrption</p>
        </div>
        <div class='applay-job'>
            <input type='submit' name='applay' value='Apply for a Job' />
        </div>
    </div>
        
    <div class='col-sm-3 col-md-4'>
        <div>
            <h4>Job Title</h4>
        </div>
        <div>
            <p>Descrption</p>
        </div>
        <div class='applay-job'>
            <input type='submit' name='applay' value='Apply for a Job' />
        </div>
    </div>
        
    <div class='col-sm-3 col-md-4'>
        <div>
            <h4>Job Title</h4>
        </div>
        <div>
            <p>Descrption</p>
        </div>
        <div class='applay-job'>
            <input type='submit' name='applay' value='Apply for a Job' />
        </div>
    </div>
    
        
    <div class='col-sm-3 col-md-4'>
        <div>
            <h4>Job Title</h4>
        </div>
        <div>
            <p>Descrption</p>
        </div>
        <div class='applay-job'>
            <input type='submit' name='applay' value='Apply for a Job' />
        </div>
    </div>
        
    </div>
</div>
</form>
</div> 
</main>

<!-- footer -->
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>