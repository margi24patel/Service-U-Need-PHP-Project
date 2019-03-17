<?php
	require_once 'database.php';
	require_once 'Blog.php';
		if(isset($_POST['addblog'])){
			$title = $_POST['title'];
			$image_title = $_POST['image_title'];
			$image_url = $_POST['image_url'];
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
      $publish_date = $_POST['publish_date'];
      $content = $_POST['content'];


			$db = Database::getDb();
			$b = new Blog();

			$c = $b->addBlog($title, $image_title, $image_url, $first_name, $last_name, $publish_date,$content, $db);
			if($c){
				echo "Added blog successfully";
			}else{
				echo "there is a problem adding a new blog";
			}
		}
?>

<form action="" method="post">
	<label>Title:</label>
	<input type="text" name="title"><br/>

	<label>Image Title:</label>
	<input type="text" name="image_title"><br/>

	<label>Image URL:</label>
	<input type="text" name="image_url"><br/>

	<label>First Name:</label>
	<input type="text" name="first_name"><br/>

	<label>Last Name:</label>
	<input type="text" name="last_name"><br/>

	<label>Publish Date:</label>
	<input type="Date" name="publish_date"><br/>

	<label>Content:</label>
	<textarea name="content" rows="5" cols="40" ></textarea><br/>

	<input type="submit" name="addblog" value="Add a Blog">
</form>