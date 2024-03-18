<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="CSS/CarMax_Homepage.css">
    <link rel="stylesheet" type="text/css" href="CSS/DropDown.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JS/DropDownSignin.js"></script>
    <script src="JS/Loginscript.js"></script>
    <script src="JS/SildeShow.js"></script>
    <script src="JS/Chatbot.js"></script>
    
    
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
                <h1>Welcome To CarMax</h1>
                </div>
            </nav>
    
        </div>
        
       
        <?php 
            include('PHP/connection.php');
            $sqlList = "SELECT Image1, Image2, Image3, Image4 FROM slideshow";
            $result = mysqli_query($conn, $sqlList);
            if (!$result) {
                die("Query failed: " . mysqli_error($conn));
            }
        ?>
            
        <div class="Slideshow">
            
            <?php
                // Loop through the result set and fetch image URLs
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="mySlides fade">
                <img src="ASSETS/SildeShow/<?php echo $row['Image1']; ?>" style="width: 45%" alt="Car 1">
                <img src="ASSETS/SildeShow/<?php echo $row['Image2']; ?>" style="width: 45%" alt="Car 2">
            </div>
            <div class="mySlides fade">
                <img src="ASSETS/SildeShow/<?php echo $row['Image3']; ?>" style="width: 45%" alt="Car 3">
                <img src="ASSETS/SildeShow/<?php echo $row['Image4']; ?>" style="width: 45%" alt="Car 4">
            </div>
            <?php
                }
            ?>
        </div>

        <?php
            // Close the database connection
            mysqli_close($conn);
        ?>

        <div class="SideBar">a </div>
        </div> 
    </div>
    <?php
     include "PHP/Footer.php";
     ?>
</body>
</html>
