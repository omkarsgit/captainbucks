<?php
    require 'dbc.inc.php';
    session_start();

    $obj=new dbc();
    $obj->connect();

    $sql="SELECT user_name FROM 'UserDetails'";

    $result1 = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
	<select>
		<?php while($row1 = mysqli_fetch_array($result1)):;?>
			<?php echo $row1; ?>
	<?php endwhile;?>
	</select>
</body>
</html>