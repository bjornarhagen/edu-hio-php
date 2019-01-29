<?php
  $movie = [
    'name' => 'Interstellar',
    'slug' => 'interstellar',
    'description' => 'Lorem ipsum dolor sit amet',
    'links' => [
      'imdb' => 'https://www.imdb.com/title/tt0816692/'
    ],
    'cast' => [
      'lead' => [
        'name_real' => 'Matthew McConaughey',
        'name_role' => 'Cooper'
      ]
    ]
  ];

  $_page = 'movies/' . $movie['slug'];

  require('../partials/head.php');
  require('../partials/nav.php');
  require('_template.php');
  require('../partials/footer.php');
?>
