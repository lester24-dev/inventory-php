<?php
include('../includes/headers.php'); 
include('../includes/navbar.php'); 

$query = "SELECT * FROM split_transaction";
$stmt = $dbh->prepare($query); 
$stmt->execute();
$split = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- Begin Page Content -->
<div class="container-fluid">
<div class="row">
<div class="container-fluid">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Insert Split Transaction</h6>
</div>
<div class="card-body">
<div id="frmRegistration">

<form class="form-horizontal" action="../includes/amkor_code.php" enctype="multipart/form-data" method="POST">
	
<div class="row g-3">
    <div class="col-md-6">
      <label class="control-label" for="username">Department:</label>
      <input type="text" name="department" class="form-control" id="department" placeholder="Department" maxlength="50" required>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">Customer:</label>
      <input type="text" name="customer" class="form-control" id="customer" placeholder="Customer" maxlength="50" required>
    </div>
    <br/>
    <br/>
    <div class="col-md-6">
      <label class="control-label" for="username">Lot Number:</label>
      <input type="number" name="lot_number" class="form-control" id="lot_number" placeholder="Lot Number" maxlength="10" required>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">Outflow</label>
      <input type="number" name="outflow" class="form-control" id="outflow" placeholder="Outflow">
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">Inflow:</label>
      <input type="number" name="inflow" class="form-control" id="inflow" placeholder="Inflow" value="50" readonly>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="username">Balance:</label>
      <input type="number" name="balance" class="form-control" id="balance" required readonly>
    </div>
    <br/>
</div>
<br/>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="split_transaction" class="btn btn-primary">Submit</button>
	</div>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary"> Split Transaction List
  </h6> 
	</div>
    <div class="card-body">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
          <tr>
            <th>ID</th>
            <th>Department</th>
			      <th>Customer</th>
            <th>Lot Number</th>
            <th>Outflow</th>
            <th>Inflow</th>
            <th>Balance</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
	<tbody>
		<?php
			foreach($split as $fetch)
			{
			?>
          <tr>  <td> <?php echo $fetch["id"]; ?> </td>
                <td> <?php echo $fetch["department"]; ?> </td>
				        <td> <?php echo $fetch["customer"]; ?></td>
                <td> <?php echo $fetch["lot_number"]; ?> </td>                            
                <td> <?php echo $fetch["outflow"]; ?> </td>
                <td> <?php echo $fetch["inflow"]; ?> </td>
                <td> <?php echo $fetch["balance"]; ?> </td>
                <td> <button class="btn btn-success" data-toggle="modal" type="button" data-target="#splitModal<?php echo $fetch['id']?>"> Edit</button> </td>
                <td><!----<a class="dropdown-item" href="#deleteModal<?php echo $fetch['id']; ?>" data-toggle="modal" data-target="#deleteModal"><button type="button" class="btn btn-danger">Delete</button>--->
                <button type="button" value="<?php echo $fetch['id']; ?>" class="btn btn-danger deletebtn">Delete</button></td>
          </tr>
			<?php
        include('user_split_transaction_update.php');
			}
        ?>
        </tbody>
      </table>
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
        <input type="hidden"  name="id"  class="form-control id">
        <div class="modal-body">Are you sure want you delete?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<button type="submit" name="delete_split"  class="btn btn-danger"> Yes </button>
					</form>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</div>
 
<?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>

<script>
    $(function(){
            $('#inflow, #outflow, #balance').keyup(function(){
               var inflow = parseFloat($('#inflow').val()) || 50;
               var outflow = parseFloat($('#outflow').val()) || 0;
               $('#balance').val(outflow - inflow);
            });
         });

$(document).ready(function(){
  $('.deletebtn').on('click', function(){

      $('#deleteModal').modal('show');

         // $tr = $(this).closest('tr');

         // var data = $tr.children("td").map(function(){
         //     return $(this).text();
         // }).get();

         // console.log(data);

         // $('#delete_id').val(data[0]);

  });
});

$(document).ready(function (){
    $('.deletebtn').click(function (e) {
        e.preventDefault();

        var delete_id = $(this).val();
        $('.id').val(delete_id);
        $('#deleteModal').modal('show');
    });
});

</script>