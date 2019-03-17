<?php

class Menu{

  public function getAllMenus($dbcon){
		$sql = "SELECT * FROM services";
		$pdostm = $dbcon->prepare($sql);
		$pdostm->execute();
		$menus = $pdostm->fetchAll(PDO::FETCH_OBJ);
		return $menus;    
  }



}


?>