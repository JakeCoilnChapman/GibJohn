<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="CSS/Cars.css">
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
                </ul>

                <?php include 'PHP/DropDown_Content.php'; ?>
            </nav>
        </div>
        <div class="SearchArea">
           <h1>New Vehicles</h1>
            <div class ="FilterOptions">
                <form action="search.php" method="get">
                    <input type="text" name="query" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
            </div>
                                    
            <?php 
            # I'M SURE THEIR A BETTER WAY TO DO THIS BUT I CAN'T BE ASKED TO FIND IT :/
            include('PHP/connection.php');
                $sqlAygo = "SELECT CarImage1 FROM cartable WHERE CarID='1'";
                $result = mysqli_query($conn, $sqlAygo);
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }
            ?>
            <div class="CarGird">
            <?php
// Include the database connection file once
include('PHP/connection.php');

// Array to store car details (CarID, div class, and query)
$cars = [
    ['CarID' => 1, 'class' => 'Car1'],
    ['CarID' => 2, 'class' => 'Car2'],
    ['CarID' => 3, 'class' => 'Car3'],
    ['CarID' => 4, 'class' => 'Car4'],
    ['CarID' => 5, 'class' => 'Car5'],
];

// Loop through each car
foreach ($cars as $car) {
    $carID = $car['CarID'];
    $divClass = $car['class'];

    // Retrieve car image
    $sql = "SELECT CarImage1 FROM cartable WHERE CarID='$carID'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Fetch and display car image
    if ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="<?php echo $divClass; ?>">
            <a href="Car Page.php?CarID=<?php echo $carID; ?>">
                <img src="ASSETS/Image for car/<?php echo $row['CarImage1']; ?>" style="width: 100%" alt="Car <?php echo $carID; ?>">
            </a>
        </div>
        <?php
    }

    // Close the result set
    mysqli_free_result($result);
}

// Close the database connection
mysqli_close($conn);
?>
            </div>
            <?php
     include "PHP/Footer.php";
     ?> 
        </div>
        
    </div>
   
</body>
</html>