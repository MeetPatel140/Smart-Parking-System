<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database_name = "epiz_28401856_sps";

	$conn = mysqli_connect($host, $user, $password, $database_name);
	
	if(!$conn)
	{
		die("Error: Failed to connect to database!");
	}
	
	$default_query = mysqli_query($conn, "SELECT * FROM `users`") or die(mysqli_error());
	$check_default = mysqli_num_rows($default_query);
	
	if($check_default === 0)
	{
		$enrypted_password = md5('Meet@123');
		mysqli_query($conn, "INSERT INTO `users` VALUES('', 'Meet', 'Pareshbhai', 'Solanki', 'meetsolanki140@gmail.com', '6353877251', '$enrypted_password')") or die(mysqli_error());
		return false;
	}
?>