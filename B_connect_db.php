<?php
 
    $hostname = "localhost";
    $user  = "root";
    $pass = "";
    $dbname = "register&login_test";
    $connect = mysqli_connect($hostname,$user,$pass,$dbname) or die("Cannot connect");
    echo "Connected to server<br><br>";

?>