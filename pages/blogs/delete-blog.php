<?php
	require_once 'Database.php';
	require_once 'Blog.php';

	if(isset($_POST['id'])){
		$id= $_POST['id'];
		$db = Database::getDb();

		$b = new Blog();
		$count = $b->deleteBlog($id,$db);
		if($count){
			echo "Blog Deleted";
		}
		else{
			echo "There is a problem on deleting this blog";
		}
	}
?>