function validateForm(){

    var htype=document.getElementById("type");
    var bookingdate=document.getElementById("datebox");
    var bookingtime=document.getElementById("time");


    if(htype.selectedIndex === 0){
        alert('Plees Enter Resources');
        htype.focus();
        return false;
    }   

    if(bookingdate.value===""){
        alert('Plees Enter Booking Date');
        bookingdate.focus();
        return false;
    }
    if(bookingtime.selectedIndex === 0){
        alert('Plees Enter Booking Time');
        bookingtime.focus();
        return false;
    } 


}
