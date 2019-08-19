<?php
	session_start();
	require "./B_connect_db.php";
	$_SESSION["Login"] = FALSE;

	$passinput = $_POST['editPassword'];

	$strSQL = "SELECT pass FROM `signup_tb` WHERE user = '".mysqli_real_escape_string($connect,$_POST['editUsername'])."'"; //and pass = '".mysqli_real_escape_string($connect,$_POST['editPassword'])."'
	$objQuery = mysqli_query($connect,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

	$passnotmatch = !password_verify($passinput,$objResult['pass']);
	/*echo var_dump($objQuery)."<hr>";
	echo var_dump($passmatch);*/


	if($passnotmatch){
		echo "Username and Password Incorrect!";
		header("location: index.html?alert=unamepassincorrect");
	}
	else
	{
		$_SESSION["status"] = $objResult["status"];
		$_SESSION["Login"] = TRUE;
		$_SESSION["user"] = $objResult["user"];

		session_write_close();
			
		if($objResult["status"] == "admin"){
			header("location:F_admin_mainpage.php");
		}
		else{
			header("location:F_user_mainpage.php");
		}
		
	}
	mysqli_close($connect);
?>