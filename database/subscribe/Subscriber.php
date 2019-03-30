<?php
class Subscriber
{   
	 public function getSubscriberById($id, $db)
	 {
        $sql = "SELECT * FROM subscribers where id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();
        return $pst->fetch(PDO::FETCH_OBJ);
    }
	public function getAllSubscribers($dbcon){
		$sql = "SELECT * FROM subscribers";

		$pdostm = $dbcon->prepare($sql);
		$pdostm->execute();
		$Subscribers = $pdostm->fetchAll(PDO::FETCH_OBJ);

		return $Subscribers;
	}

	public function addSubscriber($emailid,$db)
	{

		
        $dbcon = Database::getdb();
		$sql = "INSERT INTO subscribers (emailid) VALUES (:emailid)";
		$pst = $db->prepare($sql);
		$pst->bindParam(':emailid',$emailid);
		$count = $pst->execute();
		return $count;
	}
	public function deleteSubscriber($id,$db)
	{

		

		$sql = "DELETE FROM subscribers WHERE id = :id";
		$pst = $db->prepare($sql);
		$pst->bindParam(':id',$id);
		$count = $pst->execute();
		return $count;
	}
	public function updateSubscriber($id,$emailid,$db)
	{
		$sql = "UPDATE subscribers 
               set emailid = :emailid
                   WHERE id = :id ";
        $pst = $db->prepare($sql);
		$pst->bindParam(':id',$id);
		$pst->bindParam(':emailid',$emailid);
		$count = $pst->execute();
		return $count;
	}

}
?>