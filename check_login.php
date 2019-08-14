<?php
	session_start();
	require "./connect_db.php";

	/*$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);*/

	$strSQL = "SELECT * FROM `signup` WHERE user = '".mysqli_real_escape_string($connect,$_POST['editUsername'])."' 
	and pass = '".mysqli_real_escape_string($connect,$_POST['editPassword'])."'";
	$objQuery = mysqli_query($connect,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
		echo "Username and Password Incorrect!";
	}
	else
	{
			
		$_SESSION["status"] = $objResult["status"];

			session_write_close();
			
			if($objResult["status"] == "admin")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:user_page.php");
			}
		
	}
	mysqli_close($connect);
?>