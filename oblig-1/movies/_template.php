<main>
  <article id="movie-summary-<?= $movie['slug']; ?>">
    <img src="<?= $_path; ?>images/movies/<?= $movie['slug']; ?>.jpg" alt="<?= $movie['name']; ?> movie poster">
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
