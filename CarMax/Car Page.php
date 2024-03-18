<?php
include('PHP/connection.php');
session_start();


if (isset($_GET['CarID'])) {
    $carID = $_GET['CarID'];

    $sql = "SELECT * FROM cartable,users_infroamtion WHERE CarID = $carID";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

   
    $row = mysqli_fetch_assoc($result);

   
    mysqli_free_result($result);
} else {
   
    echo "CarID not provided.";
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="CSS/Car Page.css">
    <link rel="stylesheet" type="text/css" href="CSS/DropDown.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JS/DropDownSignin.js"></script>
    <script src="JS/Loginscript.js"></script>
    <script src="JS/Chatbot.js"></script>
    <script src="JS/Open Booking form.js"></script>
    
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
                    <h1><?php echo $row['CarName']; ?></h1>
                </div>
            </nav>
        </div>
        <div class="Car">
            <div class="CarImages">
                <img height='650vh' width='790vw' src='ASSETS/Image for car/<?= $row["CarImage1"] ?>'>
            </div>
            <div class="CarDetails ">
                
                <table> 
                    <tr>
                    <th class="text-center">Details Name</th>
                    <th class="text-center">Details </th>
                    </tr>
                    <tr>
                        <td>Car name:</td>
                        <td><?php echo $row['CarName']; ?></td>
                    </tr>
                    <tr>
                        <td>Brand:</td>
                        <td><?php echo $row['CarBand'];?></td>
                    </tr>
                    <tr> 
                        <td>Fuel Type:</td>
                        <td><?php echo $row['FuelType'];?></td>
                    </tr>
                    <tr> 
                        <td>Car Prices:</td>
                        <td>£<?php echo $row['CarPrices'];?></td> 
                    </tr>
                </table>
                <button type="button" class="BookingBtn" onclick="openPopup()">Book test drive</button>
                <div class="overlay" id="popupOverlay">
                <div class="popup">
                    
                    <h2>Book A Test Drive</h2>
                    <form action="PHP/TestDriveBooking.php"   method="post">
                    <label for="UserName">User's Name: <?php echo $_SESSION['Username']; ?></label><br>
                    <label for="UserName">Car's Name: <?php echo $row['CarName']; ?></label><br>
                    <input type="hidden" name="UserID" value="<?php echo isset($_SESSION['UsersID']) ? $_SESSION['UsersID'] : ''; ?>">
                    <input type="hidden" name="CarID" value="<?php echo $row['CarID']; ?>">
                    <label for="SelectDate">Selected a Date:</label>
                    <input type="datetime-local" id="TestDrive" name="TestDriveDate">
                    <input type="submit" value="Submit">
                     <span class="close-btn" onclick="closePopup()">&times;</span>
                    </form>
                </div>
                </div>

            </div>
            <div class="CarDesc">
            <table style = "width:80vw"> 
                    <tr>
                    <th class="text-center">Decription</th>
                    </tr>
                    <tr>
                        <td><?php echo $row['CarDespic']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php
     include "PHP/Footer.php";
     ?>
</body>
</html>
