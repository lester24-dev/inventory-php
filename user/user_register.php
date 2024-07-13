<?php
session_start();
include('../includes/header.php');
include('../includes/register_navbar.php'); 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">


	<div class="container-fluid">

<div id="frmRegistration">

<form class="form-horizontal" action="../includes/amkor_code.php" onsubmit="return checkForm();" enctype="multipart/form-data" method="POST">
	
<div class="row g-3">
    <div class="col-md-6">
      <label class="control-label" for="username">Last Name:</label>
      <input type="text" name="last_name" class="form-control" style="text-transform: capitalize;" id="name" placeholder="Last Name" maxlength="50" required>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">First Name:</label>
      <input type="text" name="first_name" class="form-control" id="name" style="text-transform: capitalize;" placeholder="First Name" maxlength="50" required>
    </div>
    <br/>
    <br/>
    <div class="col-md-6">
    <label class="control-label" for="username">Gender:</label>
    <select name="gender"  class="form-control" required>
		<option value="">-- Gender --</option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
		</select>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">Age:</label>
      <input type="number" name="age" class="form-control" id="age" placeholder="Enter Age" maxlength="2" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Birthdate:</label>
    <input type="date" name="birthdate" class="form-control" id="birthdate" placeholder="Enter Birthday" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Username:</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" maxlength="8" style="text-transform: lowercase"  required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Password:</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" maxlength="8" style="text-transform: lowercase" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Retry Password:</label>
    <input type="password" name="re-password" class="form-control" id="re-password" placeholder="Enter Password" maxlength="8" style="text-transform: lowercase" required>
    </div>
    <br/>
    <div class="col-12">
    <label class="control-label" for="username">What is your favorite sports ?</label>
    <input type="text" name="quest1" class="form-control" id="quest1" placeholder="Answer 1" maxlength="50" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">What is your favorite color ?</label>
    <input type="text" name="quest2" class="form-control" id="quest2" placeholder="Answer 2" maxlength="50" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">What is average range of your Grade?</label>
    <input type="text" name="quest3" class="form-control" id="quest3" placeholder="Answer 3" maxlength="50" required>
    <input type="hidden" name="status" value="user" id="status">
  </div>

</div>
<br/>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="register" id="register" class="btn btn-primary">Submit</button>
    <a href="../index.php" class="btn btn-danger">Close</a>
	</div>
  </div>
</form>
</div>
</div>

</div>
</div>

<!-- Content Row -->

<?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>

<script>
$(document).on('keypress', '#name', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});
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