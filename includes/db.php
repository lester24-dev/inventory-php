<?php
try {
	$dbh = new PDO('mysql:host=localhost;dbname=diewafer','root','');
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	die($e->getMessage());
}
?>

<?php
//$query = "select * from sign order by teacher_id desc limit 1";
//$result = mysqli_query($con, $query);
//$row = mysqli_fetch_array($result);
//$lastid = $row['teacher_id'];
//if($lastid == " "){
//	$empid = "T01";
//}
//else{
//	$empid = substr($lastid,1);
//	$empid - intval($empid);
//	$empid = "T0" . ($empid + 1);
//}

?>