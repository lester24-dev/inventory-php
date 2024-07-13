<?php
include('../includes/headers.php'); 
include('../includes/navbar.php'); 

?>

<?php
$query = "SELECT * FROM in_going";
$stmt = $dbh->prepare($query); 
$stmt->execute();
$in = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Content Row -->
<div class="row">
    <div class="container-fluid">
    <!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary"> In Going List
  <a href="user_in_going.php" button type="button" class="btn btn-primary float-right">Add In Going</button></a>
  </h6> 
	</div>
    <div class="card-body">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
          <tr>
            <th>Customer Code</th>
			      <th>Customer Name</th>
            <th>Plate Number</th>
            <th>Country Origin</th>
            <th>Driver</th>
            <th>Upate</th>
            <th>Delete</th>
          </tr>
        </thead>
	<tbody>
		<?php
			foreach($in as $fetch)
			{
			?>
          <tr>  
                <td> <?php echo $fetch["customer_code"]; ?> </td>
				        <td> <?php echo $fetch["customer_name"]; ?></td>
                <td> <?php echo $fetch["plate_number"]; ?> </td>                            
                <td> <?php echo $fetch["country_origin"]; ?> </td>
                <td> <?php echo $fetch["driver"]; ?> </td>
                <td><a href="user_in_going_update.php?in&id=<?php echo $fetch['id']; ?>"><button type="button" class="btn btn-success"> Update </button></a></td>
                <td><button type="button" value="<?php echo $fetch['id']; ?>" class="btn btn-danger deletebtn">Delete</button></td>
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
<!-- /.container-fluid -->
  <!-- Content Row -->

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
</script>

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
        <input type="hidden"  name="id"  class="form-control id">
        <div class="modal-body">Are you sure want you delete?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<button type="submit" name="delete_in"  class="btn btn-danger"> Yes </button>
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
  $(document).ready(function (){
          $('.deletebtn').click(function (e) {
          e.preventDefault();

          var delete_id = $(this).val();
          $('.id').val(delete_id);
          $('#deleteModal').modal('show');
          });
        });
</script>
