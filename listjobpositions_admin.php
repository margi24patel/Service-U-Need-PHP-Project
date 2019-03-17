
<!--List of Jobs Positions Page Admin Side (list of jobs) -->
<?php


        
echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";

echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";

echo "<!-- Font Awesome -->
          <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>";
     
    //Margi - Custom files
echo "<link rel='stylesheet' href='styles/listjobpositions_admin.css'>";

echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";

?>

<!-- header -->
<?php require_once 'body/header.php' ?>

<!-- main -->
<main id="listofjobpositions_admin_main">
<div class="container">

  <h1>Positions</h1>
<form class="form-horizontal" action="">    
    
<!-- Html part -->

    
<div class="container-fluid">

    <div class="row">

    <div class='col-sm-3 col-md-4'>
        <div>
            <h4>Job Title</h4>
        </div>
        <div>
            <p>Descrption</p>
        </div>
        <div class='delete-job'>
            <input type='submit' name='delete' value='Delete Job Position' />
        </div>
        <div class='edit-job'>
            <input type='submit' name='edit' value='Edit Job Position' />
        </div>
    </div>
        
    <div class='col-sm-3 col-md-4'>
        <div>
            <h4>Job Title</h4>
        </div>
        <div>
            <p>Descrption</p>
        </div>
        <div class='delete-job'>
            <input type='submit' name='delete' value='Delete Job Position' />
        </div>
        <div class='edit-job'>
            <input type='submit' name='edit' value='Edit Job Position' />
        </div>
    </div>
        
    <div class='col-sm-3 col-md-4'>
        <div>
            <h4>Job Title</h4>
        </div>
        <div>
            <p>Descrption</p>
        </div>
        <div class='delete-job'>
            <input type='submit' name='delete' value='Delete Job Position' />
        </div>
        <div class='edit-job'>
            <input type='submit' name='edit' value='Edit Job Position' />
        </div>
    </div>
        
    <div class='col-sm-3 col-md-4'>
        <div>
            <h4>Job Title</h4>
        </div>
        <div>
            <p>Descrption</p>
        </div>
        <div class='delete-job'>
            <input type='submit' name='delete' value='Delete Job Position' />
        </div>
        <div class='edit-job'>
            <input type='submit' name='edit' value='Edit Job Position' />
        </div>
    </div>
    
        
    <div class='col-sm-3 col-md-4'>
        <div>
            <h4>Job Title</h4>
        </div>
        <div>
            <p>Descrption</p>
        </div>
        <div class='delete-job'>
            <input type='submit' name='delete' value='Delete Job Position' />
        </div>
        <div class='edit-job'>
            <input type='submit' name='edit' value='Edit Job Position' />
        </div>
    </div>
        
        
        <div class='col-sm-3 col-md-4'>
        <div>
            <h4>Job Title</h4>
        </div>
        <div>
            <p>Descrption</p>
        </div>
        <div class='delete-job'>
            <input type='submit' name='delete' value='Delete Job Position' />
        </div>
        <div class='edit-job'>
            <input type='submit' name='edit' value='Edit Job Position' />
        </div>
    </div>
        
        <div class='col-sm-3 col-md-4'>
        <div>
            <h4>Job Title</h4>
        </div>
        <div>
            <p>Descrption</p>
        </div>
        <div class='delete-job'>
            <input type='submit' name='delete' value='Delete Job Position' />
        </div>
        <div class='edit-job'>
            <input type='submit' name='edit' value='Edit Job Position' />
        </div>
    </div>
        
    
    </div>
    
        <div>
          <div class='add-job'>
            <input type='submit' name='add' value='Add Job Position' />
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
