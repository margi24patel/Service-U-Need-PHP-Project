<?php //class employee - Model

class Employee_client
{
    //to reuse this method again
    //to get list of employees who appiled for a job
    public function getAllEmployees($dbcon)
    {
        
        $sql = "SELECT * FROM job_apply_employee_client_side"; //sql query to get list of employees
      
        $pdostm = $dbcon->prepare($sql); //prepare statement

        $pdostm->execute();  //execute  

        $employees = $pdostm->fetchAll(PDO::FETCH_OBJ); //Fetch as an object


        return $employees; //return all employees
    }
    
    
    //add Employee for an Employee will submit form with all details for particular position
    public function addEmployee($job_id, $employee_f_name, $employee_l_name, $streetname, $city, $province, $postal_code, $email_id, $phone_no,                                 $availability, $dbcon)
    {
        $sql = "INSERT INTO job_apply_employee_client_side (job_id, employee_firstname, employee_lastname, streetname, city,                             province, postal_code, email_id, phone_no, availability )
                VALUES(:job_id, :employee_firstname, :employee_lastname, :streetname, :city, :province, :postal_code, :email_id, :phone_no, :availability)"; //sql query to insert all details for an employee and also which post applied for (means job_id as a foreign key from JobPosition_admin table) 
    
    $pst = $dbcon->prepare($sql); //prepare statement 
    
    // to bind all parameter
    $pst->bindParam(':job_id', $job_id); // foreign key from JobPosition_admin table
    $pst->bindParam(':employee_firstname', $employee_f_name);
    $pst->bindParam(':employee_lastname', $employee_l_name);
    $pst->bindParam(':streetname', $streetname);
    $pst->bindParam(':city', $city);
    $pst->bindParam(':province', $province);
    $pst->bindParam(':postal_code', $postal_code);
    $pst->bindParam(':email_id', $email_id);
    $pst->bindParam(':phone_no', $phone_no);
    $pst->bindParam(':availability', $availability);
    
    
    $count = $pst->execute();//execute prepare statement
    return $count;  //return 1 get answer if 0 there is error
    
    }
    
    
    //to delete Employee
     public function deleteEmployee($id, $dbcon){
        $sql = "DELETE FROM job_apply_employee_client_side WHERE id = :id"; // query to delete an employee by using a particular id of an emplyee
        

        $pst = $dbcon->prepare($sql); // prepare statement
        $pst->bindParam(':id', $id); // bind a paramater id
        $count = $pst->execute(); // execute preapare statement
        return $count; //return 1 get answer if 0 there is error

    }
    
    
    public function getAllEmployeesWithDetails($dbcon)
    {
        
        $sql = "SELECT employee_firstname, employee_lastname, job_id, streetname, city, province, postal_code, email_id, phone_no,                     availability, c.id, a.job_title
                FROM job_apply_employee_client_side c
                JOIN job_post_admin_side a
                ON c.job_id = a.id
                ORDER BY job_id"; //sql query to get list of employees
      
        $pdostm = $dbcon->prepare($sql); //prepare statement

        $pdostm->execute();  //execute  

        $employeesdetails = $pdostm->fetchAll(PDO::FETCH_OBJ); //Fetch as an object


        return $employeesdetails; //return all employees
    }
       
}

?>