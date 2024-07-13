<?php
include 'includes/db.php';

session_destroy();

unset($_SESSION['firstname']);

$servername='localhost';
   $username='root';
   $password='';
   $dbname = "diewafer";
   $con=mysqli_connect($servername,$username,$password,"$dbname");
   if(!$con){
      die('Could not Connect My Sql:' .mysql_error());
   }
   $last = "SELECT MAX(id) AS id FROM login_history";
   $result = mysqli_query($con, $last);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $last_id = $row['id'];
   mysqli_query($con,"UPDATE login_history SET time_out=CURRENT_TIMESTAMP WHERE id=$last_id");
   header('location: index.php');
?>