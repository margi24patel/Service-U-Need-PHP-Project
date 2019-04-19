<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/database/Database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/ServiceProviderRegistration.php');
if(isset($_POST['id'])){
	$id= $_POST['id'];
	$db = Database::getDb();
	
	$s = new ServiceProviderRegistration();
	$count = $s->deleteServiceProvider($id, $db);
	if($count) {
		echo "Service Provider Deleted";
		header("Location: ../../listserviceproviders_admin.php");
	}
	else{
		echo "Problem deleting Service Provider";
	}
}

?>