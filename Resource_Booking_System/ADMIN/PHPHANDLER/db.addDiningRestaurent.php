<?php
    include './db.config.php';
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

            $query = "INSERT INTO `dining`(`dining_name`, `dining_image`, `dining_banner_image`, `dining_description`)VALUES('$DiningName','$destination1','$destination2','$DiningDescripton')";
            $queryRun = mysqli_query($conn, $query);

            if($queryRun){
                header("Location: ../php/displayDiningRestaurent.php");
                 echo "<script>Successfully Uploaded!</script>";
            }
            else{
                die(mysqli_error($conn));
            }
        
    	}
    }
?>