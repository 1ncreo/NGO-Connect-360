
<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $USERNAME = $_POST['Name'];
    $ID = $_POST['id'];
    $PASSWORD = $_POST['pass'];

    if (!empty($USERNAME) && !empty($ID) && !empty($PASSWORD) && !is_numeric($USERNAME)) {
        $query = "INSERT INTO ngologin (Name,id,pass) VALUES ('$USERNAME', '$ID','$PASSWORD')";
        
        mysqli_query($con, $query); // You need to pass the connection variable here

        header("Location: ngoLogin.html");
        die;
    } else {
        echo "Please provide valid username and password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NGOConnect</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }

        .login-container {
            margin-top: 5%;
            margin-bottom: 10%;
            position: relative;
        }

        .login-box {
            background-color: #f9f9f9;
            padding: 190px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px; /* Added margin-top to lower the box */
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-box form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .login-options {
            text-align: center;
        }

        .login-options a {
            color: #007bff;
            text-decoration: none;
        }

        .login-options a:hover {
            text-decoration: underline;
        }

        .logo {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 50px;
        }

        .logo img {
            width: 50px; /* Adjust the width as needed */
        }

        /* Menu styles */
        .header-bottom {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        .nav-row {
            display: flex;
            align-items: center;
        }

        .nav-col {
            display: flex;
            justify-content: flex-end;
        }

        .nav-item {
            margin-right: 15px;
        }

        .nav-item:last-child {
            margin-right: 0;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .small-menu {
            display: none;
        }

        @media (max-width: 991px) {
            .nav-col {
                display: none;
            }

            .small-menu {
                display: block;
            }
        }
        
    </style>
</head>

<body>
    <div class="login-container">
        <div class="logo">
            <img src="assets/images/logo.jpg" alt="NGOConnect Logo">
        </div>
        <div class="login-box">
            <h2>Sign Up</h2>
            <form method="post">
                <div class="form-group">
                    <input type="text" name="Name" placeholder="NGO Name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="id" placeholder="Unique ID" required>
                </div>
                <div class="form-group">
                    <input type="password" name="pass" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="Register">Register</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        
                    </p>
                    <p> </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#/gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        Bennett Univeristy <br>
                        
                        Noida, IND <br>
                        Phone: +91 9159669599 <br>
                        Email: <a href="help@ngoconnect.com" class="">info@bluedart.in</a><br>
                        Web: <a href="index.html" class="">www.ngoconnect.in</a>
                    </address>

                </div>
            </div>
            
            
            <div class="nav-box row clearfix">
                <div class="inner col-md-9 clearfix">
                    <ul class="footer-nav clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about_us.html">About</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="services.html">Servies</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact_us.html">Contact</a></li>
                    </ul>

                  
                </div>
                  <div class="donate-link col-md-3"><a href="donate.html" class="btn btn-primary "><span class="btn-title">Donate Now</span></a></div>
            </div>
            
        </div>
        

    </footer>
</body>

</html>
