<?php
    // DB Connection
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $database = "mount_bee";

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

    if(!$conn){
        echo "<script> alert('Connection Failed!') </script>";
    }
    // else{
    //     echo "<script>alert('Connection Successful') </script>";
    // }

?>