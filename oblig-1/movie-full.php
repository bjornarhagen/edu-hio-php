<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $movie['name']; ?> | Favorite movies | Oblig 1 </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script> -->
</head>
<body>
  <?php require('nav.php'); ?>
  <main>
    <article id="movie-summary-<?= $slug; ?>">
      <img src="<?= $_path; ?>images/movies/<?= $slug; ?>-thumb.jpg" alt="<?= $movie['name']; ?> movie poster">
      <h2><?= $movie['name']; ?></h2>
      <p><?= $movie['description']; ?></p>
      <h3>Cast</h3>
      <?php
        foreach ($movie['cast'] as $role => $person) {
      ?>
      <p><strong><?= ucfirst($role); ?>:</strong> <?= $person['name_real']; ?> as <?= $person['name_role']; ?></p>
      <?php
        }
      ?>

    </article>
  </main>
</body>
</html>
