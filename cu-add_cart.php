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

       $insert = "INSERT INTO cucart(customer_id,provider_id,company_id,product_name,quantity,price,total_price) 
                    VALUES ('$customer_id','$provider_id', '$company_id', '$md_name', '$quantity', '$price','$tp')";
        
       if(mysqli_query($conn,$insert)){
            header("location:Cu-cart.php");
        }
?>