<?php
//If the user is not logged in then send them to the log in page.
session_start();
if(!isset($_SESSION['email'])){
    header("Location: ./login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Tutored</title>
    <link rel="stylesheet" href="css/styles_base.css">
    <link rel="stylesheet" href="css/nav_bar.css">
    <link id="theme-stylesheet" rel="stylesheet" href="css/styles_stud.css">
    <script src="js/pageSetup.js" defer></script>
    <script src="js/app.js" defer></script>
</head>
<body>
    <header title="Profile"></header> <!-- Placeholder for the header -->
    <main style="display: flex; justify-content: center;">
        <h3>This is your profile, <?php echo $_SESSION['surname'] ?></h3>
        <form action="./components/logout.php" method="POST">
            <input type="submit" value="Logout">
        </form>
    </main>
    <nav></nav>  <!-- Placeholder for the navbar -->
</body>
</html>
