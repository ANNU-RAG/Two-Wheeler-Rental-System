<?php
include("config.php");

$sql = "select * from `vehicles_details`";

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
            height: auto;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            background-color: #444;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin: 20px 0;
        }

        thead {
            background-color: #555;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #555;
        }

        th {
            color: #fff;
            text-transform: uppercase;
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

        .delete_btn, .update_btn {
            padding: 5px;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            margin: 8px 5px;
            transition: background-color 0.3s;
        }

        .delete_btn {
            color: #fff;
            background-color: #e74c3c;
        }

        .delete_btn:hover {
            background-color: #c0392b;
        }

        .update_btn {
            color: #fff;
            background-color: #2ecc71;
        }

        .update_btn:hover {
            background-color: #27ae60;
        }

        img {
            padding: 10px;
            border-radius: 5px;
            /* border: 1px solid #555; */
        }
    </style>
</head>
<body>
     <table>
        <thead>
            <tr>
                <th>SL NO.</th>
                <th>NAME</th>
                <th>IMAGE</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <th>ACTION</th>
            </tr>
        </thead>

        <?php
        $sl_no = 1;
        while($arr = mysqli_fetch_assoc($fetch_data))
        {
            $imagePath = 'image/'.($arr['image']);
        echo"
        <tbody>
            <tr>
                <td>$sl_no</td>
                <td>$arr[name]</td>
                <td><img src='$imagePath' alt='".($arr['name']). "' width='200px' height='100px'></td>
                <td>$arr[price]</td>
                <td>$arr[description]</td>
                <td>
                <a href='admin_delete.php? delete={$arr['id']}' onclick='return confirm(\"Are you sure you want to delete this vehicle?\")'>
                    <i class='delete_btn fa-solid fa-trash'></i>
                </a> 
                <a href='admin_update.php? update={$arr['id']}'>
                    <i class='update_btn fa-solid fa-pen-to-square'></i>
                </a>
                </td>
                </tr>
        </tbody>
        ";
            $sl_no++;
        }
        ?>       
     </table>
</body>
</html>