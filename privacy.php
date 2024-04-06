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
                        <a class="nav-link" aria-current="page" href="index.php" data-toggle="tooltip" data-placement="bottom" title="Go to Home page">Home</a>
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
                            <input type="text" class="form-control" name="pn" id="LoginInputPhoneNumber" aria-describedby="textHelp" required placeholder="Enter you Phone Number Here..">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label" id="LoginLabelPassword">Password</label>
                            <input type="password" class="form-control" name="pass" id="LoginInputPassword" required placeholder="Enter your Password Here...">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="LoginCheckbox" required>
                            <label class="form-check-label" for="LLoginCheck" id="LoginVerification">I am not a Robot</label>
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
                            <input type="checkbox" class="form-check-input" id="LoginCheck" required>
                            <label class="form-check-label" for="LLoginCheck" id="SignupVerification">I am not a Robot</label>
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

    <!-- Privacy & Policy -->
    <div class="container">
        <div class="Box">
            <h1>Privacy Policy for Smart Parking System</h1>

            <p>At Smart Parking System, accessible from https://smart-parking-system.great-site.net, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Smart Parking System and how we use it.</p>

            <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

            <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Smart Parking System. This policy is not applicable to any information collected offline or via channels other than this website.</p>

            <h2>Consent</h2>

            <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

            <h2>Information we collect</h2>

            <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
            <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
            <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>

            <h2>How we use your information</h2>

            <p>We use the information we collect in various ways, including to:</p>

            <ul>
                <li>Provide, operate, and maintain our website</li>
                <li>Improve, personalize, and expand our website</li>
                <li>Understand and analyze how you use our website</li>
                <li>Develop new products, services, features, and functionality</li>
                <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
                <li>Send you emails</li>
                <li>Find and prevent fraud</li>
            </ul>

            <h2>Log Files</h2>

            <p>Smart Parking System follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>

            <h2>Cookies and Web Beacons</h2>

            <p>Like any other website, Smart Parking System uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>




            <h2>Advertising Partners Privacy Policies</h2>

            <P>You may consult this list to find the Privacy Policy for each of the advertising partners of Smart Parking System.</p>

            <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Smart Parking System, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

            <p>Note that Smart Parking System has no access to or control over these cookies that are used by third-party advertisers.</p>

            <h2>Third Party Privacy Policies</h2>

            <p>Smart Parking System's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

            <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>

            <h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>

            <p>Under the CCPA, among other rights, California consumers have the right to:</p>
            <p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
            <p>Request that a business delete any personal data about the consumer that a business has collected.</p>
            <p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

            <h2>GDPR Data Protection Rights</h2>

            <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
            <p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
            <p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
            <p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
            <p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
            <p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
            <p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

            <h2>Children's Information</h2>

            <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

            <p>Smart Parking System does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
            <p class="bottom" align="center">Based on v4.7.8</p>
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
    .container {
        background-color: rgb(0, 0, 20);
        padding: 30px;
        ;
    }

    .Box {
        color: rgb(255, 255, 255);
    }

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