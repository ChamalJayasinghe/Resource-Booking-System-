<?php
    include '../PHPHANDLER/db.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOUNT BEE - Display Dining Restaurent</title>
    <link rel="stylesheet" href="../CSS/displayDiningRestaurent.css">
</head>
<body>
    <?php
        include './sidebar.php';
    ?>

    <div class="maindiv">
        <div class="title">
            <h2>Dining Restaurent's List</h2>
        </div>
        <div class="addButton">
            <button><a href="./addDiningRestaurent.php">Add Dining Restaurent</a></button>
        </div>
        <div class="table">
            <table border="1">
                <tr>
                    <th>Dining Name</th>
                    <th>Dining Description</th>
                    <th>Dining Image</th>
                    <th>Dining Banner Image</th>
                    <th>Manage</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM dining;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['dining_id'];
                            $dining_image = "".$row['dining_image'];
                            $dining_banner_image = "".$row['dining_banner_image'];
                            echo "
                                <tr>
                                    <td>".$row['dining_name']."</td>
                                    <td>".$row['dining_description']."</td>
                                    <td> <img src='$dining_image' class='dining_image'></td>
                                    <td> <img src='$dining_banner_image' class='dining_banner_image'></td>

                                    
                                   
                                    <td>
                                        <button class='up_del_button'><a href='http://localhost/resource_booking_system/ADMIN/PHPHANDLER/db.updateDiningRestaurent.php?updatediningid=".$id."'>Update</a></button>
                                        <button class='up_del_button'><a href='http://localhost/resource_booking_system/ADMIN/PHPHANDLER/db.deleteDiningRestaurent.php?deletedining_id=".$id."'>Delete</a></button>
                                    </td>
                                </tr>
                            ";
                        }
                    }
                ?>

            </table>
        </div>
    </div>
</body>
</html>