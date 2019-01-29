<?php
  // Define navigation links
  $nav_links = [
    'index' => 'Forside'
  ];

  // Add all movies to the navigation
  foreach ($movies as $link_path => $link_name) {
    $nav_links['movie.php?id=' . $link_path] = $link_name['name'];
  }

  $_path = '/oblig-1/'; // Path to root directory
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $page_name ?> | Favorite movies | Oblig 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
