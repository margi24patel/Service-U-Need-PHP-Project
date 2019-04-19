<?php
class CustomerReview{

    
    public function getAllCustomerReviews($dbcon)
    {
       
        //$dbcon = Database::getDb(); 
        
        $sql = "SELECT * FROM customer_review";  

        $pdostm = $dbcon->prepare($sql); //prepare statement

        $pdostm->execute();  //execute 

        $customerreviews = $pdostm->fetchAll(PDO::FETCH_OBJ);


        return $customerreviews;
    }
    
    //Add customerReview
  
    public function addCustomerReview($customer_name, $service_provider_id, $rating, $comment, $date, $dbcon){
        $date = date('Y-m-d H:i:s'); //also use CURRENT_TIMESTAMP insted of date in values 
        $sql = "INSERT INTO customer_review (customer_name, service_provider_id, rating, comment, date)
                VALUES(:customer_name, :service_provider_id, :rating, :comment, :date)";
    
    $pst = $dbcon->prepare($sql); 
    
    //$pst->bindParam(':client_id', $client_id);
    $pst->bindParam(':customer_name', $customer_name);
    $pst->bindParam(':service_provider_id', $service_provider_id);
    $pst->bindParam(':rating', $rating);
    $pst->bindParam(':comment', $comment);
    $pst->bindParam(':date', $date);
    
    
    
    $count = $pst->execute();
    return $count;  //return 1 get answer if 0 there is error
    
    }
    
    
      
    //delete Customer Review(Admin can Delete it)
     public function deleteCustomerReview($id, $dbcon){
        $sql = "DELETE FROM customer_review WHERE id = :id";

        $pst = $dbcon->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;

    }
    
    //get customer review by review id
  /*  public function getReviewById($id, $dbcon){
        $sql = "SELECT * FROM customer_review where id = :id";
        $pst = $dbcon->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();
        return $pst->fetch(PDO::FETCH_OBJ);
    }
    */
    
    //to print service provider names in dropdown list (table service provider) 
    public function getAllServiceProvider($dbcon)
    {
       
        //$dbcon = Database::getDb(); 
        
        $sql = "SELECT * FROM service_providers";  

        $pdostm = $dbcon->prepare($sql); //prepare statement

        $pdostm->execute();  //execute 

        $serviceproviders = $pdostm->fetchAll(PDO::FETCH_OBJ);


        return $serviceproviders;
    }
    
    
    //to print average rating for customer review in Customer Review List Page
    public function getAverageRating($dbcon){
        
        //$sql = "SELECT AVG(rating) AS rating FROM customer_review"; // this query will do average of total(all rate of ids) ratings 
        $sql = "SELECT id, customer_name, service_provider_id, AVG(rating) AS rating, comment, date 
                FROM customer_review 
                WHERE rating >= 3 
                GROUP BY id";
       
        
        $pdostm = $dbcon->prepare($sql); //prepare statement

        $pdostm->execute();  //execute 

        $averageratings = $pdostm->fetchAll(PDO::FETCH_OBJ);


        return $averageratings;
    }
    
    public function getCountRatingServiceProvider($dbcon){
        
        /*$sql = "SELECT id, client_id, customer_name, service_provider_id, AVG(rating) AS rating, comment, date 
                FROM customer_review  cr
                JOIN service_providers sp
                ON cr.service_provider_id = sp.id"; */
        /*$sql = "SELECT name FROM service_providers sp
                JOIN customer_review cr
                ON sp.id = cr.service_provider_id"; */
       /* $sql = "SELECT customer_name, AVG(rating) AS rating, name
                FROM customer_review cr
                JOIN service_providers sp
                ON cr.service_provider_id = sp.id"; */
        $sql = "SELECT AVG(rating) AS rating, sp.name 
                FROM customer_review cr 
                JOIN service_providers sp 
                ON cr.service_provider_id = sp.id
                GROUP BY service_provider_id";
        
        $pdostm = $dbcon->prepare($sql); //prepare statement

        $pdostm->execute();  //execute 

        $averageratingserviceprovider = $pdostm->fetchAll(PDO::FETCH_OBJ);


        return $averageratingserviceprovider;
    }
}

?>