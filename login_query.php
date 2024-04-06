<?php
    session_start();
	require 'admin/conn.php';
	
	if(ISSET($_POST['login']))
	{
		$phone_number = $_POST['pn'];
		$encrypted_password = md5($_POST['pass']);

		//To Prevent from MySQLI Injection
		$phone_number = stripcslashes($phone_number);
		$password = stripcslashes($password);
		$phone_number = mysqli_real_escape_string($conn,$phone_number);
		$password = mysqli_real_escape_string($conn,$password);
		
		$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `phone_number` = '$phone_number' && `password` = '$encrypted_password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = $query->num_rows;
		
		if($row > 0)
		{
			$_SESSION['LAST_ACTIVITY'] = time();
			$_SESSION['id'] = $fetch['id'];
			$user_id = $_SESSION['id'];
			
			$query2 = mysqli_query($conn, "SELECT * FROM `booking_details` WHERE `user_id` = '$user_id' ") or die(mysqli_error());
			$fetch2 = mysqli_fetch_array($query2);
			$row2 = $query2->num_rows;
			if($row2 > 0)
			{
				$_SESSION['reg_id'] = $fetch['reg_id'];
			}
			
			$_SESSION['first_name'] = $fetch['first_name'];
			$_SESSION['middle_name'] = $fetch['middle_name'];
			$_SESSION['last_name'] = $fetch['last_name'];
			$_SESSION['email_address'] = $fetch['email_address'];
			$_SESSION['phone_number'] = $fetch['phone_number'];
			header("location:dashboard.php");
		}
		else
		{
			echo "<center><label class='text-danger'>Invalid username or password</label></center>";
		}
	}
?>