
<!--List of Employees Page at Admin Side (list of Employees) -->
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
 <main id="listofemployees_admin_main">
  <div class="wrapper">
    <!-- Sidebar -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/adminSidePanel.php'); ?>
    <div class="container">
      <h1 class="text-center">Employees</h1>
        
        <table class="table">
            <thead class="thead-dark">
             <tr>
              <th>Employee Name</th>
              <th>Job Title</th>
              <th>Address</th>
              <!--<th>Skill Requirements</th>
              <th>Job Requirements</th> -->
              <!--<th>Description</th> -->
              <th>Contact Info.</th>
              <th>Avalibility</th>
              <th> CRUD Features</th>
             </tr>
            </thead>
            <tbody>   

        <?php
            require_once 'database/Database.php';
            require_once 'class/Employee_client.php';


            $dbcon = Database::getDb();
            $e = new Employee_client();
            $myemp =  $e->getAllEmployeesWithDetails(Database::getDb()); //

            //display all list of employee
            foreach($myemp as $employee)
            {
                echo "" .  
                        "<tr>" .

                            //echo "<ul class='list-group'>" .
                            //"<li class='list-group-item'>" .  
                            "<td class='w-18'>" . $employee->employee_firstname . " " . $employee->employee_lastname . "</td>" .
                                        // $employee->job_id  . 
                            "<td>" . $employee->job_title . "</td>" .
                            "<td>" . $employee->streetname . ", " . $employee->city . ", " . $employee->province . ", " . 
                                        $employee->postal_code . "</td>".
                            "<td>" . $employee->email_id . ", " . $employee->phone_no . "</td>" .
                            "<td>" . $employee->availability . "</td>".
                    
                            "<td>" .
                                     
                            "<form action='deleteEmployeeAdmin.php' method='post'>".
                            "<input type='hidden' name = 'id' value='$employee->id' />" .
                            "<input type='submit' name='delete' value='Delete Employee'  class='btn btn-primary'/>" .
                            "</form>" .

                            //"</li>" .
                            // "</ul>";
                            "</td>" . 
                    "</tr>";

            }

        ?>

        
        </tbody>
        </table>
    </div>
   </div>
  </main>
  <!--footer-->
  <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/footer.php'); ?>
</body>
</html>
