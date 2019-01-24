<?php 
	include("dbc.inc.php");

	$obj=new dbc();
	$obj->connect();

	if(isset($_POST['submit']))
	{
		$user_first=mysqli_real_escape_string($conn,$_POST['user_first']);
		$user_last=mysqli_real_escape_string($conn,$_POST['user_last']);
		$user_name=mysqli_real_escape_string($conn,$_POST['user_name']);
		$user_email=mysqli_real_escape_string($conn,$_POST['user_email']);
		$user_password=mysqli_real_escape_string($conn,$_POST['user_password']);
		
		if(empty($user_first)||empty($user_last)||empty($user_name)||empty($user_email)||empty($user_password))
		{
			echo '<script language="javascript">';
			echo 'alert("Oops! Cant leave any field blank!")';
			echo '</script>';
		}
		else
		{
			$sql="INSERT INTO UserDetails(user_first,user_last,user_name,user_email,user_password) VALUES ('$user_first','$user_last','$user_name','$user_email','$user_password');";

			$result=mysqli_query($conn, $sql);
			if (!$result)
			{
				die("Query failed".mysqli_error($conn));	
			}
			else
			{
				session_start();
				echo '<script language="javascript">';
                echo 'window.location.href = "main.php"';
                echo '</script>';
			}
		}
	}

?>