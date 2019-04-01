<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/Service-U-Need/database/Database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/Service-U-Need/class/Blog.php');

	if(isset($_POST['id'])){
		$id= $_POST['id'];
		$db = Database::getDb();

		$b = new Blog();
		$count = $b->deleteBlog($id,$db);
		if($count){
			header('Location: ../../blogPage.php');
		}
		else{
			echo "There is a problem on deleting this blog";
		}
	}
?>