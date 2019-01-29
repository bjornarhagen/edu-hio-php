<?php
  $movie = [
    'name' => 'Avatar',
    'slug' => 'avatar',
    'description' => 'Lorem ipsum dolor sit amet',
    'links' => [
      'imdb' => 'https://www.imdb.com/title/tt0499549/'
    ],
    'cast' => [
      'lead' => [
        'name_real' => 'Sam Worthington',
        'name_role' => 'Jake Sully'
      ]
    ]
  ];

  $_page = 'movies/' . $movie['slug'];

  require('../partials/head.php');
  require('../partials/nav.php');
  require('_template.php');
  require('../partials/footer.php');
?>
