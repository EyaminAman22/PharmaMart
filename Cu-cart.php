<?php
    session_start();
    include('db_connect.php');
    $customer_id = $_SESSION['customer_id'];

    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }
    if(isset($_GET['action'])){
        $address = $_POST['address'];
        
        $sql3 = mysqli_query($conn, "UPDATE cucart SET status = 'pending', address = '$address' WHERE customer_id = $customer_id && status LIKE 'order'");
        
    }
    
    $sql1 = "SELECT* FROM cucart WHERE customer_id = $customer_id && status LIKE 'order'";
    $result = mysqli_query($conn,$sql1);
    
    $sql_2 = mysqli_query($conn, "SELECT SUM(total_price) as total FROM cucart WHERE customer_id = $customer_id && status LIKE 'order'");
    $row2 = mysqli_fetch_assoc($sql_2); 
    $i = 0;

    
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
                    <a href="CustomerDashboard.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400"> Dash Board</li>
                    </a>
                    <a href="Cu-medicine.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Medicine</li>
                    </a>
                    <a href="Cu-surgicalEquipment.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Surgical Equipment
                        </li>
                    </a>
                    <a href="Cu-healthcare.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Health Care
                            products</li>
                    </a>
                    <a href="Cu-Skincare.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Skin Care Products
                        </li>
                    </a>
                    <a href="Cu-babycare.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Baby Care Products
                        </li>
                    </a>
                    <a href="Cu-Supplyment&Vitamin.php">
                        <li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Food Supplyment and
                            Vitamins</li>
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
                <h1 class="inline-block rounded-xl font-semibold text-20 text-white p-4 bg-navy">Items</h1>
                <table class=" mt-4 table-auto text-center mx-auto bg-navy text-white border  border-white border-collapse">
                    <thead>
                        <tr class="">
                            <th class="p-2 border  border-white">SL No.</th>
                            <th class="p-2 border  border-white">Image</th>
                            <th class="p-2 border  border-white">Item Name</th>
                            <th class="p-2 border  border-white">Quantity</th>
                            <th class="p-2 border  border-white">Price</th>
                            <th class="p-2 border  border-white">Operation</th>
                        </tr>
                    </thead>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){
                        $i++;
                    ?>
                        <tbody class="">
                            <tr class="">
                                <td class="p-2 border  border-white"><?php echo $i;?></td>
                                <td class="p-2 border  border-white">---</td>
                                <td class="p-2 border  border-white"><?php echo $row['product_name']?></td>
                            <td class="p-2 border  border-white"><?php echo $row['quantity']?></td>
                            <td class="p-2 border  border-white"><?php echo $row['total_price']?></td>
                            <td class="p-2 border  border-white space-3 gap-y-2">
                                <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:outline hover:ouline-navy hover:text-white   hover:bg-navy text-navy bg-white duration-700 ease-in-out" href="#">Remove</a>
                            </td>
                            </tr>
                    <?php
                    }?>
                            <tr>
                                <td class="p-2 border  border-white" colspan="4">Total Price</td>
                                <td class="p-2 border  border-white"><?php echo $row2['total'] ?></td>
                            </tr>
                        </tbody>
                </table>
                <div class="mt-12 text-center">
                <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out show-pickup" href="#">Save to Quick Order</a>
                <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out " href="#">Save to Quick Order</a>
                    <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out show-pickup" href="#">Pick-up</a>
                <a class="show-delivery inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out" href="#">Delivery</a>
                <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out" href="#">Cancel</a>
                </div>
                <div class="pickup py-48 h-screen w-full fixed left-0 top-0 flex justify-center items bg-black bg-opacity-50 hidden">
                    <div class="bg-white rounded shadow-lg h-48 w-1/3">
                        <div class="border-b px-4 py-2">
                            <h3 class="font-semibold text-lg">An address will sent to your mobile number.</h3>
                        </div>
                        <div class="p-3">
                            A transaction ID will be sent to your Mobile Number.
                        </div>
                        <div class="flex justify-end items-center w-100 border-t p-3 space-x-3">
                            <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out" href="#">Proceed</a>
                            <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out close-pickup" href="#">Cancel</a>
                        </div>
                    </div>
                </div>
                <div class="delivery py-48 h-screen w-full fixed left-0 top-0 flex justify-center items bg-black bg-opacity-50 hidden">
                    <div class="bg-white rounded shadow-lg h-48 w-1/3">
                        <div class="border-b px-4 py-2">
                            <h3 class="font-semibold text-lg">Your delivery Charge will be 45tk</h3>
                        </div>
                        <div class="p-3">
                            A transaction ID will be sent to your Mobile Number.
                            <form method="POST" action="Cu-cart.php?action=proceed">
                                <input class="py-2 w-4/5 form-control" type="text" placeholder=" Please Type your Address!" name="address">
                            
                        </div>
                        <div class="flex justify-end items-center w-100 border-t p-3 space-x-3">
                        <!--    <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out" href="#">Proceed</a> -->
                                <input type = "submit" class = "btn btn-lg btn-primary" value = "Proceed">
                            <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out close-delivery" href="#">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
                
                <script>
                    const pickup=document.querySelector('.pickup');
                    const showpickup=document.querySelector('.show-pickup');
                    const closepickup=document.querySelector('.close-pickup');
                    showpickup.addEventListener('click',function(){
                        pickup.classList.remove('hidden')
                    });
                    closepickup.addEventListener('click',function(){
                        pickup.classList.add('hidden')
                    });
                    const delivery=document.querySelector('.delivery');
                    const showdelivery=document.querySelector('.show-delivery');
                    const closedelivery=document.querySelector('.close-delivery');
                    showdelivery.addEventListener('click',function(){
                        delivery.classList.remove('hidden')
                    });
                    closedelivery.addEventListener('click',function(){
                        delivery.classList.add('hidden')
                    });
                </script>
                
            </div>
        </div>
</body>
</html>