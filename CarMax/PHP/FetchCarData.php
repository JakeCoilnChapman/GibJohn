<?php
include('connection.php');

function getUserData($conn, $CarID) {
    $sql = "SELECT * FROM cartable WHERE CarID = ?";
    
    // Use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $UsersID);
    
    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);
        
        if ($result) {
            return mysqli_fetch_assoc($result);
        } else {
            return false;
        }
    } else {
        return false;
    }
}