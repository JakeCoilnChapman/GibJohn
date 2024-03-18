<?php
include('connection.php');

session_start();

if (isset($_SESSION['UsersID']) && isset($_SESSION['Username'])) {
    // Assuming you have a function to update user data in the database
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Collect the form data
        $email = $_POST['Email'];
        $name = $_POST['Name'];
        $Surname = $_POST['Surname'];
        $DOB = $_POST['DOB'];
        $PNumber = $_POST['PNumber'];
        $Loc = $_POST['Location'];

        // Assuming you have a function to update user data in the database
        $updateResult = updateUserData($conn, $_SESSION['UsersID'], $email, $name, $Surname, $DOB, $PNumber, $Loc);

        if ($updateResult) {
            // Update successful
            header("Location: /CarMax/AccountPage.php");
            exit();
        } else {
            // Update failed
            echo "Error updating user information.";
        }
    }
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: /CarMax/AccountPage.php");
    exit();
}

// Assuming you have a function to update user data in the database
function updateUserData($conn, $UsersID, $email, $name, $Surname, $DOB, $PNumber, $Loc) {
    $sql = "UPDATE users_infroamtion SET Email = ?, Name = ?, Surname = ?, DOB = ?, PNumber = ?, Location = ? WHERE UsersID = ?";

    // Use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssssi', $email, $name, $Surname, $DOB, $PNumber, $Loc, $UsersID);

    return mysqli_stmt_execute($stmt);
}
?>
