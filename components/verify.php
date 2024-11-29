<?php
//If the user is not logged in then send them to the log in page.
session_start();
if(!isset($_SESSION['email'])){
    header("Location: ./login.php");
    exit();
}