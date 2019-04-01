<?php

class Client
{
	public function addClients($client_firstname,$client_lastname,$user_name,$password, $emailid, $phone_number,$street_name,$city,$postalcode, $db)
    {
        $sql = "INSERT INTO client_registrations (client_firstname,client_lastname,user_name,password,emailid, phone_number,street_name,city,postalcode) 
              VALUES (:client_firstname,:client_lastname,:user_name,:password,:emailid,:phone_number,:street_name,:city,:postalcode) ";

        $pst = $db->prepare($sql);

        $pst->bindParam(':client_firstname', $client_firstname);
        $pst->bindParam(':client_lastname', $client_lastname);
        $pst->bindParam(':user_name', $user_name);
        $pst->bindParam(':password', $password);
        $pst->bindParam(':emailid', $emailid);
        $pst->bindParam(':phone_number', $phone_number);
        $pst->bindParam(':street_name', $street_name);
        $pst->bindParam(':city', $city);
        $pst->bindParam(':postalcode', $postalcode);

        $count = $pst->execute();
        return $count;
    }

  public function deleteClient($id,$db)
    {

     $sql = "DELETE FROM client_registrations WHERE id = :id";
     $pst = $db->prepare($sql);
     $pst->bindParam (':id',$id);
     $count = $pst->execute();

     return $count;

    }

    public function getAllClients($db){
      
      $sql = "SELECT * FROM client_registrations";

      $pst = $db->prepare($sql);
      $pst->execute();

      $Clients = $pst->fetchAll(PDO::FETCH_OBJ);


      return $Clients;
      }

    public function updateClient($id,$client_firstname,$client_lastname,$user_name,$password, $emailid, $phone_number,$street_name,$city,$postalcode, $db)
    {
    
        $sql = "UPDATE client_registrations
               set client_firstname = :client_firstname,
                   client_lastname = :client_lastname,
                   user_name = :user_name,
                   password = :password,
                   emailid  = :emailid,
                   phone_number = :phone_number,
                   street_name = :street_name,
                   city = :city,
                   postalcode = :postalcode
                   WHERE id = :id ";

        $pst = $db->prepare($sql);
        
        $pst->bindParam(':client_firstname',$client_firstname);
        $pst->bindParam(':client_lastname',$client_lastname);
        $pst->bindParam(':user_name',$user_name);
        $pst->bindParam(':password',$password);
        $pst->bindParam(':emailid',$emailid);
        $pst->bindParam(':phone_number',$phone_number);
        $pst->bindParam(':street_name',$street_name);
        $pst->bindParam(':city',$city);
        $pst->bindParam(':postalcode',$postalcode);
        $pst->bindParam(':id',$id);
        $count = $pst->execute();

        return $count;

     }

     public function getClientById($id, $db){
        $sql = "SELECT * FROM client_registrations where id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();
        return $pst->fetch(PDO::FETCH_OBJ);
    } 
}
