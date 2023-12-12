<?php
    include '../PHPHANDLER/db.config.php';
	include "header.php";

    $dining_id = $_GET['dining_id'];
    $sql = "SELECT * FROM dining WHERE dining_id=$dining_id;";
    $result = mysqli_query($conn, $sql);
    $row  = mysqli_fetch_array($result);
    $dining_name = $row['dining_name'];
    $dining_description = $row['dining_description'];
    $dining_image = "http://localhost/resource_booking_system/ADMIN/IMAGES/".$row['dining_image'];
    $dining_banner_image = "http://localhost/resource_booking_system/ADMIN/IMAGES/".$row['dining_banner_image'];
?>


<html>
<head>
    <title> <?php echo $dining_name; ?></title>
    <link rel="stylesheet" href="../CSS/diningsub.css">
</head>

<body>

<div class="container">
    <div class="main">
        <div class="title">
            <h2 class="topic" > <?php echo $dining_name; ?> </h2>
        </div>
        <?php echo "<img src='$dining_banner_image' class='mainimg'></img>"?>
     </div>

    <div class="imgdiv">
    <?php echo "<img src='$dining_image' class='img'></img>"?>
    </div>
    <div class="details">
      
        <hr class="hr1"><h2 class="text1">
            MOUNT  BEE  <br> <?php echo $dining_name; ?>
        </h2><hr class="hr2">
        <h2 class="text2">
        <?php echo $dining_description; ?>
        </h2>

        <?php
        if (isset($_SESSION['MountBeeid']))
            {
                            echo "<a  class'a' href='http://localhost/resource_booking_system/PHP/booking.php'> <div class='book'>BOOK</div> </a>";
            }
       ?>
        
    </div>
    
</div>

</body>
</html>

<?php
	include "footer.php";
?>