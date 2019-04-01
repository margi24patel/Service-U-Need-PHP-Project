<?php 

require_once 'Database.php';

$dbc = Database::getDb();

//var_dump($dbc);

$sql = "SELECT * FROM blogs";

// use my pdo object and prepare $sql
$pdostm = $dbc->prepare($sql);
$pdostm->execute();

$blogs = $pdostm->fetchAll(PDO::FETCH_OBJ);

foreach ($blogs as $blog){

	echo "<li style=\"list-style-type: none;\">Title:<strong>" . $blog->title . "</strong></li>";

}



// fetchAll() will return an array containing all of the remaining rows in the result set 
//var_dump($pdostm->fetchAll());

// fetchAll(PDO::FETCH_ASSOC) will fetch the array as an assocciative array.
//var_dump($pdostm->fetchAll(PDO::FETCH_ASSOC));
?>