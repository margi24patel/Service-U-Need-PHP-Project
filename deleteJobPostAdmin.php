<?php

//require_once 'DatabaseEmployeesCareer.php';
require_once 'database/Database.php';
require_once 'class/JobPosition_admin.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    
    //$dbcon = DatabaseEmployeesCareer::getDb();
    $dbcon = Database::getDb();
    $j = new JobPosition_admin();
    $count = $j->deleteJobPosition($id, $dbcon);
    
    if($count){
        header("Location: listJobPostsAdmin.php");
    }
    else {
        echo " problem deleting";
    }


}

?>

