<?php
    session_start();
?>
<!DOCTYPE html>
<html lan="'en">
    <head><!-- Basic -->
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/resource_booking_system/CSS/header.css">
    </head>
    <body>

<!--Header-->
<header>
       <div class="header">
            <a href="http://localhost/resource_booking_system/index.php"><img src="http://localhost/resource_booking_system/IMAGES/logo.png" class="logo"> </a>

            <div class="button">
                    <?php
                        if (isset($_SESSION['MountBeeid'])){
                            echo "<button class='btn1' type='button'><a href='http://localhost/resource_booking_system/PHP/booking.php' class='btn01' >BOOK</a></button>";
                             echo "<button class='btn3' type='button'><a href='http://localhost/resource_booking_system/PHP/editprofile.php' class='btn01' >PROFILE</a></button>";
                            echo "<button class='btn2' type='button'><a href='http://localhost/resource_booking_system/PHPHANDLER/db.signout.php' class='btn01' >SIGN OUT</a></button>";
                            
                        }
                        else {
                            echo "<button class='btn1' type='button'><a href='http://localhost/resource_booking_system/PHP/signin.php' class='btn01' >SIGN IN</a></button>";
                        }
                        

                    ?>
               <div class="travel"><p><a href="#" id="travel">travel guide</a></p></div> 
            </div>

          <div class="navi">
              <a href="http://localhost/resource_booking_system/index.php">HOME</a>
              <a href="http://localhost/resource_booking_system/PHP/dining.php">DINING</a>
              <a href="http://localhost/resource_booking_system/PHP/accomodation.php">ACCOMODATION</a>
              <a href="http://localhost/resource_booking_system/PHP/Event.php">WEDDINGS & EVENTS</a>
              <a href="http://localhost/resource_booking_system/PHP/gallery.php">GALLERY</a>
              <a href="http://localhost/resource_booking_system/HTML/facilities.html">FACILITIES</a>
           </div>
           <div class="navi2">
              <a href="http://localhost/resource_booking_system/PHP/about.php">ABOUT</a>
              <a href="http://localhost/resource_booking_system/PHP/contactus.php">CONTACT US</a>
              <a href="http://localhost/resource_booking_system/PHP/review.php">REVIEW</a>
             
           </div>
      </div>
          
</header>
<!--End of Header-->
</body>
</head>