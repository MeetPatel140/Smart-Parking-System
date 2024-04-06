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
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) {
        // last request was more than 5 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
        echo '<script>alert("SESSION EXPIRED !! Please Login again to view Bookings."); location.replace("index.php");</script>';
    }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

    if (!(isset($_SESSION['id']) && $_SESSION['id'] != '')) {
        echo '<script>alert("Please Login first to check Bookings."); location.replace("index.php");</script>';
    }
    ?>
    <title>Bookings</title>
</head>

<body style="background-color: rgb(00, 00, 20);">

    <!-- Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(00, 00, 40);">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Smart-Parking-System</a>
            <button id="NavToggler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <style>
                    #NavToggler:hover {
                        color: rgb(0, 0, 0);
                        background-color: rgba(150, 150, 150, 0.377);
                    }
                </style>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" data-toggle="tooltip" data-placement="bottom" title="Go to Home page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="dashboard.php" data-toggle="tooltip" data-placement="bottom" title="View Dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php" data-toggle="tooltip" data-placement="bottom" title="View Services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php" data-toggle="tooltip" data-placement="bottom" title="View About Us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_us.php" data-toggle="tooltip" data-placement="bottom" title="View Contact info">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" data-toggle="tooltip" data-placement="bottom" title="View More">More</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(00, 00, 40); border-color: aqua;">
                            <li><a class="dropdown-item" href="go_pro.php" data-toggle="tooltip" data-placement="right" title="Get Premium Features"><i class="fa fa-unlock"></i> Go Premium</a></li>
                            <li><a class="dropdown-item" href="check_avail_services.php" data-toggle="tooltip" data-placement="right" title="Check Services in your Area"><i class="fa fa-check-square"></i> Check Availability of Services</a></li>
                            <li>
                                <hr class="dropdown-divider" style="background-color: white;">
                            </li>
                            <li><a class="dropdown-item" href="faq.php" data-toggle="tooltip" data-placement="right" title="View FAQ"><i class="fa fa-question-circle"></i> FAQ</a></li>
                            <li><a class="dropdown-item" href="report.php" data-toggle="tooltip" data-placement="right" title="Send a Report of your issue"><i class="fa fa-flag"></i> Report a Problem</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" data-toggle="tooltip" data-placement="bottom" title="Type here to Search">
                    <button class="btn btn-outline-light" type="submit" data-toggle="tooltip" data-placement="bottom" title="Search for something"><i class="fa fa-search">Search</i></button>
                </form>
                <div class="collapse-navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" data-toggle="tooltip" data-placement="bottom" title="View Profile & More"><i class="fa fa-user-circle"></i>
                                <?php
                                echo "" . $_SESSION['first_name'] . " " . $_SESSION['last_name'] . "";
                                ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(00, 00, 40); border-color: aqua;">
                                <li><a class="dropdown-item" href="profile.php" data-toggle="tooltip" data-placement="right" title="View your Profile"><i class="fa fa-user"></i> My Profile</a></li>
                                <li><a class="dropdown-item" href="wallet.php" data-toggle="tooltip" data-placement="right" title="Check Wallet"><i class="fa fa-credit-card"></i> Wallet</a>
                                </li>
                                <li><a class="dropdown-item" href="settings.php" data-toggle="tooltip" data-placement="right" title="Open Settings"><i class="fa fa-cog"></i> Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider" style="background-color: white;">
                                </li>
                                <li><a class="dropdown-item" href="logout.php" data-toggle="tooltip" data-placement="right" title="Logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                </div>
            </div>
        </div>
    </nav>

    <!-- Booking List via TableView -->
    <div class="container" align="center">
        <?php
        require 'admin/conn.php';
        $User_id = $_SESSION['id'];

        $sql = "SELECT * from booking_details WHERE user_id = '$User_id' " or die(mysqli_error());
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        ?>
            <div class="container" id="Table">
                <div class="table" style="overflow-x:auto;">
                    <table class="table table-bordered" id="table" border="2" align="center" style="color: white;" cellpadding="5" cellspacing="5">
                        <tr align="center">
                            <th align="center"> Reg No. </th>
                            <th align="center"> Vehicle Company </th>
                            <th align="center"> Vehicle Model Name</th>
                            <th align="center"> Vehicle Color </th>
                            <th align="center"> Vehicle Number </th>
                            <th align="center"> Vehicle Model Year </th>
                            <th align="center"> State </th>
                            <th align="center"> District </th>
                            <th align="center"> Parking Base </th>
                            <th align="center"> Book Date </th>
                            <th align="center"> Book Time: From </th>
                            <th align="center"> Book Time: Till </th>
                            <th align="center"> Reservation for TimePeriod </th>
                            <th align="center"> Remarks </th>
                            <th align="center"> Action</th>
                        </tr>

                        <?php while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td align="center"><?php echo "#" . $row["book_id"] . ""; ?> </td>
                                <td align="center"><?php echo $row["vehicle_company"]; ?> </td>
                                <td align="center"><?php echo $row["vehicle_model_name"]; ?> </td>
                                <td align="center"><?php echo $row["vehicle_color"]; ?> </td>
                                <td align="center"><?php echo $row["vehicle_number"]; ?> </td>
                                <td align="center"><?php echo $row["vehicle_model_year"]; ?> </td>
                                <td align="center"><?php echo $row["state"]; ?> </td>
                                <td align="center"><?php echo $row["district"]; ?> </td>
                                <td align="center"><?php echo $row["parking_base"]; ?> </td>
                                <td align="center"><?php echo $row["book_date"]; ?> </td>
                                <td align="center"><?php echo $row["book_time_from"]; ?> </td>
                                <td align="center"><?php echo $row["book_time_till"]; ?> </td>
                                <td align="center"><?php echo $row["reservation_for_timeperiod"]; ?> </td>
                                <td align="center"><?php echo $row["remarks"]; ?> </td>
                                <td align="center">
                                    <div class="action d-flex">
                                        <button type="button" class="btn btn-success" style="margin: 10px;" onClick="location.href='DeleteData.php?isbn=<?php echo $row['id']; ?>'"><i class="fa fa-edit"></i> Edit</button>
                                        <button type="button" class="btn btn-danger" style="margin: auto;" onClick="location.href='DeleteData.php?isbn=<?php echo $row['id']; ?>'"><i class="fa fa-trash"></i> Delete</button>
                                    </div>
                                </td>

                            </tr>
                            </form>
                    <?php
                        }
                    } else {
                        echo "<br/><br/><center>No Booking found in the Database !</center>";
                        echo '<center><a href="dashboard.php">Go Back to Search other</a></center>';
                    }
                    ?>
                    </table>
                </div>
            </div>
    </div>

    <!-- Vertically Centered BookNewSlot-Modal -->
    <div class="modal fade" data-bs-backdrop="static" id="BookNewSlot" tabindex="-1" aria-labelledby="BookNewSlot" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border rounded overflow-hidden p-1" id="Modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="BookNewSlot_Title">Book New Slot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnClose"></button>
                </div>
                <form method="POST" action="booking_query.php" onSubmit="return confirm('Hello <?php echo "" . $_SESSION['first_name'] . ""; ?>, Are you sure you want to Book Parking Slot ? Make sure all details are correct before Booking ! (You can press CANCEL and Verify again)') ">
                    <div class="modal-body">
                        <table align="center">
                            <tr>
                                <td>
                                    <label id="VehicleCompany" style="color: white;" for="VehicleCompany">Vehicle Company:</label>
                                </td>
                                <td>
                                    <input id="VehicleCompany" class="form-control" list="VehicleCompanys" name="VehicleCompany" style="width: 160px; margin-bottom: 10px; color: white; background-color: rgb(00, 00, 50);" placeholder="Find Companies Here.." required>
                                    <datalist id="VehicleCompanys">
                                        <option value="Abarth">
                                        <option value="Acura">
                                        <option value="Alfa Romeo">
                                        <option value="Aston Martin">
                                        <option value="Audi">
                                        <option value="Bentley">
                                        <option value="BMW">
                                        <option value="Buick">
                                        <option value="Cadillac">
                                        <option value="Chevrolet">
                                        <option value="Chrysler">
                                        <option value="Citroen">
                                        <option value="Dacia">
                                        <option value="Dodge">
                                        <option value="Ferrari">
                                        <option value="Fiat">
                                        <option value="Ford">
                                        <option value="GMC">
                                        <option value="Honda">
                                        <option value="Hummer">
                                        <option value="Hyundai">
                                        <option value="Infiniti">
                                        <option value="Isuzu">
                                        <option value="Jaguar">
                                        <option value="Jeep">
                                        <option value="Kia">
                                        <option value="Lamborghini">
                                        <option value="Lancia">
                                        <option value="Land Rover">
                                        <option value="Lexus">
                                        <option value="Lincoln">
                                        <option value="Lotus">
                                        <option value="Maserati">
                                        <option value="Mazda">
                                        <option value="Mercedes-Benz">
                                        <option value="Mercury">
                                        <option value="Mini">
                                        <option value="Mitsubishi">
                                        <option value="Nissan">
                                        <option value="Opel">
                                        <option value="Peugeot">
                                        <option value="Pontiac">
                                        <option value="Porsche">
                                        <option value="Ram">
                                        <option value="Renault">
                                        <option value="Saab">
                                        <option value="Saturn">
                                        <option value="Scion">
                                        <option value="Seat">
                                        <option value="Skoda">
                                        <option value="Smart">
                                        <option value="SangYong">
                                        <option value="Subaru">
                                        <option value="Suzuki">
                                        <option value="Tesla">
                                        <option value="Toyota">
                                        <option value="Volkswagen">
                                        <option value="Volvo">
                                        <option value="Wiesmann">
                                    </datalist>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="VehicleModelName" style="color: white;" for="VehicleModelName">Vehicle Model Name:</label>
                                </td>
                                <td>
                                    <input id="VehicleModelName" class="form-control" list="VehicleModelNames" name="VehicleModelName" style="width: 160px; margin-bottom: 10px; color: white; background-color: rgb(00, 00, 50);" placeholder="Find Model Name Here.." required>
                                    <datalist id="VehicleModelNames">
                                        <option value="Hyundai IONIQ 5">
                                        <option value="Hyundai Azera">
                                        <option value="Hyundai Sonata">
                                        <option value="Hyundai Veloster N">
                                        <option value="Hyundai Veloster">
                                        <option value="Hyundai i30 Fastback N">
                                        <option value="Hyundai i30 N">
                                        <option value="Hyundai The new i30">
                                        <option value="Hyundai The all-new Elantra">
                                        <option value="Hyundai Accent">
                                        <option value="Hyundai i20">
                                        <option value="Hyundai i10">
                                        <option value="Hyundai Palisade">
                                        <option value="Hyundai Santa Fe">
                                        <option value="Hyundai The all-new Tucson">
                                        <option value="Hyundai Tucson">
                                        <option value="Hyundai Creta">
                                        <option value="Hyundai The new Kona">
                                        <option value="Hyundai KONA N">
                                        <option value="Hyundai Venue">
                                        <option value="Hyundai NEXO">
                                        <option value="Hyundai Santa Fe Hybrid/Plug-in Hybrid">
                                        <option value="Hyundai The all-new Tucson Hybrid">
                                        <option value="Hyundai KONA Electric">
                                        <option value="Hyundai The all-new Elantra Hybrid">
                                        <option value="Hyundai IONIQ Plug-in Hybrid">
                                        <option value="Hyundai IONIQ Electric">
                                        <option value="Hyundai IONIQ Hybrid">
                                        <option value="Hyundai The new i30 Hybrid">
                                        <option value="Hyundai STARIA">
                                        <option value="Hyundai H-1">
                                        <option value="Hyundai H-100">
                                        <option value="Honda HR-V">
                                        <option value="Honda CR-V">
                                        <option value="Honda CR-V Hybrid">
                                        <option value="Honda Passport">
                                        <option value="Honda Pilot">
                                        <option value="Honda EXPLOREBUILD">
                                        <option value="Honda Civic Sedan">
                                        <option value="Honda Insight">
                                        <option value="Honda Accord">
                                        <option value="Honda Accord Hybrid">
                                        <option value="Honda Clarity Plug-In Hybrid">
                                        <option value="Honda Clarity Fuel Cell">
                                        <option value="Honda Fit">
                                        <option value="Honda Civic Hatchback">
                                        <option value="Honda Civic Type R">
                                        <option value="Honda Odyssey">
                                        <option value="Honda Ridgeline">
                                        <option value="Honda Insight">
                                        <option value="Honda CR-V Hybrid">
                                        <option value="Honda Accord Hybrid">
                                        <option value="Honda Clarity Plug-In Hybrid">
                                        <option value="Skoda Superb">
                                        <option value="Skoda Mission">
                                        <option value="Skoda Octavia">
                                        <option value="Skoda Joyster">
                                        <option value="Skoda Vision X">
                                        <option value="Skoda 1100 GT">
                                        <option value="Skoda Vision E">
                                        <option value="Skoda VisionC">
                                        <option value="Skoda MissionL">
                                        <option value="Skoda Vision D">
                                        <option value="Skoda 1101 “Tudor”">
                                        <option value="Skoda Fabia">
                                        <option value="Skoda Yeti">
                                        <option value="Skoda Roomster">
                                        <option value="Skoda Rapid">
                                        <option value="Renault Megane">
                                        <option value="Renault Twingo">
                                        <option value="Renault Symbol">
                                        <option value="Renault Scenic">
                                        <option value="Renault Twizy">
                                        <option value="Renault Zoe">
                                        <option value="Renault Clio">
                                        <option value="Renault Kangoo">
                                        <option value="Renault Laguna Coupe">
                                        <option value="Renault Koleos">
                                        <option value="Renault Master">
                                        <option value="Renault Wind">
                                        <option value="Renault Twingo II">
                                        <option value="Renault Scénic III">
                                        <option value="Renault Scala">
                                        <option value="Renault Safrane II">
                                        <option value="Renault Pulse">
                                        <option value="Renault Modus">
                                        <option value="Renault Mégane III">
                                        <option value="Renault Megane II">
                                        <option value="Renault Laguna III">
                                        <option value="Renault Koleos">
                                        <option value="Renault Kangoo II">
                                        <option value="Renault Fluence">
                                        <option value="Renault Espace IV">
                                        <option value="Renault Clio IV">
                                        <option value="Renault Clio III">
                                        <option value="Renault Elect’road">
                                        <option value="Renault Vivaquatre">
                                        <option value="Renault Sport Spider">
                                        <option value="Renault Talisman">
                                        <option value="Renault Nerva Grand Sport">
                                        <option value="Renault Laguna">
                                        <option value="Renault Clio V6 Renault Sport">
                                        <option value="Renault Towncar">
                                        <option value="Renault Scénic">
                                        <option value="Renault Grand Prix">
                                        <option value="Renault Safrane">
                                        <option value="Renault Monaquatre">
                                        <option value="Renault Caravelle">
                                        <option value="Renault 8">
                                        <option value="Renault Zoom">
                                        <option value="Renault 5 Alpine Turbo">
                                        <option value="Renault Mégane">
                                        <option value="Renault Estafette">
                                        <option value="Renault Puncher">
                                        <option value="Renault Type MT">
                                        <option value="Renault Mégane Renault Sport">
                                        <option value="Renault GTA">
                                        <option value="Renault Frégate">
                                        <option value="Renault Reinastella">
                                        <option value="Renault KZ">
                                        <option value="Renault Vivastella">
                                        <option value="Renault 5 Alpine">
                                        <option value="Renault 15CV">
                                        <option value="Renault PR100.3">
                                        <option value="Renault 5 GT Turbo">
                                        <option value="Renault Trafic">
                                        <option value="Renault 7">
                                        <option value="Renault Nervahuit">
                                        <option value="Renault 20/30">
                                        <option value="Renault Argos">
                                        <option value="Renault 14">
                                        <option value="Renault Juvaquatre">
                                        <option value="Renault 25">
                                        <option value="Renault Eagle Premier">
                                        <option value="Renault AX">
                                        <option value="Renault Viva Grand Sport">
                                        <option value="Renault Eagle Medallion">
                                        <option value="Renault 5">
                                        <option value="Renault Primaquatre">
                                        <option value="Renault Dauphine">
                                        <option value="Renault Renault Espace">
                                        <option value="Renault Vel Satis">
                                        <option value="Renault KJ">
                                        <option value="Renault Primastella">
                                        <option value="Renault Vivasix">
                                        <option value="Renault Avantime">
                                        <option value="Renault Monasix">
                                        <option value="Renault Altica">
                                        <option value="Renault Alliance">
                                        <option value="Renault Celtaquatre">
                                        <option value="Renault Midlum">
                                        <option value="Renault Racoon">
                                        <option value="Renault R35">
                                        <option value="Renault Fiftie">
                                        <option value="Renault Reinasport">
                                        <option value="Renault Suprastella">
                                        <option value="Renault 6">
                                        <option value="Renault GS">
                                        <option value="Renault Nervastella">
                                        <option value="Renault 4">
                                        <option value="Renault 40CV">
                                        <option value="Renault 4CV">
                                        <option value="Renault Samsung SM3">
                                        <option value="Renault 16">
                                        <option value="Renault Alpine A442">
                                        <option value="Renault Alpine GTA/A610">
                                        <option value="Renault 10CV">
                                        <option value="Renault Fuego">
                                        <option value="Renault Colorale">
                                        <option value="Renault 9 & 11">
                                        <option value="Renault NN">
                                        <option value="Renault 19">
                                        <option value="Renault 12">
                                        <option value="Renault 21">
                                        <option value="Renault 18">
                                        <option value="Renault Nepta">
                                        <option value="Renault Taxi de la Marne">
                                        <option value="Renault 5 Turbo">
                                        <option value="Renault Voiturette">
                                        <option value="Renault Étoile Filante">
                                        <option value="Renault Monastella">
                                        <option value="Renault Sherpa 2">
                                        <option value="Renault 18/22CV">
                                        <option value="Renault Clio Renault Sport">
                                        <option value="Renault 3">
                                        <option value="Renault Magnum">
                                        <option value="Renault 24CV">
                                        <option value="Renault Type Y">
                                        <option value="Renault Rodeo">
                                        <option value="Renault Fluence Z.E.">
                                        <option value="Maruti Suzuki Alert">
                                        <option value="Maruti Suzuki WagonR">
                                        <option value="Maruti Suzuki Dzire">
                                        <option value="Maruti Suzuki Swift">
                                        <option value="Maruti Suzuki Grand i10">
                                        <option value="Maruti Suzuki City">
                                        <option value="Maruti Suzuki Amaze">
                                        <option value="Maruti Suzuki Xcent">
                                        <option value="Maruti Suzuki Eon">
                                        <option value="Maruti Suzuki Celerio">
                                            <options value="Tata Telcoline">
                                                <options value="Tata Estate">
                                                    <options value="Tata Sierra">
                                                        <options value="Tata Spacio">
                                                            <options value="Tata Sumo">
                                                                <options value="Tata Indica">
                                                                    <options value="Tata Indigo">
                                                                        <options value="Tata Indigo Marina">
                                                                            <options value="Tata Venture">
                                                                                <options value="Tata Sumo Grande">
                                                                                    <options value="Tata Vista">
                                                                                        <options value="Tata Manza">
                                                                                            <options value="Tata Aria">
                                                                                                <options value="Tata Winger">
                                                                                                    <options value="Tata Nano">
                                                                                                        <options value="Tata Xenon">
                                                                                                            <options value="Tata Zest">
                                                                                                                <options value="Tata Bolt">
                                                                                                                    <options value="Tata Hexa">
                                                                                                                        <options value="Toyota Fortuner">
                                                                                                                            <options value="Toyota Innova Crysta">
                                                                                                                                <options value="Toyota Urban Cruiser">
                                                                                                                                    <options value="Toyota Glanza">
                                                                                                                                        <options value="Toyota Yaris">
                                                                                                                                            <options value="Toyota Vellfire">
                                                                                                                                                <options value="Toyota Camry">
                                                                                                                                                    <options value="Toyota Yaris Cross">
                                                                                                                                                        <options value="Kia Seltos">
                                                                                                                                                            <options value="Kia Sonet">
                                                                                                                                                                <options value="Kia Sonet">
                                                                                                                                                                    <options value="Kia Carnival">
                                                                                                                                                                        <options value="Kia Rio">
                                                                                                                                                                            <options value="Mercedes-Benz A-Class Limousine">
                                                                                                                                                                                <options value="Mercedes-Benz E-Class">
                                                                                                                                                                                    <options value="Mercedes-Benz GLS">
                                                                                                                                                                                        <options value="Mercedes-Benz C-Class">
                                                                                                                                                                                            <options value="Mercedes-Benz G-Class">
                                                                                                                                                                                                <options value="Mercedes-Benz S-Class">
                                                                                                                                                                                                    <options value="Mercedes-Benz GLC">
                                                                                                                                                                                                        <options value="Mercedes-Benz GLE">
                                                                                                                                                                                                            <options value="Mercedes-Benz C-Class Cabriolet">
                                                                                                                                                                                                                <options value="Mercedes-Benz AMG GT">
                                                                                                                                                                                                                    <options value="Mercedes-Benz AMG GLC 43 Coupe">
                                                                                                                                                                                                                        <options value="Mercedes-Benz GLC Coupe">
                                                                                                                                                                                                                            <options value="Mercedes-Benz V-Class">
                                                                                                                                                                                                                                <options value="Mercedes-Benz S-Coupe">
                                                                                                                                                                                                                                    <options value="Mercedes-Benz C-Coupe">
                                                                                                                                                                                                                                        <options value="Mercedes-Benz CLS">
                                                                                                                                                                                                                                            <options value="Mercedes-Benz AMG GT 4-Door Coupe">
                                                                                                                                                                                                                                                <options value="Mercedes-Benz AMG GLE Coupe">
                                                                                                                                                                                                                                                    <options value="Mercedes-Benz EQC">
                                                                                                                                                                                                                                                        <options value="Mercedes-Benz New GLA">
                                                                                                                                                                                                                                                            <options value="Mercedes-Benz New S-Class">
                                                                                                                                                                                                                                                                <options value="Mercedes-Benz E-Class Cabriolet Facelift">
                                                                                                                                                                                                                                                                    <options value="Volkswagen Polo">
                                                                                                                                                                                                                                                                        <options value="Volkswagen Vento">
                                                                                                                                                                                                                                                                            <options value="Volkswagen T-Roc">
                                                                                                                                                                                                                                                                                <options value="Volkswagen Tiguan AllSpace">
                                                                                                                                                                                                                                                                                    <options value="Volkswagen Taigun">
                                                                                                                                                                                                                                                                                        <options value="Volkswagen Tiguan">
                                                                                                                                                                                                                                                                                            <options value="Volkswagen Arteon">
                                    </datalist><br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="VehicleColor" style="color: white;" for="VehicleColor">Vehicle Color:</label>
                                </td>
                                <td>
                                    <input id="VehicleColor" class="form-control" list="VehicleColors" name="VehicleColor" style="width: 160px; margin-bottom: 10px; color: white; background-color: rgb(00, 00, 50);" placeholder="Find Colors Here.." required>
                                    <datalist id="VehicleColors">
                                        <option value="Red">
                                        <option value="Orange">
                                        <option value="Green">
                                        <option value="Yellow">
                                        <option value="Blue">
                                        <option value="Indigo">
                                        <option value="Violet">
                                        <option value="Purple">
                                        <option value="Pink">
                                        <option value="Silver">
                                        <option value="Gold">
                                        <option value="Beige">
                                        <option value="Brown">
                                        <option value="Grey / Gray">
                                        <option value="Black">
                                        <option value="White">
                                    </datalist><br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="VehicleNumber" style="color: white;" for="VehicleNumber">Vehicle Number:</label>
                                </td>
                                <td>
                                    <input class="form-control" name="VehicleNumber" id="VehicleNumber" style="text-transform: uppercase; width: 160px; margin-bottom: 10px; color: white; background-color: rgb(00, 00, 50);" placeholder="Enter Vehicle Number Here.." value="GJ01JK1234" required><br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="VehicleModelYear" style="color: white;" for="VehicleModelYear">Vehicle Model Year:</label>
                                </td>
                                <td>
                                    <select class="form-control" name="VehicleModelYear" id="VehicleModelYear" style="width: 160px; margin-bottom: 10px; color: white; background-color: rgb(00, 00, 50);" required><br />
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                    </select><br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <hr class="divider" style="background-color: white;">
                                </td>
                                <td>
                                    <hr class="divider" style="background-color: white;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="State" style="color: white;" for="States">State:</label>
                                </td>
                                <td>
                                    <input id="State" class="form-control" list="States" name="State" style="width: 160px; margin-bottom: 10px; color: white; background-color: rgb(00, 00, 50);" placeholder="Find State Here.." value="Gujarat" required>
                                    <datalist id="States">
                                        <option value="Andra Pradesh">
                                        <option value="Arunachal Pradesh">
                                        <option value="Assam">
                                        <option value="Bihar">
                                        <option value="Chhattisgarh">
                                        <option value="Goa">
                                        <option value="Gujarat">
                                        <option value="Haryana">
                                        <option value="Himachal Pradesh">
                                        <option value="Jharkhand">
                                        <option value="Karnataka">
                                        <option value="Kerala">
                                        <option value="Madhya Pradesh">
                                        <option value="Maharashtra">
                                        <option value="Manipur">
                                        <option value="Meghalaya">
                                        <option value="Mizoram">
                                        <option value="Nagaland">
                                        <option value="Odisha">
                                        <option value="Punjab">
                                        <option value="Rajasthan">
                                        <option value="Sikkim">
                                        <option value="Tamil Nadu">
                                        <option value="Telangana">
                                        <option value="Tripura">
                                        <option value="Uttar Pradesh">
                                        <option value="Uttrakhand">
                                        <option value="West Bengal">
                                    </datalist><br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="District" style="color: white;" for="Districts">District:</label>
                                </td>
                                <td>
                                    <input id="District" class="form-control" list="Districts" name="District" style="width: 160px; margin-bottom: 10px; color: white; background-color: rgb(00, 00, 50);" value="Ahmedabad" placeholder="Find District Here.." required>
                                    <datalist id="Districts">
                                        <option value="Ahmedabad">
                                        <option value="Amreli">
                                        <option value="Anand">
                                        <option value="Aravalli">
                                        <option value="Banaskantha (Palanpur)">
                                        <option value="Bharuch">
                                        <option value="Bhavnagar">
                                        <option value="Botad">
                                        <option value="Chhota Udepur">
                                        <option value="Dahod">
                                        <option value="Dangs (Ahwa)">
                                        <option value="Devbhoomi Dwarka">
                                        <option value="Gandhinagar">
                                        <option value="Gir Somnath">
                                        <option value="Jamnagar">
                                        <option value="Junagadh">
                                        <option value="Kachchh">
                                        <option value="Kheda (Nadiad)">
                                        <option value="Mahisagar">
                                        <option value="Mehsana">
                                        <option value="Morbi">
                                        <option value="Narmada (Rajpipla)">
                                        <option value="Navsari">
                                        <option value="Panchmahal (Godhra)">
                                        <option value="Patan">
                                        <option value="Porbandar">
                                        <option value="Rajkot">
                                        <option value="Sabarkantha (Himmatnagar)">
                                        <option value="Surat">
                                        <option value="Surendranagar">
                                        <option value="Tapi (Vyara)">
                                        <option value="Vadodara">
                                        <option value="Valsad">
                                    </datalist><br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="Base" style="color: white;" for="Bases">Parking Base:</label>
                                </td>
                                <td>
                                    <input id="Base" class="form-control" list="Bases" name="Base" style="width: 160px; margin-bottom: 10px; color: white; background-color: rgb(00, 00, 50);" value="" placeholder="Choose Parking Base Here.." required>
                                    <datalist id="Bases">
                                        <option value="Airport">
                                        <option value="Ashram Road">
                                        <option value="Baldana">
                                        <option value="Bareja">
                                        <option value="CG Road">
                                        <option value="Chekhla">
                                        <option value="Ellise Bridge">
                                        <option value="Hathijan">
                                        <option value="Khanpur">
                                        <option value="Lal Darwaja">
                                        <option value="Maninagar">
                                        <option value="Motera">
                                        <option value="Railway Station">
                                        <option value="SG Road">
                                        <option value="Shahibaug">
                                        <option value="Vasna">
                                        <option value="Vejalpur">
                                        <option value="10 Acres Mall">
                                        <option value="Ahmedabad Railway Station">
                                        <option value="Akshardham Temple Ahmedabad">
                                        <option value="AlphaOne Mall">
                                        <option value="Balaji Agora Mall">
                                        <option value="CIMS Hospital">
                                        <option value="Ellis Bridge">
                                        <option value="Gulmohar Park Mall">
                                        <option value="Huthee Sinh Jain Temple">
                                        <option value="Iscon Mega Mall">
                                        <option value="ISKCON Temple Ahmedabad">
                                        <option value="Jama Masjid Ahmedabad">
                                        <option value="Kankria Lake">
                                        <option value="Krishna Shal">
                                        <option value="Krishna Shalby Hospital">
                                        <option value="Nehru Bridge">
                                        <option value="Panchshil Hospital">
                                        <option value="S.A.L Hospital And Medical Institute">
                                        <option value="Sabarmati Ashram">
                                        <option value="Sardar Vallabhbhai Patel International Airport">
                                        <option value="Sarkhej Roza">
                                        <option value="Sidi Saiyed's Mosque">
                                        <option value="Swaminarayan Mandir">
                                        <option value="The Acropolis Ahmedabad">
                                        <option value="The Gujarat Research & Medical Institute (Rajasthan Hospitals)">
                                        <option value="World Vintage Car Museum">
                                    </datalist><br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="Date" style="color: white;" for="Date">Book Date:</label>
                                </td>
                                <td>
                                    <input type="date" class="form-control" id="Date" name="Date" style="width: 160px; margin-bottom: 10px; color: white; background-color: rgb(00, 00, 50);" required value="<?php echo date('Y-m-d'); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label style="color: white;">Book Time Slot:</label>
                                </td>
                                <td>
                                    <label style="color: white;">------------------------</label>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <label id="Time1" style="padding-right: 10px; color: white;">From:</label>
                                </td>
                                <td>
                                    <input type="time" class="form-control" id="Time1" name="Time1" style="width: auto; margin-bottom: 10px; color: white; background-color: rgb(00, 00, 50);" required value="<?php date_default_timezone_set('Asia/Kolkata');
                                                                                                                                                                                                                echo date("H:i"); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <label id="Time2" style="padding-right: 10px; color: white;">Till:</label>
                                </td>
                                <td>
                                    <input type="time" class="form-control" id="Time2" name="Time2" style="width: auto; margin-bottom: 10px; color: white; background-color: rgb(00, 00, 50);" required value="<?php date_default_timezone_set('Asia/Kolkata');
                                                                                                                                                                                                                $date = date("H:i", strtotime(date("H:i") . "+10 minutes"));
                                                                                                                                                                                                                echo $date; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="TimePeriod" style="margin-bottom: 10px; color: white;">Reserving for TimePeriod:</label>
                                </td>
                                <td>
                                    <select class="form-control" name="TimePeriod" id="TimePeriod" style="width: 160px; color: white; margin-bottom: 15px; background-color: rgb(00, 00, 50);" required><br />
                                        <option value="10">10 Minutes</option>
                                        <option value="20">20 Minutes</option>
                                        <option value="30">30 Minutes (0.5hr)</option>
                                        <option value="40">40 Minutes</option>
                                        <option value="50">50 Minutes</option>
                                        <option value="60">60 Minutes (1hr)</option>
                                        <option value="70">70 Minutes</option>
                                        <option value="80">80 Minutes</option>
                                        <option value="90">90 Minutes (1.5hr)</option>
                                        <option value="100">100 Minutes</option>
                                        <option value="111">110 Minutes</option>
                                        <option value="120">120 Minutes (2hrs)</option>
                                        <option value="130">130 Minutes</option>
                                        <option value="140">140 Minutes</option>
                                        <option value="150">150 Minutes (2.5hrs)</option>
                                        <option value="160">160 Minutes</option>
                                        <option value="170">170 Minutes</option>
                                        <option value="180">180 Minutes (3hrs)</option>
                                        <option value="190">190 Minutes</option>
                                        <option value="200">200 Minutes</option>
                                        <option value="210">210 Minutes (3.5hrs)</option>
                                        <option value="220">220 Minutes</option>
                                        <option value="230">230 Minutes</option>
                                        <option value="240">240 Minutes (4hrs)</option>
                                        <option value="250">250 Minutes</option>
                                        <option value="260">260 Minutes</option>
                                        <option value="270">270 Minutes (4.5hrs)</option>
                                        <option value="280">280 Minutes</option>
                                        <option value="290">290 Minutes</option>
                                        <option value="300">300 Minutes (5hrs)</option>
                                        <option value="310">310 Minutes</option>
                                        <option value="320">320 Minutes</option>
                                        <option value="330">330 Minutes (6.5hrs)</option>
                                        <option value="340">340 Minutes</option>
                                        <option value="350">350 Minutes</option>
                                        <option value="360">360 Minutes (6hrs)</option>
                                        <option value="360+">More than 360 Minutes (6hrs)+</option>
                                    </select><br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <hr class="divider" style="background-color: white;">
                                </td>
                                <td>
                                    <hr class="divider" style="background-color: white;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="Remarks" style="color: white;">Remarks:</label>
                                </td>
                                <td>
                                    <textarea placeholder="You can Write any Remarks here so you can remember this Booking for Future reference.." id="Remarks" name="Remarks" rows="5" cols="20" style="color: white; background-color: rgb(00, 00, 50); font-size: small;"></textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="book_now" value="book_now" class="btn btn-primary"><i class="fa fa-save"></i> Book Now</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-close"></i> Cancle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Vertically Centered CheckSlotDetails-Modal -->
    <div class="modal fade" data-bs-backdrop="static" id="CheckSlotDetails" tabindex="-1" aria-labelledby="CheckSlotDetails_Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border rounded overflow-hidden p-1" id="Modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="CheckSlotDetails_Title">Check Slot Details :</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnClose"></button>
                </div>
                <div class="modal-body">
                    <input id="SearchBox" class="form-control me-2" type="search" placeholder="Enter Your Registeration Number Here.." aria-label="Search" data-toggle="tooltip" data-placement="bottom" title="Enter Registeration Number Here">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-light" type="submit" data-toggle="tooltip" data-placement="bottom" title="Search for something"><i class="fa fa-search"> Search</i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="text-secondary px-5 py-0 text-center" style="background-color: rgb(0, 0, 30);">
        <div class="py-1">
            <h1 class="display-5 fw-bold text-white"></h1>
            <div class="col-lg-6 mx-auto">
                <footer>
                    <p class="float-right"><a href="#">Back to top</a></p>
                    <p>All Rights Reserved © 2021-2024 Smart Parking System, Inc. · <a href="privacy.php">Privacy</a> ·
                        <a href="terms.php">Terms</a>
                    </p>
                </footer>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button onclick="location.href='follow_us.php'" type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Follow
                        Us</button>
                    <button onclick="location.href='follow_us.php'" type="button" class="btn btn-outline-light btn-lg px-4">Contact Us</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!-- Custom CSS -->
<style>
    #TimePeriod {
        display: inline-block;
    }

    #Time2 {
        display: inline-block;
    }

    #Time1 {
        display: inline-block;
    }

    #Date {
        display: inline-block;
    }

    #Base {
        display: inline-block;
    }

    #District {
        display: inline-block;
    }

    #State {
        display: inline-block;
    }

    #VehicleModelYear {
        display: inline-block;
    }

    #VehicleNumber {
        display: inline-block;
    }

    #VehicleColor {
        display: inline-block;
    }

    #VehicleModelName {
        display: inline-block;
    }

    #VehicleCompany {
        display: inline-block;
    }

    #VehicleType {
        display: inline-block;
    }

    #SearchBox {
        color: rgb(255, 255, 255);
        background-color: rgb(00, 00, 50);
    }

    #btnClose {
        background-color: white;
    }

    #Label1 {
        color: white;
    }

    #BookNewSlot_Title {
        color: white;
    }

    #CheckSlotDetails_Title {
        color: white;
    }

    #Modal {
        background-color: rgb(00, 00, 20);
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    #table {
        margin-top: 30vh;
        margin-bottom: 25vh;
        background-color: rgba(0, 0, 40, 1);
        width: 100%;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: rgb(0, 0, 0);
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    .dropdown-item {
        color: rgba(255, 255, 255, 0.712);
    }

    .dropdown-item:hover {
        color: rgb(0, 255, 255);
        background-color: rgb(00, 00, 35);
    }
</style>