<?php
session_start();
require "../PHPHANDLER/db.connection.php";
$usernic=$_POST["usernic"];
$password=$_POST["password"];

if(empty($usernic)){
    echo "*Please Enter Your NIC";
}elseif(empty($password)){
    echo "*Please Enter Your Password";
}else{

    $resultsetnic= Database::search("SELECT * FROM customer WHERE `nic`='" . $usernic . "'");
    $number_nic = $resultsetnic->num_rows;

    if ($number_nic < 1) { 
        echo "User With this NIC adoes not exists";
        
    }else{
        $fetchdetails=$resultsetnic->fetch_assoc();
        $password_h=$fetchdetails["password"];
        $checkPassword = password_verify($password,$password_h);
        if($checkPassword==true){
            $_SESSION["MountBeeid"] = $fetchdetails['cid'];
            echo "success";
        }else{
            echo"Password is Invalid";
        }
    }

    
}
?>