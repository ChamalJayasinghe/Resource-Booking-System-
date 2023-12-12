<?php
    include './db.config.php';
    if(isset($_POST['submit'])){
        $wevent_name= $_POST['weventname'];
        $wevent_description= $_POST['weventdescription'];

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
            $destination1 = '../IMAGES/wedding/weddingimage'.$fileName1;
            $destination2 = '../IMAGES/wedding/weddingbanner'.$fileName2;
            move_uploaded_file($fileTempName1, $destination1);
            move_uploaded_file($fileTempName2, $destination2);

            $query = "INSERT INTO `wevent`(`wevent_name`, `wevent_image`, `wevent_banner_image`, `wevent_description`)VALUES('$wevent_name','$destination1','$destination2','$wevent_description')";
            $queryRun = mysqli_query($conn, $query);

            if($queryRun){
                header("Location: ../php/dispalyevent.php");
                echo "<script>Successfully Uploaded!</script>";
            }
            else{
                die(mysqli_error($conn));
            }
        
    }
    }
?>