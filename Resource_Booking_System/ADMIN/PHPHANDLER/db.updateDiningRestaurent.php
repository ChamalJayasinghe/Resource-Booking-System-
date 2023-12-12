<?php
    include './db.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOUNT BEE - UPDATE DINING RESTAURENTS</title>
    <link rel="stylesheet" href="../CSS/addDiningRestaurent.css">
</head>
<body>

    <?php
        include '../PHP/sidebar.php';

        $id = $_GET['updatediningid'];
        $query = "select * from `dining` where dining_id = '$id';";
        $queryRun = mysqli_query($conn, $query);

        if($queryRun){
            $row = mysqli_fetch_assoc($queryRun);
            $dining_name = $row['dining_name'];
            $dining_image = $row['dining_image'];
            $dining_banner_image = $row['dining_banner_image'];
            $dining_description = $row['dining_description'];
        }

        echo "
        <div class='maindiv'>
            <div class='title'>
                <h2>Update Dining Restaurent - ".$dining_name."</h2>
            </div>
            <form  class='form-dining' method='POST' enctype='multipart/form-data'>
                <div class='input_box'>
                     <label>Enter Restaurent Name</label>
                    <input type='text' name='diningname' placeholder=".$dining_name." required>
                </div>
                <div class='input_box'>
                    <label>Enter Restaurent Image</label>
                    <input type='file' name='diningimage' required>
                </div>
                <div class='input_box'>
                    <label>Enter Restaurent Banner Image</label>
                    <input type='file' name='diningbannerimage' required>
                </div>
                <div class='input_box'>
                    <label>Enter Restaurent Description</label>
                    <textarea name='diningdescription' cols='116' rows='10' placeholder=".$row['dining_description']." required></textarea>
                </div>

                <input type='submit' name='submit' value='Update ".$dining_name." Record' class='addbutton'>
            </form>
       </div>
        ";

        if(isset($_POST['submit'])){
            $DiningName = $_POST['diningname'];
            $DiningDescripton = $_POST['diningdescription'];
    
        //for Dining Restaurent Image
        $file1 = $_FILES['diningimage'];
        $fileTempName1 = $_FILES['diningimage']['tmp_name'];
        $fileName1 = $_FILES['diningimage']['name'];
        $fileError1 = $_FILES['diningimage']['error'];
        $fileName_separate1 = explode('.', $fileName1);
        $fileName_extension1 = strtolower(end($fileName_separate1));

        // For Dining banner image
        $file2 = $_FILES['diningbannerimage'];
        $fileTempName2 = $_FILES['diningbannerimage']['tmp_name'];
        $fileName2 = $_FILES['diningbannerimage']['name'];
        $fileError2 = $_FILES['diningbannerimage']['error'];
        $fileName_separate2 = explode('.', $fileName2);
        $fileName_extension2 = strtolower(end($fileName_separate2));

        $extension = array('jpg','jpeg','png');

        if(in_array($fileName_extension1, $extension) && in_array($fileName_extension2, $extension)){
            $destination1 = '../IMAGES/DINING/DINING_IMAGE/'.$fileName1;
            $destination2 = '../IMAGES/DINING/DINING_BANNER/'.$fileName2;
            move_uploaded_file($fileTempName1, $destination1);
            move_uploaded_file($fileTempName2, $destination2);
    
                $query = "UPDATE `dining` SET dining_name = '$DiningName', dining_description = '$DiningDescripton', dining_image = '$destination1', dining_banner_image = '$destination2' WHERE dining_id = $id";

                $queryRun = mysqli_query($conn, $query);
    
                if($queryRun){
                    header("location: ../php/displayDiningRestaurent.php");
                }
                else{
                    die(mysqli_error($conn));
                }
            
            }
        }
    ?>

    
    
</body>
</html>