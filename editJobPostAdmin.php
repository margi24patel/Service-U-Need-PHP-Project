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
  <link rel="stylesheet" href="styles/styleAdmin.css">
  <script src="javascript/script.js"></script>
  <script src="javascript/scriptAdmin.js"></script>
</head>

<body class="container" style="padding-left: 0px;
padding-right: 0px; margin: 0 auto; width: 1200px;">
<!-- header.php -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/header.php'); ?>



<!-- main -->
<main id="editjobposition_admin_main">
    <div class="wrapper">
      <!-- Sidebar -->
      <nav id="sidebar" class="bg-secondary">
        <div class="sidebar-header ">
          <h2>Admin Panel</h2>
        </div>

        <ul class="list-unstyled components">
          <h3>Pages</h3>
          <li class="active">
            <a href="blogAdmin.php">Blogs</a>
          </li>
          <li class="active">
            <a href="listJobPostsAdmin.php">Careers</a>
          </li> 
          <li class="active">
            <a href="#serviceSubmenu">Services</a>
          </li>
          <li class="active">
            <a href="listCustomerReviewsAdmin.php">Reviews</a>
          </li>              
        </ul>
      </nav>
    <div class="container">

    <h1>Edit Job Post</h1>


<?php

//require_once 'DatabaseEmployeesCareer.php';
require_once 'database/Database.php';
require_once 'class/JobPosition_admin.php';


$job_title = $location_name = $skill_requirements = $job_requirements = $description = $salary = $job_type = "";


if(isset($_POST['id'])){
    $id = $_POST['id'];
    //$dbcon = DatabaseEmployeesCareer::getDb();
    $dbcon = Database::getDb();

    $sql = "SELECT * FROM job_post_admin_side where id = :id";
    $pst = $dbcon->prepare($sql);
    $pst->bindParam(':id', $id);
    $pst->execute();

    $position = $pst->fetch(PDO::FETCH_OBJ);

    $job_title =  $position->job_title;
    $location_name = $position->location_name;
    $skill_requirements = $position->skill_requirements;
    $job_requirements = $position->job_requirements;
    $description = $position->description;
    $salary = $position->salary;
    $job_type = $position->job_type;
    

}
if(isset($_POST['editjobposition'])){
    $id = $_POST['pid'];
    $job_title = $_POST['job_title'];
    $location_name = $_POST['location_name'];
    $skill_requirements = $_POST['skill_requirements'];
    $job_requirements = $_POST['job_requirements'];
    $description = $_POST['description'];
    $salary = $_POST['salary'];
    $job_type = $_POST['job_type'];
    
    //$dbcon = DatabaseEmployeesCareer::getDb();
    $dbcon = Database::getDb();
    $j = new JobPosition_admin();

    $count = $j->updateJobPosition($id, $job_title, $location_name, $skill_requirements, $job_requirements, $description, $salary, $job_type, $dbcon);

    if($count){
       //header('Location:  listJobPostsAdmin.php');
        //echo "updated succesfully";
        //Reference: https://stackoverflow.com/questions/4871942/how-to-redirect-to-another-page-using-php
        echo "<script> location.href='listJobPostsAdmin.php'; </script>";
        exit;
    } else {
        echo "problem";
    }
}
  

?>

    
    <div class="form-group">
        <label class="control-label col-sm-2" for="job_title"></label>
        <div class="col-sm-6">
            <input type="hidden" name="pid" value="<?= $id; ?>" class="form-control"/>  
        </div>
    </div>
    
<!-- form -->
<form action="" method="post" class="form-horizontal">
    
    <!-- id-->
    <div class="form-group">
        <label class="control-label col-sm-2" for="job_title"></label>
            <div class="col-sm-6">
                <input type="hidden" name="pid" value="<?= $id; ?>" class="form-control"/>
            </div>
    </div>
    
    <!-- Job Title -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="job_title"> Job Title:</label>
            <div class="col-sm-6">
                <input type="text" name="job_title" value="<?= $job_title; ?>" class="form-control"/>
        </div>
    </div>
    
    <!-- Location Name -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="location_name"> Location Name:</label>
            <div class="col-sm-6">
                <input type="text" name="location_name" value="<?= $location_name; ?>" class="form-control"/>
        </div>
    </div>
    
    
    <!-- Skill Requirements -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="skill_requirements"> Skill Requirements:</label>
            <div class="col-sm-6">
                <input type="text" name="skill_requirements" value="<?= $skill_requirements; ?>" class="form-control"/>
        </div>
    </div>
    
    
    <!-- Job Requirements-->
    <div class="form-group">
        <label class="control-label col-sm-2" for="job_requirements"> Job Requirements:</label>
           <div class="col-sm-6"> 
               <input type="text" name="job_requirements" value="<?= $job_requirements; ?>" class="form-control"/>
        </div>
    </div>
    
    <!-- Description -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="description"> Description: </label>
             <div class="col-sm-6"> 
                <input type="text" name="description" value="<?= $description; ?>" class="form-control"/>
        </div>
    </div>
    
    <!-- Salary -->
    <div class="form-group">
         <label class="control-label col-sm-2" for="salary"> Salary:  </label>
            <div class="col-sm-6"> 
                <input type="text" name="salary" value="<?= $salary ?>" class="form-control"/>
        </div>
    </div>
    
    <!-- Job Type -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="job_type"> Job Type:  </label>
            <div class="col-sm-6">
                <input type="text" name="job_type" value="<?= $job_type ?>" class="form-control"/>
        </div>
    </div>
    
    
    <!-- Edit Button-->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" name="editjobposition" value="Edit Job Post">Submit</button>
        </div>
    </div>
    
  <!--  <input type="submit" name="editjobposition" value="Edit Job Post"> -->
</form>
</div>
    </div>
    
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/footer.php'); ?>
    </body>
</html>