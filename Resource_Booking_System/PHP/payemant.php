<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payemant</title>
    <link rel="stylesheet" href="../CSS/paye.css">
</head>
<body>
    
<div id="button">
    <button class="btn" onclick="loadData(this.textContent)">Viwe Card Details</button>
</div>
    <div id="info"></div>
    <div class="container">
    
        
    <form  autocomplete="on" onsubmit=" return validateForm()" action="..\PHPHANDLER\db.paye.php" method="post">

        <h3 class="it">Payment</h3>
        <br>
        <br>
        <div class="input" >
            <span>Card Type &emsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            
            
            <input type="radio" required name="cardtype" value="visa" id="visa"> <label for="visa"><img src="..\IMAGES\Pay\Visa-Logo.png" class="onli" alt="Visa-Logo"></label>
            &emsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" required name="cardtype" value="Master" id="master"><label for="master"><img  src="..\IMAGES\Pay\master.png" class="onli" alt="Master-logo"></label>
            
        
        </div>
        <br>
        <div class="input">
            <span> Name On card &emsp;&nbsp;</span>
            <input type="text"  class="inputbox"  required placeholder="Mr.Kumara " name="pname" id="name">
            
        </div>

        <br>

        <div class="input">
            <span>Card number &emsp;&nbsp; </span>
            <input type="number" class="inputbox" required placeholder="1111-2222-3333-4444" name="cardnum" id="cardnum">
        </div>

        <br>

        <div class="input">
            <span>Exp month &emsp;&nbsp; </span>
            <select name="month" class="inputbox" required id="month">
                <option value="0">Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
                    
            <span>Exp year &emsp; </span>
            <select name="year" class="inputbox" required id="year">
                
                <option value="0">Year</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
                
            </select>
        </div>
<br>
<br>
        <div class="input">
            <span>CVV &emsp;&nbsp; </span>
            <input type="number" id="cvv" class="inputbox" required  placeholder="123">
        </div>
<br>
<br>
        <div class="input">
            <input type="submit" name="finalpay" onclick="validateForm()"  class="submit" value="Make payemant">
        </div>

    </form>
    </div>

    <script src="../JS/paye.js"></script>
</body>
</html>