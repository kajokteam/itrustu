<?php
	session_start();
	require "./B_connect_db.php";
	$_SESSION["Login"] = FALSE;

	/*$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);*/

	$strSQL = "SELECT * FROM `signup_tb` WHERE user = '".mysqli_real_escape_string($connect,$_POST['editUsername'])."' and pass = '".mysqli_real_escape_string($connect,$_POST['editPassword'])."'";
	$objQuery = mysqli_query($connect,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
		echo "Username and Password Incorrect!";
	}
	else
	{
			
		$_SESSION["status"] = $objResult["status"];
		$_SESSION["Login"] = TRUE;
		$_SESSION["user"] = $objResult["user"];

			session_write_close();
			
			if($objResult["status"] == "admin")
			{
				header("location:F_admin_mainpage.php");
			}
			else
			{
				header("location:F_user_mainpage.php");
			}
		
	}
	mysqli_close($connect);
?>