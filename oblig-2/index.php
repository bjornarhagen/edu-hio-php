<?php
  session_start();

  $_path = '/oblig-2/'; // Path to root directory
  $_page = 'index';

  require('movies/db.php');

  $movie_selected = false;

  // Get selected movie
  if (isset($_SESSION['movie']) && $_SESSION['movie'] != null) {
    $movie_slug = htmlspecialchars($_SESSION['movie']);

    if (isset($movies[$movie_slug])) {
      $movie_selected = true;
      $_movie = $movies[$movie_slug];
      $_page = $_movie['name'];
    }
  }

  require('partials/head.php');

  if ($movie_selected) {
    require('partials/nav.php');
    require('movies/template.php');
  } else {
    require('no-movie.php');
  }

  require('partials/footer.php');
?>
