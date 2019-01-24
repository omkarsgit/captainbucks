<?php

	
	include("dbc.inc.php");

	require("PHPMailer/src/Exception.php");
	require("PHPMailer/src/SMTP.php");
	require("PHPMailer/src/PHPMailer.php");
	
	session_start();
	$user_name = $_SESSION["user_name"];
	$user_email = $_SESSION["user_email"];

	$obj=new dbc();
	$obj->connect();

	$currentDate = date('Y-m-d');

	if(isset($_POST['submit']))
	{
		$date=mysqli_real_escape_string($conn,$_POST['date']);
		$reminder_text=mysqli_real_escape_string($conn,$_POST['reminder_text']);
		$reminder_amount=mysqli_real_escape_string($conn,$_POST['reminder_amount']);

		if(empty($date)||empty($reminder_text)||empty($reminder_amount))
		{
			echo '<script language="javascript">';
			echo 'alert("Oops! Cant leave any field blank!")';
			echo '</script>';
		}
		else
		{
			$sql="INSERT INTO Reminders(user_name, reminder_text, reminder_amount,date) VALUES ('$user_name','$reminder_text','$reminder_amount','$date');";


			$result=mysqli_query($conn, $sql);
			if (!$result)
			{
				die("Query failed".mysqli_error($conn));	
			}
			else
			{
				$_SESSION['date']=$date;
				$_SESSION['reminder_text']=$reminder_text;
				$_SESSION['reminder_amount']=$reminder_amount;	

			}
		echo '<script language="javascript">';
		echo 'window.location.href = "main.php"';
		echo '</script>';

		}
	}

	$emailAddress = $user_email;

	$mail = new PHPMailer\PHPMailer\PHPMailer();

	$mail->IsSMTP();

	$mail->SMTPAuth=true;
	$mail->SMTPSecure='ssl';
	$mail->Host="smtp.gmail.com";
	$mail->Port=465;
	$mail->IsHTML(true);
	$mail->Username="captainbucks1@gmail.com";
	$mail->Password="Balog4lyf";
	$mail->SetFrom("captainbucks1@gmail.com");
	$mail->Subject= $reminder_text."-".$reminder_amount;
	$mail->Body="Testing email feature.";
	$mail->AddAddress($emailAddress);

	if(!$mail->Send())
	{
		echo "Mail not sent";
	}
	else
	{
		echo "Mail sent";
	}
	
?>
