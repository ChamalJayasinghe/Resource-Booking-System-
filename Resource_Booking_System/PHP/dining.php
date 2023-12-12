<?php
	include "header.php";
    include '../PHPHANDLER/db.config.php';
?>


<html>

<head>
    <title>Dining</title>
    <link rel="stylesheet" href="../CSS/dining.css">
</head>

<body>

<div class="container">

    <div class="main">
        <div class="title">
            <h2 class="topic" >MOUNT BEE DINING </h2>
        </div>
        <img class="mainimg" src="../IMAGES/dining/SLIDER/main1.png" alt="s" id="slide" ></img>
    </div> 
             <?php
                     $sql = "SELECT * FROM dining;";
                     $result = mysqli_query($conn, $sql);
                     $resultCheck = mysqli_num_rows($result);

                    if($resultCheck>0){

                        while($row = mysqli_fetch_assoc($result)){
                            $dining_image = "http://localhost/resource_booking_system/ADMIN/IMAGES/".$row['dining_image'];
                            $dining_id = $row['dining_id'];
                            $dining_name=$row['dining_name'];
                            
                            echo "
                                <a href='subdining.php?dining_id=$dining_id' class='box'>
                                <h2 class='hr-lines'>$dining_name<hr> </h2>
                                </a>

                                <a  href='subdining.php?dining_id=$dining_id' class='boximg'>
                                <img class='img' src='$dining_image' ></img>
                                </a>
                            ";
                        }
                    }
                    else{
                        echo "Currently no available restaurents !";
                    }
              ?>


</div>

    <script>
        function first(){
            document.getElementById('slide').src = "../IMAGES/dining/SLIDER/main5.png";
        }
        function second(){
            document.getElementById('slide').src = "../IMAGES/dining/SLIDER/main2.png";
        }
        function third(){
            document.getElementById('slide').src = "../IMAGES/dining/SLIDER/main3.png";
        }
        function fourth(){
            document.getElementById('slide').src = "../IMAGES/dining/SLIDER/main1.png";
        }
        function fifth(){
            document.getElementById('slide').src = "../IMAGES/dining/SLIDER/main4.png";
        }

        setInterval(first,3000);
        setInterval(second,6000);
        setInterval(third, 9000);
        setInterval(fourth, 12000);
        setInterval(fifth, 15000);

    </script>


</body>

</html>

<?php
	include "footer.php";
?>

