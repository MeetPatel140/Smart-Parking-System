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

    <!-- Terms & Conditions -->
    <div class="container">
        <div class="Box">
            <h1><strong>Terms and Conditions</strong></h1>
            <p>Welcome to Smart Parking System!</p>
            <p>These terms and conditions outline the rules and regulations for the use of Smart Parking System's Website, located at https://smart-parking-system.great-site.net .</p>
            <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Smart Parking System if you do not agree to take all of the terms and conditions on this page.</p>
            <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
            <h3><strong>License</strong></h3>
            <p>Unless otherwise stated, Smart Parking System and/or its licensors own the intellectual property rights for all material on Smart Parking System. All intellectual property rights are reserved from 2021. You may access this from Smart Parking System for your own personal use subjected to restrictions set in these terms and conditions.</p>
            <p>You must not:</p>
            <ul>
                <li>Republish material from Smart Parking System</li>
                <li>Sell, rent or sub-license material from Smart Parking System</li>
                <li>Reproduce, duplicate or copy material from Smart Parking System</li>
                <li>Redistribute content from Smart Parking System</li>
            </ul>
            <p>This Agreement shall begin from the date hereof 25/04/2021. Our Terms and Conditions should be highly focused on before surfing to this website.</p>
            <p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Smart Parking System does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Smart Parking System,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Smart Parking System shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>
            <p>Smart Parking System reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>
            <p>You warrant and represent that:</p>
            <ul>
                <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
                <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
                <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
                <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
            </ul>
            <p>You hereby grant Smart Parking System a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>
            <h3><strong>Hyperlinking to our Content</strong></h3>
            <p>The following organizations may link to our Website without prior written approval:</p>
            <ul>
                <li>Government agencies;</li>
                <li>Search engines;</li>
                <li>News organizations;</li>
                <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
                <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
            </ul>
            <p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>
            <p>We may consider and approve other link requests from the following types of organizations:</p>
            <ul>
                <li>commonly-known consumer and/or business information sources;</li>
                <li>dot.com community sites;</li>
                <li>associations or other groups representing charities;</li>
                <li>online directory distributors;</li>
                <li>internet portals;</li>
                <li>accounting, law and consulting firms; and</li>
                <li>educational institutions and trade associations.</li>
            </ul>
            <p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Smart Parking System; and (d) the link is in the context of general resource information.</p>
            <p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>
            <p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Smart Parking System. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>
            <p>Approved organizations may hyperlink to our Website as follows:</p>
            <ul>
                <li>By use of our corporate name; or</li>
                <li>By use of the uniform resource locator being linked to; or</li>
                <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
            </ul>
            <p>No use of Smart Parking System's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>
            <h3><strong>iFrames</strong></h3>
            <p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>
            <h3><strong>Content Liability</strong></h3>
            <p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>
            <h3><strong>Your Privacy</strong></h3>
            <p>Please read Privacy Policy</p>
            <h3><strong>Reservation of Rights</strong></h3>
            <p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>
            <h3><strong>Removal of links from our website</strong></h3>
            <p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>
            <p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>
            <h3><strong>Disclaimer</strong></h3>
            <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
            <ul>
                <li>limit or exclude our or your liability for death or personal injury;</li>
                <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
            </ul>
            <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>
            <p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
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