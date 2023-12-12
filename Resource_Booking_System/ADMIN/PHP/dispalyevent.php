<?php
    include '../PHPHANDLER/db.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOUNT BEE - Display WEDDING AND EVENT</title>
    <link rel="stylesheet" href="../CSS/displayDiningRestaurent.css">
    
</head>
<body>
    <?php
        include './sidebar.php';
    ?>

    <div class="maindiv">
        <div class="title">
            <h2>WEDDING AND EVENT's List</h2>
        </div>
        <div class="addButton">
            <button><a href="./addevent.php">Add EVENT Hall</a></button>
        </div>
        <div class="table">
            <table border="1">
                <tr>
                    <th>EVENT Name</th>
                    <th class="">EVENT Description</th>
                    <th>EVENT Image</th>
                    <th>EVENT Banner Image</th>
                    <th>EVENT Price</th>
                    <th>Manage</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM wevent;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['wevent_id'];
                            $wevent_image = "".$row['wevent_image'];
                            $wevent_banner_image = "".$row['wevent_banner_image'];
                            echo "
                                <tr>
                                    <td>".$row['wevent_name']."</td>
                                    <td>".$row['wevent_description']."</td>
                                    <td> <img src='$wevent_image' class='dining_image'></td>
                                    <td> <img src='$wevent_banner_image' class='dining_banner_image'></td>
                                    <td>".$row['wevent_price']."</td>
                                    
                                    
                                    <td>
                                        <button class='up_del_button'><a href='http://localhost/Resource_Booking_System/ADMIN/PHPHANDLER/db.updateevent.php?updatediningid=".$id."'>Update</a></button>
                                        <button class='up_del_button'><a href='http://localhost/Resource_Booking_System\ADMIN\PHPHANDLER\db.deleteevent.php?deletedining_id=".$id."'>Delete</a></button>
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


