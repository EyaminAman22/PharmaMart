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
    <title>Dashboard</title>
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
            
            <div class="flex mt-2 ml-16 justify-start flex-wrap gap-8">
            <?php
                while($row = mysqli_fetch_assoc($result)){
                ?>
                    <div class="w-1/6 border duration-700 ease-in-out rounded-lg shadow bg-navy hover:bg-li-navy">
                        <div class="flex flex-col items-center py-5">
                            <img class="block w-36 h-36 mb-3 shadow-lg" src="./images/nivialotion.png"
                                alt="Bonnie image" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?php echo $row['medicine_name'] ?></h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400"><?php echo $row['dosage'] ?>mgf</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400"><?php echo $row['type'] ?></span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Price : <?php echo $row['sell_price'] ?></span>
                            <form class="ml-10" method = "POST" action="cu-add_cart.php?name=<?php echo $row['medicine_name']; ?>">
                                <input type="text" class="w-2/3 rounded-lg text-center form-control" placeholder="  Quantity" name = "qu">
                                <input type = "submit" class = "btn btn-lg btn-primary inline-flex items-center px-2 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2" value = "Add to Cart">
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
</body>

</html>