<?php
    session_start();
    include 'db_connect.php';
    
    if(isset($_POST['submit'])){
        

        $cname = $_POST['cname'];
        $cemail = $_POST['email'];
        $cphone = $_POST['phone'];
        $caddress = $_POST['address'];

        $error = [];

        if(empty($cname)){
            $error['cname'] = 'Please write the Company Name';
        }
        if(empty($cemail)){
            $error['cemail'] = 'Please write the Company email';
        }
        if(empty($cphone)){
            $error['cphone'] = 'Please write the Phone Number';
        }
        if(empty($caddress)){
            $error['caddress'] = 'Please write the Company Address';
        }

        if(count($error)==0){
            $provider_id = $_SESSION['provider_id'];

            $insert = "INSERT INTO companies(company_name,company_email,phone,address,provider_id) VALUES ('$cname','$cemail','$cphone','$caddress','$provider_id')";

            if(mysqli_query($conn,$insert)){
                $MSG = "Company Added Successfully";
            }
        }

    }

?>
<!doctype html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
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
                    <a href="index.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400"> Dash Board</li></a>
                    <a href="employee.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Employee</li></a>
                    <a href="medicine.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Products</li></a>
                    <a href="company.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Company</li></a>
                    <a href="invoice.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Invoice</li></a>
                    <a href="Pro-revenue.php"><li class="block  hover:bg-li-navy hover:ease-in py-3 ease-out duration-400">Monthly Revenue</li></a>
                  ]
                </ul>
            </nav>
            <h2 class="pt-14 pb-1.5">Helpline</h2>
            <h3 class="pt-2 pb-20">+880 20134-173959</h3>
    </div>
    <div class="w-4/5">
        <div class="w-auto bg-navy flex justify-around p-5 text-white">
            <input type="text" class="w-96 rounded-xl h-[30px] font-normal ml-[-100px]" placeholder="    Search Here">
            <h1 class="font-semibold text-20 ml-[300px]">Hello, </h1>
            <a href="#" class="font-semibold text-20 ml-[50px]">Log Out</a>
        </div>
        <div class="bg-navy mx-48 my-24 py-10 rounded-3xl text-white">
            <div class="flex justify-around">
                     <p class="font-semibold text-20 ml-[350px] mb-10">Company Details</p>
                     <a href="index.php"><img  class="w-14 ml-64 mt-[-30px] ease-out duration-400 hover:w-16 hover:ease-in"  src="images/back.png" alt=""></a>
            </div>
            <div class="text-20">
               <form class="flex flex-col text-center gap-y-6" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
               <input class="w-96 rounded-2xl" type="hidden" name="company_id" >
               <input class="w-96 ml-72 rounded-2xl" name="cname" placeholder="  Company Name"type="text" >
               <input class="w-96 ml-72 rounded-2xl" name="email" placeholder="  E-mail"type="email">
                <input class="w-96 ml-72 rounded-2xl" name="phone" placeholder="  Phone No..." type="number" >
                <input class="w-96 ml-72 rounded-2xl" name="address" placeholder="  Address"type="text" value="">
                <div class="flex justify-center gap-x-5 ">
                    <input class="inline-block ml-[-40px] bg-sky-500 ease-out duration-400 hover:bg-blue-500 hover:ease-in p-2 rounded-xl" type="submit" name = "submit">
                    <input class="inline-block bg-sky-500 ease-out duration-400 hover:bg-blue-500 hover:ease-in p-2 rounded-xl" type="reset" >
                </div>
               </form>
            </div>
        </div>
       
           
    </div>
    
</div>
</body>
</html>
