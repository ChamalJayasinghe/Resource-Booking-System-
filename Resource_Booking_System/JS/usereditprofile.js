function userProfileUpdate() {

    var fName = document.getElementById("fName");
    var lName = document.getElementById("lName");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var cpassword = document.getElementById("cassword");
    var upimges = document.getElementById("imageUpload").files[0];
    if (password.value.length != 0 && cpassword.value.length == 0) {
        validateDiv.innerHTML = "Please Confirm Your Password";
    } else {
        var formData = new FormData();
        formData.append("fName", fName.value);
        formData.append("lName", lName.value);
        formData.append("email", email.value);
        formData.append("password", password.value);
        formData.append("upimges", upimges);
        var r = new XMLHttpRequest();
        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                var t = r.responseText;
                if (t == "success") {
                    window.location = "../index.php";
                } else {
                    validateDiv.innerHTML = t;
                }
            }
        };
        r.open("POST", "../PHPHANDLER/db.editprofileprocess.php", true);
        r.send(formData);

    }


}