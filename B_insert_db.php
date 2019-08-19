<?php

    require "./B_connect_db.php";

    $user = mysqli_real_escape_string($connect,$_POST['editUsername']);
    $pass = mysqli_real_escape_string($connect,$_POST['editPassword']);
    $cpass = mysqli_real_escape_string($connect,$_POST['editConfirmPassword']);
    $fname = mysqli_real_escape_string($connect,$_POST['editName']);
    $lname = mysqli_real_escape_string($connect,$_POST['editLastname']);
    $id = mysqli_real_escape_string($connect,$_POST['editStudentID']);
    $faculty = mysqli_real_escape_string($connect,$_POST['editFaculty']);
    $department = mysqli_real_escape_string($connect,$_POST['editDepartment']);
    $tel    =   mysqli_real_escape_string($connect,$_POST['editTel']);
    $email  =   mysqli_real_escape_string($connect,$_POST['editEmail']);
    $fb     =   mysqli_real_escape_string($connect,$_POST['editFacebook']);
    $lineid =   mysqli_real_escape_string($connect,$_POST['editLineID']);
    $address =  mysqli_real_escape_string($connect,$_POST['editAddress']);

    $check = "SELECT user FROM `signup_tb` WHERE user = '$user';";
    $result_check = mysqli_query($connect,$check);

    if($result_check!=NULL){
        header("Location: F_Register.php?alert=userused");
    }
    elseif($pass == $cpass)
    {
        $sql = "INSERT INTO `signup_tb`(`user`, `pass`, `fname`, `lname`, `std_id`, `faculty`, `department`, `tel`, `email`, `facebook`, `line`, `address`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "SQL failed";
        }else{
            mysqli_stmt_bind_param($stmt,"ssssisssssss",$user,$pass,$fname,$lname,$id,$faculty,$department,$tel,$email,$fb,$lineid,$address);
            mysqli_stmt_execute($stmt);
            echo "Sign up complete";
            header("location:index.html");
        }   

    }else{
        echo "Password not match";
        header("Location:F_Register.php?alert=passnotmatch");
    }
    
?>