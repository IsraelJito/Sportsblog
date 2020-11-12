<?php 
ob_start();
require('function.php');
$db = dbconnect();
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}
$errors = [];
$user = $_SESSION['user'];
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Jito Sports</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/light-box.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<style>
	#table{
            border-top: 2px solid #ccc;
            border-bottom: 2px solid #ccc;
            padding: 5px;
        }
        #table tr{
            border-bottom: 2px solid #ccc;
            padding: 5px;
            border-radius: 10px;
        }
        #table th {
            padding: 0 20px;
        }
        #table td {
            padding: 10px;
         }
</style>

<body>



    <header class="nav-down responsive-nav hidden-lg hidden-md">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!--/.navbar-header-->
        <div id="main-nav" class="collapse navbar-collapse">
            <nav>
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="createpost.php">Create Post</a></li>
                    <li><a href="viewposts.php">My Posts</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="sidebar-navigation hidde-sm hidden-xs">
        <div class="logo">
            <a href="#">Jito <em>Sports</em></a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="home.php">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Home
                    </a>
                </li>
                <li>
                    <a href="createpost.php">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Create Post
                    </a>
                </li>
                <li>
                    <a href="viewposts.php">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        My Posts
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Log out
                    </a>
                </li>
            </ul>
        </nav>
        <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
        </ul>
    </div>

