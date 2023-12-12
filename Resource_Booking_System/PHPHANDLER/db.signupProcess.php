<?php
session_start();
require "../PHPHANDLER/db.connection.php";

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$usernic=$_POST["usernic"];
$password=$_POST["password"];

if(empty($fname)){
    echo "*Please Enter Your First Name";
}elseif(empty($lname)){
    echo "*Please Enter Your Last Name";
}elseif(empty($email)){
    echo"*Please Enter Your Email Address";
}elseif(empty($usernic)){
    echo "*Please Enter Your NIC";
}elseif(empty($password)){
    echo "*Please Enter Your Password";
}elseif(strlen($password)<8){
    echo"*Password must contains at least 8 characters";
}else{
    
    $resultsetnic = Database::search("SELECT * FROM customer WHERE `nic`= '" . $usernic. "'");
    $number_nic = $resultsetnic->num_rows;

    if ($number_nic == 1) {
        echo "User With this NIC already exists";
    }else{
        $hash_Password = password_hash($password, PASSWORD_DEFAULT);
        Database::iud("INSERT INTO customer(`fname`,`lname`,`email`,`nic`,`password`)VALUES('" . $fname. "','" . $lname . "','" . $email . "','" . $usernic . "','" . $hash_Password. "'); ");
        $resultuserid = Database::search("SELECT `cid` FROM customer WHERE `nic`= '" . $usernic. "'");
        $fetchuserid=$resultuserid->fetch_assoc();
        $_SESSION["MountBeeid"] = $fetchuserid["cid"];
        echo "success";
    }

    
}
