<?php
	class dbc
	{
		function connect()
		{
			global $conn;
			$host="localhost";
			$username="root";
			$password="";
			$db_name="CBDatabase";
			$table_name="UserDetails";

			$conn=mysqli_connect($host, $username, $password, $db_name) or die("Cannot connect");
			$db=mysqli_select_db($conn, $db_name) or die("Failed to connect to MySQL : ".mysqli_error($conn));

		}
	}
?>