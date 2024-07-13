<?php
include('../includes/headers.php'); 
include('navbar.php'); 

?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">
  

	<div class="container-fluid">

<?php
    if(isset($_POST['edit_btn']))
	{
	$teacher_id = $_POST['teacher_id'];
	
	$query = "SELECT * FROM sign WHERE teacher_id='$teacher_id'";
	$query_run = mysqli_query($con, $query);

	foreach($query_run as $row)
	{
		?>
		<div id="frmRegistration">
		<form class="form-horizontal" action="" onsubmit="return checkForm();" method="POST" enctype="multipart/form-data">
		<div class="form-group">
                <label class="control-label col-sm-2" for="teacher_id"> ID </label>
                <div class="col-sm-6">
				<input type="text" name="teacher_id" value="<?php echo $row['teacher_id']?>" class="form-control" readonly>
            </div>
            </div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="name"> Name </label>
                <div class="col-sm-6">
				<input type="text" name="name" id="letters" value="<?php echo $row['name']?>" class="form-control" required>
            </div>
			</div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username</label>
                <div class="col-sm-6">
				<input type="text" name="username" value="<?php echo $row['username']?>" class="form-control" maxlength="8" style="text-transform: lowercase" required>
            </div>
			</div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password</label>
                <div class="col-sm-6">
				<input type="text" name="password" id="password" value="<?php echo $row['password']?>" class="form-control" maxlength="8" style="text-transform: lowercase" required>
            </div>
			</div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="location">Occupation location</label>
                <div class="col-sm-6">
				<input type="text" name="location" value="<?php echo $row['location']?>" class="form-control" required>
            </div>
			</div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="birthdate">Birthday</label>
                <div class="col-sm-6">
				<input type="date" name="birthdate" value="<?php echo $row['birthdate']?>" class="form-control" required>
            </div>
			</div>
        <div class="form-group">
                <label class="control-label col-sm-2" for="gender">Gender</label>
                <div class="col-sm-6">
				<select name="gender"  class="form-control" required>
				<option value="<?php echo $row['gender'];?>"><?php echo $row['gender']?></option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				</select>
            </div>
			</div>
		<div class="form-group">
                <label class="control-label col-sm-2" for="Age">Age</label>
                <div class="col-sm-6">
				<input type="number" name="age" value="<?php echo $row['age']?>"  class="form-control" required>
            </div>
			</div>
		<div class="form-group">
                <label class="control-label col-sm-2" for="Age">Office Location</label>
                <div class="col-sm-6">
				<input type="text" name="address" id="letters" value="<?php echo $row['address']?>"  class="form-control" required>
            </div>
			</div>	
			<div class="form-group">
                <label class="control-label col-sm-2" for="major">Major Subjects</label>
                <div class="col-sm-6">
				<input type="text" name="major" id="letters" value="<?php echo $row['major']?>" class="form-control" required>
            </div>
			</div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="time">Time</label>
				<div class="col-sm-6">
                <input type="text" name="hours" value="<?php echo $row['hours']?>" class="form-control" required>
			</div>
			</div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="time">Elementary Year</label>
				<div class="col-sm-6">
                <input type="text" name="elem_year" value="<?php echo $row['elem_year']?>" class="form-control" required>
			</div>
			</div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="educ_bg1">Elementary</label>
				<div class="col-sm-6">
                <input type="text" name="educ_bg1" id="letters" value="<?php echo $row['educ_bg1']?>" rows="3" class="form-control" required>
			</div>
			</div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="time">Highschool Year</label>
				<div class="col-sm-6">
                <input type="text" name="hs_year" value="<?php echo $row['hs_year']?>" class="form-control" required>
			</div>
			</div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="educ_bg1">Highschool</label>
				<div class="col-sm-6">
                <input type="text" name="educ_bg2" id="letters" value="<?php echo $row['educ_bg2']?>" rows="3" class="form-control" required> 
			</div>
			</div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="time">Tertiary Year</label>
				<div class="col-sm-6">
                <input type="text" name="co_year" value="<?php echo $row['co_year']?>" class="form-control" required>
			</div>
			</div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="educ_bg1">Tertiary</label>
				<div class="col-sm-6">
                <input type="text" name="educ_bg3" rows="3" id="letters" value="<?php echo $row['educ_bg3']?>" class="form-control" required>
			</div>
			</div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="educ_bg1">Course</label>
				<div class="col-sm-6">
                <input type="text" name="course" rows="3" id="letters" value="<?php echo $row['course']?>" class="form-control" required>
			</div>
			</div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="educ_bg1">Experience</label>
				<div class="col-sm-6">
                <textarea type="text" name="experience" class="form-control" required> <?php echo $row['experience']?></textarea>
			</div>
			</div>			
			<div class="form-group">
            <label class="control-label col-sm-2" for="image">Picture</label>
             <div class="col-sm-6">
			 <input type="file" name="image" id="image" value="<?php echo $row['image']?>">
        </div>
		</div>
        <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
            <a href="nextadmin.php" class="btn btn-danger">Close</a>
            <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
        </div>
		</div>
	</form>
    </div>
		
	
	<?php
	}     
	} 	
?>


</div>
</div>
</div>

<?php
if(isset($_POST['updatebtn'])){
	$teacher_id = $_POST['teacher_id'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$location = $_POST['location'];
	$birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$major = $_POST['major'];
	$hours = $_POST['hours'];
	$elem_year = $_POST['elem_year'];
	$educ_bg1 = $_POST['educ_bg1'];
	$hs_year = $_POST['hs_year'];
	$educ_bg2 = $_POST['educ_bg2'];
	$co_year = $_POST['co_year'];
	$educ_bg3 = $_POST['educ_bg3'];
	$course = $_POST['course'];
	$experience = $_POST['experience'];
	
	$image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['tmp_name'];
	
	$teacher_query = "SELECT * FROM sign WHERE teacher_id='$teacher_id'";
	$teacher_query_run = mysqli_query($con, $teacher_query);
	foreach($teacher_query_run as $tr_row)
	{
			if($image == NULL)
			{
				$image = $tr_row['image'];
			} 
			else
			{
				
			}
	}
	
	
	$query= "UPDATE sign SET teacher_id='$teacher_id',name='$name',username='$username',password='$password',location='$location',birthdate='$birthdate',gender='$gender',age='$age',address='$address',major='$major',hours='$hours',elem_year='$elem_year',educ_bg1='$educ_bg1',hs_year='$hs_year',educ_bg2='$educ_bg2',co_year='$co_year',educ_bg3='$educ_bg3',course='$course',experience='$experience',image='$image' WHERE teacher_id='$teacher_id'";
	$query_run = mysqli_query($con, $query);
	
	if($query_run){
		
		if($image == NULL)
			{
				$_SESSION['status'] = "Teacher Data Update Success";
				$_SESSION['status_code'] = "success";
				header("Location: nextadmin.php");
			} 
			else
			{
			move_uploaded_file($image_tmp,"../uploads/".$_FILES['image']['name']);
			$_SESSION['status'] = "Teacher Data Update Success";
    		$_SESSION['status_code'] = "success";
			header("Location: nextadmin.php");
			}		
	}
	else{
		$_SESSION['status'] = "Teacher Data Update Not Success";
    	$_SESSION['status_code'] = "error";
		header("Location: nextadmin.php");
	}
	
}
?>

  <!-- Content Row -->
<?php
include('../includes/footer.php');
?>

<script>
$(document).on('keypress', '#letters', function (event) {
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