<?php

require_once 'Database.php';
require_once 'Blog.php';

if(isset($_POST['id'])){
	$id = $_POST['id'];
	$db = Database::getDb();

	$sql = "SELECT * FROM blogs WHERE id = :id";

	$pst = $db->prepare($sql);
	$pst->bindParam(':id', $id);
	$pst->execute();

	$blog = $pst->fetch(PDO::FETCH_OBJ);

	//var_dump($blog);
}	
if(isset($_POST['updateblog'])){
	$id = $_POST['id'];
	$title = $_POST['title'];
	$image_title = $_POST['image_title'];
	$image_url = $_POST['image_url'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$publish_date = $_POST['publish_date'];

	$db = Database::getDb();
	$b = new Blog();

	$count = $b->updateBlog($id,$title,$image_title,$image_url,$first_name,$last_name,$publish_date,$db);

	if($count){
		header('Location: listblogs.php');
	}else{
		echo "problem showing blog table values";
	}
}

?>

<form action="" method="post">
	<input type="hidden" name="id" value="<?= $blog->id ?>" /><br/>
    Title: <input type="text" name="title" value="<?= $blog->title ?>"/><br/>
    Image Title: <input type="text" name="image_title" value="<?= $blog->image_title ?>"/><br />
    Image URL: <input type="text" name="image_url" value="<?= $blog->image_url ?>"/><br />
    First Name: <input type="text" name="first_name" value="<?= $blog->first_name ?>"/><br />
    Last Name: <input type="text" name="last_name" value="<?= $blog->last_name ?>"/><br />
    Publish Date: <input type="text" name="publish_date" value="<?= $blog->publish_date ?>"/><br />
    <input type="submit" name="updateblog" value="Update Blog">
</form>