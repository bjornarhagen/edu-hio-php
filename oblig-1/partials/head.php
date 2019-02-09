<?php
  // Define navigation links
  $pages = [
    'index.php' => 'Filmarkiv'
  ];

  $movies = [
    'movies/a-quiet-place.php' => 'A Quiet Place',
    'movies/deadpool-2.php' => 'Deadpool 2',
    'movies/interstellar.php' => 'Interstellar',
  ];

  $pages = array_merge($pages, $movies);

  $_path = '/oblig-1/'; // Path to root directory

  $body_class = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $_page)));
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $pages[$_page] ?> | Favorite movies | Oblig 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="<?= $_path ?>css/main.css" />
</head>
<body class="<?= $body_class ?>">
