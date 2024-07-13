
  <!-- Content Row -->
<div class="modal fade" id="splitModal<?php echo $fetch['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Split Transaction</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
           <div class="modal-body">
               <div class="form-group">
                <label class="control-label" for="username">Department</label>     
                <input type="hidden" name="id" id="id" value="<?php echo $fetch['id']; ?>">
                <input type="text" name="department" class="form-control" id="department" value="<?php echo $fetch['department'] ?>" placeholder="Department" maxlength="50" required>
               </div>
               <div class="form-group">
               <label class="control-label" for="username">Customer</label>
               <input type="text" name="customer" class="form-control" id="customer" value="<?php echo $fetch['customer'] ?>" placeholder="Customer" maxlength="50" required>
               </div>
               <div class="form-group">
               <label class="control-label" for="username">Lot Number</label>
               <input type="number" name="lot_number" class="form-control" id="lot_number" value="<?php echo $fetch['lot_number'] ?>" placeholder="Lot Number" maxlength="10" required>
               </div>
               <div class="form-group">
               <label class="control-label" for="username">Outflow</label>
               <input type="number" name="outflow" class="form-control" id="outflow" value="<?php echo $fetch['outflow'] ?>" placeholder="Outflow" required>
               </div>
               <div class="form-group">
               <label class="control-label" for="username">Inflow</label>
               <input type="number" name="inflow" class="form-control" id="inflow" value="<?php echo $fetch['inflow'] ?>" placeholder="Inflow" value="50" required readonly>
               </div>
               <div class="form-group">
               <label class="control-label" for="username">Balance</label>
               <input type="number" name="balance" class="form-control" id="balance" value="<?php echo $fetch['balance']; ?>" required>
               </div>
           </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="update_button" id="update_button" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
    $(function(){
            $('#outflow, #inflow, #balance').keyup(function(){
               var inflow = parseFloat($('#inflow').val()) || 50;
               var outflow = parseFloat($('#outflow').val()) || 0;
               $('#balance').val(outflow - inflow);
            });
         });
</script>

<?php
if (isset($_POST['update_button'])) {
  $query = "UPDATE `split_transaction` SET `department` = :department, `customer` = :customer, lot_number = :lot_number, outflow = :outflow, inflow = :inflow, balance = :balance WHERE `id` = :id";
  $pdoResult = $dbh->prepare($query);
  $pdoResult->bindValue(":department", $_POST['department']);
  $pdoResult->bindParam(":customer", $_POST['customer']);
  $pdoResult->bindParam(":lot_number", $_POST['lot_number']);
  $pdoResult->bindParam(":outflow", $_POST['outflow']);
  $pdoResult->bindParam(":inflow", $_POST['inflow']);
  $pdoResult->bindParam(":balance", $_POST['balance']);
  $pdoResult->bindParam(":id", $_POST['id']);
  $result = $pdoResult->execute();
  
  if($result) {
      header('Location: user_split_transaction_home.php');
    }
}

?>

