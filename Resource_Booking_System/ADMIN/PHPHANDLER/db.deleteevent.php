<?php
    include './db.config.php';

    if(isset($_GET['deletedining_id'])){
        $id = $_GET['deletedining_id'];

        $sql = "SELECT * FROM wevent WHERE wevent_id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $wevent_image = $row['wevent_image'];
        $wevent_banner_image = $row['wevent_banner_image'];


        $query = "DELETE from `wevent` WHERE wevent_id = $id";
        $queryRun  = mysqli_query($conn, $query);

        if($queryRun){
            unlink("".$wevent_image);
            unlink("".$wevent_banner_image);
            header("Location: ../PHP/dispalyevent.php");
        }
        
        else{
            die(mysqli_error($conn));
        }
    }

?>