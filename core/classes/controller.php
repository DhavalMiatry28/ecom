<?php
session_start();
include 'Model.php';
$md = new model();

//Login
if (isset($_REQUEST["login"])) {
    $where = array(
        "customer_email" => $_REQUEST["customer_email"],
        "customer_password" => $_REQUEST["customer_password"],
    );

    $d = $md->login($con, $where);
    $fac_data = $d->fetch_object();
    //Fatch faculty data
    $where = array(

      $customer = $stmt->fetch();
      $count = $stmt->rowCount();

    );
 
  	$_SESSION['customer_email'] = $customer->customer_email;
        header('Location: customer/my_account.php?my_orders');

    $_SESSION['customer_password'] = $customer->customer_email;
        header('Location: customer/my_account.php?my_orders');
    //Fatch course data
    $where = array(
        "customer_email" => $fac_data->customer_email
    );
    $main_data = array(
        "customer_password" => $fac_data->customer_email
    );

    header("location:index.php");
}
// Logout
if (isset($_REQUEST["logout"])) {
    session_destroy();
    header("location:index.php");
}

//search

if(isset($_REQUEST["search"])){
    
}
