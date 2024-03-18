<?php
    include('PHP/connection.php');
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/Servicing.css">
    <link rel="stylesheet" type="text/css" href="CSS/DropDown.css">
    <script src="JS/DropDownSignin.js"></script>
    <script src="JS/Loginscript.js"></script>
    <script src="JS/Chatbot.js"></script>
    <script src="JS/Open form for Serivces.js"></script>
    <title>CarMax - Servicing</title>
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
                    <h1>Servicing</h1>
                </div>
            </nav>
        </div>
    </div>

    <div class="MainBody">
        <div class="Services">
            <table>
                <thead>
                    <tr>
                        <th class="text-center">Services Name</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Prices</th>
                        <th class="text-center">Book</th>
                    </tr>
                </thead>
                    <?php
                        $sql = "SELECT * FROM services, users_infroamtion";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td hidden> <?= $row['ServicesID']; ?></td>
                        <td><?= $row['Services']; ?></td>
                        <td><?= $row['Decription']; ?></td>
                        <td>£<?= $row['Prices']; ?></td>
                        <td>
                            <button type="button" class="purchase" onclick="openPopup()">Purchase</button>
                        </td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
            </table>
        </div>

        <div class="overlay" id="popupOverlay">
            <div class="popup">
                <h2>Book A Service</h2>
                <form action="PHP/YourFormProcessingFile.php" method="post">
                <label>Service:</label><br>
<select name="service" id="service">
    <option disabled selected>Select Service</option>
    <?php
    $sql = "SELECT ServicesID  FROM services";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $servicesID = $row['ServicesID'];
            
            echo "<option value='$servicesID'>$servicesID</option>";
        }
    }
    ?>
</select><br>
<?php
$SN = "SELECT Services  FROM services WHERE ServicesID = $servicesID";
$result = mysqli_query($conn, $SN);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Fetch and display car image
    if ($row = mysqli_fetch_assoc($result)) {
        ?>
 <label for="Tee"><?php echo $row['Services'] ; ?></label>
 <?php
    }
?>

                    <label for="TestDriveDate">Select a Date:</label>
                    <input type="datetime-local" id="TestDriveDate" name="TestDriveDate" required>
                    
                    <input type="submit" value="Submit">
                    <span class="close-btn" onclick="closePopup()">&times;</span>
                </form>
            </div>
        </div>
    </div>
    

    <?php
        include "PHP/Footer.php";
    ?>
</body>
</html>
