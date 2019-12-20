
<!--to delete Job Post(Admin can delete Job Post) -->
<?php

require_once 'database/Database.php';
require_once 'class/JobPosition_admin.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    
    $dbcon = Database::getDb(); //connection with database
    $j = new JobPosition_admin(); //create new instance of object
    $count = $j->deleteJobPosition($id, $dbcon); //call a method deleteJobPosition
    
    if($count){
        header("Location: listJobPostsAdmin.php");
    }
    else {
        echo " problem deleting";
    }

}

?>

