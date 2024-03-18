<?php
include('PHP/FetchUserData.PHP');
    session_start();

// Check if the user is logged in
if (isset($_SESSION['UsersID']) && isset($_SESSION['Username'])) {
    // Fetch user data from the database
    $userData = getUserData($conn, $_SESSION['UsersID']); 

    // Display user data
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/AccountPage.css">
        <link rel="stylesheet" type="text/css" href="CSS/DropDown.css">
        
        <script src="JS/Chatbot.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                        <h1>AccountPage</h1>
                    </div>
                </nav>
            </div>
            
            <div class="account-content">
                <h2>Welcome, <?php echo $userData['Username']; ?>!</h2>
                <table style ="width:10vw">
                <div class="user-info">
                    <tr>
                        <th>Details</th>
                        <th>Information</th>
                    </tr>
                    <tr>
                        <td>Frist name:</td>
                        <td><?php echo $userData['Name']; ?></td>
                    </tr>
                    <tr>
                        <td>Surname:</td>
                        <td><?php echo $userData['Surname'];?></td>
                    </tr>
                    <tr> 
                        <td>DOB:</td>
                        <td><?php echo $userData['DOB'];?></td>
                    </tr>
                    <tr> 
                        <td>Email:</td>
                        <td><?php echo $userData['Email'];?></td> 
                    </tr>
                    <tr>
                        <td>PNumber:</td>
                        <td><?php echo $userData['PNumber'];?></td>
                    </tr>
                    <tr> 
                        <td>Location:</td>
                        <td><?php echo $userData['Location'];?></td>
                    </tr>
                    <tr> 
                        <td>Join Date:</td>
                        <td><?php echo $userData['Join_Date'];?></td> 
                    </tr>
                </table>
                </div>
            </div>

            <div class="edit-form">
                    <h3>Edit Your Information</h3>
                    <form action="PHP/updateUserInfo.php" method="post">
                        <label for="Name">Frist Name:</label>
                        <input type="text" id="Name" name="Name" value="<?php echo $userData['Name']; ?>" required>
                        <label for="Surname">Surname:</label>
                        <input type="text" id="Surname" name="Surname" value="<?php echo $userData['Surname']; ?>" required>
                        <label for="DOB">Date of Brith:</label>
                        <input type="date" id="DOB" name="DOB" value="<?php echo $userData['DOB']; ?>" required>
                        <label for="Email">Email:</label>
                        <input type="Email" id="Email" name="Email" value="<?php echo $userData['Email']; ?>" required>
                        <label for="PNumber">Phone Number:</label>
                        <input type="text" id="PNumber" name="PNumber" value="<?php echo $userData['PNumber']; ?>" required>
                        <label for="Location">Location:</label>
                        <input type="text" id="Location" name="Location" value="<?php echo $userData['Location']; ?>" required>
                        <button type="submit">Save Changes</button>
                    </form>
                
            </div>
      
        <script src="JS/DropDownSignin.js"></script>
    </body>
    </html>
    <?php
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: AccountPage.php");
    exit();
}
?>
<?php
     include "PHP/Footer.php";
?>
