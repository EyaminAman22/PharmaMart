<?php
    session_start();
    include('db_connect.php');
    $quantity = $_POST['qu'];
    $md_name = $_GET['name'];
    $customer_id = $_SESSION['customer_id'];
    
    $sql = "SELECT * FROM medicine WHERE medicine_name LIKE '$md_name'";
       $result = mysqli_query($conn, $sql);
       $details = mysqli_fetch_assoc($result);
       echo $provider_id = $details['provider_id'];
       $company_id = $details['company_id'];
       $price = $details['sell_price'];
       $tp = $quantity*$price;
       
       $check_order = mysqli_query($conn, "SELECT* From cucart where customer_id = $customer_id && status LIKE 'pending'");
       $co = mysqli_num_rows($check_order);
       if($co == 0){
        $insert = "INSERT INTO cucart(customer_id,provider_id,company_id,product_name,quantity,price,total_price,status) 
        VALUES ('$customer_id','$provider_id', '$company_id', '$md_name', '$quantity', '$price','$tp','order')";

        if(mysqli_query($conn,$insert)){
            header("location:Cu-cart.php");
        }
       }
       else{
        header("location:Cu-cart.php?msg=Order is Already Pending");
       }
       
?>