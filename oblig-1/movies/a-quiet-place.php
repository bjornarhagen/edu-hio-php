<?php
  $movie = [
    'name' => 'A Quiet Place',
    'slug' => 'a-quiet-place',
    'description' => 'In a post-apocalyptic world, a family is forced to live in silence while hiding from monsters with ultra-sensitive hearing.',
    'links' => [
      'imdb' => 'https://www.imdb.com/title/tt6644200/'
    ],
    'cast' => [
      'lead' => [
        'name_real' => 'Emily Blunt',
        'name_role' => 'Evelyn Abbott'
      ]
    ]
  ];

  $_page = 'movies/' . $movie['slug'];

  require('../partials/head.php');
  require('../partials/nav.php');
  require('_template.php');
  require('../partials/footer.php');
?>
