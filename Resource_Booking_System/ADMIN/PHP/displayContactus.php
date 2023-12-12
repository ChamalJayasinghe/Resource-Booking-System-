<?php
    include '../PHPHANDLER/db.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOUNT BEE - displayContactus</title>
    <link rel="stylesheet" href="../CSS/displayContactus.css">
</head>
<body>
    <?php
        include './sidebar.php';
    ?>

    <div class="maindiv">
        <div class="title">
                <h2>Contact Us</h2>
        </div>
        <div class="table">
            <table border="2">
                <tr>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Manage</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM contactus;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['contact_us_id'];
                            echo "
                                <tr>
                                    <td>".$row['Name']."</td>
                                    <td>".$row['mnumber']."</td>
                                    <td><a href='mailto:".$row['email']."'>".$row['email']."</a></td>
                                    <td>".$row['message']."</td>
                                    <td><button class='delete'><a href='http://localhost/resource_booking_system/ADMIN/PHPHANDLER/db.deletecontactus.php?deletecontact_us_id=".$id."'>Delete</a></button></td>
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