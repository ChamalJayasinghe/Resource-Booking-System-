<?php
    session_start();
    include './db.config.php';

    $id = $_SESSION["MountBeeid"];

    if(isset($_POST['submit'])){
        $bookingName = $_POST['rtype'];
        $bookingDate = $_POST['bdate'];
        $bookingTime = $_POST['rtime'];

        $query = "INSERT INTO dining_booking(dining_name, dbookingdate, dbookingtime, cid) VALUES ('$bookingName', '$bookingDate', '$bookingTime', '$id')";
        $queryRun = mysqli_query($conn, $query);

        if($queryRun){
            header('location: ../php/payemant.php');
        }
        else{
            header('location: ../php/dbooking.php');
        }
    }
?>