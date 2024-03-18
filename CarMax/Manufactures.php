<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="CSS/Manufactures.css">
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
                    <h1>Manufactures</h1>
                </div>
            </nav>
            
        </div>
        <?php 
            # I'M SURE THEIR A BETTER WAY TO DO THIS BUT I CAN'T BE ASKED TO FIND IT :/
            include('PHP/connection.php');
                $sql = "SELECT BrandImage FROM carbrands WHERE BrandID='1'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }
            ?>
        <div class="CarBrands">
            <?php
                // Loop through the result set and fetch image URLs
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
            <div class="Brand1">
                <img src="ASSETS/Car Brands/<?php echo $row['BrandImage']; ?>" alt="Car 1">     
            </div>
            <?php
                    // Close the database connection
                    mysqli_close($conn);
                }
                ?>
            <?php
                 include('PHP/connection.php'); 
                $sql = "SELECT BrandImage FROM carbrands WHERE BrandID='2'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }
                ?>
             <?php
                    // Loop through the result set and fetch image URLs
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
            <div class="Brand2"> 
                <img src="ASSETS/Car Brands/<?php echo $row['BrandImage']; ?>"  alt="Car 1">   
            </div>
            <?php
                    // Close the database connection
                    mysqli_close($conn);
                    }
                ?>
            <?php
                 include('PHP/connection.php'); 
                $sql = "SELECT BrandImage FROM carbrands WHERE BrandID='3'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }
                 // Loop through the result set and fetch image URLs
                 while ($row = mysqli_fetch_assoc($result)) {
                ?>    
            <div class="Brand3">
                <img src="ASSETS/Car Brands/<?php echo $row['BrandImage']; ?>"  alt="Car 1"> 
            </div>
            <?php

                    // Close the database connection
                    mysqli_close($conn);
                 }
                ?>
            <?php
                 include('PHP/connection.php'); 
                $sql = "SELECT BrandImage FROM carbrands WHERE BrandID='4'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }
                 // Loop through the result set and fetch image URLs
                 while ($row = mysqli_fetch_assoc($result)) {
                ?>    
            <div class="Brand4"> 
                <img src="ASSETS/Car Brands/<?php echo $row['BrandImage']; ?>" alt="Car 1"> 
            </div>
            <?php
                    // Close the database connection
                    mysqli_close($conn);
                 }
                ?>
                <?php
                 include('PHP/connection.php'); 
                $sql = "SELECT BrandImage FROM carbrands WHERE BrandID='5'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }
                 // Loop through the result set and fetch image URLs
                 while ($row = mysqli_fetch_assoc($result)) {
                ?>    
            <div class="Brand5"> 
                <img src="ASSETS/Car Brands/<?php echo $row['BrandImage']; ?>"  alt="Car 1"> 
            </div>
            <?php
                    // Close the database connection
                    mysqli_close($conn);
                 }
                ?>
            <?php
                 include('PHP/connection.php'); 
                $sql = "SELECT BrandImage FROM carbrands WHERE BrandID='6'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }
                 // Loop through the result set and fetch image URLs
                 while ($row = mysqli_fetch_assoc($result)) {
                ?>    
            <div class="Brand6"> 
                <img src="ASSETS/Car Brands/<?php echo $row['BrandImage']; ?>"  alt="Car 1"> 
            </div>
            <?php

                    // Close the database connection
                    mysqli_close($conn);
                 }
                ?>
            <?php
                 include('PHP/connection.php'); 
                $sql = "SELECT BrandImage FROM carbrands WHERE BrandID='7'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }
                 // Loop through the result set and fetch image URLs
                 while ($row = mysqli_fetch_assoc($result)) {
                ?>    
            <div class="Brand7"> 
                <img src="ASSETS/Car Brands/<?php echo $row['BrandImage']; ?>"  alt="Car 1"> 
            </div>
            <?php
                    // Close the database connection
                    mysqli_close($conn);
                 }
                ?>
            <?php
                 include('PHP/connection.php'); 
                $sql = "SELECT BrandImage FROM carbrands WHERE BrandID='8'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }
                 // Loop through the result set and fetch image URLs
                 while ($row = mysqli_fetch_assoc($result)) {
                ?>        
            <div class="Brand8"> 
                <img src="ASSETS/Car Brands/<?php echo $row['BrandImage']; ?>"  alt="Car 1"> 
            </div>
            <?php
                    // Close the database connection
                    mysqli_close($conn);
                 }
                ?>
            <?php
                 include('PHP/connection.php'); 
                $sql = "SELECT BrandImage FROM carbrands WHERE BrandID='9'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }
                 // Loop through the result set and fetch image URLs
                 while ($row = mysqli_fetch_assoc($result)) {
                ?>        
            <div class="Brand9"> 
                <img src="ASSETS/Car Brands/<?php echo $row['BrandImage']; ?>"  alt="Car 1"> 
            </div>
            <?php
                    // Close the database connection
                    mysqli_close($conn);
                 }
                ?>
           
        </div>
    </div>
    
</body>
</html>
