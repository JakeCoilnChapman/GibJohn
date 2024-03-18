<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="CSS/About.css">
    <link rel="stylesheet" type="text/css" href="CSS/DropDown.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JS/DropDownSignin.js"></script>
    <script src="JS/Loginscript.js"></script>
    <script src="JS/Chatbot.js"></script>
    <script src="JS/PageClosed.js"></script>
    
</head>

<body>
    <div class="parent">
        <div class="Header">
            <h1><a href="CarMax_Homepage.php">CarMax</a></h1>
            <nav>
                <ul>
                    <li><a href="Cars.php">Cars</a></li>
                    <li><a href="Manufactures.php">Manufactures</a></li>
                    <li><a href="Contact and Location.php">Contact and Location</a></li>
                    <li><a href="Servicing.php">Servicing</a></li>
                    <li><a href="About.php">About</a></li>
                </ul>
                <?php include 'PHP/DropDown_Content.php'; ?>
                <div class="Title">
                    <h1>About</h1>
                </div>
            </nav>
        </div>
        <section class="about-content">
        <h2>Welcome to CarMax - Your Ultimate Car Experience</h2>
        <p>
            CarMax is dedicated to providing an exceptional automotive experience. Our passion for cars drives us to deliver top-notch services and information to car enthusiasts around the world.
        </p>

        <h3>Our Mission</h3>
        <p>
            At CarMax, our mission is to bring innovation and reliability to the automotive industry. We strive to create a seamless and enjoyable journey for our customers, from exploring the latest car models to maintaining their vehicles in top condition.
        </p>

        <h3>Why Choose CarMax?</h3>
        <p>
            <strong>Quality Cars:</strong> We offer a diverse range of high-quality cars from leading manufacturers, ensuring you find the perfect match for your needs.
        </p>
        <p>
            <strong>Exceptional Service:</strong> Our team of experts is committed to providing outstanding customer service, whether you're purchasing a new car or scheduling a routine service.
        </p>
        <p>
            <strong>Innovative Solutions:</strong> CarMax is at the forefront of automotive innovation. Explore our cutting-edge features and technology that redefine the driving experience.
        </p>

        <h3>Contact Us</h3>
        <p>
            Have questions or need assistance? Feel free to <a href="Contact and Location.php">contact us</a> or visit one of our locations. We're here to enhance your car journey.
        </p>
    </section>
    </div>
    <?php
     include "PHP/Footer.php";
     ?>
</body>
</html>
