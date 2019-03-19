
<!--Edit Job Position Admin Side -->
<?php


echo " <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";
    
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";

echo "<!-- Font Awesome -->
          <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>";
     //Margi - Custom files
echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";
echo "<link rel='stylesheet' href='styles/editjobposition_admin.css'>";

?>


<!-- header -->
<?php require_once 'body/header.php' ?>

<!-- main -->
<main id="editjobposition_admin_main">
<div class="container">
    <h1>Edit Job Post</h1>

    
<div class="container">
<form action=""  class="form-horizontal">
    

    
        <div class="form-group">
        <label class="control-label col-sm-2" for="job_title"></label>
        <div class="col-sm-6">
            <input type="hidden" name="pid" value="<?= $id; ?>" class="form-control"/>  
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-sm-2" for="job_title"> Job Title:</label>
        <div class="col-sm-6">
            <input type="textbox" name="job_title" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="location_name"> Location Name:</label>
        <div class="col-sm-6">
            <input type="textbox" name="location_name" class="form-control"/>
        </div>
    </div>
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="skill_requirements">Skill Requirements:</label>
      <div class="col-sm-6">
            <input type="text" name="skill_requirements"  class="form-control" />
      </div>
    </div>
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="job_requirements">Job Requirements:</label>
      <div class="col-sm-6">  
            <input type="text" name="job_requirements"  class="form-control" />
        </div>
    </div>
    
    <div class="form-group">
       <label class="control-label col-sm-2" for="description">Description:</label>
       <div class="col-sm-6">
            <input type="text" name="description" class="form-control" />
       </div>
    </div>
    
    <div class="form-group">
       <label class="control-label col-sm-2" for="salary">Salary:</label>
       <div class="col-sm-6">
            <input type="text" name="salary" class="form-control" />
       </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="job_type">Job Type:</label>
        <div class="col-sm-6">
            <input type="text" name="job_type" class="form-control" />
        </div>
    </div>

    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    
</form>
</div>
</div>
</main>

<!-- footer -->
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>