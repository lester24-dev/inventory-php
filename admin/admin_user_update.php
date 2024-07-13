<?php
include('../includes/headers.php'); 
include('../includes/admin_navbar.php'); 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">


	<div class="container-fluid">

    <?php
    if (isset($_GET['id'])) {
      // Prepare statement and execute, prevents SQL injection
      $id = $_GET['id'];
      $stmt = $dbh->prepare("SELECT * FROM account WHERE id = '$id'");
      $stmt->execute();
      // Fetch the product from the database and return the result as an Array
      $in = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach($in as $fetch)
	{
    ?>

<div id="frmRegistration">

<form class="form-horizontal" action="" onsubmit="return checkForm();" enctype="multipart/form-data" method="POST">
	
<div class="row g-3">
    <div class="col-md-6">
      <label class="control-label" for="username">Last Name:</label>
      <input type="hidden" name="id" id="id" value="<?php echo $fetch['id'];?>">
      <input type="text" name="last_name" class="form-control" style="text-transform: capitalize;" id="name" value="<?php echo $fetch['last_name'];?>" placeholder="Last Name" maxlength="50" required>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">First Name:</label>
      <input type="text" name="first_name" class="form-control" id="name" style="text-transform: capitalize;" value="<?php echo $fetch['first_name'];?>" placeholder="First Name" maxlength="50" required>
    </div>
    <br/>
    <br/>
    <div class="col-md-6">
    <label class="control-label" for="username">Gender:</label>
    <select name="gender"  class="form-control" required>
		<option value="<?php echo $fetch['gender'];?>"><?php echo $fetch['gender']; ?></option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
		</select>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">Age:</label>
      <input type="number" name="age" class="form-control" id="age" value="<?php echo $fetch['age'];?>" placeholder="Enter Age" maxlength="2" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Birthdate:</label>
    <input type="date" name="birthdate" class="form-control" id="birthdate" value="<?php echo $fetch['birthdate'];?>" placeholder="Enter Birthday" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Username:</label>
    <input type="text" name="username" class="form-control" id="username" value="<?php echo $fetch['username'];?>" placeholder="Enter Username" maxlength="8" style="text-transform: lowercase"  required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Password:</label>
    <input type="password" name="password" class="form-control" id="password" value="<?php echo $fetch['password'];?>" placeholder="Enter Password" maxlength="8" style="text-transform: lowercase" required>
    </div>
    <div class="col-md-6">
    <label class="control-label" for="username">Retry Password:</label>
    <input type="password" name="re-password" class="form-control" id="re-password" placeholder="Enter Password" maxlength="8" style="text-transform: lowercase">
    </div>
    <br/>
    <div class="col-12">
    <label class="control-label" for="username">What is your favorite sports ?</label>
    <input type="text" name="quest1" class="form-control" id="quest1" value="<?php echo $fetch['quest1'];?>" placeholder="Answer 1" maxlength="50" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">What is your favorite color ?</label>
    <input type="text" name="quest2" class="form-control" id="quest2" value="<?php echo $fetch['quest2'];?>" placeholder="Answer 2" maxlength="50" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">What is average range of your Grade?</label>
    <input type="text" name="quest3" class="form-control" id="quest3" value="<?php echo $fetch['quest3'];?>" placeholder="Answer 3" maxlength="50" required>
    <input type="hidden" name="status" value="<?php echo $fetch['status'];?>" id="status">
  </div>

</div>
<br/>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="update_user" id="update_user" class="btn btn-primary">Update</button>
    <a href="admin_user_register.php" class="btn btn-danger">Close</a>
	</div>
  </div>
</form>
<?php 
    }
}
?>
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

<?php
if (isset($_POST['update_user'])) {
  $query = "UPDATE `account` SET `last_name` = :last_name, `first_name` = :first_name, gender = :gender, age = :age, birthdate = :birthdate, username = :username, password = :password, quest1 = :quest1, quest2 = :quest2, quest3 = :quest3, status = :status WHERE `id` = :id";
  $pdoResult = $dbh->prepare($query);
  $pdoResult ->bindParam(":last_name",ucwords($_POST["last_name"]));
  $pdoResult ->bindParam(":first_name",ucwords($_POST["first_name"]));
  $pdoResult ->bindParam(":gender",$_POST["gender"]);
  $pdoResult ->bindParam(":age",$_POST["age"]);
  $pdoResult ->bindParam(":birthdate",$_POST["birthdate"]);
  $pdoResult ->bindParam(":username",$_POST["username"]);
  $pdoResult ->bindParam(":password",$_POST["password"]);
  $pdoResult ->bindParam(":quest1",ucwords($_POST["quest1"]));
  $pdoResult ->bindParam(":quest2",ucwords($_POST["quest2"]));
  $pdoResult ->bindParam(":quest3",ucwords($_POST["quest1"]));
  $pdoResult ->bindParam(":status",$_POST["status"]);
  $pdoResult->bindParam(":id", $_GET['id']);
  $result = $pdoResult->execute();
  
  if($result) {
      header('Location: admin_user_register.php');
    }
}

?>