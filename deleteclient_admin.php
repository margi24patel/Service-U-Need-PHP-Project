<?php
 require_once 'menu/Database.php';
 require_once 'database/clientregistration/Client.php';


if(isset($_POST['id']))
  {   
  	
  $id = $_POST['id'];
  $db = Database:: getdb();
  $c = new Client();

  $count = $c->deleteClient($id,$db);

   if($count){
    	header("Location: listclients_admin.php");;
    }
    else{
    	echo"problem";
    }
  }

  ?>