<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="rgb(00, 00, 00)" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Smart Parking System | Dashboard</title>
</head>

<body style="background-color: rgb(00, 00, 20);">

    <!-- Session Check php -->
    <?php
    session_start();
    if (!(isset($_SESSION['id']) && $_SESSION['id'] != '')) {
        echo '<script>alert("Please Login to check your Profile."); location.replace("index.php");</script>';
    }
    ?>

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
                                <li><a class="dropdown-item" href="profile.php" data-toggle="tooltip" data-placement="right" title="View your Profile"><i class="fa fa-user active"></i> My Profile</a></li>
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

    <!-- User Profile Viewer -->
    <div class="container bootstrap snippets bootdey">
        <div class="panel-body inf-content">
            <div class="row">
                <div class="col-md-4">
                    <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario">
                    <ul title="Ratings" class="list-inline ratings text-center">
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <strong>Information</strong><br>
                    <div class="table-responsive">
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                            Identificacion
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        123456789
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-user  text-primary"></span>
                                            Name
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        Bootdey
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-cloud text-primary"></span>
                                            Lastname
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        Bootstrap
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-bookmark text-primary"></span>
                                            Username
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        bootnipets
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-eye-open text-primary"></span>
                                            Role
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        Admin
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-envelope text-primary"></span>
                                            Email
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        noreply@email.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-calendar text-primary"></span>
                                            created
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        20 jul 20014
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-calendar text-primary"></span>
                                            Modified
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        20 jul 20014 20:00:00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .inf-content {
            border: 1px solid #DDDDDD;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
        }
    </style>

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

    #Login {
        color: rgb(255, 255, 255);
        background-color: rgb(12, 83, 131);
        ;
    }

    #Login:hover {
        color: rgb(0, 0, 0);
        background-color: rgb(255, 255, 255);
    }

    #SignUp {
        color: rgb(255, 255, 255);
        background-color: rgb(12, 83, 131);
    }

    #SignUp:hover {
        color: rgb(0, 0, 0);
        background-color: rgb(255, 255, 255);
    }
</style>