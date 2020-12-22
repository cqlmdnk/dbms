<!DOCTYPE html>
<html>
    <head>
    <?php
    require('Business/get_movies.php');
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Venue - Responsive Web Template</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/vendor/fontAwesome.css">
        <link rel="stylesheet" href="assets/css/vendor/hero-slider.css">
        <link rel="stylesheet" href="assets/css/vendor/owl-carousel.css">
        <link rel="stylesheet" href="assets/css/vendor/datepicker.css">
        <link rel="stylesheet" href="assets/css/vendor/templatemo-style.css">
        <link rel="stylesheet" href="assets/css/movies.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/login.css">

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="assets/js/login.js"></script>
<!--
	Venue Template
	http://www.templatemo.com/tm-522-venue
-->
    </head>

<body>

<div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                            
                            <li><img src="https://i.ibb.co/xsxjHM7/pngwing-com.png" width="100" height="200" ></li>
                           
                            <li><a class="active" href="?url=mainpage">Home</a></li>
                            <li><a class="active" href="?url=movies">All Movies</a></li>
                                <li class='active'><a href="#">Popular</a></li>
                                <li><a href="#">Most Rated</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Most Rated Series</a>
                                     
                                        </li>
                                        <li><a href="#">Most Rated Movies</a>
                                            
                                        </li>
                                        <li><a href="#">Most Rated Episodes</a>
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="scrollTo" data-scrollTo="blog" href="#">Blog Entries</a></li>
                                <li><a class="scrollTo" data-scrollTo="contact" href="#">Contact Us</a></li>
                                <li><a class="active" href="?url=login">Login</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      