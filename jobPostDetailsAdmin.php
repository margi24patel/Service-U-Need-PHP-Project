


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
<main id="listcustomerreviews_admin_main">
<div class="wrapper">
 <!-- Sidebar -->
 <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/adminSidePanel.php'); ?>

<div class="container">
    <div class="container">
     <div class="text-center">
      <h1> Job Post</h1>
     </div>    


<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/database/Database.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/JobPosition_admin.php');


//get id
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $dbcon = Database::getDb();
    
    $d = new JobPosition_admin();
    $jobdetails = $d->getJobById($id,$dbcon);
}

echo   "<div>" .
        "<h3>" . $jobdetails->job_title ."</h3>" . "<br>" .
        "<b>" . "Location: ". "</b>" .$jobdetails->location_name  . "<br>" .
        "<b>" . "Skill Requirements: " . "</b>" .$jobdetails->skill_requirements . "<br>". 
        "<b>" . "Job Requirements: " . "</b>" .$jobdetails->job_requirements . "<br>". 
        "<b>" . "Description: " . "</b>" .$jobdetails->description . "<br>" .
        "<b>" . "Salary: " . "</b>" .$jobdetails->salary . "<br>". 
        "<b>" . "Job Type: " . "</b>" .$jobdetails->job_type .
      "</div>";

?>
      </div>
    </div></div>
        </main>
 <!--footer-->
 <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/footer.php'); ?>
</body>
</html>