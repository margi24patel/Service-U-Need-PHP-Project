<?php
	require_once 'Database.php';
	require_once 'Blog.php';

	$dbcon = Database::getDb();

	$b = new Blog();

	$myblog = $b->getAllBlogs(Database::getDb());

?>
<main> 
    <section>
        <div class='blog-section'>
            <h1>Blogs</h1>
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
                    "</div>" .                       
                "</div>" ;
            }
            ?>
        </div>
    </section>    
</main>