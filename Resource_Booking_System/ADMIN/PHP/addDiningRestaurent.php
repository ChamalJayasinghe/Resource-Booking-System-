<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOUNT BEE - Add Dining Restaurent</title>
    <link rel="stylesheet" href="../CSS/addDiningRestaurent.css">
</head>
<body>

    <?php
        include '../php/sidebar.php';
    ?>

    <div class="maindiv">
        <div class="title">
            <h2>Add Dining Restaurent</h2>
        </div>
        <form action="../PHPHANDLER/db.addDiningRestaurent.php" class="form-Dining" method="POST" enctype="multipart/form-data">
            <div class="input_box">
                <label>Enter Restaurent Name</label>
                <input type="text" name="diningname" placeholder="Ex:-Indian Restaurent" required>
            </div>
            <div class="input_box">
                <label>Enter Restaurent Image</label>
                <input type="file" name="diningimage" required>
            </div>
            <div class="input_box">
                <label>Enter Restaurent Banner Image</label>
                <input type="file" name="diningbannerimage" required>
            </div>
            <div class="input_box">
                <label>Enter Restaurent Description</label>
                <textarea name="diningdescription" cols="116" rows="10" placeholder="Enter description here"required></textarea>
            </div>

            <input type="submit" name="submit" value="Add Dining Restaurent" class="addbutton">
        </form>
        
    </div>
    
</body>
</html>