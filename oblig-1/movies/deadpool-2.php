<?php
  $movie = [
    'name' => 'Deadpool 2',
    'slug' => 'deadpool-2',
    'description' => 'Foul-mouthed mutant mercenary Wade Wilson (AKA. Deadpool), brings together a team of fellow mutant rogues to protect a young boy with supernatural abilities from the brutal, time-traveling cyborg, Cable.',
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
