<?php
session_start();

session_unset();
session_destroy();

header("Location: \CarMax\CarMax_Homepage.php");
?>