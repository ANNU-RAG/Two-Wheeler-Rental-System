<?php
include "config.php";

if(isset ($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];


    $sql = "INSERT INTO `client_registration`(`name`, `email`, `phone`, `address`, `password`) VALUE ('$name', '$email', $phone, '$address','$password')";

    $insert = mysqli_query($conn, $sql);
    if($insert)
    {
       
        echo '<script> alert("data are stored in a database")</script>';
        header("location: client_login.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="header.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            background-color: rgb(238, 237, 235);
        }

        h1{
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .container{
            background-color: rgba(224, 204, 190, 0.6);
            border-radius: 30px;
            height: 520px;
            width: 600px;
            margin-top: 100px;
            margin-left: 450px;
            align-content: center;
            opacity: 0.9;
        }

        input[type=text], input[type=password], input[type=email], input[type=number]{
            border-radius: 8px;
            height: 25px;
            width: 90%;
            text-align: center;
            padding: auto;
        }

        a {
            color: dodgerblue;
        }

        p{
            text-align: center;
        }

        .btn {
            border-radius: 8px;
            height: 35px;
            margin: 10px 0px 10px 0px;
            width: 100%;
            background-color: #026634;
            color: white;
            opacity: 0.9;
        }

        .form{
            padding: 10px 0px 10px 20px;
        }

        .container {
            background-color: rgba(224, 204, 190, 0.9);
            border-radius: 10px;
            padding: 20px;
            height: 800px;
            width: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container input[type="text"], 
        .container input[type="password"], 
        .container input[type="email"], 
        .container input[type="number"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        a {
            color: dodgerblue;
            text-decoration: none;
        }

        p {
            text-align: center;
            margin-top: 10px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #026634;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #024b24;
        }

        .form label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
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
            <div class="box2"><a href="client_login.php"><i class="fa-solid fa-user"></i>&nbsp; Login</a></div>
            <div class="box3"><a href="terms_condition.php"><i class="fa-solid fa-screwdriver-wrench"></i>&nbsp; Terms & Conditions</a></div>
        </div>
    </nav>

    <form method="post">
        <div class="container">
            <h1>REGISTRATION FORM</h1>
            <br>

            <div class="form">
                <label for="username">Client Name : </label>
                <br>
                <input type="text" id="username" name="name" placeholder="Enter your Name">
                <br>
                
                <label for="email">Email : </label>
                <br>
                <input type="email" id="email" name="email" placeholder="Enter your Email">
                <br>
                
                <label for="phone">Phone Number : </label>
                <br>
                <input type="number" id="phone" name="phone" placeholder="Enter your Phone no.">
                <br>

                <label for="address">Address : </label>
                <br>
                <input type="text" id="address" name="address" placeholder="Enter your Address">
                <br>
                
                <label for="password">Password : </label>
                <br>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            
            <br><br>
            
            <p>By creating an account you agree to our <a href="terms_condition.php">Terms & Privacy</a></p>
            <button type="submit" class="btn" name="submit">Submit</button>
            <p>Already have an account? <a href="client_login.php">Sign in</a>.</p>

        </div>
    </form>
</body>
</html>