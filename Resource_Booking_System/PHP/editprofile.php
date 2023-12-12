<?php



session_start();
require "../PHPHANDLER/db.connection.php";

if (isset($_SESSION["MountBeeid"])) {
    $resultuser = Database::search("SELECT * FROM customer WHERE `cid`= '" . $_SESSION["MountBeeid"] . "'");
    $fetchuser = $resultuser->fetch_assoc();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="../CSS/usersignup.css" />
        <link rel="stylesheet" href="../CSS/editprofile.css" />
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </head>

    <body>
        <div class="content-profile">
            <div class="profile-container">
                <h1 class="heading-signUp">Profile Edit</h1>
                <div class="outer-margin">
                    <div class="signup-form">
                        <div class="outer-components">
                            <div class="edit-components">
                                <div class="pre-detail">First name :</div>
                                <div class="f-row-item">
                                    <label class="inp">
                                        <input type="text" class="input-text" placeholder="&nbsp;" id="fName">
                                        <span class="label"><?php echo $fetchuser["fname"]; ?></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="outer-components">
                            <div class="edit-components">
                                <div class="pre-detail">Last name :</div>
                                <div class="f-row-item">
                                    <label class="inp">
                                        <input type="text" class="input-text" placeholder="&nbsp;" id="lName">
                                        <span class="label"><?php echo $fetchuser["lname"]; ?></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="outer-components">
                            <div class="edit-components">
                                <div class="pre-detail">Email Address :</div>
                                <div class="f-row-item">
                                    <label class="inp">
                                        <input type="text" class="input-text" placeholder="&nbsp;" id="email">
                                        <span class="label"><?php echo $fetchuser["email"]; ?></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="outer-components">
                            <div class="edit-components">
                                <div class="pre-detail">Password :</div>
                                <div class="f-row-item">
                                    <label class="inp">
                                        <input type="text" class="input-text" placeholder="&nbsp;" id="password">
                                        <span class="label">Password :</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="outer-components">
                            <div class="edit-components">
                                <div class="pre-detail">Confirm Password:</div>
                                <div class="f-row-item">
                                    <label class="inp">
                                        <input type="text" class="input-text" placeholder="&nbsp;" id="cpassword">
                                        <span class="label">Confirm Password</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <p id="validateDiv" class="validate-text">
                            You can't change your NIC
                        </p>


                    </div>
                    <div class="outer-photo-upload">
                        <h3>Profile Image</h3>
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input class="input-image" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" onclick="readURL(this.id);" />
                                <label class="label-image-upload" for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <button class="submit-button" onclick="userProfileUpdate();">Update</button>
            </div>
        </div>
        <script src="../JS/usereditprofile.js"></script>

    </body>

    </html>
<?php
} else {
?>
    <script>
        window.location = "../PHP/signin.php";
    </script>
<?php
}
?>
