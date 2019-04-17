<?php
require_once 'database/Database.php';
require_once 'class/Search.php';

$dbcon = Database::getDb();
$s = new Search();


echo "<br/>";
// Search Services , SubServices and Service Providers by name:
if(isset($_GET['keywords']) ) 
{
    //elseif(empty($_GET['keywords'])){
if($_GET['keywords']== ""){
    echo "Please enter keyword";
}

else
{
    $search_by_name =  $s->searchByName(Database::getDb(), $_GET['keywords']);
    //var_dump($search_by_name);
    
    
    if(empty($search_by_name)){
        echo "no results found";
    }
    foreach($search_by_name as $s) {
     echo "<a href = '$s->name'>" .  $s->name ."</a>"."</br>";
    }
    //echo "Please Enter Search Query";
}

    
} 



 ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Search</title>
</head>
<body>
    <form action="search.php" method="get">
        <label>Search
        <input type="text" name="keywords" autocomplete="off">
        </label>
        
        <input type="submit" value="Search">
    </form>
    
</body>
</html>


