<?php
include('../includes/headers.php'); 
include('../includes/navbar.php'); 

?>

<?php
$query = "SELECT * FROM `return_transaction`";
$stmt = $dbh->prepare($query); 
$stmt->execute();
$return = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Begin Page Content -->
<div class="container-fluid">
<div class="row">
<div class="container-fluid">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Insert Return Transaction</h6>
</div>
<div class="card-body">
<div id="frmRegistration">

<form class="form-horizontal" action="../includes/amkor_code.php" method="POST">
  <div class="row g-3">
  <div class="col-md-4">
        <label class="control-label" for="username">Returns</label>
        <input type="number" name="returns" class="form-control" id="returns" value="50" readonly>
      </div>
      <div class="col-md-4">
        <label class="control-label" for="username">Inflow:</label>
        <input type="number" name="inflow" class="form-control" id="inflow" required>
      </div>
      <div class="col-md-4">
        <label class="control-label" for="username">Balance:</label>
        <input type="number" name="balances" class="form-control" id="balances" required readonly>
      </div>
      <div class="col-md-6">
      <label class="control-label" for="username">Remarks:</label>
      <textarea name="remark" id="remark" class="form-control" cols="80" rows="10" style="width:1190px;" required></textarea>  
      </div>
      <br/>
  </div>
  <br/>
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="return_button" class="btn btn-primary">Submit</button>
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
  <h6 class="m-0 font-weight-bold text-primary"> Return List
  </h6> 
	</div>
    <div class="card-body">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
          <tr>
            <th>Return</th>
            <th>Inflow</th>
            <th>Balance</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
	<tbody>
		<?php
			foreach($return as $fetch)
			{
			?>
          <tr>  
                <td> <?php echo $fetch["returns"]; ?> </td>                            
                <td> <?php echo $fetch["inflow"]; ?> </td>
                <td> <?php echo $fetch["balances"]; ?> </td>
                <td> <button class="btn btn-success" data-toggle="modal" type="button" data-target="#returntModal<?php echo $fetch['id']?>"> Edit</button> </td>
                <td><button type="button" value="<?php echo $fetch['id']; ?>" class="btn btn-danger deletebtn">Delete</button></td>
          </tr>
			<?php
      include('user_return_transaction_update.php');
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
        <input type="hidden"  name="id"  class="form-control id">
        <div class="modal-body">Are you sure want you delete?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<button type="submit" name="delete_return"  class="btn btn-danger"> Yes </button>
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
    $(function(){
            $('#inflow, #returns, #balances').keyup(function(){
              var inflow = parseFloat($('#inflow').val()) || 0;
               var returns = parseFloat($('#returns').val()) || 50;
               $('#balances').val(parseInt(returns - inflow));
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