
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
            <a href="http://localhost/resource_booking_system/PHP/wbooking.php">  <button id="dtype" class="choice" > Wedding & Events </button></a>
        <div id="W">
            <form id="wform" onsubmit=" return validateForm()" method="POST" action="..\PHPHANDLER\db.ebooking.php">

            <label for="dining">Select Hall or Meeting Rooms</label>
            <select name="event" id="type" class="box">
                <option value="0">select</option>
                <option value="ARALIYA BALLROOM">Araliya Ballroom</option>
                <option value="ORCHID">Orchid Meeting Room</option>
                <option value="THE VICTORIAN">The Victorian Hall</option>
                <option value="GAGADARA">GAGADARA Outdoor Hall</option>
                <option value="Kingswood Hall">The Kingswood Meeting Room</option>
            </select>

            <br>
            <label for="diningdate" id="wdate">Date of Booking</label>
            <input Type="date" name="edate"id="datebox" class="box">

            <br>

            <label for="eventtime"  id="wtime">Time</label>
            <select name="etime" id="time" class="box">
                <option value="0">select</option>
                <option value="day">Day</option>
                <option value="night">Night</option>
            </select>
            <br>
            <input type="submit" name="submit" onclick="validateForm()" value="PAY" class="submitbox">
        </form>
        </div>
    </div>

    </div>
<script src="http://localhost/resource_booking_system/JS/booking.js"></script>
</body>
</html>

