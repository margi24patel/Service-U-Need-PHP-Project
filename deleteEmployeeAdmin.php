<?php


//require_once 'DatabaseEmployeesCareer.php';
require_once 'database/Database.php';
require_once 'class/Employee_client.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    
    //$dbcon = DatabaseEmployeesCareer::getDb();
    $dbcon = Database::getDb();
    $e = new Employee_client();
    $count = $e->deleteEmployee($id, $dbcon);
    
    if($count){
        header("Location: listEmployeesAdmin.php");
    }
    else {
        echo " problem deleting";
    }


}

?>


