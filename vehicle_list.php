<?php
include("config.php");

session_start();

if(!isset($_SESSION['client_name']) || isset($_SESSION['client_password']))
{
    echo'<script> alert("Please login to select a vehicle") </script>';
    echo'<script> window.location.href="client_login.php" </script>';
}

if(isset($_POST['btn']))
{
    $vehicle_name = $_POST['vehicle_name'];
    $vehicle_image = $_POST['vehicle_image'];
    $vehicle_price = $_POST['vehicle_price'];

    $client_name = $_SESSION['client_name'];
    $client_address = $_SESSION['client_address'];
    $client_email = $_SESSION['client_email'];
    $client_phone = $_SESSION['client_phone'];

    $sql = "INSERT INTO `client_vehicle_booked_details` (`client_name`, `address`, `email`, `phone`, `vehicle_name`, `vehicle_image`, `vehicle_price`) VALUES ('$client_name', '$client_address', '$client_email', '$client_phone', '$vehicle_name', '$vehicle_image', '$vehicle_price')";
    
    
    if(mysqli_query($conn, $sql)) 
    {
        echo '<script>alert("Booking successful!");</script>';
        echo '<script>window.location.href = "confirmation_page.php";</script>';
    }
    else 
    {
        echo '<script>alert("There was an error. Please try again.");</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veshicles List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="header.css">
    <style>

        body{
            background-image: url(background_images/background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
            text-align: center;
            margin-top: 80px;
        }
        .container{
            margin-left: 80px;
            width: 90%;
            height: auto;
            background-color: rgba(198, 198, 230, 0.3);
            border-radius: 30px;
            box-shadow: 2px gray;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            overflow-y: auto;
        }

        .vehicles_details{
            border-radius: 10px;
            margin: 20px;
            width: 250px;
            height: 510px;
            overflow-y: auto;
            background-color: rgba(239, 230, 230, 0.5);
            transition: transform 0.3s ease;
        }
        
        .vehicles_details:hover {
            transform: translateY(-10px);
        }
        .vehicles_details img{
            width: 90%;
            height: 150px;
            margin-left: 12px;
            margin-top: 5px;
            border-radius: 15px;
        }

        h3,h4{
            text-align: center;
        }

        .description{
            width: 100%;
            height: 150px;
            text-align: center;
            margin: 0px 0px 20px 0px;
            border-radius: 10px;
        }

        .btn{
            display: block;
            width: 90%;
            margin: 20px auto;
            padding: 10px;
            background-color: #28a745;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #218838;
        }
        
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="logo.png"class="logo" height="100px" width="180px">
        </div>
        
        <div class="link">
            <div class="box1"><a href="index.php"><i class="fa-solid fa-house"></i> &nbsp; Home </a></div>
            <div class="box2"><a href="vehicle_list.php"><i class="fa-solid fa-rectangle-list"></i>&nbsp; Vehicle List's</a></div>
            <div class="box3"><a href="terms_condition.php"><i class="fa-solid fa-screwdriver-wrench"></i>&nbsp; Terms & Conditions</a></div>
        </div>
    </nav>

    <h1>Ride by your choice</h1>

    <div class="container">
        <?php

        $sql= "select * from `vehicles_details`";

        $vehicles_list = mysqli_query($conn, $sql);

        if(mysqli_num_rows($vehicles_list)>0)
        {
            while($fetch_vehicles=mysqli_fetch_assoc($vehicles_list))
            {

        ?>
        <form method="post">
            <div class="vehicles_details">
                <img class="image" src="image/<?php echo $fetch_vehicles['image']?>">
                <h3> <?php echo $fetch_vehicles['name']?></h3>
                <h4> Price: <?php echo $fetch_vehicles['price']?> /- <br>(as per a day)</h4>
                <input type="hidden" value="<?php echo $fetch_vehicles['name']?>" name="vehicle_name" >
                <input type="hidden" value="<?php echo $fetch_vehicles['image']?>" name="vehicle_image">
                <input type="hidden" value="<?php echo $fetch_vehicles['price']?>" name="vehicle_price">
                <div class="description"><?php echo ($fetch_vehicles['description']); ?></div>
                <input type="submit" class="btn" name="btn">
            </div>
        </form>
        
        <?php
            }
        }
        ?>
    </div>
</body>
</html>