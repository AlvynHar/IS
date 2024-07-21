<?php

require_once 'php/connect.php';


echo "Thank you for the feedback";
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
                <a href="home.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="calculator.php" class="nav-item nav-link">Calculator</a>
            </div>
            <a href="home.html" class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block">
                <h1 class="display-4 text-white text-uppercase m-0">EMS</h1>
            </a>
            <div class="navbar-nav mr-auto py-0">
                <a href="team.html" class="nav-item nav-link">Team</a>
                <a href="faq.html" class="nav-item nav-link">FAQs</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Nav bar end --> 

<a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="contact.html">Go Back</a>

<script type="text/javascript">
        <?php  if($_GET['msg'] == 'thanks'): ?>
            echo "Thank you for the feedback";
            <?php  endif; ?>
    </script>

        </body>

</html>