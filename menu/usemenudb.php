<?php 

require_once 'Database.php';

$dbc = Database::getDb();

//var_dump($dbc);

$sql = "SELECT * FROM services";

// use my pdo object and prepare $sql
$pdostm = $dbc->prepare($sql);
$pdostm->execute();

$menus = $pdostm->fetchAll(PDO::FETCH_OBJ);

foreach ($menus as $menu){

	echo "<li style=\"list-style-type: none;\">Title:<strong>" . $menu->name . "</strong></li>";

}



// fetchAll() will return an array containing all of the remaining rows in the result set 
//var_dump($pdostm->fetchAll());

// fetchAll(PDO::FETCH_ASSOC) will fetch the array as an assocciative array.
//var_dump($pdostm->fetchAll(PDO::FETCH_ASSOC));
?>