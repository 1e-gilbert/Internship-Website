<?php
session_start();

// Set the timeout duration (in seconds)
$inactive = 600; // 10 minutes

// Check if the session has timed out
if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        // Destroy the session if inactive for too long
        session_destroy();
        // Redirect to the login page
        header("Location: http://localhost/website/login/index.php");
        exit();
    }
}

// Reset session timeout
$_SESSION['timeout'] = time();

// Redirect to login page if the user is not authenticated
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    $_SESSION['message'] = "Login first! To access the site";
    header("Location: http://localhost/website/login/index.php");
    exit();
}
