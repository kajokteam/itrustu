<?php

    require "./B_connect_db.php";
    $user = $_POST['editUsername'];
    $pass = $_POST['editPassword'];
    $cpass = $_POST['editConfirmPassword'];
    $fname = $_POST['editName'];
    $lname = $_POST['editLastname'];
    $id = $_POST['editStudentID'];
    $faculty = $_POST['editFaculty'];
    $department = $_POST['editDepartment'];
    $tel    =   $_POST['editTel'];
    $email  =   $_POST['editEmail'];
    $fb     =   $_POST['editFacebook'];
    $lineid =   $_POST['editLineID'];
    $address =  $_POST['editAddress'];

    if($pass == $cpass)
{
    $sql = "INSERT INTO `signup_tb`(`user`, `pass`, `fname`, `lname`, `std_id`, `faculty`, `department`, `tel`, `email`, `facebook`, `line`, `address`) VALUES ('$user','$pass','$fname','$lname','$id','$faculty','$department','$tel','$email','$fb','$lineid','$address')";
    $result = mysqli_query($connect,$sql);
  
if($result)
{
    echo "success <br>";
    echo "<a href = './index.html'> back </a>";
}else
    {
        echo "error : ".mysqli_error($connect).$result;
    }

}else
 {
    echo "pass != cpass <br>";
    echo "<a href = './F_signup.php'> back </a>";
 }
    
            
?>