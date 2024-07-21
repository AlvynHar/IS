<?php

require_once 'php/connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EMS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="content1" name="keywords">
    <meta content="content2" name="description">

    <!-- Favicon -->
    <link href="#" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-1 py-lg-0 px-lg-5">
        <a href="home.html" class="navbar-brand d-block d-lg-none">
            <h1 class="display-4 text-white text-uppercase m-0">EMS</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <a href="home.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="calculator.php" class="nav-item nav-link active">Calculator</a>
            </div>
            <a href="home.html" class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block">
                <h1 class="display-4 text-white text-uppercase m-0">EMS</h1>
            </a>
            <div class="navbar-nav mr-auto py-0">
                <a href="team.html" class="nav-item nav-link">Team</a>
                <a href="faq.html" class="nav-item nav-link">FAQs</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
        </div>

        <script src="assets/static/js/initTheme.js"></script>
        <div id="app">
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--system-uicons" width="20" height="20"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                            opacity=".3"></path>
                        <g transform="translate(-210 -1)">
                            <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                            <circle cx="220.5" cy="11.5" r="4"></circle>
                            <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                        </g>
                    </g>
                </svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                    <label class="form-check-label"></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                    </path>
                </svg>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Energy Management</h6>
                <h1 class="font-secondary display-4">Calculator</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div id="success"></div>
            <form method="POST" action="calculator.php">
                        <div class="form-group row">
                    <label for="applianceName" class="col-4 col-form-label">Appliance Name:</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="applianceName" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="appliancePower" class="col-4 col-form-label">Appliance Power:</label>
                    <div class="col-3">
                        <input type="number" class="form-control" id="appliancePower" required>
                    </div>
                    <div class="col-5">
                        <select class="custom-select" id="powerUnit">
                            <option value="w">watt (W)</option>
                            <option value="kw">kilowatt (kW)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="usage" class="col-4 col-form-label">Usage:</label>
                    <div class="col-3">
                        <input type="number" class="form-control" id="usage" required>
                    </div>
                    <div class="col-5">
                        <select class="custom-select" id="usageUnit">
                            <option value="hpDay">hours per day</option>
                            <option value="mpDay">minutes per day</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="electricityPrice" class="col-4 col-form-label">Electricity Price:</label>
                    <div class="col-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">$</div>
                            </div>
                            <input type="text" class="form-control" id="electricityPrice">
                        </div>
                    </div>
                    <label class="col-4 col-form-label">per kWh</label>
                </div>
                <div class="form-group row">
                    <button type="reset" class="btn btn-danger col-5 mr-auto ml-4">Clear</button>
                    <button type="submit" class="btn btn-dark col-5 ml-auto mr-4">Calculate</button>
                </div>
            </form>

            <div class="result" style="display: none;">
                <h4>Result:</h4>
                <p id="resultMessage"></p>
            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


     <!-- Footer Start -->
     <footer> 
        <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
            <div class="row pt-5">
                <div class="col-lg-7 col-md-12">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <p>Visit our social media links</p>
                            <div class="d-flex justify-content-start mt-4">
                                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Services</h5>
                            <div class="d-flex flex-column justify-content-start">
                            <a class="text-white btn-scroll mb-2" href="calculator.php"><i class="fa fa-angle-right mr-2"></i>Energy Management</a>
                        <a class="text-white btn-scroll mb-2" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                        <a class="text-white btn-scroll mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>Energy Data</a>
                        <a class="text-white btn-scroll mb-2" href="faq.html"><i class="fa fa-angle-right mr-2"></i>Household Practice Tips</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mb-5">
                    <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
                    <p>Sign Up For articles</p>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-white text-center border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .05) !important;">
            <p class="m-0 text-white">&copy; <a href="#">EMS</a>. All Rights Reserved</p>
        </div>
        </footer>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>