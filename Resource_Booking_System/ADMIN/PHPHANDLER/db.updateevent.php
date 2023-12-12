<?php
    include './db.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOUNT BEE - UPDATE WEDDING AND EVENT</title>
    <link rel="stylesheet" href="../CSS/addDiningRestaurent.css">
</head>
<body>

    <?php
        include '../PHP/sidebar.php';

        $id = $_GET['updatediningid'];
        $query = "select * from `wevent` where wevent_id = '$id';";
        $queryRun = mysqli_query($conn, $query);

            $row = mysqli_fetch_assoc($queryRun);
            if($queryRun){
            $wevent_name= $row['wevent_name'];
            $wevent_image = $row['wevent_image'];
            $wevent_banner_image = $row['wevent_banner_image'];
            $wevent_description = $row['wevent_description'];
            $wevent_price= $row['wevent_price'];
            }

        echo "
        <div class='maindiv'>
        <div class='title'>
            <h2>UPDATE -" .$wevent_name."</h2>
        </div>
        <form  class='form-Event' method='POST' enctype='multipart/form-data'>
            <div class='input_box'>
                <label>Enter Hall Name</label>
                <input type='text' name='weventname'value=".$row['wevent_name']." required>
            </div>
            <div class='input_box'>
                <label>Enter Hall Image</label>
                <input type='file' name='weventimage' 'value=".$wevent_image." required>
            </div>
            <div class='input_box'>
                <label>Enter Hall Banner Image</label>
                <input type='file' name='weventbannerimage' required>
            </div>
            <div class='input_box'>
                <label>Enter Hall price</label>
                <input type='text' name='weventprice' value=".$row['wevent_price']." required>
            </div>
            <div class='input_box'>
                <label>Enter Hall Description</label>
                <textarea name='weventdescription' cols='116'rows='10' value=".$row['wevent_description']."required></textarea>
            </div>

            <input type='submit' name='submit' value='Add WEDDING AND EVENT' class='addbutton'>
        </form>
        
    </div>"; 

        if(isset($_POST['submit'])){
        $wevent_name= $_POST['weventname'];
        $wevent_description= $_POST['weventdescription'];
        $wevent_price=$_POST['weventprice'];

        //for Dining Restaurent Image
        $file1 = $_FILES['weventimage'];
        $fileTempName1 = $_FILES['weventimage']['tmp_name'];
        $fileName1 = $_FILES['weventimage']['name'];
        $fileError1 = $_FILES['weventimage']['error'];
        $fileName_separate1 = explode('.', $fileName1);
        $fileName_extension1 = strtolower(end($fileName_separate1));

        // For Dining banner image
        $file2 = $_FILES['weventbannerimage'];
        $fileTempName2 = $_FILES['weventbannerimage']['tmp_name'];
        $fileName2 = $_FILES['weventbannerimage']['name'];
        $fileError2 = $_FILES['weventbannerimage']['error'];
        $fileName_separate2 = explode('.', $fileName2);
        $fileName_extension2 = strtolower(end($fileName_separate2));

        $extension = array('jpg','jpeg','png');

        if(in_array($fileName_extension1, $extension) && in_array($fileName_extension2, $extension)){
            $destination1 = '../IMAGES/wedding/weddingimage/'.$fileName1;
            $destination2 = '../IMAGES/wedding/weddingbanner/'.$fileName2;

            move_uploaded_file($fileTempName1, $destination1);
            move_uploaded_file($fileTempName2, $destination2);

            $query = "UPDATE `wevent` SET wevent_name = '$wevent_name', wevent_description = '$wevent_description',wevent_price='$wevent_price', wevent_image = '$destination1', wevent_banner_image = '$destination2' WHERE wevent_id = $id";

            
            $queryRun = mysqli_query($conn, $query);

            if($queryRun){
                header("Location: ../php/dispalyevent.php");
            
            }
            else{
                die(mysqli_error($conn));
            }
        
    }
    }
    ?>

    
    
</body>
</html>