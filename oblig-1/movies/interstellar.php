<?php
  $movie = [
    'name' => 'Interstellar',
    'slug' => 'interstellar',
    'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
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
