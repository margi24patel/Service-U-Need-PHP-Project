
<!--Careers Page Which will display list of Job Post at client side -->
<!--Employee can applay for Paricular Job Position -->
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
  <?php

    require_once ($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/database/Database.php');
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/JobPosition_admin.php');

    $dbcon = Database::getDb(); //to get database connection
    $j = new JobPosition_admin(); //create new instance of object

    $myjobposition =  $j->getAllJobPositions(Database::getDb()); //call method getAllJobPositions()

  ?>

 <div class="text-center">
  <h1>Build the future of Services</h1>
 </div>  
 <div class="container-fluid">
  <div class="view overlay z-depth-1-half">
    <img src="images/careerbanner.jpg" alt="Career Banner Image" class="card-img-top img-fluid">
    <div class="mask rgba-white-light"></div>
  </div>
  <p> we're looking for hard-working, passionate people to help us create the next million jobs in Canada.</p>
    <div class="text-center">
     <h2>Open Positions</h2>
    </div>
    <div class="row">
        <!--display all Job Post(Position)  -->
        <?php 
          /*  foreach($myjobposition as $position)
            {
                echo "<div class='col-sm-6 col-md-6'>" . 
                            "<h3>" . "Job Title: " .  $position->job_title . "</h3>" . "<br>".
                                "<b>" . "Location Name: " . "</b>" . $position->location_name . "<br>".
                                "<b>" . "Skill Requirements: " . "</b>" . $position->skill_requirements . "<br>".
                                "<b>" . "Job Requirements: " . "</b>" .  $position->job_requirements . "<br>" .
                                "<b>" . "Description: " . "</b>".  $position->description . "<br>" .    
                                "<b>" . "Salary: " . "</b>" .  $position->salary . "<br>" .
                                "<b>" . "Job Type: " . "</b>" .  $position->job_type .

                    "<div class='applay-job'>" .    
                            "<form action='addEmployeeForm.php' method='post' class='form-horizontal'>".
                            "<input type='hidden' name = 'id' value='$position->id' />" .
                            "<input type='submit' name='apply' value='Apply for a Job' />" .
                            "</form>" .
                    "</div>" .
                    "</div>";
            } */
        
         foreach($myjobposition as $position){
        echo "<div class='col-sm-3 col-md-4'>" . 
                //    "<h3>" . "Job Title: " .  $position->job_title . "</h3>" . "<br>".
                        /*"Location Name: " . $position->location_name . "<br>".
                        "Skill Requirements: " .  $position->skill_requirements . "<br>".
                        "Job Requirements: " .  $position->job_requirements . "<br>" .
                        "Description: " .  $position->description . "<br>" .    
                        "Salary: " .  $position->salary . "<br>" .
                        "Job Type: " .  $position->job_type .*/
                    
            "<div class='text-center'>" .    
                    "<form action='jobDetails.php' method='get' class='form-horizontal'>".
                    "<input type='hidden' name = 'id' value='$position->id' />" .
                    "<input type='submit' name='apply' value='$position->job_title' class='jobbtn'/>" .
                    "</form>" .
            "</div>" .
            "</div>";
    }


        ?>
    </div>
  </div>
 </main>
 <!-- footer -->
 <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/footer.php'); ?>
</body>
</html>