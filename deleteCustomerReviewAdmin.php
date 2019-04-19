<?php
require_once 'database/Database.php';
require_once 'class/CustomerReview.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    
    $dbcon = Database::getDb();
    $r = new CustomerReview();
    $count = $r->deleteCustomerReview($id, $dbcon);
    
    if($count){
        header("Location: listCustomerReviewsAdmin.php");
    }
    else {
        echo " problem deleting";
    }

}

?>