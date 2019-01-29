<?php
require('db.php');

$nav_links = [
  'index' => 'Forside'
];

foreach ($movies as $slug => $movie) {
  $nav_links['movie.php?id=' . $slug] = $movie['name'];
}

$_path = '/oblig-1/';
$nav_slug_check = 'index';
