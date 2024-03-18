<?php
session_start();
include "Connection.php";

if (isset($_POST['Email']) && isset($_POST['Password'])) {
    
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Email = validate($_POST['Email']);
    $pass = validate($_POST['Password']);
    
    if (empty($Email)) {
        header("Location: \Gibjohn/HomePage.php?error=Email is required");
        exit();
    } else if (empty($pass)) {
        header("Location: \Gibjohn/HomePage.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM tutordb WHERE Email='$Email' AND Password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['Email'] === $Email && $row['Password'] === $pass) {
                $_SESSION['Tutorname'] = $row['Tutorname'];
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['TutorID'] = $row['TutorID'];
                $_SESSION['studentID'] = $row['StudentID'];
                $_SESSION['PhoneNumber'] = $row['PhoneNumber'];

            
                header('Location: \Gibjohn/HomePage.php');
                exit();
            } else {
                header("Location: \Gibjohn/HomePage.php?error=Incorrect Username or Password");
                exit();
            }
        } else {
            header("Location: \Gibjohn/HomePage.php?error=Incorrect Username or Password");
            exit();
        }
    }
            
        } else {
            header("Location: \Gibjohn/HomePage.php");
            exit();
        }
?>

