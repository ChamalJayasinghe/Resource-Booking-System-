function chapter(){
    var chapter=document.getElementById("cc");
    var ename=document.getElementById("name");
    var pnum=document.getElementById("number");
    var cemail=document.getElementById("email");

    if(chapter.value !=="captcha246"){
        alert('Plees re-enter correct chapter code');
        chapter.focus();
        return false;
    }
    
    if(ename.value===""){
        alert('plees enter name');
        ename.focus();
        return false;
    }
    if(pnum.value.length!=10){
        alert('plees enter valid number');
        pnum.focus();
        return false;
    }

    if(cemail.value===""){
        alert('plees enter email addrace');
        cemail.focus();
        return false;
    }


    alert("Thank you for your submission");
    return true;


}