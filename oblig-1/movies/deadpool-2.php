<?php
  $movie = [
    'name' => 'Deadpool 2',
    'slug' => 'deadpool-2',
    'description' => 'Lorem ipsum dolor sit amet',
    'links' => [
      'imdb' => 'https://www.imdb.com/title/tt5463162/'
    ],
    'cast' => [
      'lead' => [
        'name_real' => 'Ryan Reynolds',
        'name_role' => 'Wade Wilson / Deadpool / Voice of Juggernaut'
      ]
    ]
  ];

  $_page = 'movies/' . $movie['slug'];

  require('../partials/head.php');
  require('../partials/nav.php');
  require('_template.php');
  require('../partials/footer.php');
?>
