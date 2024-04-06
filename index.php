<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="rgb(00, 00, 00)" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Smart Parking System | Home</title>
</head>

<body style="background-color: rgb(00, 00, 20);">

    <!-- Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(00, 00, 40);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Smart-Parking-System</a>
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
                        <a class="nav-link active" aria-current="page" href="index.php" data-toggle="tooltip" data-placement="bottom" title="Go to Home page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php" data-toggle="tooltip" data-placement="bottom" title="View Dashboard">Dashboard</a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" data-toggle="tooltip" data-placement="bottom" title="View More">
                            More
                        </a>
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
                <div class="mx-1 m-1">
                    <button id="Login" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal" data-toggle="tooltip" data-placement="bottom" title="Login with your Account"><i class="fa fa-sign-in"></i> Login</button>
                    <button id="SignUp" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#signupModal" data-toggle="tooltip" data-placement="bottom" title="SignUp to create mew Account"><i class="fa fa-user-plus"></i> Sign-Up</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border rounded overflow-hidden p-1" id="Modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="LoginModalClose"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="login_query.php">
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label" id="LoginLabelPhoneNumber">Phone Number</label>
                            <input type="number" class="form-control" name="pn" id="LoginInputPhoneNumber" aria-describedby="textHelp" required placeholder="Enter you Phone Number Here..">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label" id="LoginLabelPassword">Password</label>
                            <input type="password" class="form-control" name="pass" id="LoginInputPassword" required placeholder="Enter your Password Here...">
                        </div>
                        <div class="mb-3 form-check">
                            <input onClick="myFunction1()" type="checkbox" class="form-check-input" id="LoginCheckbox">
                            <script>
                                function myFunction1() {
                                    var x = document.getElementById("LoginInputPassword");
                                    if (x.type === "password")
                                    {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                }
                            </script>
                            <label class="form-check-label" for="LLoginCheck" id="LoginVerification">Show Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login" style="width: 30%;"><i class="fa fa-sign-in"></i> Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- SignUp Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border rounded overflow-hidden p-1" id="Modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">SignUp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="SignupModalClose"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="signup_query.php">
                        <div class="mb-3">
                            <label for="sugnupInputText1" class="form-label" id="SignupLabelFirstName">First Name</label>
                            <input type="text" name="fn" class="form-control" id="SignupInputFirstName" aria-describedby="textHelp" required placeholder="Enter First Name Here..">
                        </div>
                        <div class="mb-3">
                            <label for="signupInputText2" class="form-label" id="SignupLabelMiddleName">Middle Name</label>
                            <input type="text" name="mn" class="form-control" id="SignupInputMiddleName" aria-describedby="textHelp" required placeholder="Enter Middle Name Here..">
                        </div>
                        <div class="mb-3">
                            <label for="signupInputText3" class="form-label" id="SignupLabelLastName">Last Name</label>
                            <input type="text" name="ln" class="form-control" id="SignupInputLastName" aria-describedby="textHelp" required placeholder="Enter Last Name Here..">
                        </div>
                        <div class="mb-3">
                            <label for="signupInputEmail" class="form-label" id="SignupLabelEmailAddress">Email Address</label>
                            <input type="email" name="ei" class="form-control" id="SignupInputEmailAddress" aria-describedby="textHelp" required placeholder="Enter Email ID Here..">
                        </div>
                        <div class="mb-3">
                            <label for="signupInputNumber" class="form-label" id="SignupLabelPhoneNumber">Phone Number: +91</label>
                            <input type="text" name="pn" class="form-control" id="SignupInputPhoneNumber" aria-describedby="textHelp" required maxlength="10" placeholder="Enter Phone Number Here..">
                        </div>
                        <div class="mb-3">
                            <label for="signupInputPassword1" class="form-label" id="SignupLabelCreateNewPassword">New Password</label>
                            <input type="password" name="pass" class="form-control" id="SignupInputCreateNewPassword" required placeholder="Create New Password Here..">
                        </div>
                        <div class="mb-3 form-check">
                            <input onClick="myFunction()" type="checkbox" class="form-check-input" id="LoginCheck">
                            <script>
                                function myFunction() {
                                    var x = document.getElementById("SignupInputCreateNewPassword");
                                    if (x.type === "password")
                                    {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                }
                            </script>
                            <label class="form-check-label" for="LLoginCheck" id="SignupVerification">Show Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="signup" style="width: 35%;"><i class="fa fa-user-plus"></i> Sign-Up</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Alert Message Pop-up -->
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <p align="center"><b>README:</b></br>
            <br />Welcome !<br />This project is under Development. So please be patience while we are adding some New Features in it...<br />
            | |<br />> -----------------------------------
            <<br />(Project By: Meet, Amin, Nikhil)<br />> -----------------------------------
            <<br />| |
            <br /><b>Last Modification:</b> May 5 | 05:15AM<br /><b>Project Status:</b> 95% Completed !
        </p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="AlertClose"></button>
    </div>

    <!-- Image Slide Show -->
    <div class="container my-2 p-1">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner border rounded overflow-hidden">
                <div class="carousel-item active">
                    <img src="img/bg.jpg" class="d-block w-100" alt="Sorry, we could not load this image in your device for some technical issues !">

                    <div class="carousel-caption d-none d-md-block">
                        <h6 style="font-size: 54px; font-family: 'Times New Roman', Times, serif; color: rgb(255, 255, 255);">
                            We manage parking slots to provide our Services !</h6>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/bg1.jpg" class="d-block w-100" alt="Sorry, we could not load this image in your device for some technical issues !">
                    <div class="carousel-caption d-none d-md-block">
                        <h6 style="font-size: 54px; font-family: 'Times New Roman', Times, serif; color: rgb(255, 255, 255);">
                            Life is a journey, but don't worry,</br>you will find the parking slot at the end !</h6>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/bg2.jpg" class="d-block w-100" alt="Sorry, we could not load this image in your device for some technical issues !">
                    <div class="carousel-caption d-none d-md-block">
                        <h6 style="font-size: 54px; font-family: 'Times New Roman', Times, serif; color: rgb(255, 255, 255);">
                            33% of urban traffic is actively seeking a parking space</h6>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Post Cards Container -->
    <div class="container p-0">
        <div class="row mb-0 mx-0 my-3 p-0">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-5 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary" id="postHead">Priority</strong>
                        <h3 class="mb-0" id="postTitle">Safety First</h3>
                        <div class="mb-1 text-muted" id="postDate">Apr 19</div>
                        <p class="card-text mb-auto" id="postText">Our first priority is to provide Safety to our customers during this COVID-19 pendemics..</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="img/Doctors.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        </img>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-5 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success" id="postHead">World</strong>
                        <h3 class="mb-0" id="postTitle">Pros of Online Parking</h3>
                        <div class="mb-1 text-muted" id="postDate">Apr 18</div>
                        <p class="card-text mb-auto" id="postText">You can book your Parking Slot near you anytime in this COVID-19 pendemics..</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="img/POOS.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        </img>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Long Cards -->
    <div class="container my-2 d-block">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="cardSmacing">
                <div class="col border rounded overflow-hidden p-1">
                    <div class="card" id="card">
                        <img src="/SmartParkingSystem/img/Card3.jpg" class="card-img-top" alt="Image Can't Load, Please Refresh !">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitle">Premium & Luxurious</h5>
                            <p class="card-text" id="cardText">We also provide Special VIP Parking Slots to Premium & Expensive Vehicles.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardSmacing">
                <div class="col border rounded overflow-hidden p-1">
                    <div class="card" id="card">
                        <img src="/SmartParkingSystem/img/Card4.jpg" class="card-img-top" alt="Image Can't Load, Please Refresh !">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitle">Super-Fast Website & Services</h5>
                            <p class="card-text" id="cardText">We use High-End Servers to run this Website over to it. So no Lag/Slow Speed issues.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardSmacing">
                <div class="col border rounded overflow-hidden p-1">
                    <div class="card" id="card">
                        <img src="/SmartParkingSystem/img/Card1.jpg" class="card-img-top" alt="Image Can't Load, Please Refresh !">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitle">Highly-Encrypted Database & User Credentials</h5>
                            <p class="card-text" id="cardText">Our Website is Specially made by Cyber-Experts Team, to Protect our Data from Hackers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardSmacing">
                <div class="col border rounded overflow-hidden p-1">
                    <div class="card" id="card">
                        <img src="/SmartParkingSystem/img/Card2.jpg" class="card-img-top" alt="Image Can't Load, Please Refresh !">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitle">No Need to wait in Queue</h5>
                            <p class="card-text" id="cardText">Just Login and Select Date&Time and Book your Parking Slot. No need to wait in Queue..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardSmacing">
                <div class="col border rounded overflow-hidden p-1">
                    <div class="card" id="card">
                        <img src="/SmartParkingSystem/img/Card7.jpg" class="card-img-top" alt="Image Can't Load, Please Refresh !">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitle">Security Checkup in Several Minutes</h5>
                            <p class="card-text" id="cardText">Our Security Team will Guard whole Parking Base by taking rounds within minutes..!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardSmacing">
                <div class="col border rounded overflow-hidden p-1">
                    <div class="card" id="card">
                        <img src="/SmartParkingSystem/img/Card8.jpg" class="card-img-top" alt="Image Can't Load, Please Refresh !">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitle">24x7 Services & Parkings OPEN</h5>
                            <p class="card-text" id="cardText">This Service is 24x7 Open and will provide best Service to Users.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardSmacing">
                <div class="col border rounded overflow-hidden p-1">
                    <div class="card" id="card">
                        <img src="/SmartParkingSystem/img/Card9.jpg" class="card-img-top" alt="Image Can't Load, Please Refresh !">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitle">Huge Parking Base</h5>
                            <p class="card-text" id="cardText">We have many Huge Parking Bases, i.e. UnderGround, Ground, On Building Terris,etc..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardSmacing">
                <div class="col border rounded overflow-hidden p-1">
                    <div class="card" id="card">
                        <img src="/SmartParkingSystem/img/Card11.jpg" class="card-img-top" alt="Image Can't Load, Please Refresh !">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitle">Other Vehicles</h5>
                            <p class="card-text" id="cardText">You can also Park Bicycles in our Parking Slots too..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardSmacing">
                <div class="col border rounded overflow-hidden p-1">
                    <div class="card" id="card">
                        <img src="/SmartParkingSystem/img/Card12.jpg" class="card-img-top" alt="Image Can't Load, Please Refresh !">
                        <div class="card-body">
                            <h5 class="card-title" id="cardTitle">Wallet & Payments</h5>
                            <p class="card-text" id="cardText">You can Pay-First, Pay-Last, Pay-on-time with our Wallet. All Cards & Cash Applicable.</p>
                        </div>
                    </div>
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
                    <button onclick="location.href = 'follow_us.php';" type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Follow Us</button>
                    <button onclick="location.href = 'contact_us.php';" type="button" class="btn btn-outline-light btn-lg px-4">Contact Us</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!-- Custom CSS -->
<style>
    #AlertClose {
        color: rgb(126, 210, 255);
    }

    #Modal {
        background-color: rgb(00, 00, 20);
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    .modal-title {
        color: rgb(255, 255, 255);
    }

    #LoginModalClose {
        background-color: rgb(255, 255, 255);
    }

    #LoginLabelPhoneNumber {
        color: rgb(255, 255, 255);
    }

    #LoginInputPhoneNumber {
        color: rgb(255, 255, 255);
        background-color: rgb(00, 00, 50);
    }

    #LoginLabelPassword {
        color: rgb(255, 255, 255);
    }

    #LoginInputPassword {
        color: rgb(255, 255, 255);
        background-color: rgb(00, 00, 50);
    }

    #LoginVerification {
        color: rgb(255, 255, 255);
    }

    #SignupModalClose {
        background-color: rgb(255, 255, 255);
    }

    #SignupLabelFirstName {
        color: rgb(255, 255, 255);
    }

    #SignupInputFirstName {
        color: rgb(255, 255, 255);
        background-color: rgb(00, 00, 50);
    }

    #SignupLabelMiddleName {
        color: rgb(255, 255, 255);
    }

    #SignupInputMiddleName {
        color: rgb(255, 255, 255);
        background-color: rgb(00, 00, 50);
    }

    #SignupLabelLastName {
        color: rgb(255, 255, 255);
    }

    #SignupInputLastName {
        color: rgb(255, 255, 255);
        background-color: rgb(00, 00, 50);
    }

    #SignupLabelPhoneNumber {
        color: rgb(255, 255, 255);
    }

    #SignupInputPhoneNumber {
        color: rgb(255, 255, 255);
        background-color: rgb(00, 00, 50);
    }

    #SignupLabelEmailAddress {
        color: rgb(255, 255, 255);
    }

    #SignupInputEmailAddress {
        color: rgb(255, 255, 255);
        background-color: rgb(00, 00, 50);
    }

    #SignupLabelCreateNewUsername {
        color: rgb(255, 255, 255);
    }

    #SignupInputCreateNewUsername {
        color: rgb(255, 255, 255);
        background-color: rgb(00, 00, 50);
    }

    #SignupLabelCreateNewPassword {
        color: rgb(255, 255, 255);
    }

    #SignupInputCreateNewPassword {
        color: rgb(255, 255, 255);
        background-color: rgb(00, 00, 50);
    }

    #SignupVerification {
        color: rgb(255, 255, 255);
    }

    #cardTitle {
        color: rgb(255, 255, 255);
    }

    #cardText {
        color: rgba(238, 247, 176, 0.666);
    }

    #card {
        background-color: rgb(0, 0, 20);
    }

    #postTitle {
        color: rgb(255, 255, 255);
    }

    #postText {
        color: rgba(238, 247, 176, 0.666);
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