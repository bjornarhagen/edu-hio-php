<?php
  $_path = '/oblig-1/'; // Path to root directory
  $_page = 'index.php';

  // Define navigation links
  $pages = [
    'index.php' => 'All films'
  ];

  $movies = [
    'a-quiet-place' => 'A Quiet Place',
    'deadpool-2' => 'Deadpool 2',
    'interstellar' => 'Interstellar',
  ];

  // Merge movies and pages to make all nav links
  $pages = array_merge($pages, $movies);

  $movie_selected = false;

  // Get selected movie
  if (isset($_GET['movie'])) {
    $movie_selected = true;
    $movie_slug = $_GET['movie'];

    if (isset($movies[$movie_slug])) {
      require('movies/' . $movie_slug . '.php');

      $_page = $movie['slug'];
    }
  }

  require('partials/head.php');
  require('partials/nav.php');

  if ($movie_selected) {
    require('movies/_template.php');
  } else {
    require('no-movie.php');
  }

  require('partials/footer.php');
?>
