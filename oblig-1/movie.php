<?php
require('inc.php');

$movie = null;

if (isset($_GET['id'])) {
  $slug = htmlspecialchars($_GET['id']);

  if (isset($movies[$slug])) {
    $movie = $movies[$slug];
    $nav_slug_check = 'movie.php?id=' . $slug;
  }
}

if ($movie === null) {
  echo 'Fant ikke film';
} else {
  include('movie-full.php');
}

?>
