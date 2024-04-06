<?php
session_start();
require 'admin/conn.php';

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300))
{
    // last request was more than 5 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    echo '<script>alert("SESSION EXPIRED !! Please Login again to view your Dashboard."); location.replace("index.php");</script>';
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if (isset($_POST['book_now']))
{
    $User_Id = $_SESSION['id'];
    $Vehicle_Company = $_POST['VehicleCompany'];
    $Vehicle_Model_Name = $_POST['VehicleModelName'];
    $Vehicle_Color = $_POST['VehicleColor'];
    $Vehicle_Number = $_POST['VehicleNumber'];
    $Vehicle_Model_Year = $_POST['VehicleModelYear'];
    $State = $_POST['State'];
    $District = $_POST['District'];
    $Base = $_POST['Base'];
    $Date = $_POST['Date'];
    $Time1 = $_POST['Time1'];
    $Time2 = $_POST['Time2'];
    $Time_Period = $_POST['TimePeriod'];
    $Remarks = $_POST['Remarks'];

    mysqli_query($conn, "INSERT INTO `booking_details` VALUES('', '$User_Id', '$Vehicle_Company', '$Vehicle_Model_Name', '$Vehicle_Color', '$Vehicle_Number', '$Vehicle_Model_Year', '$State', '$District', '$Base', '$Date', '$Time1', '$Time2', '$Time_Period', '$Remarks')") or die(mysqli_error());
    echo '<script>alert("Booking Done Succesfully..!!"); location.replace("dashboard.php");</script>';
}
