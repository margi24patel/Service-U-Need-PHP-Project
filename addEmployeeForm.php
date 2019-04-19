
<!--Add Employee Client Side(Employee will applay for a job ) -->
<?php

// added for foreign key this 'id' comes  name = 'id' , name='apply' from <div id="applay-job> careere_main_page. 
$post_id = "";
if(isset($_POST['apply'] )){
    $post_id = $_POST['id'];
}


echo " <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";
    
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";

echo "<!-- Font Awesome -->
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>";
     //Margi - Custom files
echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";
echo "<link rel='stylesheet' href='styles/addEmployeeForm.css'>";

?>


<!-- header -->
<?php require_once 'body/header.php' ?>

<!-- main -->
<main id="addemployee_client_index_main">
<div class="container">
    <h1>Employement Form</h1>
<?php
//require_once 'DatabaseEmployeesCareer.php';
require_once 'database/Database.php';
require_once 'class/JobPosition_admin.php';
require_once 'class/Employee_client.php';

    $response_msg=""; //response message

    if(isset($_POST['addemp'])){
       $job_id =$_POST['job_id'];
       $employee_firstname = $_POST['employee_firstname'];
       $employee_lastname = $_POST['employee_lastname'];
       $streetname = $_POST['streetname'];
       $city = $_POST['city'];
       $province = $_POST['province'];
       $postal_code = $_POST['postal_code'];
       $email_id = $_POST['email_id'];
       $phone_no = $_POST['phone_no'];
       $availability = $_POST['availability'];
       
    //VALIDATION
     
    //function for streetname, city, province, availability
    
    function text_validation($value)
    {
        if($value == "")
        {
            return "Please enter value";
        }
        else
        {
            return "";
        }
    }
        
    //function for First Name, Last Name, Postal Code, Phone No., Email Id
   
    function validate($value, $pattern = "")
    {
        if($value == "")
            {
                return "Please enter value";
            }
        elseif(!preg_match($pattern, $value))
            {
                return "Please enter value properly";
            }
        else
            {
                return "";
            }
   }
        //for First Name
        $patternfname = "/^[a-zA-Z ]{2,30}$/";
        $fname_err = validate($employee_firstname, $patternfname);    
        
        //for Last Name
        $patternlname = "/^[a-zA-Z ]{2,30}$/";
        $lname_err = validate($employee_lastname, $patternlname);   
        
        //for Street Name
        $streetname_err = text_validation($streetname);
        
        //for City 
        $city_err = text_validation($city);
        
        //for Province
        $province_err = text_validation($province);
        
        
        //for Postal Code
        $patternPC = "/\w\d\w\s\d\w\d/";
        $pc_err = validate($postal_code,$patternPC);
       
        //for Phone No.
        $patternPhNo = "/\d{10}/"; 
        $ph_err = validate($phone_no,$patternPhNo);
        
        //for Email Id
        $patternEmail = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/"; //reference :https://stackoverflow.com/questions/940577/javascript-regular-expression-email-validation?lq=1
        $email_err = validate($email_id,$patternEmail);
        
        
        //availablity
        $availability_err = text_validation($availability);
        
        
        
        //connection with database
       if(!empty($_POST['employee_firstname']) && !empty($_POST['employee_lastname']) && !empty($_POST['streetname']) && !empty($_POST['city']) && !empty($_POST['province']) && !empty($_POST['postal_code']) && !empty($_POST['email_id']) && !empty($_POST['phone_no']) && !empty($_POST['availability'])){
            
            
            
               //$dbcon = DatabaseEmployeesCareer::getDb();
                $dbcon = Database::getDb();
               $e = new Employee_client();
               $c = $e->addEmployee($job_id, $employee_firstname, $employee_lastname, $streetname, $city, $province, $postal_code, $email_id, $phone_no, $availability, $dbcon);
            
            
            if($c){
                    $response_msg = "Thank You  $employee_firstname $employee_lastname for your Interest! We will response you soon on  $email_id";
            } else {
                    echo "problem adding a employee";
            } 
          
        }
        else{
            echo "Please Fill All Required Fields";
            
        }
       
      }    
    
?>

<form action="" method="post" class="form-horizontal">
    <div class="form-group">
        <input type="hidden" name="job_id" value="<?= $post_id; ?>" /> 
    </div>
    
    <div class="form-group">
        <label class="control-label col-sm-2" for="employee_firstname"> Employee First Name:</label>
        <div class="col-sm-6">
        <input type="textbox" name="employee_firstname" class="form-control" value="<?php
                            if(isset($employee_firstname)){
                                echo $employee_firstname;
                            }
                      ?>" class="form-control"/>
         </div>   
            <span style="color:red;">
            <?php
                if(isset($fname_err)){
                    echo $fname_err;
                }
                ?>
            </span><br /> 
    </div><br><br>

    <div class="form-group">
        <label class="control-label col-sm-2" for="employee_lastname"> Employee Last Name:</label>
        <div class="col-sm-6">
        <input type="textbox" name="employee_lastname" class="form-control" value="<?php
                            if(isset($employee_lastname)){
                                echo $employee_lastname;
                            }
                      ?>" class="form-control"/>
        </div>   
            <span style="color:red;">
            <?php
                if(isset($lname_err)){
                    echo $lname_err;
                }
                ?>
            </span><br /> 
    </div><br><br>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="streetname">Street Name:</label>
      <div class="col-sm-6">    
      <input type="text" name="streetname" value="<?php
                            if(isset($streetname)){
                                    echo $streetname;
                            }
                      ?>" class="form-control"/>
      </div>      
            <span style="color:red;">
            <?php 
                if(isset($streetname_err)){
                    echo $streetname_err;
                }
                ?>
            </span><br />
    </div><br><br>
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="city">City:</label>
      <div class="col-sm-6">        
      <input type="text" name="city"  class="form-control" value="<?php
                            if(isset($city)){
                                    echo $city;
                            }
                      ?>" class="form-control" />
      </div>    
            <span style="color:red;">
            <?php 
                if(isset($city_err)){
                    echo $city_err;
                }
                ?>
            </span><br />
    </div><br><br>
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="province">Province:</label>
      <div class="col-sm-6">            
      <input type="text" name="province" class="form-control" value="<?php
                            if(isset($province)){
                                    echo $province;
                            }
                      ?>" class="form-control" />
        </div>      
            <span style="color:red;">
            <?php 
                if(isset($province_err)){
                    echo $province_err;
                }
                ?>
            </span><br />
    </div><br><br>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="postal_code">Postal Code:</label>
      <div class="col-sm-6">               
      <input type="text" name="postal_code" class="form-control" value="<?php
                            if(isset($postal_code)){
                                    echo $postal_code;
                            }
                      ?>" class="form-control" />&nbsp;&nbsp;(Canada Only)&nbsp;(E.G. M4B 8J6)
      </div>        
            <span style="color:red;">
            <?php 
                if(isset($pc_err)){
                    echo $pc_err;
                }
                ?>
            </span><br />
    </div><br><br>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email_id">Email Id:</label>
      <div class="col-sm-6">       
      <input type="text" name="email_id" class="form-control" value="<?php
                            if(isset($email_id)){
                                echo $email_id;
            }
                      ?>" class="form-control"/>&nbsp;&nbsp;(e.g. me@example.com)
        </div>     
            <span style="color:red;">
            <?php 
                if(isset($email_err)){
                    echo $email_err;
                }
                ?>
            </span><br />
    </div><br><br>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone_no">Phone No:</label>
      <div class="col-sm-6">      
      <input type="text" name="phone_no" class="form-control" value="<?php
                            if(isset($phone_no)){
                                echo $phone_no;
                            }
                      ?>" class="form-control" />&nbsp;&nbsp;(e.g. 4171232757)
      </div>      
            <span style="color:red;">
            <?php
                if(isset($ph_err)){
                    echo $ph_err;
                }
                ?>
            </span><br />
    </div><br><br>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="availability">Availibility:</label>
      <div class="col-sm-6">     
      <input type="date" name="availability" class="form-control" value="<?php
                            if(isset($availability)){
                                    echo $availability;
                            }
                      ?>" class="form-control" />
        </div>     
            <span style="color:red;">
            <?php 
                if(isset($availability_err)){
                    echo $availability_err;
                }
                ?>
            </span><br />
    </div><br><br>
    
   <br>
    
 
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="addemp" value="Submit">Submit</button>
      </div>
    </div>
    
 <!--   <input type="submit" name="addemp" value="Submit" class="btn btn-default"> -->
</form>
    <!-- Response Message -->
   <div id="response_message">
       <?php
           echo $response_msg;
       ?>
    </div> 
  
</div>
</main>

<!-- footer -->
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>