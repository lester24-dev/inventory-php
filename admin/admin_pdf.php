<?php
include('../includes/headers.php'); 
include('navbar.php'); 
include('../includes/db.php');

$query_pdf = "SELECT * FROM pdf";
$query_run_pdf = mysqli_query($con, $query_pdf);

?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> PDF File List
    </h6>
  </div>
  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
	
		
          <tr>
            <th>PDF Name</th>
            <th>Class Section</th>
			<th>Subject</th>
			<th>Advisor</th>
          </tr>
        </thead>
	<tbody>
	
		<?php
					while($fetch = mysqli_fetch_array($query_run_pdf)){
				?>
				<tr>
					<td><?php echo "<a target='_blank' href='../pdfs/view_pdf.php?id=".$fetch['id']."'>".$fetch['pdf_name']."</a>"?></td>
					<td><?php echo $fetch['class_section']?></td>
					<td><?php echo $fetch['subject']?></td>
					<td><?php echo $fetch['teacher_name']?></td>
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
<!-- /.container-fluid -->

<?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>

<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
		"pagingType": "full_numbers",
		"lengthMenu":[
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