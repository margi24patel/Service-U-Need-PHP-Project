<?php
  require_once 'database/Database.php';
    require_once 'database/faq/FAQ.php';



if(isset($_POST['id']))
  {   
  	
  $id = $_POST['id'];
  $db = Database:: getdb();
  $faq = new FAQ();

  $dltfaq = $faq->deleteFAQ($id,$db);

   if($dltfaq){
    	header("Location: listfaqs_admin.php");
            }
    else{
    	echo"problem";
    }
  }


  ?>