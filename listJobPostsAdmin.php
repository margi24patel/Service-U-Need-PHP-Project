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


<main>
    <div class="text-center">
     <h1>Positions</h1>
    </div>
  
<!-- Html part -->
<div class='btn btn-primary'><a href="listEmployeesAdmin.php">List employees</a></div> 
    
<?php


//require_once 'DatabaseEmployeesCareer.php';
//require_once 'database/Database.php';    
//require_once 'class/JobPosition_admin.php';
   require_once ($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/database/Database.php');    
   require_once ($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/JobPosition_admin.php');


$dbcon = Database::getDb();
$j = new JobPosition_admin();
$myjobposition =  $j->getAllJobPositions(Database::getDb());

?>
    
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
      <br/> 
        <?php
        //add Job Postition Button
            echo      "<div class='text-center'>" .    
                        "<form action='addJobPostAdmin.php' method='post' class='form-horizontal'>".
                        "<input class='btn btn-primary' type='submit' name='add' value='Add Job Postition' />" .
                        "</form>" .
            
                        "</div>"; 
?>

 <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Job Title</th>
            <th>Location Name</th>
            <th>Skill Requirements</th>
            <th>Job Requirements</th>
            <!--<th>Description</th> -->
            <th>Salary</th>
            <th>Job Type</th>
            <th> CRUD Features</th>
          </tr>
        </thead>
        <tbody>   
    
<?php
        
foreach($myjobposition as $position){

echo "" .  
    "<tr>" .
    
         "<td class='w-18'>" . $position->job_title ."</td>" . 
         "<td>" . $position->location_name . "</td>". 
        "<td>" . $position->skill_requirements ."</td>". 
        "<td>" . $position->job_requirements . "</td>". 
        //"<td>" . $position->description . "</td>" .
        "<td>" . $position->salary . "</td>". 
        "<td>" . $position->job_type ."</td>" .
        "<td>" .
        //delete Button
        
            "<form action='deleteJobPostAdmin.php' method='post' class='form-horizontal'>".
            "<input type='hidden' name = 'id' value='$position->id' />" .
            "<input class='btn btn-primary' float-left' type='submit' name='delete' value='Delete' />" .
            "</form>" .
         
        //edit Button
        
            "<form action='editJobPostAdmin.php' method='post' class='form-horizontal'>".
            "<input type='hidden' name = 'id' value='$position->id' />" .
            "<input class='btn btn-primary' float-right' type='submit' name='edit' value='Edit' />" .
            "</form>" .
        
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