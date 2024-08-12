<?php

include("config.php");

$sql = "select * from `client_vehicle_booked_details`";

$fetch_data = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicles Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #ececec;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            background-color: #444;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        thead {
            background-color: #555;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            color: #fff;
        }

        tbody tr:nth-child(odd) {
            background-color: #666;
        }

        tbody tr:nth-child(even) {
            background-color: #777;
        }

        tbody tr:hover {
            background-color: #888;
        }

        td {
            color: #ececec;
        }
    </style>
</head>
<body>
     <table>
        <thead>
            <tr>
                <th>SL NO.</th>
                <th>CLIENT NAME</th>
                <th>ADDRESS</th>
                <th>E-MAIL</th>
                <th>PHONE NUMBER</th>
                <th>VEHICLE NAME</th>
                <th>VEHICLE IMAGE</th>
                <th>VEHICLE PRICE</th>
            </tr>
        </thead>

        <?php
        $sl_no = 1;
        while($arr = mysqli_fetch_assoc($fetch_data))
        {
            // WRITE ALL THE DETAILS AS PER THE DATABASE NAME..
        echo"
        <tbody>
            <tr>
                <td>$sl_no</td>
                <td>$arr[client_name]</td>
                <td>$arr[address]</td>
                <td>$arr[email]</td>
                <td>$arr[phone]</td>
                <td>$arr[vehicle_name]</td>
                <td>$arr[vehicle_image]</td>
                <td>$arr[vehicle_price]</td>
            </tr>
        </tbody>
        ";
            $sl_no++;
        }
        ?>       
     </table>
</body>
</html>