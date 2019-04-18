<?php  

  require_once 'database/Database.php';
  require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/Subscriber.php');

   if(isset($_POST['id']))
   {
   	
      $id = $_POST['id'];
   	$db = Database::getdb();
   	$s = new subscriber();
   	$count = $s->deleteSubscriber($id,$db);


   	if($count){
   		header("Location:listsubscriber_admin.php");
   	}
   	else{
   		echo "problem deleting a subscriber";
   	  }
   }

 
 
?>