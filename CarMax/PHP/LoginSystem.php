<?php

include "Connection.php";
session_start();

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = $_POST['password'];

    if (empty($uname)) {
        header("Location: \CarMax\CarMax_Homepage.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: \CarMax\CarMax_Homepage.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE Username='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $uname && $row['Password'] === $pass) {
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Name'] = $row['Name'];
                $_SESSION['UsersID'] = $row['UsersID'];

                // Check if the user is an admin
                if ($row['Admin'] == 1) {
                    $_SESSION['Admin'] = true;
                    header("Location: \CarMax/admin_panel/AdminMan.php");
                    exit(); // Add exit() to stop execution after redirect
                } else {
                    $_SESSION['Admin'] = false;
                    
                }

                // Check if the "remember" checkbox is set
                if (isset($_POST['remember'])) {
                    setcookie("user", $row['Username'], time() + (864000 * 30));
                    setcookie("pass", $row['Password'], time() + (864000 * 30));
                }

                header("Location: \CarMax\AccountPage.php");
                exit();
            } else {
                header("Location: \CarMax\CarMax_Homepage.php?error=Incorrect Username or Password");
                exit();
            }
        } else {
            header("Location: \CarMax\CarMax_Homepage.php?error=Incorrect Username or Password");
            exit();
        }
    }
} else {
    header("Location: \CarMax\CarMax_Homepage.php");
    exit();
}
?>
