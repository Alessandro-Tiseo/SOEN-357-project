<?php
include 'database/db_connection.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $given_name = '';
    $surname = '';

    $query = "SELECT `id`, `email`, `given_name`, `surname` FROM `student` WHERE `email` = '$email' AND `password` = '$pwd'";
    $statement = $connection->prepare($query);
    $statement->execute();
    $statement->store_result();
    
    //If the query yields a result, the user exists. Therefore, have them "logged in".
    if($statement->num_rows > 0){
        $statement->bind_result($id, $email, $given_name, $surname);
        $statement->fetch();
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        $_SESSION['given_name'] = $given_name;
        $_SESSION['surname'] = $surname;
        header("Location: ./index.php");
        exit();
    }
    else{
        session_start();
        
        //Unset all session variables
        $_SESSION = array();
        
        //Destroy the session, logging the user out, and send them to login.
        session_destroy();
        header("Location: ./login.php");
        exit();
    }
    $statement->close();
    $connection->close();
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
        <h3>Log in page</h3>
        <form action="" method="POST">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="Log in">
        </form>
    </main>
</body>
</html>