<?php
include('../includes/headers.php'); 
include('../includes/admin_navbar.php'); 

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
