  <!-- Bootstrap core JavaScript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ntegrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>
   
   <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

     <!-- Page level plugins -->
     <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="../js/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="../js/sweetalert.min.js"></script>
   <?php
    if(isset($_SESSION['action']) && $_SESSION['action'] != ''){
      ?>
      <script>
        swal({
        title: "<?php echo $_SESSION['action'] ?>",
        text: "<?php echo $_SESSION['action_code'] ?>",
        icon: "success",
        button: "OK!",
        });
     </script>
      <?php
      unset($_SESSION['action']);
    }
    ?>