<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home PAGE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="header.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            width: 100%;
            background-image: url(background_images/bike.jpg);
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .main-container{
            margin-top: 250px;
            margin-left: 50px;
            margin-right: 50px;
            border-radius: 35px;
            background-color: rgba(238, 237, 235, 0.5);
            height: 350px;
        }
        
        h1
        {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 500;
            font-size: 40px;
            text-align: center;
        }

        .container{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 100px;
        }

        .container div{
            background-color: rgb(224, 204, 190);
            width: 250px;
            height: 150px;
            text-align: center;
            align-content: center;
            border-radius: 30px;
        }
        .container a{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-decoration: none;
            font-size: 18px;
            color: rgb(60, 54, 51);
        }

        .container div:hover{
            box-shadow: 5px 10px 10px whitesmoke;
            background-color: rgb(116, 114, 100);
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
            <div class="box2"><a href="client_registration_details.php"><i class="fa-solid fa-user"></i>&nbsp; Client details</a></div>
            <div class="box3"><a href="terms_condition.php"><i class="fa-solid fa-screwdriver-wrench"></i>&nbsp; Terms & Conditions</a></div>
        </div>
    </nav>

    <div class="main-container">
        <h1>Admin Home</h1>
        <div class="container">
            
            <div class="add_vehicles">
                <a href="admin_add_vehicles.php">ADD VEHICLE'S &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            
            <div class="vehicles_details">
            <a href="admin_vehicles_details.php">VEHICLES DETAILS &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            
            <div class="user_details">
                <a href="client_vehicle_booked_details.php">VEHICLE BOOKED &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</body>
</html>