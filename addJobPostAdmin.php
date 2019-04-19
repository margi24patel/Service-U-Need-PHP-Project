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

<!--Add Job Position Admin Side -->




<!-- main -->
<main id="addjobposition_admin_main">
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

    <h1>Add Job Post</h1>

    
<div class="container">

<?php
//require_once 'DatabaseEmployeesCareer.php';
require_once 'database/Database.php';
require_once 'class/JobPosition_admin.php';

  $job_title = $location_name =  $skill_requirements = $job_requirements = $description = $salary = $job_type = "";



if(isset($_POST['addpost'])){
       $job_title = $_POST['job_title'];
       $location_name = $_POST['location_name'];
       $skill_requirements = $_POST['skill_requirements']; 
       $job_requirements = $_POST['job_requirements'];
       $description = $_POST['description'];
       $salary = $_POST['salary'];
       $job_type = $_POST['job_type'];
    
    
        function validate($value)
    {
        if($value == "")
        {
            return "Please enter value"; 
        }
        else
        {
            return "";
        }
    }
    
    
    
    //Job Title
    $job_title_err = validate($job_title);    
    
    //Location Name
    $location_name_err = validate($location_name);    
    
    //Skill Requirements
    $skill_requirements_err = validate($skill_requirements);    
    
    //Job Requirements
    $job_requirements_err = validate($job_requirements);    
    
    //Description
    $description_err = validate($description);    
    
    //Salary
    $salary_err = validate($salary);    
    
    //Job Type
    $job_type_err = validate($job_type);   
    
    //Response Message
    if(!empty($_POST['job_title']) && !empty($_POST['location_name']) && !empty($_POST['skill_requirements']) && !empty($_POST['job_requirements']) && !empty($_POST['description']) && !empty($_POST['salary']) && !empty($_POST['job_type']))
    {
        
       //$dbcon = DatabaseEmployeesCareer::getDb();
        $dbcon = Database::getDb();
       $j = new JobPosition_admin();
       $c = $j->addJobPosition($job_title, $location_name, $skill_requirements, $job_requirements, $description, $salary, $job_type, $dbcon);
    
    

       if($c){
           //header('Location:  listJobPostsAdmin.php');
           //echo "Job Post Added Successfully"; 
           //Reference:https://stackoverflow.com/questions/4871942/how-to-redirect-to-another-page-using-php
           echo "<script> location.href='listJobPostsAdmin.php'; </script>";
        exit;
       } else {
           echo "problem adding a employee";
       }
    
             
    }
     else
        {
            echo "Please Fill All Required Fields";
            
        }
    
    
   


}
?>
    
    <!-- form -->

<form action="" method="post" class="form-horizontal">
    
    <!-- Job Title -->
     <div class="form-group">
      <label class="control-label col-sm-2" for="job_title"> Job Title:</label>
         <div class="col-sm-6">
             <input type="text" name="job_title" value="<?php
                                    if(isset($job_title)){
                                        echo $job_title;
                                    }
                              ?>"  class="form-control"/>
         </div>     
                <span style="color:red;">
                <?php
                    if(isset($job_title_err)){
                        echo $job_title_err;
                    }
                    ?>
                </span>
    </div>

    
    <!-- Location Name -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="location_name"> Location Name:</label>
            <div class="col-sm-6">
                <input type="text" name="location_name" value="<?php
                                if(isset($location_name)){
                                    echo $location_name;
                                }
                          ?>" class="form-control"/>
           </div>
            <span style="color:red;">
            <?php
                if(isset($location_name_err)){
                    echo $location_name_err;
                }
                ?>
            </span>
    </div>
    
    
    <!-- Skill Requirements -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="skill_requirements"> Skill Requirements:</label>
            <div class="col-sm-6">
                 <input type="text" name="skill_requirements" value="<?php
                                        if(isset($skill_requirements)){
                                            echo $skill_requirements;
                                        }
                                  ?>" class="form-control"/>
            </div>        
            <span style="color:red;">
            <?php
                if(isset($skill_requirements_err)){
                    echo $skill_requirements_err;
                }
                ?>
            </span>
    </div>
    
    
    <!-- Job Requirements -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="job_requirements"> Job Requirements:</label>
           <div class="col-sm-6"> 
                 <input type="text" name="job_requirements" value="<?php
                                        if(isset($job_requirements)){
                                            echo $job_requirements;
                                        }
                                  ?>" class="form-control"/>
        </div>   
            <span style="color:red;">
            <?php
                if(isset($job_requirements_err)){
                    echo $job_requirements_err;
                }
                ?>
            </span>
    </div>
    
    
    <!-- Description -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="description"> Description: </label>
             <div class="col-sm-6"> 
                <input type="text" name="description" value="<?php
                                        if(isset($description)){
                                            echo $description;
                                        }
                                  ?>" class="form-control"/>
            </div>
            <span style="color:red;">
            <?php
                if(isset($description_err)){
                    echo $description_err;
                }
                ?>
            </span>
    </div>
    
    
    <!-- Salary -->
    <div class="form-group">
         <label class="control-label col-sm-2" for="salary"> Salary:  </label>
            <div class="col-sm-6"> 
                <input type="text" name="salary" value="<?php
                                        if(isset($salary)){
                                            echo $salary;
                                        }
                                  ?>" class="form-control"/>
            </div>
            <span style="color:red;">
            <?php
                if(isset($salary_err)){
                    echo $salary_err;
                }
                ?>
            </span>
    </div>
    
    
    <!-- Job Type -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="job_type"> Job Type:  </label>
            <div class="col-sm-6">
                 <input type="text" name="job_type" value="<?php
                                        if(isset($job_type)){
                                            echo $job_type;
                                        }
                                  ?>" class="form-control"/>
            </div>
            <span style="color:red;">
            <?php
                if(isset($job_type_err)){
                    echo $job_type_err;
                }
                ?>
            </span>
    </div>
    
    
    <!-- Add Button -->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="addpost" value="Submit">Submit</button>
      </div>
    </div>
    
  <!--  <input type="submit" name="addemp" value="Submit"> -->
</form>
</div>
</div>
    </div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/footer.php'); ?>
    </body>
</html>