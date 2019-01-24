<?php 
	include("dbc.inc.php");

	session_start();
	$obj=new dbc();
	$obj->connect();

	$user_name=$_SESSION["user_name"];


	if(isset($_POST['submit']))
	{
		$category_name = mysqli_real_escape_string($conn, $_POST['category_name']);
		$category_amount = mysqli_real_escape_string($conn, $_POST['category_amount']);

		if(empty($category_name) || empty($category_amount))
		{
			echo '<script language="javascript">';
			echo 'alert("Oops! Cant leave any field blank!")';
			echo '</script>';		
		}
		else
		{
			$sql="INSERT INTO Category(user_name, category_name, category_amount) VALUES ('$user_name', '$category_name', '$category_amount');";

			$result=mysqli_query($conn, $sql);

			if (!$result) {
				die("Query failed".mysqli_error($conn));
			}
			else
			{
				$_SESSION['category_name'] = $category_name;
				$_SESSION['category_amount'] = $category_amount;
			}
		echo '<script language="javascript">';
		echo 'window.location.href = "main.php"';
		echo '</script>';
		}
	}

?>