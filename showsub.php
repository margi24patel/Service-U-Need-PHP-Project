<?php
require_once 'class/Menu.php';
require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/database/Database.php');
          if(!empty($_POST["service_id"])){
            $sb = new Submenu();

            $mymenu = $sb->getAllSubMenus(Database::getDb(),$_POST["service_id"]);
            $str="";
	    foreach($mymenu as $menu) {
              $str.='<option value="'.$menu->id.'">'.$menu->name.'</option>';
            }
          }else{
            $str.='<option value="">Subservice not available</option>';
          }
	  echo $str;	
          ?>
