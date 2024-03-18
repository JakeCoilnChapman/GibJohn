<?php
include "Connection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = $_POST['signup-username'];
    $Password = $_POST['signup-password'];
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $Email = $_POST['Email'];
}

if ($conn) {
    // Insert into the users table
    $sqlUsers = "INSERT INTO users (Username, Password, Name, Email, Surname) VALUES ('$Username', '$Password', '$Name', '$Email', '$Surname')";
    $resultUsers = mysqli_query($conn, $sqlUsers);

    // Check if the insertion into users table was successful
    if ($resultUsers) {
        // Retrieve the UsersID of the inserted user
        $lastInsertID = mysqli_insert_id($conn);

        // Insert into the users_infroamtion table using the retrieved UsersID
        $sqlUI = "INSERT INTO users_infroamtion (UsersID,Username, Name, Email, Surname) VALUES ('$lastInsertID','$Username','$Name', '$Email', '$Surname')";
        $resultUI = mysqli_query($conn, $sqlUI);

        // Check if both queries were successful
        if ($resultUI) {
            echo "Data Inserted successfully ";
            header("Location: /CarMax/CarMax_Homepage.php");
        } else {
            // If the insertion into users_infroamtion fails, you might want to roll back the users table insertion
            mysqli_query($conn, "DELETE FROM users WHERE UsersID = '$lastInsertID'");
            die(mysqli_error($conn));
        }
    } else {
        die(mysqli_error($conn));
    }
}
?>
