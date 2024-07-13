 <!-- Content Row -->
<div class="modal fade" id="returntModal<?php echo $fetch['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Return Transaction</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
           <div class="modal-body">
               <div class="form-group">
               <label class="control-label" for="username">Returns</label>
               <input type="hidden" name="id" id="id" value="<?php echo $fetch['id']; ?>">
               <input type="number" name="returns" class="form-control" id="returns" value="<?php echo $fetch['returns'] ?>" value="50" required readonly>
               </div>
               <div class="form-group">
               <label class="control-label" for="username">Inflow</label>
               <input type="number" name="inflow" class="form-control" id="inflow" value="<?php echo $fetch['inflow'] ?>" placeholder="Inflow" required>
               </div>
               <div class="form-group">
               <label class="control-label" for="username">Balance</label>
               <input type="number" name="balances" class="form-control" id="balances" value="<?php echo $fetch['balances'] ?>" required>
               </div>
               <div class="form-group">
               <label class="control-label" for="username">Remark</label>
               <textarea name="remark" id="remark" class="form-control" value="<?php echo $fetch['remark'];?>" cols="80" rows="10" required><?php echo $fetch['remark'];?></textarea>
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
            $('#inflow, #returns, #balances').keyup(function(){
              var inflow = parseFloat($('#inflow').val()) || 0;
               var returns = parseFloat($('#returns').val()) || 50;
               $('#balances').val(returns - inflow);
            });
         });
</script>

<?php
if (isset($_POST['update_button'])) {
  $query = "UPDATE `return_transaction` SET `returns` = :returns, inflow = :inflow, balances = :balances, remark = :remark WHERE `id` = :id";
  $pdoResult = $dbh->prepare($query);
  $pdoResult->bindParam(":returns", $_POST['returns']);
  $pdoResult->bindParam(":inflow", $_POST['inflow']);
  $pdoResult->bindParam(":balances", $_POST['balances']);
  $pdoResult->bindParam(":remark", $_POST['remark']);
  $pdoResult->bindParam(":id", $_POST['id']);
  $result = $pdoResult->execute();
  
  if($result) {
      header('Location: user_return_transaction_home.php');
    }
}

?>

