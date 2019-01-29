<?php
  $page_slug = 'index';
  $page_name = 'Forside';

  require('db.php');
  require('partials/head.php');
  require('partials/nav.php');
?>
<main>
  <?php
    foreach ($movies as $slug => $movie) {
      include('movie-summary.php');
    }
  ?>
</main>
<?php require('partials/footer.php') ?>
