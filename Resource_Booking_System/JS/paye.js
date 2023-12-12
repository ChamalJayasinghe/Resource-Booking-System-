function loadData(data)
{
    if (data=="Viwe Card Details"){
        
        document.getElementById("info").innerHTML='<a href="../PHP/payemant.php" class="close">&times<br><center><img src="../IMAGES/Pay/card.jpg" height="200px" id="card"></center>'
    }
}
function validateForm(){

    var payemanttype=document.getElementById("radio");
    var ename=document.getElementById("name");
    var card=document.getElementById("cardnum");
    var exMonth=document.getElementById("month");
    var exYear=document.getElementById("year");
    var ecvv=document.getElementById("cvv")
    var date = new Date();
    var month = date.getMonth();
    var year = date.getFullYear();

    if(ename.value===""){
        alert('Plees Enter Name on Card');
        ename.focus();
        return false;
    }

    if(payemanttype.value===""){
        alert('Plees Enter payemant type');
        payemanttype.focus();
        return false;
    }

    if(card.value===""){
        alert('Plees Enter  Card number');
        card.focus();
        return false;


    }
    if(card.value.length!=16 || isNaN(card.value)){
        alert('Plees Enter 16  numbers for your card');
        card.focus();
        return false;
    }

        

    if(card.value===""){
        alert('Plees Enter  Card number');
        card.focus();
        return false;
    }

    if(exMonth.selectedIndex === 0){
        alert("Plees enter Expare Month of your card");
        exMonth.focus();
        return false;
    }   

    if(exYear.selectedIndex === 0){
        alert('Plees Enter Expare Year of your card');
        exYear.focus();
        return false;
    }
    if(ecvv.value===""){
        alert("Plees enter Valid  cvv");
        ecvv.focus();
        return false;
    }
    if(ecvv.value.length!=3|| isNaN(ecvvcard.value)){
        alert("Plees Enter valid CVV");
        ecvv.focus();
        return false;
    }
    
    if (year < exYear || (year === exYear && month <= exMonth)){
            alert("The expiry date is before today's date. Please select a valid expiry date");
            exYear.focus();
            exMonth.focus();
            return false;
        }

        else{
            alert("Thank you for your submission");
            return true;

        }
    
       

    
    
        

}
