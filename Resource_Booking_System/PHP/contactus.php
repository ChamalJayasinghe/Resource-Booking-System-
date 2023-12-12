<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <link rel="stylesheet" href="http://localhost/resource_booking_system/CSS/contact.css">
    </head>
<body>
    
    <br><br><br><br><br><br><br><br>
    
    
        <center>
            
            <div class="box">
                <div class="box1">
                    <center><h3>CONTACT US</h3></center>
                    <h4>The Mount Bee Hotel</h4>
                
                <p>The Mount Bee Hotel<br>No.69,Weliwita,Malabe,<br>Sri Lanka</p>
                <a href="mailto:info@mountbee.lk">info@mountbee.lk</a>
                <p>Tel:-(+94) 11-1234567</p>
                
                <p>For halls and meeting rooms promotions Contact us on</p>
                <p>011-1234765</p>
                <a href="mailto:h&m@mountbee.lk">h&m@mountbee.lk</a>
                <p>For Sales inquiries, please contact our Sales Team,<br><br>Chamal Jayasinghe:0715869009 <br><a href="mailto:Chamalj@mountbee.lk">Chamalj@mountbee.lk</a><br> <br> Gayashan Withanage:0773263997 <br><a href="mailto:gayashanW@mountbee.lk">gayashanW@mountbee.lk</a> <br> <br>Genatarl Mail: <br><a href="mailto:sales@mountbee.lk">sales@mountbee.lk</a></p>
                
                <br>

                
                </div>
            </div>
        </center>
    
    <div>
        <center>
        <br>
        <h3>For Special Inquiries</h3>
        <div class="form1">
        <form  onsubmit="return chapter()" action="../PHPHANDLER/db.contact.php" method="post" class="box3">

            <input type="text" name="name" class="id1" placeholder="Name*" required id="name" >
            <br>
            <br>
            <input type="number" name="number" class="id1" placeholder="Phone*" required id="number" >
            <br>
            <br>
            <input type="email" name="email" class="id1"  placeholder="Email*" required  id="email" >
            <br>
            <br>
            <textarea name="massage" id="massage" class="id2" placeholder="Massage*" required cols="30" rows="8" ></textarea>
            <br>
            <br>
            <img src="../IMAGES/contact/c.png" class="id4" alt="">
            <br>
            <br>
            <input type="text" class="id5"  placeholder="Enter Text here*" required name="" id="cc">
            <br>
            <br>
            <input type="submit" class="id3" onclick="chapter()" value="Submit">
    </form>
    </div>
    </center>
    </div>
    <script src="JS/contact.js"></script>
</body>
</html>
<?php
    include "footer.php";
?>