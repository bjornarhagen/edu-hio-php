<?php
    session_start();

    $movie = null;

    // Get the selected movie
    if (isset($_POST['movie'])) {
        $movie = htmlspecialchars($_POST['movie']);
    }

    // Store selected movie in session
    $_SESSION['movie'] = $movie;

    // Go back
    header('Location: ../');
