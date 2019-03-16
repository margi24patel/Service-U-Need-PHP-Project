<!--Add Employee Client Side(Employee will applay for a job ) -->
<?php


echo " <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";
    
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";

echo "<!-- Font Awesome -->
          <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>";
     //Margi - Custom files
echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";
echo "<link rel='stylesheet' href='styles/addemployee_client_index.css'>";

?>


<!-- header -->
<?php require_once 'body/header.php' ?>

<!-- main -->
<main id="addemployee_client_index">
<div class="container">
    <h1>Employment Form</h1>

    
<div class="container">
<form action=""  class="form-horizontal">
    
    <div class="form-group">
        <label class="control-label col-sm-2" for="employee_f_name"> Employee First Name:</label>
        <div class="col-sm-6">
            <input type="textbox" name="employee_f_name" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="employee_l_name"> Employee Last Name:</label>
        <div class="col-sm-6">
            <input type="textbox" name="employee_l_name" class="form-control"/>
        </div>
    </div>
    
    <div class="form-group">
       <label class="control-label col-sm-2" for="streetname">Street Name:</label>
       <div class="col-sm-6">
            <input type="text" name="streetname" class="form-control" />
       </div>
    </div>
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="city">City:</label>
      <div class="col-sm-6">
            <input type="text" name="city"  class="form-control" />
      </div>
    </div>
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="province">Province:</label>
      <div class="col-sm-6">  
            <input type="text" name="province"  class="form-control" />
        </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="postal_code">Postal Code:</label>
        <div class="col-sm-6">
            <input type="text" name="postal_code" class="form-control" />
        </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email_id">Email Id:</label>
        <div class="col-sm-6">
        <input type="text" name="email_id" class="form-control" />
        </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone_no">Phone No:</label>
        <div class="col-sm-6">
        <input type="text" name="phone_no" class="form-control" />
        </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="availability">Availibility:</label>
        <div class="col-sm-6">
        <input type="text" name="availability" class="form-control" />
        </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    
</form>
</div>
</div>
</main>

<!-- footer -->
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>