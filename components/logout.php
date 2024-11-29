<?php
session_start();

//Unset all session variables
$_SESSION = array();

//Destroy the session, logging the user out, and send them to login.
session_destroy();
header("Location: ../login.php");
exit();
?>