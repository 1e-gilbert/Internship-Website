<?php
session_start();
session_unset();   // Clear all session variables
session_destroy();
header("location: http://localhost/website/login/index.php");
exit();
