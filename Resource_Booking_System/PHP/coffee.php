<?php
	include "header.php";
?>

<html>
<head>
    <title>Coffee Shop</title>
    <link rel="stylesheet" href="../CSS/diningsub.css">
</head>

<body>


<div class="container">
    <div class="main">
        <div class="title">
            <h2 class="topic" >Coffee Shop </h2>
        </div>
        <img class="mainimg" src="../IMAGES/dining/diningsub/coffee/coffeemain.png" alt="s" ></img>
    </div>
    <div class="imgdiv">
    <img class="img" id="slide" src="../IMAGES/dining/diningsub/coffee/coffee1.png" alt="s" ></img>
    </div>
    <div class="details">
      
        <hr class="hr1"><h2 class="text1">
            MOUNT  BEE  COFFEE  SHOP
        </h2><hr class="hr2">
        <h2 class="text2">Bright and airy, this dining room offers a relaxing and casual atmosphere<br>
            for diners. Daily buffet for breakfast and lunch. Open 24 hours the Coffee<br>
            Shop also features an international a la carte menu with many Asian<br>
            specialty dishes.
            <br><br>

            Lunch<br>
            12.00 noon –2.30 pm<br>
            Rs.3717/- ne<br>

            <br><br>
            Weekend Family Lunch Special Promotion <br>
            12.00 noon –2.30 pm<br>
            Rs.3297/- net<br>

            <br><br>
            Dinner - International Dinner Buffet<br>
            7.00 pm – 11.00 pm<br>
            Rs.4736/- net<br>
        </h2>
    </div>
    
</div>

<script>
        function first(){
            document.getElementById('slide').src = "../IMAGES/dining/diningsub/coffee/coffee2.png";
        }
        function second(){
            document.getElementById('slide').src = "../IMAGES/dining/diningsub/coffee/coffee3.png";
        }
        function third(){
            document.getElementById('slide').src = "../IMAGES/dining/diningsub/coffee/coffee1.png";
        }

        setInterval(first, 3000);
        setInterval(second, 6000);
        setInterval(third, 9000);

    </script>


</body>
</html>

<?php
	include "footer.php";
?>