<?php
include './components/verify.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Tutored</title>
    <link rel="stylesheet" href="css/styles_profile.css">
    <link rel="stylesheet" href="css/styles_base.css">
    <link rel="stylesheet" href="css/nav_bar.css">
    <link id="theme-stylesheet" rel="stylesheet" href="css/styles_stud.css">
    <script src="js/pageSetup.js" defer></script>
    <script src="js/app.js" defer></script>
</head>
<body>
    <header title="Profile"></header> <!-- Placeholder for the header -->
    <main style="display: flex; justify-content: center;">
        <div class="grid-container">
            <div class="grid-item">
                <form action="./components/logout.php" method="POST">
                    <input type="submit" value="Logout">
                    <input type="submit" value="Edit Profile">
                </form>
            </div>
            <div class="grid-item icon"><img src="./images/profile.png"/></div>
            <div class="grid-item name"><h3><?php echo $_SESSION['given_name'] . " " . $_SESSION['surname'] ?></h3><br></div>
            <div class="grid-item bio"> 
                <h4>Your Bio:</h4>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </p>
            </div>
        </div>
    </main>
    <nav></nav>  <!-- Placeholder for the navbar -->
</body>
</html>
