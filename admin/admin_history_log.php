<?php
include('../includes/headers.php'); 
include('../includes/admin_navbar.php'); 

$query = "SELECT * FROM login_history";
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
  <h6 class="m-0 font-weight-bold text-primary"> Login History
    </h6> 
	</div>
    <div class="card-body">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
          <tr>
            <th>Username</th>
			      <th>User Date</th>
            <th>Time In</th>
            <th>Time Out</th>
          </tr>
        </thead>
	<tbody>
		<?php
			foreach($staff as $fetch)
			{
			?>
          <tr>  
                <td> <?php echo $fetch["username"]; ?> </td>
				<td> <?php echo $fetch["user_date"]; ?></td>
                <td> <?php echo $fetch["time_in"]; ?> </td>                            
                <td> <?php echo $fetch["time_out"]; ?> </td>
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
</script>