<?php 
include('../includes/headers.php'); 
include('../includes/navbar.php'); 
?>

<div class="container">
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">


	<div class="container-fluid">

<div id="frmRegistration">

<form class="form-horizontal" action="" enctype="multipart/form-data" method="POST">
	
	<div class="form-group">
    <label class="control-label col-sm-2" for="current_password">Cureent Password:</label>
    <div class="col-sm-6">
      <input type="password" name="current_password" class="form-control" id="current_password" placeholder="Enter Current Password" maxlength="8" style="text-transform: lowercase" required>
	  <span toggle="#current_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	</div>
  </div>
	<div class="form-group">
    <label class="control-label col-sm-2" for="new_password">New Password:</label>
    <div class="col-sm-6">
      <input type="password" name="new_password" class="form-control" id="new_password" placeholder="Enter New Password" maxlength="8" style="text-transform: lowercase" required>
	  <span toggle="#new_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>	
	</div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="new_password_again">Retype Password:</label>
    <div class="col-sm-6">
      <input type="password" name="new_password_again" class="form-control" id="new_password_again" placeholder="Enter New Password Again" maxlength="8" style="text-transform: lowercase" required>
	  <span toggle="#new_password_again" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	</div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="changebtn" class="btn btn-primary">Change Password</button>
	</div>
  </div>
</form>
</div>
</div>

</div>
</div>

<?php
include('../includes/scripts.php'); 
include('../includes/footer.php'); 

?>

<script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>

<?php

if (isset($_POST['changebtn'])) {
    
    try {       
        $user = $_SESSION['first_name'];
        $current_pass = $_POST['current_password'];
        $new_pass = $_POST['new_password'];
        $new_pass_again = $_POST['new_password_again'];

        $query = "SELECT * FROM `account` WHERE first_name = :first_name AND password = :password";
        $stmt = $dbh->prepare($query); 
        $stmt->execute(array(':first_name' => $user, ':password'=> $current_pass));
        $check_pass =$stmt->fetchColumn();

        if($check_pass==0){
            echo "<script>alert('Your current Password is wrong!')</script>";
            exit();
        }
        
        if($new_pass!=$new_pass_again){
            echo "<script>alert('Your new Password is wrong!')</script>";
            exit();
        }
        else{
            $query = "UPDATE `account` SET password = :password WHERE `first_name` = :first_name";
            $pdoResult = $dbh->prepare($query);
            $pdoResult->bindParam(":password", $new_pass);
            $pdoResult->bindParam(":first_name", $user);
            $result = $pdoResult->execute();
    
                $_SESSION['action'] = "Welcome $_SESSION[last_name]";
                $_SESSION['action_code'] = "success";
                header('Location: ../user/user_dashboard.php');
        }

      
    
    } catch (\Throwable $th) {
        echo 'Caught exception: ',  $th->getMessage(), "\n";
    }
}

?>