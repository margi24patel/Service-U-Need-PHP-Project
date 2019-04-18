
<!--Career Page Client Side (list of jobs) -->
<?php


        
echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";

echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";

echo "<!-- Font Awesome -->
          <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>";
     
    //Margi - Custom files
echo "<link rel='stylesheet' href='styles/careers.css'>";

echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";

?>

<!-- header -->
<?php require_once 'body/header.php' ?>


<!-- main -->
<main id="career_main">

<?php
//Database

//require_once 'DatabaseEmployeesCareer.php';
require_once 'database/Database.php';
require_once 'class/JobPosition_admin.php';

//$dbcon = DatabaseEmployeesCareer::getDb();
$dbcon = Database::getDb();
$j = new JobPosition_admin();
//$myjobposition =  $j->getAllJobPositions(DatabaseEmployeesCareer::getDb());
$myjobposition =  $j->getAllJobPositions(Database::getDb());

?>
<!-- Html part -->
<h1>Open Positions</h1>
    
    
<div class="container-fluid">
  <h2>Apply For A Job</h2>
  <p> we're looking for hard-working, passionate people to help us create the next million jobs in Canada.</p>
    <h3>Positions</h3>
    <div class="row">
<?php 
    foreach($myjobposition as $position){
        echo "<div class='col-sm-3 col-md-4'>" . 
                    "<h3>" . "Job Title: " .  $position->job_title . "</h3>" . "<br>".
                        "Location Name: " . $position->location_name . "<br>".
                        "Skill Requirements: " .  $position->skill_requirements . "<br>".
                        "Job Requirements: " .  $position->job_requirements . "<br>" .
                        "Description: " .  $position->description . "<br>" .    
                        "Salary: " .  $position->salary . "<br>" .
                        "Job Type: " .  $position->job_type .
                    
            "<div class='applay-job'>" .    
                    "<form action='addEmployeeForm.php' method='post' class='form-horizontal'>".
                    "<input type='hidden' name = 'id' value='$position->id' />" .
                    "<input type='submit' name='apply' value='Apply for a Job' />" .
                    "</form>" .
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