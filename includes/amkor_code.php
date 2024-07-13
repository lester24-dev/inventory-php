<?php
include("secured.php");

if(isset($_POST['login_button'])){
	
	try {
        $query = "SELECT * FROM `account` WHERE first_name = :first_name AND password = :password";
        $stmt = $dbh->prepare($query); 
        $stmt->execute(array(':first_name' => $_POST['first_name'], ':password'=> $_POST['password']));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row['status'] == "admin") {
            $_SESSION["id"] = $row["id"];
            $_SESSION["last_name"] = $row["last_name"];
            $_SESSION["first_name"] = $row["first_name"];
            $_SESSION["gender"] = $row["gender"];
            $_SESSION["age"] = $row["age"];
            $_SESSION["birthdate"] = $row["birthdate"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["password"] = $row["password"];
            $_SESSION["quest1"] = $row["quest1"];
            $_SESSION["quest2"] = $row["quest2"];
            $_SESSION["quest3"] = $row["quest3"];
            $_SESSION["status"] = $row["status"];
           
		    $_SESSION['action'] = "Welcome $_SESSION[name]";
            $_SESSION['action_code'] = "success";
            header('Location: ../admin/admin_dashboard.php');
        }
        elseif ($row['status'] == "user") {
            $_SESSION["id"] = $row["id"];
            $_SESSION["last_name"] = $row["last_name"];
            $_SESSION["first_name"] = $row["first_name"];
            $_SESSION["gender"] = $row["gender"];
            $_SESSION["age"] = $row["age"];
            $_SESSION["birthdate"] = $row["birthdate"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["password"] = $row["password"];
            $_SESSION["quest1"] = $row["quest1"];
            $_SESSION["quest2"] = $row["quest2"];
            $_SESSION["quest3"] = $row["quest3"];
            $_SESSION["status"] = $row["status"];
            
            $today = date('Y-m-d');
            $username = ucwords($_POST['first_name']);
            $login = $dbh->prepare("INSERT INTO `login_history`(username,user_date,time_in) VALUES('$username','$today',CURRENT_TIMESTAMP)");
            $login ->execute();

            $_SESSION['action'] = "Welcome $_SESSION[last_name]";
            $_SESSION['action_code'] = "success";
            header('Location: ../user/user_dashboard.php');
        }
        else{
            echo '<script>alert("Invalid first name or password")</script>';
            echo '<script>window.open("../index.php","_self")</script>';
        }
    } catch (\Throwable $th) {
        echo 'Caught exception: ',  $th->getMessage(), "\n";
    }
}

if (isset($_POST["register"])) {
    $password = $_POST['password'];
    $repassword = $_POST['re-password'];

    if($password != $repassword){
          echo '<script>alert("Password does not match")</script>';
          echo '<script>window.open("user_registration.php","_self")</script>';
    } else {
        $query = $dbh->prepare("INSERT INTO `account` VALUES('',?,?,?,?,?,?,?,?,?,?,?)");
        $query ->bindParam(1,ucwords($_POST["last_name"]));
        $query ->bindParam(2,ucwords($_POST["first_name"]));
        $query ->bindParam(3,$_POST["gender"]);
        $query ->bindParam(4,$_POST["age"]);
        $query ->bindParam(5,$_POST["birthdate"]);
        $query ->bindParam(6,$_POST["username"]);
        $query ->bindParam(7,$_POST["password"]);
        $query ->bindParam(8,ucwords($_POST["quest1"]));
        $query ->bindParam(9,ucwords($_POST["quest2"]));
        $query ->bindParam(10,ucwords($_POST["quest1"]));
        $query ->bindParam(11,$_POST["status"]);
        $query ->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        
        $_SESSION["id"] = $row["id"];
        $_SESSION["last_name"] = $row["last_name"];
        $_SESSION["first_name"] = $row["first_name"];
        $_SESSION["gender"] = $row["gender"];
        $_SESSION["age"] = $row["age"];
        $_SESSION["birthdate"] = $row["birthdate"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["quest1"] = $row["quest1"];
        $_SESSION["quest2"] = $row["quest2"];
        $_SESSION["quest3"] = $row["quest3"];
        $_SESSION["status"] = $row["status"];

        $_SESSION['action'] = "Welcome $_SESSION[last_name]";
        $_SESSION['action_code'] = "success"; 
        header('Location: ../user/user_dashboard.php');
   }    
    
}

if(isset($_POST["delete_user"]))
{
        $id = $_POST['id'];
        $stmt = $dbh->prepare( "DELETE FROM account WHERE id =:id" );
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $_SESSION['status'] = "Data Delete Success";
        $_SESSION['status_code'] = "success";
        header("Location: ../admin/admin_user_register.php");
        if( ! $stmt->rowCount() ) echo "Deletion failed";
}


if (isset($_POST["return_button"])) {

try {
    $return = $dbh->prepare("INSERT INTO `return_transaction` (returns, inflow, balances, date, remark) VALUES('$_POST[returns]', '$_POST[inflow]', '$_POST[balances]', CURRENT_TIMESTAMP, '$_POST[remark]')");
    $return ->execute();
    header('Location: ../user/user_return_transaction_home.php');
} catch (\Throwable $th) {
    //throw $th;
}
}

if (isset($_POST['update_return'])) {
  $query = "UPDATE `return_transaction` SET `returns` = :returns, inflow = :inflow, balances = :balances, remark = :remark WHERE `id` = :id";
  $pdoResult = $dbh->prepare($query);
  $pdoResult->bindParam(":returns", $_POST['returns']);
  $pdoResult->bindParam(":inflow", $_POST['inflow']);
  $pdoResult->bindParam(":balances", $_POST['balances']);
  $pdoResult->bindParam(":remark", $_POST['remark']);
  $pdoResult->bindParam(":id", $_POST['id']);
  $result = $pdoResult->execute();
  
  if($result) {
      header('Location: ../user/user_return_transaction_home.php');
    }
}

if (isset($_POST["split_transaction"])) {

    try {
        $split = $dbh->prepare("INSERT INTO `split_transaction` (department, customer, lot_number, outflow, inflow, balance, date) VALUES('$_POST[department]', '$_POST[customer]', '$_POST[lot_number]', '$_POST[outflow]', '$_POST[inflow]', '$_POST[balance]', CURRENT_TIMESTAMP)");
        $split ->execute();
        header('Location: ../user/user_split_transaction_home.php');
    } catch (\Throwable $th) {
        //throw $th;
    }       
}

if(isset($_POST["delete_return"]))
{
        $id = $_POST['id'];
        $stmt = $dbh->prepare( "DELETE FROM return_transaction WHERE id =:id" );
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $_SESSION['status'] = "Data Delete Success";
        $_SESSION['status_code'] = "success";
        header("Location: ../user/user_return_transaction_home.php");
        if( ! $stmt->rowCount() ) echo "Deletion failed";
}

if(isset($_POST["delete_split"]))
{
    $id = $_POST['id'];
    $stmt = $dbh->prepare( "DELETE FROM split_transaction WHERE id =:id" );
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $_SESSION['status'] = "Split Transaction Data Delete Success";
    $_SESSION['status_code'] = "success";
    header("Location: ../user/user_split_transaction_home.php");
    if( ! $stmt->rowCount() ) echo "Deletion failed";
}

if (isset($_POST['in_going_button'])) {
    $sql = "INSERT INTO in_going (customer_code, customer_name, plate_number, `hawb`, `airway_bill`, `peza_ticket`, `trucker`, `wafer_run`, `device_number`, `customer_lot_number`, `country_origin`, `plant_site`, `wafer_type`, `airlines`, `driver`, `container_type`, `wafer_size`, `wafer_number`, `die_qty`, `sawn_date`, `unit_price`, `p_o`, `invoice`, `plane_number`, `number_box`, `wafer_qty`, `customer_info`, `edt_date`, `edt_time`, `eta_date`, `eta_time`, `etc_date`, `etc_time`, `remarks`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $dbh->prepare($sql)->execute([$_POST['customer_code'], ucwords($_POST['customer_name']), $_POST['plate_number'], $_POST['hawb'], $_POST['airway_bill'], $_POST['peza_ticket'], $_POST['trucker'], $_POST['wafer_run'], $_POST['device_number'], $_POST['customer_lot_number'], $_POST['country_origin'], $_POST['plant_site'], $_POST['wafer_type'], $_POST['airlines'], $_POST['driver'], $_POST['container_type'], $_POST['wafer_size'], $_POST['wafer_number'], $_POST['die_qty'], $_POST['sawn_date'], $_POST['unit_price'], $_POST['p_o'], $_POST['invoice'], $_POST['plane_number'],
    $_POST['number_box'], $_POST['wafer_qty'], $_POST['customer_info'], $_POST['edt_date'], $_POST['edt_time'], $_POST['eta_date'], $_POST['eta_time'], $_POST['etc_date'], $_POST['etc_time'], $_POST['remarks']]);
     header('Location: ../user/user_in_going_home.php');
}

if(isset($_POST["delete_in"]))
{
    $id = $_POST['id'];
    $stmt = $dbh->prepare( "DELETE FROM in_going WHERE id =:id" );
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $_SESSION['status'] = "Out Going Transaction Data Delete Success";
    $_SESSION['status_code'] = "success";
    header('Location: ../user/user_in_going_home.php');
    if( ! $stmt->rowCount() ) echo "Deletion failed";
}

if (isset($_POST['out_going_button'])) {
    $sql = "INSERT INTO out_going (customer_code, customer_name, plate_number, `hawb`, `airway_bill`, `peza_ticket`, `trucker`, `wafer_run`, `device_number`, `customer_lot_number`, `country_origin`, `plant_site`, `wafer_type`, `airlines`, `driver`, `container_type`, `wafer_size`, `wafer_number`, `die_qty`, `sawn_date`, `unit_price`, `p_o`, `invoice`, `plane_number`, `number_box`, `wafer_qty`, `customer_info`, `edt_date`, `edt_time`, `eta_date`, `eta_time`, `etc_date`, `etc_time`, `eoh`, `schedule_lot`, `remarks`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $dbh->prepare($sql)->execute([$_POST['customer_code'], ucwords($_POST['customer_name']), $_POST['plate_number'], $_POST['hawb'], $_POST['airway_bill'], $_POST['peza_ticket'], $_POST['trucker'], $_POST['wafer_run'], $_POST['device_number'], $_POST['customer_lot_number'], $_POST['country_origin'], $_POST['plant_site'], $_POST['wafer_type'], $_POST['airlines'], $_POST['driver'], $_POST['container_type'], $_POST['wafer_size'], $_POST['wafer_number'], $_POST['die_qty'], $_POST['sawn_date'], $_POST['unit_price'], $_POST['p_o'], $_POST['invoice'], $_POST['plane_number'],
    $_POST['number_box'], $_POST['wafer_qty'], $_POST['customer_info'], $_POST['edt_date'], $_POST['edt_time'], $_POST['eta_date'], $_POST['eta_time'], $_POST['etc_date'], $_POST['etc_time'], $_POST['eoh'], $_POST['schedule_lot'], $_POST['remarks']]);
     header('Location: ../user/user_out_going_home.php');
   
}

if(isset($_POST["delete_out"]))
{
    $id = $_POST['id'];
    $stmt = $dbh->prepare( "DELETE FROM out_going WHERE id =:id" );
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $_SESSION['status'] = "Out Going Transaction Data Delete Success";
    $_SESSION['status_code'] = "success";
    header('Location: ../user/user_out_going_home.php');
    if( ! $stmt->rowCount() ) echo "Deletion failed";
}

if(isset($_POST["search_data"]))
{
    $id = $_POST["teacher_id"];
    $visible = $_POST["visible"];

    $query= "UPDATE `sign` SET `visible` = '$visible' WHERE `teacher_id` = '$id'";
    $query_run = mysqli_query($con, $query);  
}

?>