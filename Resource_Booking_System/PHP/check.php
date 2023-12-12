<?php
    include "PHP/header.php";
?>

<html>
<head>
    <title>Check Availability</title>
    <link rel="stylesheet" href="./CSS/check.css">

</head>

<body>

 <h2 class="hr-lines">Check Availability </hr> </h2>

<div class="div"> 

<form>
<center>
<table cellpadding="7">

<tr>
<td >
<label for="arrival_date" id="arr">
    Arrival date:
</label>
<br>
<input type="date" id="arrival_date" class="box"> </input>
</td>


<td colspan="2">
<label for="nights" id="ni">
    No of Nights:
</label>
<br>
<input type="number" id="nights" class="box"></input>
</td>

</tr>

<tr >
<td colspan="3">
<label for="departure_date">Departure date:</label>
<br>
<input type="date" id="departure_date" class="box"> </input>
</td>
</tr>

<tr>
<td colspan="2">
<br>
<select id="property" class="box">
    <option>Property</option>
    <option >Halls</option>
    <option >Rooms</option>
    <option >Conference Halls</option>
   
</select>
</td>

<td>
<br>
<select id="adults" class="box">
    <option>quantity</option>
    <option >1</option>
    <option >2</option>
    <option >3</option>
    <option >4</option>
    <option >5</option>
</select>
</td>


</tr>

<tr>
<td colspan="3">

<center>
<button name="checkbtn" type="submit" value="checkbtn">Check Availability</button>
</center>
</td>
</tr>

</table>
</center>
</form>


</div>
<script type="text/javascript" src=".js/check.js"></script>
</body>
</html>

<?php
    include "PHP/footer.php";
?>
