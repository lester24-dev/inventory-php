<?php
include('../includes/headers.php'); 
include('../includes/navbar.php'); 

?>

<?php
$stmt_in = $dbh->prepare("SELECT * FROM in_going_chart"); 
$stmt_in->execute();
$in = $stmt_in->fetchAll(PDO::FETCH_ASSOC);

$stmt_out = $dbh->prepare("SELECT * FROM out_going_chart"); 
$stmt_out->execute();
$out = $stmt_out->fetchAll(PDO::FETCH_ASSOC);

$query_return = "SELECT * FROM `return_chart`";
$stmt_return = $dbh->prepare($query_return); 
$stmt_return->execute();
$return = $stmt_return->fetchAll(PDO::FETCH_ASSOC);

$query_split = "SELECT * FROM split_chart";
$stmt_split = $dbh->prepare($query_split); 
$stmt_split->execute();
$split = $stmt_split->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Content Row -->
<div class="row">
    <div class="container-fluid">
    <!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary"> In Going Chart</a>
  </h6> 
	</div>
    <div class="card-body" style="height:500px">
      <div id="in_chart" style="height:400px">
        
      </div>

  </div>
</div>
    </div>
</div>
</div>
<!-- /.container-fluid -->
  <!-- Content Row -->

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Content Row -->
<div class="row">
    <div class="container-fluid">
    <!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary"> Out Going Chart
  </h6> 
	</div>
  <div class="card-body" style="height:500px">
      <div id="out_chart" style="height:400px">
        
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
  <h6 class="m-0 font-weight-bold text-primary"> Return Chart
  </h6> 
	</div>
  <div class="card-body" style="height:500px">
      <div id="return_chart" style="height:400px">
        
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
  <h6 class="m-0 font-weight-bold text-primary"> Split Chart
  </h6> 
	</div>
    <div class="card-body">
    <div class="card-body" style="height:500px">
      <div id="split_chart" style="height:400px">
        
      </div>
  </div>
</div>

<?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Sales', 'Expenses', 'Profit'],
          <?php foreach($in as $key=>$in_val) { ?>
          ['<?php echo $in_val['month'] ?>', <?php echo $in_val['sale'] ?>, <?php echo $in_val['expenses'] ?>, <?php echo $in_val['profit'] ?>],
          <?php }?>
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('in_chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Sales', 'Expenses', 'Profit'],
          <?php foreach($out as $key=>$in_val) { ?>
            ['<?php echo $in_val['month'] ?>', <?php echo $in_val['sale'] ?>, <?php echo $in_val['expenses'] ?>, <?php echo $in_val['profit'] ?>],
            <?php }?>
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('out_chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Balance', 'Returns', 'Profit'],
          <?php foreach($return as $key=>$in_val) { ?>
            ['<?php echo $in_val['month'] ?>', <?php echo $in_val['balance'] ?>, <?php echo $in_val['return'] ?>, <?php echo $in_val['profit'] ?>],
            <?php }?>
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('return_chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Balance', 'Outflow', 'Profit'],
          <?php foreach($split as $key=>$in_val) { ?>
            ['<?php echo $in_val['month'] ?>', <?php echo $in_val['balance'] ?>, <?php echo $in_val['outflow'] ?>, <?php echo $in_val['profit'] ?>],
            <?php }?>
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('split_chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

<?php

function fetch_in(){
    
    return $output;
}

if(isset($_POST["generate_excel_in"]))  
 {  
  $output = '';  
  $query_in = "SELECT * FROM in_going";
  $stmt_in = $dbh->prepare($query_in); 
  $stmt_in->execute();
  $in = $stmt_in->fetchAll(PDO::FETCH_ASSOC);

      $output .='<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
      <thead>
           <tr>  
           <th>Customer Code</th>
           <th>Customer Name</th>
           <th>Plate Number</th>
           <th>Hawb</th>
           <th>Airway Bill</th>
           <th>Peza Ticket</th>
           <th>Trucker</th>
           <th>Wafer Run</th>
           <th>Device Number</th>
           <th>Customer Lot Number</th>
           <th>Country Origin</th>
           <th>Plant Site</th>
            <th>Wafer Type</th>
           <th>Airlines</th>
           <th>Driver</th>
           <th>Container Type</th>
           <th>Wafer Size</th>
           <th>Wafer Number</th>
           <th>Die Qty</th>
           <th>Sawn Date</th>
           <th>Unit Price</th>
           <th>P.O</th>
           <th>Invoice</th>
           <th>Plane Number</th>
           <th>Number Box</th>
           <th>Wafer Qty</th>
           <th>Customer Info</th>
           <th>Edt Date</th>
           <th>Edt Time</th>
           <th>Eta Date</th>
           <th>Eta Time</th>
           <th>Etc Date</th>
           <th>Etc Time</th>
           <th>Remarks</th>
           </tr>  
           </thead>
           ';

           foreach($in as $row){
            $output .=' <tbody>
                    <td>

                      <td> '.$row["customer_code"].'</td>
                      <td> '.$row["customer_name"].'</td>
                      <td> '.$row["plate_number"].'</td>
                      <td> '.$row["hawb"].'</td>
                      <td> '.$row["airway_bill"].'</td>
                      <td> '.$row["peza_ticket"].'</td>
                      <td> '.$row["trucker"].'</td>
                      <td> '.$row["wafer_run"].'</td>
                      <td> '.$row["device_number"].'</td>
                      <td> '.$row["customer_lot_number"].'</td>
                      <td> '.$row["country_origin"].'</td>
                      <td> '.$row["plant_site"].'</td>
                      <td> '.$row["wafer_type"].'</td>
                      <td> '.$row["airlines"].'</td>
                      <td> '.$row["driver"].'</td>
                      <td> '.$row["container_type"].'</td>
                      <td> '.$row["wafer_size"].'</td>
                      <td> '.$row["wafer_number"].'</td>
                      <td> '.$row["die_qty"].'</td>
                      <td> '.$row["sawn_date"].'</td>
                      <td> '.$row["unit_price"].'</td>
                      <td> '.$row["p_o"].' </td>
                      <td> '.$row["plane_number"].'</td>
                      <td> '.$row["number_box"].'</td>
                      <td> '.$row["wafer_qty"].'</td>        
                      <td> '.$row["customer_info"].'</td>
                      <td> '.$row["edt_date"].'</td>
                      <td> '.$row["edt_time"].'</td>
                      <td> '.$row["eta_date"].'</td>
                      <td> '.$row["eta_time"].'</td>
                      <td> '.$row["etc_date"].'</td>
                      <td> '.$row["etc_time"].'</td>
                      <td> '.$row["remarks"].'</td>
              </td>
              </tbody>';

  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition:attachment;filename=download.xls');
  echo $output;
  }

 }  

 if(isset($_POST["generate_excel_split"]))  
 {  
  $output = '';  
  $query_in = "SELECT * FROM split_transaction";
  $stmt_in = $dbh->prepare($query_in); 
  $stmt_in->execute();
  $in = $stmt_in->fetchAll(PDO::FETCH_ASSOC);

      $output .='<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
      <thead>
           <tr>  
           <th>ID</th>
            <th>Department</th>
			      <th>Customer</th>
            <th>Lot Number</th>
            <th>Outflow</th>
            <th>Inflow</th>
            <th>Balance</th>
           </tr>  
       </thead>
           ';

           foreach($in as $row){
            $output .=' <tbody>
              <td>

                      <td> '.$row["id"].'</td>
                      <td> '.$row["department"].'</td>
                      <td> '.$row["customer"].'</td>
                      <td> '.$row["lot_number"].'</td>
                      <td> '.$row["outflow"].'</td>
                      <td> '.$row["inflow"].'</td>
                      <td> '.$row["balance"].'</td>
              </td>
              </tbody>';

  $output .= '</table>';
  header('Content-Type: text/csv');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
  }

 }  

?>