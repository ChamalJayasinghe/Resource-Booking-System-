<?php
    session_start();
    include './db.config.php';

    $id = $_SESSION["MountBeeid"];

    if(isset($_POST['submit'])){
        $bookingName = $_POST['event'];
        $bookingDate = $_POST['edate'];
        $bookingTime = $_POST['etime'];

        $query = "INSERT INTO event_booking(event_name,ebookingdate, ebookingtime, cid) VALUES ('$bookingName', '$bookingDate', '$bookingTime', '$id')";
        $queryRun = mysqli_query($conn, $query);

        if($queryRun){
            header('location: ../php/payemant.php');
        }
        else{
            header('location: ../php/ebooking.php');
        }
    }
?>