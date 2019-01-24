<?php

	include 'dbc.inc.php';

	session_start();

	$obj=new dbc();
	$obj->connect();

	$user_name = $_SESSION['user_name'];

	$sql1 = "SELECT SUM(expense_amount) AS value_sum FROM Expense WHERE user_name='$user_name';";

	$result = mysqli_query($conn,$sql1); 
	$row = mysqli_fetch_assoc($result); 
	$totalExpenses = $row['value_sum'];

	


	$sql2 = "SELECT SUM(category_amount) AS valueSum FROM Expense WHERE user_name='$user_name'";
	$result1= mysqli_query($conn,$sql2); 
	$row2 = mysqli_fetch_assoc($result1); 
	$totalExpenses2 = $row2['valueSum'];

?>