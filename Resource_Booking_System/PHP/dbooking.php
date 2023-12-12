
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="http://localhost/resource_booking_system/CSS/booking.css">
</head>
<body>

    <div class="mainbox">

        <div class="outerform">
            <p class="passage"><b>Mount-Bee BOOKING</b></p>
            
            <label for="retype">Select Resource Type </label>
            <br>
            
            <a href="dbooking.php"> <button id="Wtype" class="choice" > Dining Restaurents</button></a>
    


        <div id="D">
            <form id="diningform" onsubmit="return validateForm()" method="POST" action="../PHPHANDLER/db.dbooking.php"> 
            <label for="dining">Select Restaurent</label>
            <select name="rtype" id="type" class="box" required>
                <option value="0">select</option>
                <option value="Indian Restaurent">Indian Restaurent</option>
                <option value="Coffe Shop">Coffe Shop</option>
                <option value="Italian Restaurent">Italian Restaurent</option>
                <option value="Sky Lounge">Sky Lounge</option>
                <option value="Lily Restaurent">Lily Restaurent</option>
                <option value="Pastry Shop">Pastry Shop</option>
            
            </select>

            <br>
            <label for="diningdate" id="ldate">Date of Booking</label>
            <input Type="date" name="bdate" id="datebox" class="box" required>

            <br> 

            <label for="diningtime" id="dtime">Time</label>
            <select name="rtime" id="time" class="box" required>
                <option value="0">select</option>
                <option value="Breaksfast">Breaksfast</option>
                <option value="Lunch">Lunch</option>
                <option value="Night">Night</option>
            </select>
            <br>
               <!-- <a href="http://localhost/resource_booking_system/PHP/payemant.php"> <button name="submit" class="box" >button</a></button> -->
                <input type="submit" value="PAY"name="submit" class="submitbox">
      
        </form>
        </div>
    </div>

    </div>
    <script src="http://localhost/resource_booking_system/JS/booking.js"></script>
</body>
</html>

