<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In | Mount BEE</title>
    <link rel="stylesheet" href="../CSS/usersignup.css" />

</head>

<body>

    <div class="outer-content">
        <div class="content">
            <div class="signUp-container">
                <h1 class="heading-signUp">Create New Account</h1>
                <p class="text-grey text-center">New to Mount BEE?Register from here <a href="signup.php">Sign Up</a></p>
                <div class="outer-margin">
                    <div class="signup-form">
                        <div class=" ">
                            
                            <div class="f-row-item">
                                <label class="inp">
                            <input type="text" class="input-text" placeholder="&nbsp;"id="userNIC">
                            <span class="label">NIC</span>
                         </label>
                            </div>
                            <div class="f-row-item">
                                <label class="inp">
                            <input type="text" class="input-text" placeholder="&nbsp;"id="userPassword" >
                            <span class="label">Password</span>
                         </label>
                            </div>
                            <p id="validateDiv" class="validate-text">

                            </p>
                            <button class="submit-button" onclick="userSignIn();">Sign In</button>
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