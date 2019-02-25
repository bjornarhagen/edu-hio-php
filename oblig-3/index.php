<?php
  session_start();

  $_path = '/oblig-3/'; // Path to root directory
  $_page = 'index';

  require('movies/db.php');

  $movie_selected = false;

  // Get selected movie
  if (isset($_GET['movie']) && $_GET['movie'] != null) {
    $movie_slug = htmlspecialchars($_GET['movie']);

    if (isset($movies[$movie_slug])) {
      $movie_selected = true;
      $_movie = $movies[$movie_slug];
      $_page = $_movie['name'];
    }
  }

  require('partials/head.php');
  require('partials/nav.php');

  if ($movie_selected) {
    require('movies/template.php');
  } else {
    require('no-movie.php');
  }

  require('partials/footer.php');
?>
