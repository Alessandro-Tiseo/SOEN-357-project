<?php
include './components/verify.php';
//Query from the database every individual tutor to display on the search page.
include 'database/db_connection.php';

$given_name = '';
$surname = '';
$email = '';
$tutors = [];

$query = "SELECT `given_name`, `surname`, `email` FROM `tutor`";
$statement = $connection->prepare($query);
$statement->execute();
$statement->bind_result($given_name, $surname, $email);

//For each result queried from the tutor table, add them to the array of tutors.
for($i = 0; $statement->fetch(); $i++){
    $tutors[$i] = ['given_name' => $given_name, 'surname' => $surname, 'email' => $email];
}

$statement->close();
$connection->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Tutored</title>
    <link rel="stylesheet" href="css/styles_base.css">
    <link rel="stylesheet" href="css/nav_bar.css">
    <link rel="stylesheet" href="css/styles_search.css">
    <link id="theme-stylesheet" rel="stylesheet" href="css/styles_stud.css">
    <script src="js/pageSetup.js" defer></script>
    <script src="js/app.js" defer></script>
</head>
<body>
    <header title="Search for Tutors"></header> <!-- Placeholder for the header -->
    <main style="display: flex; justify-content: center;">
        <div class="grid-container">
            <h3 class="grid-item">Find Your Next Tutor</h3>
            <div class="search_bar grid-item">
                <input type="text" class="search_input" placeholder="Search For Tutors">
                <button class="search_button">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="search_icon">
                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
                </button>
            </div>
            <ul class="grid-container">
                <?php
                    // Go through the array of the tutors queries and add them as list elements to the html.
                    foreach($tutors as $tutor){
                        echo "<li>" . $tutor['given_name'] . " " . $tutor['surname'] . " <br> " . $tutor['email'] . 
                        "<br>Subjects: Math 204, Math 205, SOEN 357</li>";
                    }
                ?>
            </ul>
        </div>
    </main>
    <nav></nav>  <!-- Placeholder for the navbar -->
</body>
</html>
