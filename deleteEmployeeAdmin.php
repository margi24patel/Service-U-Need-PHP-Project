
<!--to delete Employee at Admin side(Admin can delete Employees)-->
<?php

    require_once 'database/Database.php';
    require_once 'class/Employee_client.php';

    if(isset($_POST['id']))
    {
        $id = $_POST['id'];

        $dbcon = Database::getDb(); //connection with datbase
        $e = new Employee_client(); //create new instance of object
        $count = $e->deleteEmployee($id, $dbcon); //call to deleteEmployee method

        if($count)
        {
            header("Location: listEmployeesAdmin.php");
        }
        else {
            echo " problem deleting";
        }

    }

?>


