<?php

// Set session cookie to be a session cookie (expires when the browser is closed)
session_set_cookie_params(0);
session_start();

// Set a timeout for the session (e.g., 30 minutes)
$timeout = 30 * 60; // 30 minutes in seconds

// Check if the session has expired
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout) {
    // Session has expired; destroy it
    session_unset();
    session_destroy();
}

// Update last activity time
$_SESSION['last_activity'] = time();



?>
