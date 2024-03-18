<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/NarBar.css">

    <?php include 'Login Form.php'; ?>
    <?php include 'AccountForm.php'; ?>
</head>
<body>
    <!-- Arrow Image for accessing the menu -->
    <svg xmlns="http://www.w3.org/2000/svg"
         height="24px" viewBox="0 0 24 24"
         width="24px" id="OpenArrow"
         fill="#000000">
        <path d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
    </svg>

    <div id="sidebar">
        <!-- Arrow Image for closing the menu -->
        <svg xmlns="http://www.w3.org/2000/svg"
             height="24px"
             viewBox="0 0 24 24"
             width="24px"
             id="CloseArrow"
             fill="#000000">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
        </svg>

        <a href="\Gibjohn/HomePage.php">
            <img src="Assets/GibJohnLogo.png" id="Logo" alt="GibJohn Logo">
        </a>

        <!-- Nav menu -->
        <?php if (isset($_SESSION['Tutorname'])) { ?>
            <?php
            $displayName = $_SESSION['Tutorname'];
            ?>
            <a class="sidebar-item" onclick="document.getElementById('AccountForm').style.display='block'">
                <?php echo $displayName; ?>
            </a>
        <?php } else { ?>
            <a class="sidebar-item" onclick="document.getElementById('LoginForm').style.display='block'">
                <div>Login in</div>
            </a>
        <?php } ?>

        <a href="" class="sidebar-item">
            <div>Subjects</div>
        </a>
        <a href="" class="sidebar-item">
            <div>Assessments</div>
        </a>
        <a href="" class="sidebar-item">
            <div>Revisions</div>
        </a>
        <a href="" class="sidebar-item">
            <div>Games</div>
        </a>
    </div>

    <!-- JavaScript -->
    <script src="\Gibjohn/JS/NavBarCollap.js"></script>
</body>
</html>
