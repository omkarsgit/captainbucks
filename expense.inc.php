<?php 
	
	include("dbc.inc.php");

	session_start();

	$obj=new dbc();
	$obj->connect();

	$user_name = $_SESSION['user_name'];
	$category_amount = $_SESSION['category_amount'];

	if (isset($_POST['submit'])) 
	{
		$category_name = mysqli_real_escape_string($conn, $_POST['category_name']);
		$expense_text = mysqli_real_escape_string($conn, $_POST['expense_text']);
		$expense_amount = mysqli_real_escape_string($conn, $_POST['expense_amount']);

		if(empty($category_name) || empty($category_amount) || empty($expense_text) || empty($expense_amount))
		{
			echo '<script language="javascript">';
			echo 'alert("Oops! Cant leave any field blank!")';
			echo '</script>';
		}
		else
		{
			$sql="INSERT INTO Expense(category_name, category_amount, expense_text, expense_amount, user_name) VALUES ('$category_name', '$category_amount', '$expense_text', '$expense_amount', '$user_name');";	

			$result=mysqli_query($conn, $sql);

			if(!result)
			{
				die("Query failed".mysqli_error($conn));
			}
			else
			{
				$_SESSION['category_name'] = $category_name;
				$_SESSION['category_amount'] = $category_amount;
				$_SESSION['expense_text'] = $expense_text;
				$_SESSION['expense_amount'] = $expense_amount;
			}
			echo '<script language="javascript">';
			echo 'window.location.href = "main.php"';
			echo '</script>';
		}
	}

?>
