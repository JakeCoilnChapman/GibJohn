<?php
include "Connection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $UserID = $_POST['UserID'];
    $CarID = $_POST['CarID'];
    $TestDriveDate  = $_POST['TestDriveDate'];
}

if ($conn) {
    // Select UsersInforID from users_infroamtion based on provided UserID
    $selectQuery = "SELECT UsersInforID FROM users_infroamtion WHERE UsersID = '$UserID'";
    $selectResult = mysqli_query($conn, $selectQuery);

    if ($selectResult) {
        $row = mysqli_fetch_assoc($selectResult);
        $UsersInforID = $row['UsersInforID'];
        

        // Insert into the testdrive table
        $sql = "INSERT INTO testdrive (UsersInforID, CarID, Date) VALUES ('$UsersInforID', '$CarID', '$TestDriveDate')";
        $result = mysqli_query($conn, $sql);

        // Check if the insertion into testdrive table was successful
        if ($result) {
            echo "Data Inserted successfully ";
            header("Location: /CarMax/CarMax_Homepage.php");
        } else {
            die(mysqli_error($conn));
        }
    } else {
        die(mysqli_error($conn));
    }
}
?>
