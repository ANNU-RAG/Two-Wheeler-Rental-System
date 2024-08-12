<?php
include("config.php");

if(isset ($_POST['submit']))
{
    $name = $_POST['vehicle_name'];
    $image = $_FILES['vehicle_image']['name'];
    $image_tmp_name = $_FILES['vehicle_image']['tmp_name'];
    $image_folder = 'image/' . $image;
    $price = $_POST['vehicle_price'];
    $description = $_POST['description'];

    $sql =  "INSERT INTO `vehicles_details` (`name`, `image`, `price`, `description`) VALUE ('$name', '$image', $price, '$description')" or die("Insert Failed..");

    $insert_data = mysqli_query($conn, $sql);

    if ($insert_data) 
    {
        move_uploaded_file($image_tmp_name, $image_folder);
        echo '<script>alert("Data are stored in the database and image uploaded successfully.");</script>';
        header('location: admin_vehicles_details.php');
    }
    else 
    {
        echo '<script>alert("Failed to upload image.");</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDING NEW VEHICLES</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            background-image: url('background_images/image.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            color: #fff;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #0b0032;
            text-align: center;
            margin-bottom: 290px;
            padding-right: 150px;
            font-size: 40px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
        }

        input[type="text"], input[type="number"], textarea, input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .btn {
            width: 100%;
            padding: 15px;
            background-color: #58c;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #469;
        }
    </style>
</head>
<body>
    <h1> ADD NEW VEHICLES</h1>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <label for="name">Vehicle Name</label> 
            <br>
            <input type="text" id="name" name="vehicle_name" required>
            <br>

            <label for="price">Vehicle Price</label> 
            <br>
            <input type="number" id="price" name="vehicle_price" required>
            <br>

            <label for="vehicle_description">Description</label> 
            <br>
            <textarea name="description" id="vehicle_description"></textarea required>
            <br>

            <label for="vehicle_image">Vehicle Image</label> 
            <br>
            <input type="file" id="vehicle_image" name="vehicle_image" accept="image/jpg, image/png, image/jpeg" required>
            <br> <br>

            <button class="btn" name="submit">Add Vehicle</button>
        </form>
    </div>
</body>
</html>