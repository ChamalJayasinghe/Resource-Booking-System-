<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOUNT BEE - Add WEDDING AND EVENT</title>
    <link rel="stylesheet" href="../CSS/addDiningRestaurent.css">
</head>
<body>

    <?php
        include '../php/sidebar.php';
    ?>

    <div class="maindiv">
        <div class="title">
            <h2>Add WEDDING AND EVENT</h2>
        </div>
        <form action="../PHPHANDLER/db.addevent.php" class="form-Event" method="POST" enctype="multipart/form-data">
            <div class="input_box">
                <label>Enter Hall Name</label>
                <input type="text" name="weventname" placeholder="Ex:-ARALIYA BALLROOM" required>
            </div>
            <div class="input_box">
                <label>Enter Hall Image</label>
                <input type="file" name="weventimage" required>
            </div>
            <div class="input_box">
                <label>Enter Hall Banner Image</label>
                <input type="file" name="weventbannerimage" required>
            </div>
            <div class="input_box">
                <label>Enter Hall price</label>
                <input type="text" name="weventprice" placeholder="Enter price here" required>
            </div>
            <div class="input_box">
                <label>Enter Hall Description</label>
                <textarea name="weventdescription" cols="90" rows="15" placeholder="Enter description here"required></textarea>
            </div>

            <input type="submit" name="submit" value="Add WEDDING AND EVENT" class="addbutton">
        </form>
        
    </div>
    
</body>
</html>