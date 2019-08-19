<?php
    $connect = new mysqli("202.44.12.163","admin_boomtest","t94yGB2nKs","admin_boomtest");
    
    $username = $_POST['username'];
    $newpass = $_POST['newpass'];

    $check = "SELECT user FROM `signup_tb` WHERE user = '$username';";
    $result_check = mysqli_query($connect,$check);
    $row_check = mysqli_fetch_array($result_check,MYSQLI_ASSOC);
    if($row_check==NULL){
        header("Location: F_forgetpass.php?alert=usernotfound");
    }
    else{   
        $hashedpass = password_hash($newpass, PASSWORD_DEFAULT);
        $sql = "UPDATE signup_tb SET pass = '$hashedpass' WHERE user = '$username';";
        $query = mysqli_query($connect,$sql);
        
        header("Location: ../index.html");

        
    }
?>