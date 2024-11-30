<?php
include './components/verify.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Tutored</title>
    <link rel="stylesheet" href="css/styles_base.css">
    <link rel="stylesheet" href="css/nav_bar.css">
    <link rel="stylesheet" href="css/main-page.css">
    <link id="theme-stylesheet" rel="stylesheet" href="css/styles_stud.css">
    <script src="js/pageSetup.js" defer></script>
    <script src="js/app.js" defer></script>
    <script src="js/upcoming_sessions.js" defer></script>
</head>
<body>
    <header title="Tutoring Application"></header> <!-- Placeholder for the header -->
    <main style="display: flex; justify-content: center;">
        <h3>Welcome Back, <?php echo $_SESSION['surname'] ?></h3>
    </main>
    <div class="search_bar">
        <input type="text" class="search_input" placeholder="Search For Tutors">
        <button class="search_button">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="search_icon">
            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linejoin="round" stroke-linecap="round"></path>
          </svg>
        </button>
    </div>
    <div class="upcoming_sessions">
         <h2 class="upcoming_sessions_title">Upcoming sessions</h2>
         <div class="all_card_container">
         </div>
    </div>
    <nav></nav>  <!-- Placeholder for the navbar -->
</body>
</html>

