function userRegister() {
    var fName = document.getElementById("fName");
    var lName = document.getElementById("lName");
    var emailAddress = document.getElementById("emailAddress");
    var userNIC = document.getElementById("userNIC");
    var userPassword = document.getElementById("userPassword");
    var validateDiv = document.getElementById("validateDiv");
    var userConfirmPassword = document.getElementById("userConfirmPassword");

    if (fName.value.length == 0) {
        validateDiv.innerHTML = "Please Enter Your First Name";
    } else if (lName.value.length == 0) {
        validateDiv.innerHTML = "Please Enter Your Last Name";
    } else if (emailAddress.value.length == 0) {
        validateDiv.innerHTML = "Please Enter Your Email Address";
    } else if (userNIC.value.length == 0) {
        validateDiv.innerHTML = "Please Enter Your NIC";
    } else if (userPassword.value.length == 0) {
        validateDiv.innerHTML = "Please Enter Your Password";
    } else if (userPassword.value.length < 8) {
        validateDiv.innerHTML = "Please Enter Your Password Length Between 8 - 20";
    } else if (userPassword.value.length > 20) {
        validateDiv.innerHTML = "Please Enter Your Password Length Between 8 - 20";
    } else if (userConfirmPassword.value.length == 0) {
        validateDiv.innerHTML = "Please Confirm Your Password";
    } else if (userConfirmPassword.value != userPassword.value) {
        validateDiv.innerHTML = "Your confirmed password is invalid";
    } else {
        var formData = new FormData();
        formData.append("fname", fName.value);
        formData.append("lname", lName.value);
        formData.append("email", emailAddress.value);
        formData.append("usernic", userNIC.value);
        formData.append("password", userPassword.value);
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
        r.open("POST", "../PHPHANDLER/db.signupProcess.php", true);
        r.send(formData);

    }


}

function confirmPassword() {
    var userPassword = document.getElementById("userPassword");
    var confirmPasswordDiv = document.getElementById("confirmPasswordDiv");
    if (userPassword.value.length >= 8) {
        confirmPasswordDiv.classList.remove("confirm-password");
    } else {
        confirmPasswordDiv.classList.add("confirm-password");
    }
}

function userSignIn() {

    var userName = document.getElementById("userName");
    var userPassword = document.getElementById("userPassword");
    if (userName.value.length == 0) {
        validateDiv.innerHTML = "Please Enter Your Username";
    } else if (userPassword.value.length == 0) {
        validateDiv.innerHTML = "Please Enter Your Password";
    } else {
        var formData = new FormData();
        formData.append("userName", userName.value);
        formData.append("password", userPassword.value);
        var r = new XMLHttpRequest();
        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                var t = r.responseText;
                if (t == "success") {
                    window.location = "http://localhost/resource_booking_system/ADMIN/PHP/home.php";
                } else {
                    validateDiv.innerHTML = t;
                }
            }
        };
        r.open("POST", "http://localhost/resource_booking_system/ADMIN/PHPHANDLER/db.signinprocess.php", true);
        r.send(formData);

    }


}