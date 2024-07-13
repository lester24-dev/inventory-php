  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3">Diewafer Monitoring</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="../user/user_dashboard.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

 <!-- Heading -->
 <div class="sidebar-heading"> Information</div>

<li class="nav-item">
    <a class="nav-link" href="../user/user_report.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Report</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="../user/user_history_log.php">
    <i class="fa fa-history"></i>
    <span>History Log</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

 <!-- Heading -->
 <div class="sidebar-heading"> Raw Die </div>

 <li class="nav-item">
    <a class="nav-link" href="../user/user_in_going_home.php">
    <i class="fa fa-download"></i>
    <span>In-Going Transaction</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="../user/user_out_going_home.php">
    <i class="fa fa-upload"></i>
    <span>Out-Going Transaction </span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="../user/user_return_transaction_home.php">
    <i class="fa fa-undo"></i>
    <span>Return Transaction</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="../user/user_split_transaction_home.php">
    <i class="fa fa-columns" aria-hidden="true"></i>
    <span>Split Transaction</span></a>
</li>

<!-- Sidebar Toggler (Sidebar) -->


</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
           
            <div class="topbar-divider d-none d-sm-block"></div>
			
			<!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
               <?php echo $_SESSION['last_name']; ?>
			   </span>
         <img class='img-profile rounded-circle' src='../uploads/default.png'>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../user/user_pass.php">
                  <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                  Change Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure want you logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="../logout.php" method="POST"> 
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

          </form>


        </div>
      </div>
    </div>
  </div>