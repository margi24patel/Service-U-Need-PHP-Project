<?php
    require_once 'database/Database.php';
    require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/FAQ.php');


//Delete faq by faqid.
if(isset($_POST['id']))
  {   
  	
  $id = $_POST['id'];
  $db = Database:: getdb();
  $faq = new FAQ();

  $dltfaq = $faq->deleteFAQ($id,$db);

   if($dltfaq){
    	header("Location: listfaqs_admin.php");// Go to the list of faq page 
            }
    else{
    	echo"problem";
    }
  }


  ?>