<?php
	include "header.php";
    include '../PHPHANDLER/db.config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link rel="stylesheet" href="../CSS/Event.css">
</head>
<body>
    <br><br><br><br><br><br><br>
    <div class='box'>
<?php
                    $sql = "SELECT * FROM wevent;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck>0){
                        while($row = mysqli_fetch_assoc($result)){
                            $wevent_image= "http://localhost/resource_booking_system/ADMIN/IMAGES/".$row['wevent_image'];
                            $id = $row['wevent_id'];
                            $wevent_name=$row['wevent_name'];
                            $wevent_description=$row['wevent_description'];
                            echo "
                            
                                    <div class='ecard'>
                                        <a href='Eventsubp.php?wevent_id=$id'>
                                        <img src='$wevent_image' alt=''> 
                                        <div class='details'>
                                            <h2>$wevent_name</h2>
                                            <p>$wevent_description</p>
                                            </a>
                                        </div>
                                    </div>
                                    
                                ";
                    } 
                }
                    else{
                        echo "Currently no available Event Halls!";
                    }
                ?>

        </div>
</body>
</html>
<?php
	include "footer.php";
?>