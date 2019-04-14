<?php

class Chat
{
	public function addVisitor($name, $email, $dbcon){

		$sql = "INSERT INTO visitors (name,email)
			VALUES (:name, :email) ";
		$pst = $dbcon->prepare($sql);
		
		$pst->bindParam(':name', $name);
		$pst->bindParam(':email', $email);
		
		$count = $pst->execute();
		
		return $count;

	}

	public function getAllVisitors($dbcon)
	{
		$sql = "SELECT * FROM visitors";

		$pdostm = $dbcon->prepare($sql);
		$pdostm->execute();
		
		$appointments = $pdostm->fetchAll(PDO::FETCH_OBJ);

		return $appointments;
	}



	public function addMessage($visitor_id, $message, $time_stamp, $dbcon){

		$sql = "INSERT INTO visitors (visitor_id,message,time_stamp)
			VALUES (:visitor_id, :message, :time_stamp) ";
		$pst = $dbcon->prepare($sql);
		
		$pst->bindParam(':visitor_id', $visitor_id);
		$pst->bindParam(':message', $message);
		$pst->bindParam(':time_stamp', $time_stamp);
		
		$count = $pst->execute();
		
		return $count;

	}



}