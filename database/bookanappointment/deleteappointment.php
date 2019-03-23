<?php
//echo "Delete";
require_once '../../menu/Database.php';
require_once '../../class/Appointment.php';

if(isset($_POST['id'])){
	$id= $_POST['id'];
	$db = Database::getDb();
	
	$s = new Appointment();
	$count = $s->deleteAppointment($id, $db);
	if($count) {
		echo "Appointment Deleted";
		header("Location: ../../listappointments.php");
	}
	else{
		echo "Problem deleting appointment";
	}
}

?>