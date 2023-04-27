<?php
    session_start();
    include('db_connect.php');

    $sql = "SELECT* FROM medicine WHERE category LIKE 'Baby care'";
    $result = mysqli_query($conn,$sql);

    
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
    <title>Settings</title>
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
            <div class=" mt-5 text-center"> 
                <h1 class="inline-block rounded-xl font-semibold text-20 text-white p-4 bg-navy mb-8">Profile Information</h1>
                <form class="rounded-xl w-1/2 align-center text-center mx-auto justify-center bg-navy text-white flex flex-col gap-8 py-8 px-56">
                   
                    <input class="h-[40px] block rounded-xl outline outline-1" type="text" placeholder="  User Name" name = "cname">
                    <input class=" h-[40px]  block rounded-xl outline outline-1" type="number" placeholder="  Phone Number" name = "phone">
    
                    <input class=" h-[40px]  block rounded-xl outline outline-1" type="password" placeholder="  Password" name = "pass"> 
                </form>
               
                        <div class="flex justify-center items-center w-100 border-t p-3 space-x-3">
                            <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out" href="#">Proceed</a>
                            <a class="inline-block rounded-lg py-1 px-2 font-semibold hover:text-white   hover:bg-navy text-white bg-indigo duration-700 ease-in-out close-pickup" href="#">Cancel</a>
                        </div>
                 
               
                
               
                
            </div>
        </div>
</body>

</html>