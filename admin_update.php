<?php
include("config.php");

if(isset($_GET['update']))
{
    $update_id = $_GET['update'];

    $sql = "SELECT * FROM `vehicles_details` WHERE id=$update_id";

    $update_query = mysqli_query($conn, $sql);

    if($update_query)
    {
        $fetch_data = mysqli_fetch_assoc($update_query);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Update</title>
    <style>
        body 
        {
            background-color: #1212126f;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .container
        {
            margin-top: 100px;
        }

        form 
        {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
        }

        label 
        {
            color: #bbbbbb;
        }

        input, textarea 
        {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #333333;
            border-radius: 5px;
            background-color: #2e2e2e;
            color: #ffffff;
        }

        input[type="submit"] 
        {
            background-color: #6200ee;
            color: #ffffff;
            cursor: pointer;
        }

        input[type="submit"]:hover 
        {
            background-color: #3700b3;
        }

        .btn 
        {
            text-align: center;
        }

        img 
        {
            display: block;
            margin: 0 auto 20px;
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
    
    
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <img src="image/<?php echo $fetch_data['image']?>" alt="" width="200px" height="200px">
            <br><br>
            
            <input type="hidden" value="<?php echo $fetch_data['id']?>" name="update_vehicle_id">
            
            <label for="update_vehicle_name">Update Vehicle Name : </label><br>
            <input type="text" id="update_vehicle_name" name="update_vehicle_name" value="<?php echo $fetch_data['name']?>">
            <br><br>
            
            <label for="update_vehicle_image">Update Vehicle Image</label><br>
            <input type="file" id="update_vehicle_image" name="update_vehicle_image">
            <br><br>
            
            <label for="update_price">Update Price</label><br>
            <input type="number" id="update_price" name="update_price"  value="<?php echo $fetch_data['price']?>">
            <br><br>
            
            <label for="Update_Description">Update Product Description</label><br>
            <textarea name="update_vehicle_description" id="Update_Description"><?php echo $fetch_data['description']?></textarea>
            <br><br>
            
            <br>
            <div class="btn">
            <input type="submit" value="Update Vehicle" name="update_btn">
        </div>
    </form>
</div>

</body>
</html>

<?php
if(isset($_POST['update_btn']))
{
    $update_vehicle_id = $_POST['update_vehicle_id'];
    $update_vehicle_name = $_POST['update_vehicle_name'];

    $update_vehicle_image = $_FILES['update_vehicle_image']['name'];
    $update_vehicle_image_temp = $_FILES['update_vehicle_image']['tmp_name'];
    $update_vehicle_image_folder = "image/".$update_vehicle_image;

    $update_price = $_POST['update_price'];
    $update_vehicle_description = $_POST['update_vehicle_description'];
    
    $sql = "UPDATE `vehicles_details` SET `name`='$update_vehicle_name', `image`='$update_vehicle_image', `price`='$update_price', `description`='$update_vehicle_description' WHERE id=$update_vehicle_id";

    $update_data = mysqli_query($conn, $sql);

    if ($update_data) 
    {
        move_uploaded_file($update_vehicle_image_temp, $update_vehicle_image_folder);
        echo '<script>alert("Updated-Data are stored in the database and image uploaded successfully.");</script>';
        header('location: admin_vehicles_details.php');
    }
    else 
    {
        echo '<script>alert("Failed to upload image.");</script>';
    }
}
?>