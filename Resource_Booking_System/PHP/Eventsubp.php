<?php
	include "header.php";
    include '../PHPHANDLER/db.config.php';

    
    $id = $_GET['wevent_id']; 
    $sql = "SELECT * FROM wevent WHERE wevent_id =$id;";
    $Run  = mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($Run);
    $wevent_name=$row['wevent_name'];
    $wevent_description=$row['wevent_description'];
    $wevent_image= "http://localhost/resource_booking_system/ADMIN/IMAGES/".$row['wevent_image'];
    $wevent_banner_image = "http://localhost/resource_booking_system/ADMIN/IMAGES/".$row['wevent_banner_image'];
?>

<html>
<head>
    <br><br><br><br><br><br>
    <title><?php echo $wevent_name;?></title>
    <link rel="stylesheet" href="../CSS/eventsubp.css">
</head>
<body>
            <div class="banerimage">
                <?php echo"<img src='$wevent_banner_image'class='banerimg' alt=''> ";?>
                
            </div>
        <div class="contend">
            <div class="sideimage">
                <?php echo"<img src='$wevent_image'class='' alt=''> ";?>
                </div>
            <div class="halldetails">
                <div class="topic">
                    <h1><?php echo $wevent_name;?></h1>
                    <hr class="topichr">
                </div>
                <p><?php echo $wevent_description;?></p>
            </div>
        </div>





    




</body>
</html>

<?php
	include "footer.php";
?>