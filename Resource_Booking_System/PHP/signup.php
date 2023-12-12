<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up | Mount BEE</title>
    <link rel="stylesheet" href="../CSS/usersignup.css" />
    <link rel="stylesheet" href="header.css"/>

</head>

<body>

    <div class="outer-content">
        <div class="content">
            <div class="signUp-container">
                <h1 class="heading-signUp">Create New Account</h1>
                <p class="text-grey text-center">Already A Member? <a href="signin.php">Sign In</a></p>
                <div class="outer-margin">
                    <div class="signup-form">
                        <div class=" ">
                            <div class="f-row-item">
                                <label class="inp">
                                    <input type="text" class="input-text" placeholder="&nbsp;" id="fName">
                                    <span class="label">First name</span>
                                </label>
                            </div>
                            <div class="f-row-item">
                                <label class="inp">
                                    <input type="text" class="input-text" placeholder="&nbsp;" id="lName">
                                    <span class="label">Last name</span>
                                </label>
                            </div>
                            <div class="f-row-item">
                                <label class="inp">
                                    <input type="email" class="input-text" placeholder="&nbsp;" id="emailAddress">
                                    <span class="label">Email Address</span>
                                </label>
                            </div>
                            <div class="f-row-item">
                                <label class="inp">
                                    <input type="text" class="input-text" placeholder="&nbsp;" id="userNIC">
                                    <span class="label">NIC</span>
                                </label>
                            </div>
                            <div class="f-row-item">
                                <label class="inp">
                                    <input type="text" class="input-text" placeholder="&nbsp;" id="userPassword" onkeyup="confirmPassword();">
                                    <span class="label">Password</span>
                                </label>
                            </div>
                            <div class="f-row-item confirm-password" id="confirmPasswordDiv">
                                <label class="inp">
                                    <input type="text" class="input-text" placeholder="&nbsp;" id="userConfirmPassword" onkeyup="confirmPassword();">
                                    <span class="label">Confirm Password</span>
                                </label>
                            </div>
                            <p id="validateDiv" class="validate-text">

                            </p>
                            <button class="submit-button" onclick="userRegister();">Register</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="welcome-container">
                <h1 class="welcome-header">
                    Welcome <br/>To
                </h1>
                <div class="welcome-animation-1">
                    <div class="container-logo">
                        <div class="welcome-logo">
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>

    </div>



    <script src="../JS/usersignup.js"></script>
</body>

</html>