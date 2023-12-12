<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Sign In | Mount BEE</title>
    <link rel="stylesheet" href="CSS/usersignup.css" />

</head>

<body>
    <div class="outer-content">
        <div class="content">
            <div class="signUp-container">
                <h1 class="heading-signUp">ADMIN SIGN IN | Mount BEE</h1>
                <div class="outer-margin">
                    <div class="signup-form">
                        <div class=" ">
                            
                            <div class="f-row-item">
                                <label class="inp">
                            <input type="text" class="input-text" placeholder="&nbsp;"id="userName">
                            <span class="label">Username</span>
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
           

    </div>

    <script src="JS/usersignup.js"></script>
</body>

</html>