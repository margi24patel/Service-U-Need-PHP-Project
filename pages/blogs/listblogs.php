<?php
	require_once 'BlogDatabase.php';
	require_once 'Blog.php';

	$dbcon = Database::getDb();

	$b = new Blog();

	$myblog = $b->getAllBlogs(Database::getDb());

?>
<main> 
    <section>
        <div class='blog-section'>
            <h1>Blogs</h1>
            <form action="addblog.php" method="post">
                <input type="submit" name="add" value="Add a Blog" />
            </form>
            <?php foreach($myblog as $blog){
            echo "" .
                
                "<div id='blog-grid'>" .
                    "<div class='blog-design'>" .
                        "<img src=images/" . $blog->image_url . ">" .
                    "</div>" .  
                    "<div class='blog-content'>" .
                        "<h2>" . $blog->title . "</h2>" . 
                        "<p>Posted on " . $blog->publish_date . " by " . $blog->first_name . " " . $blog->last_name . 
                         "</p>" .
                         "<p>" . $blog->content . "</p>" .
                         "<form action='delete-blog.php' method='post'>" .
                         "<input type='hidden' name='id' value='$blog->id' />" .
                         "<input type='submit' name='delete' value='Delete Blog' />" . 
                         "</form>" .  
                         "<form action='update-blog.php' method='post'>" .
                         "<input type='hidden' name='id' value='$blog->id' />" .
                         "<input type='submit' name='update' value='update Blog' />" . 
                         "</form>" .                                                
                    "</div>" .                       
                "</div>" ;
            }
            ?>
        </div>
    </section>    
</main>