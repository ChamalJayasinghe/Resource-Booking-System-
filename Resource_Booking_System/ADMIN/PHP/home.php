<?php
    include '../PHPHANDLER/db.config.php';
    include '../php/sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mount Bee - Home</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>

    <?php
        $res_count = "SELECT * FROM dining;";
        $result1 = mysqli_query($conn, $res_count);
        $diningcount = mysqli_num_rows($result1);

        $event_count = "SELECT * FROM wevent;";
        $result2 = mysqli_query($conn, $event_count);
        $eventcount = mysqli_num_rows($result2);

        $cus= "SELECT * FROM customer;";
        $result3 = mysqli_query($conn, $cus);
        $customercount = mysqli_num_rows($result3);

        $pay = "SELECT * FROM payment;";
        $result5 = mysqli_query($conn, $pay);
        $paycount = mysqli_num_rows($result5);

        $con = "SELECT * FROM contactus;";
        $result5 = mysqli_query($conn, $con);
        $contactcount = mysqli_num_rows($result5);

        echo "
            <div class='maindiv'>
                <div class='title'>
                    <h2>Overview</h2>
                </div>
                <div class='plot'>
                    <div class='plot1'>
                        <h3>Dining Restaurents</h3>
                        <p>".$diningcount."</p>
                    </div>
                    <div class='plot2'>
                        <h3>Wedding and Events</h3>
                        <p>". $eventcount."</p>
                    </div>
                    <div class='plot3'>
                        <h3>Customer</h3>
                        <p>".$customercount."</p>
                    </div>
                </div><br>
                <div class='plot'>
                    <div class='plot2'>
                        <h3>Payments</h3>
                        <p>".$paycount."</p>
                    </div>
                    <div class='plot3'>
                        <h3>Inquiries</h3>
                        <p>".$contactcount."</p>
                    </div>
                </div>
            </div>
        ";
    ?>

</body>
</html>