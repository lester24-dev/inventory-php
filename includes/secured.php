<?php
ob_start();
session_start();
include("db.php");

if ($dbh && $_SESSION['first_name']) {
    
}else{
    header("Location: ../index.php");
}

?>