<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="rgb(00, 00, 00)" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Session Check php -->
    <?php
    session_start();
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300))
    {
        // last request was more than 5 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
        echo '<script>alert("SESSION EXPIRED !! Please Login again to view Bookings."); location.replace("index.php");</script>';
    }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

    if (!(isset($_SESSION['id']) && $_SESSION['id'] != ''))
    {
        echo '<script>alert("Please Login first to check Bookings."); location.replace("index.php");</script>';
    }
    ?>
    <title>DeleteData</title>
</head>
<body>
    <center>
        <h2>Simple Library Management System</h2>
    </center>
    <?php

    require "admin/conn.php";

    if (isset($_GET['reg_id']))
    {
        $reg_id = $_GET['reg_id'];
        $delete = mysqli_query($conn, "DELETE from booking_details WHERE reg_id = '$reg_id'");
    }

    if ($delete) 
    {
        //mysqli_close($conn);                      // Close connection
        echo '<script>alert("Booking Deleted Succesfully..!!"); location.replace("dashboard.php");</script>';    // redirects to dashboard page again
        exit;
    } 
    else 
    {
        echo '<script>alert("Error deleting record !")</script>'; // display error message if not delete
    }
    ?>
</body>

</html>