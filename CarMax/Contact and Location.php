<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="CSS/Contact and Location.css">
    <link rel="stylesheet" type="text/css" href="CSS/DropDown.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JS/DropDownSignin.js"></script>
    <script src="JS/Loginscript.js"></script>
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
                    <li><a><?php include 'PHP/DropDown_Content.php'; ?></a>
                </ul>
                <div class="Title">
                    <h1>Contact and Location</h1>
                </div>
                
            </nav>
        </div>
        <div class="MainArea">
            
            <div class="MapArea">
                <div id="map">
                    <iframe width="900" height="900" src="https://www.openstreetmap.org/export/embed.html?bbox=-4.059491157531739%2C51.06768850065317%2C-4.035222530364991%2C51.07602762847162&amp;layer=mapnik&amp;marker=51.07185488168946%2C-4.047356843948364"></iframe>
                    <br/><small><a href="https://www.openstreetmap.org/?mlat=51.07185&amp;mlon=-4.04736#map=17/51.07186/-4.04736"></a></small>
                </div>
            </div>
            <div class="ContactandLoc"> 
                        <H4>Contact Us</h4>
                            <p>Email: CarMax@Gamil.com</P>
                            <P>Phone: 01234 456852</P>
                        <h4>Or Find us at</h4>
                        <p>28 Newport Rd</P>
                        <p>Barnstaple</P>
                        <p>EX32 9BQ</P>
            </div>
       
      
    </div>
    <?php
     include "PHP/Footer.php";
     ?>                       
</body>
</html>
