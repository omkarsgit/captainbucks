<?php include("dbc.inc.php");
	$obj = new dbc();
	$obj ->connect();
    session_start();

if(isset($_POST['submit']))
{
	if(!empty($_POST['user_name']))
	{
		$query=mysqli_query($conn, "SELECT * FROM UserDetails where user_name='$_POST[user_name]' AND user_password='$_POST[user_password]'") or die(mysqli_error($conn));

		$count=mysqli_num_rows($query);

		if($count==1)
		{
			$row=$query->fetch_row();

			$_SESSION["user_first"]=$row[1];
			$_SESSION["user_last"]=$row[2];
			$_SESSION["user_name"]=$row[3];
			$_SESSION["user_email"]=$row[4];

			echo $_SESSION["user_name"];

			echo '<script language="javascript">';
	        echo 'window.location.href = "main.php"';
	        echo '</script>';

		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Wrong email and/or password")';
	        echo '</script>';
		}

	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("Wrong email and/or password")';
	    echo '</script>';
	}
}
