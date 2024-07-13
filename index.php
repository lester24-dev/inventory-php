<?php
include('includes/header.php'); 
?>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
              <img src="uploads/default.png" alt="Avatar" width="150px">
              </div>
              <br>
                <form class="user" action="includes/amkor_code.php" onsubmit="return checkForm();" method="POST">

                    <div class="form-group">
                    <input type="text" name="first_name" id="first_name" style="text-transform: capitalize;" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" class="form-control form-control-user" placeholder="Enter First Name..." required>
                    </div>
                    <div class="form-group">
                    <input id="password" type="password" name="password" class="form-control form-control-user" maxlength="8" placeholder="Enter Password" required>
					          <br>
					          <input type="checkbox" onclick="myFunction()"/> Show Password 
                    <br/>
                    <br/>    
                    <button type="submit" name="login_button" id="login_button" class="btn btn-primary btn-user btn-block"> Login </button>
                    <hr>
                    <div class="text-center">
                    <a href="#">Forgot Password</a><br/>
                    <a href="user_registration.php">Sign Up Now</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script>
function checkForm() {
    var PsWd = document.getElementById('password');

    if (PsWd.value.length < 8) {
        alert('The password length needs to be 8 characters.');
        return false;
    } else {
        return true;
    }
}
</script>