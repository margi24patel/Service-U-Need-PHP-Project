
<!--Display all JobPosts(list of Job Posts) at Admin Side -->
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

<!--main-->
 <main>
  <div class="wrapper">
    <!-- Sidebar -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/adminSidePanel.php'); ?>

  
 
  <?php

   require_once ($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/database/Database.php');    
   require_once ($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/JobPosition_admin.php');


     $dbcon = Database::getDb(); //to get database connection
     $j = new JobPosition_admin(); //create new instance of object
     $myjobposition =  $j->getAllJobPositions(Database::getDb()); //call method getAllJobPositions()

?>
    
  
    <div class="container">
     <div class="text-center">
      <h1>Positions</h1>
     </div>    
      <!--link for list of employees-->
        <div class='text-center'>
         <div class='btn btn-primary' style="margin-bottom:5px;text-decoration: none;" >
            <a href="listEmployeesAdmin.php" style="color:white;">List employees</a>
         </div>
        </div>  
        <!--add Job Postition Button -->
        <?php
            
            echo "<div class='text-center'>" .    
                   "<form action='addJobPostAdmin.php' method='post' class='form-horizontal'>".
                   "<input class='btn btn-primary' type='submit' name='add' value='Add Job Postition' />" .
                   "</form>" .
                   //"<div class='btn btn-primary' >" . "<a href='listEmployeesAdmin.php' style='color:white;'>" .
                   // "List employees" . "</a>" . "</div>" .
                   
                  "</div>"; 
        ?>

         <table class="table">
            <thead class="thead-dark">
             <tr>
              <th>Job Title</th>
              <th>Location Name</th>
              <!--<th>Skill Requirements</th>
              <th>Job Requirements</th> -->
              <!--<th>Description</th> -->
              <th>Salary</th>
              <th>Job Type</th>
              <th> CRUD Features</th>
             </tr>
            </thead>
            <tbody>   
    
             <?php
                //display all list of Job Posts 
                foreach($myjobposition as $position)
                {
                    echo "" .  
                        "<tr>" .

                             "<td class='w-18'>" . $position->job_title ."</td>" . 
                             "<td>" . $position->location_name . "</td>". 
                            //"<td>" . $position->skill_requirements ."</td>". 
                            //"<td>" . $position->job_requirements . "</td>". 
                            //"<td>" . $position->description . "</td>" .
                            "<td>" . $position->salary . "</td>". 
                            "<td>" . $position->job_type ."</td>" .
                            "<td>" .
                            //delete Button to delete Job Post

                                "<form action='deleteJobPostAdmin.php' method='post' class='form-horizontal'>".
                                "<input type='hidden' name = 'id' value='$position->id' />" .
                                "<input class='btn btn-primary' float-left' type='submit' name='delete' value='Delete' style='margin-bottom:5px'/>" .
                                "</form>" .

                            //edit Button to edit Job Post

                                "<form action='editJobPostAdmin.php' method='post' class='form-horizontal'>".
                                "<input type='hidden' name = 'id' value='$position->id' />" .
                                "<input class='btn btn-primary' float-right' type='submit' name='edit' value='Edit' style='margin-bottom:5px'/>" .
                                "</form>" .
                        
                            //Details Button
                                "<div class='deatils-job'>" .   
                                "<form action='jobPostDetailsAdmin.php' method='get' class='form-horizontal'>".
                                "<input type='hidden' name = 'id' value='$position->id' />" .
                                "<input class='btn btn-primary' type='submit' name='details' value='Details' />" .
                                "</form>" .
                                "</div>" .
                          "</td>" .
                        "</tr>";

                }
             ?>

         </tbody>
        </table>
    </div>
  </div>
 </main>
 <!-- footer.php -->
 <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/footer.php'); ?>
</body>
</html>