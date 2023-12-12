<?php
session_start();
require "../PHPHANDLER/db.connection.php";
$userName=$_POST["userName"];
$password=$_POST["password"];

if(empty($userName)){
    echo "*Please Enter Your Username";
}elseif(empty($password)){
    echo "*Please Enter Your Password";
}else{

    $resultsetuserName= Database::search("SELECT * FROM `admin_mountbee` WHERE `username`='" . $userName . "'");
    $number_userName = $resultsetuserName->num_rows;

   
        

        $fetchdetails=$resultsetuserName->fetch_assoc();
        $password_h=$fetchdetails["password"];
        if($password_h==$password){
        
            echo "success";
        }else{
            echo"Password is Invalid";
        }


}
?>