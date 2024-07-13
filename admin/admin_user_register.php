<?php
include('../includes/headers.php'); 
include('../includes/admin_navbar.php'); 

?>

<?php
$query = "SELECT * FROM account WHERE status='user'";
$stmt = $dbh->prepare($query); 
$stmt->execute();
$staff = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Content Row -->
<div class="row">
    <div class="container-fluid">
    <!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary"> User Registration List
    </h6> 
	</div>
    <div class="card-body">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
          <tr>
            <th>Last Name</th>
			<th>First Name</th>
            <th>Gender</th>
            <th>Age</th>
			<th>Birthday</th>
            <th>Username</th>
            <th>Password</th>
            <th>Update </th>
			<th>Delete </th>
          </tr>
        </thead>
	<tbody>
		<?php
			foreach($staff as $fetch)
			{
			?>
          <tr>  
                <td> <?php echo $fetch["last_name"]; ?> </td>
				<td> <?php echo $fetch["first_name"]; ?></td>
                <td> <?php echo $fetch["gender"]; ?> </td>                            
                <td> <?php echo $fetch["age"]; ?> </td>
				<td> <?php echo $fetch["birthdate"]; ?> </td>
                <td> <?php echo $fetch["username"]; ?> </td>
                <td> <?php echo $fetch["password"]; ?> </td>
                <td><a href="admin_user_update.php?in&id=<?php echo $fetch['id']; ?>"><button type="button" class="btn btn-success"> Update </button></a></td>
				<td> 
                    <form action ="#" method ="post">
                    <input type="hidden" name="id" value="<?php echo $fetch["id"]; ?>" class="form-control">
					<button type="submit" name="delete_btn" class="btn btn-danger deletebtn"> Delete </button>
					</form>
				</td>
          </tr>
			<?php
			}
        ?>
        </tbody>
      </table>
  </div>
</div>
    </div>
</div>
</div>

 <!-- Delete Modal-->
 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action ="../includes/amkor_code.php" method ="post">
        <input type="hidden" name="id" class="form-control id">
        <div class="modal-body">Are you sure want you delete?</div>
        <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		<button type="submit" name="delete_user"  class="btn btn-danger"> Yes </button>
		</form>
        </div>
      </div>
    </div>
  </div>

<!-- /.container-fluid -->
  <!-- Content Row -->
  <?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>

<script>
$(document).ready(function() {

    $('#dataTable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }
    });

} );

$(document).ready(function (){
          $('.deletebtn').click(function (e) {
          e.preventDefault();

          var delete_id = $(this).val();
          $('.id').val(delete_id);
          $('#deleteModal').modal('show');
          });
        });

</script>