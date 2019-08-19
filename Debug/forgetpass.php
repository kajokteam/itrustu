<!DOCTYPE html>
<html>
<head>
<title>Forget pass</title>
</head>
<body>

    <h1>Enter your username</h1>
    <form action = "B_signup.php" method = "post">
        username     : <input type="text" name="uname" required><br>
        <input type = "submit"> <br>
    </form>

</body>
</html>
<?php
    require_once 'B_connect_db.php';
    $user = $_POST['uname'];
    $sql = "SELECT pass FROM 'sigup_tb' WHERE user = '$user'";
    $query = mysqli_query($connect,$sql);
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);

    echo "$result['pass']"
?>