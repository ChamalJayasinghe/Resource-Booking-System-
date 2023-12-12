<?php
    include 'db.config.php';

    if(isset($_GET['deletecontact_us_id'])){
        $id = $_GET['deletecontact_us_id'];

        $query = "DELETE from `contactus` WHERE contact_us_id = $id";
        $queryRun  = mysqli_query($conn, $query);

        if($queryRun){
            header("Location:../PHP/displayContactus.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>
