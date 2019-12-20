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
  <link rel="stylesheet" href="styles/careers.css">

</head>

<body class="container" style="padding-left: 0px;
padding-right: 0px; margin: 0 auto; width: 1200px;">
 <!-- header -->
 <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/header.php'); ?>


 <!-- main -->
 <main id="career_main">
     
    <div class="text-center">
  
 </div>  
 <div class="container-fluid">
 
  
    <div class="text-center">
     <h2>Job Post</h2>
    </div>
    <div class="row">


<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/database/Database.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/JobPosition_admin.php');



//get id
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $dbcon = Database::getDb();
    //$j = new JobPosition_admin();
    //$myjobposition =  $j->getJobById(DatabaseEmployeesCareer::getDb());
    //$j = new JobPosition_admin();
    //$myjobposition =  $j->getAllJobPositions(DatabaseEmployeesCareer::getDb());
    
    $d = new JobPosition_admin();
    $count = $d->getJobById($id,$dbcon);
}
//foreach($count as $position){
echo  "<div>" . "<h3>" . $count->job_title ."</h3>" . "<br>".
        "<b>" . "Location: ". "</b>" .$count->location_name  . "<br>" .
        "<b>" . "Skill Requirements: " . "</b>" .$count->skill_requirements . "<br>". 
        "<b>" . "Job Requirements: " . "</b>" .$count->job_requirements . "<br>". 
        "<b>" . "Description: " . "</b>" .$count->description . "<br>" .
        "<b>" . "Salary: " . "</b>" .$count->salary . "<br>". 
        "<b>" . "Job Type: " . "</b>" .$count->job_type .
    
        "<div class='applay-job'>" .    
                    "<form action='addEmployeeForm.php' method='post' class='form-horizontal'>".
                    "<input type='hidden' name = 'id' value='$count->id' />" .
                    "<input type='submit' name='apply' value='Applay for a Job' class='btn btn-primary'/>" .
                    "</form>" .
        "</div>" .
      "</div>";
//}
?>
        
</div>
  </div>
 </main>
 <!-- footer -->
 <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/footer.php'); ?>
</body>
</html>