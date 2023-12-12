<?php
    include './db.config.php';

    if(isset($_GET['deletedining_id'])){
        $id = $_GET['deletedining_id'];

        $sql = "SELECT * FROM dining WHERE dining_id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $dining_image = $row['dining_image'];
        $dining_banner_image = $row['dining_banner_image'];


        $query = "DELETE from `dining` WHERE dining_id = $id";
        $queryRun  = mysqli_query($conn, $query);

        if($queryRun){
            unlink("".$dining_image);
            unlink("".$dining_banner_image);
            header("Location: ../php/displayDiningRestaurent.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>