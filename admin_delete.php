<?php
include("config.php");

if(isset($_GET['delete']))
{
    $delete_id = $_GET['delete'];

    $sql = "DELETE FROM `vehicles_details` WHERE id=$delete_id";

    $delete_data = mysqli_query($conn, $sql);

    if($delete_data)
    {
        echo '<script>alert("Successfully delete the vehicle")</script>';
        header('location: admin_vehicles_details.php');
    }
    else{
        echo '<script>alert("Vehicle is not deleted..Please try again later..")</script>';
        header('location: admin_vehicles_details.php');
    }
}
?>