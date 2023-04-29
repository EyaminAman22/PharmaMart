<?php
    session_start();
    include('db_connect.php');
    // $customer_id = $_SESSION['customer_id'];
    
    
    // $sql1 = "SELECT* FROM cucart WHERE customer_id = $customer_id";
    // $result = mysqli_query($conn,$sql1);
    
    // $sql_2 = mysqli_query($conn, "SELECT SUM(total_price) as total FROM cucart WHERE customer_id = $customer_id");
    // $row2 = mysqli_fetch_assoc($sql_2); 
    // $i = 0;
?>
<!doctype html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/all.min.css">
    <script src="js/tailwind.config.js"></script>


</head>

<body class="m-0 p-0 font-pop">
    <div class="flex">
        <div class="w-1/5 bg-navy text-white font-semibold text-center pt-4">
            <h3 class="text-4xl pb-5">Pharma Mart</h3>
            <i class="fa-solid fa-user text-white text-[100px]"></i>
            <nav class="">
            <ul class="flex pt-10 flex-col text-20">
                    <a href="delivery-dashboard.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400"> Dash Board</li>
                    </a>
                    <a href="delivery-order.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Orders</li>
                    </a>
                    <a href="delivery-orderdetails.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Order Details
                        </li>
                    </a>
                    
                </ul>
            </nav>
            <h2 class="pt-14 pb-1.5">Helpline</h2>
            <h3 class="pt-2 pb-20">+880 20134-173959</h3>
        </div>
        <div class="w-4/5">
            <div class="w-auto bg-navy flex justify-around p-5 text-white ">
                <input type="text" class="w-96 rounded-xl h-[30px] font-normal ml-[-80px]"
                    placeholder="    Search Here">
                <h1 class="font-semibold text-20 ml-[300px]">Hello, </h1>
                <a href="Cu-logout.php" class="font-semibold text-20 ml-[50px]">Log Out</a>
            </div>
            <div class=" mt-5 text text-center"> 
                <h1 class="inline-block rounded-xl font-semibold text-20 text-white p-4 bg-navy">Payment List</h1>
                <table class=" mt-4 table-auto text-center mx-auto bg-navy text-white border  border-white border-collapse">
                    <thead>
                        <tr class="">
                            <th class="p-2 border  border-white">SL No.</th>
                            <th class="p-2 border  border-white">Customer Name</th>
                            <th class="p-2 border  border-white">Date</th>
                            <th class="p-2 border  border-white">Expense</th>
                            <th class="p-2 border  border-white">Charge</th>
                        </tr>
                    </thead>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){
                        $i++;
                    ?>
                        <tbody class="">
                            <tr class="">
                                <td class="p-2 border  border-white"><?php echo $i;?></td>
                                <td class="p-2 border  border-white"><?php echo $row['product_name']?></td>
                                <td class="p-2 border  border-white"><?php echo $row['product_name']?></td>
                            <td class="p-2 border  border-white"><?php echo $row['total_price']?></td>
                            <td class="p-2 border  border-white">45tk</td>
                            </tr>
                    <?php
                    }?>
                        </tbody>
                </table>
               
                
            </div>
        </div>
</body>
</html>