<?php
  // Define navigation links
  $pages = [
    'index' => 'Filmarkiv'
  ];

  $movies = [
    'movies/avatar' => 'Avatar',
    'movies/movie-2' => 'Movie 2',
    'movies/movie-3' => 'Movie 3'
  ];

  $pages = array_merge($pages, $movies);

  $_path = '/oblig-1/'; // Path to root directory
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $pages[$_page] ?> | Favorite movies | Oblig 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="<?= $_path ?>style/main.css" />
</head>
<body>
