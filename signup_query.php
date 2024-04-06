<?php
session_start();
require 'admin/conn.php';

if (isset($_POST['signup']))
{
    $first_name = $_POST['fn'];
    $middle_name = $_POST['mn'];
    $last_name = $_POST['ln'];
    $email_address = $_POST['ei'];
    $phone_number = $_POST['pn'];
    $encrypted_password = md5($_POST['pass']);
    
    mysqli_query($conn, "INSERT INTO `users` VALUES('', '$first_name', '$middle_name', '$last_name', '$email_address', '$phone_number', '$encrypted_password')") or die(print '<script>alert("User Already Registered ! Please go back to Login Page.")</script>');
    echo '<script>alert("Registered Succesfuly ..! Please go back to Login Page.")</script>';
}

?>