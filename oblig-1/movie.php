<?php
require('db.php');

$movie = null;

if (isset($_GET['id'])) {
  $slug = htmlspecialchars($_GET['id']);

  if (isset($movies[$slug])) {
    $movie = $movies[$slug];
    $nav_slug_check = 'movie.php?id=' . $slug;
  }
}

$page_slug = 'movie.php?id=' . $slug;
$page_name = $movie['name'];

require('partials/head.php');
require('partials/nav.php');

if ($movie === null) {
?>
<main>
  <h1>Error 404: Fant ikke filmen</h1>
</main>
<?php
} else {
?>
<main>
  <article id="movie-summary-<?= $slug; ?>">
    <img src="<?= $_path; ?>images/movies/<?= $slug; ?>-thumb.jpg" alt="<?= $movie['name']; ?> movie poster">
    <h2><?= $movie['name']; ?></h2>
    <p><?= $movie['description']; ?></p>
    <h3>Cast</h3>
    <?php
      foreach ($movie['cast'] as $role => $person) {
        echo '<p><strong>' . ucfirst($role) . ':</strong> ' . $person['name_real'] . ' as ' . $person['name_role'] . '</p>';
      }
    ?>
  </article>
</main>
<?php
}
require('partials/footer.php');

?>
