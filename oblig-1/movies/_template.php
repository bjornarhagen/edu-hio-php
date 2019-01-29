<main id="movie-<?= $movie['slug']; ?>" class="page-movie">
  <article>
    <img class="movie-poster" src="<?= $_path; ?>images/movies/<?= $movie['slug']; ?>.jpg" alt="<?= $movie['name']; ?> movie poster">
    <div class="movie-info">
      <h1><?= $movie['name']; ?>.</h2>
      <p><?= $movie['description']; ?></p>
      <div class="button-wrapper">
        <?php
          foreach ($movie['cast'] as $role => $person) {
            echo '<p><strong>' . ucfirst($role) . ':</strong> ' . $person['name_real'] . ' as ' . $person['name_role'] . '</p>';
          }
        ?>
        <a href="<?= $movie['links']['imdb'] ?>" class="button" target="_blank" rel="noreferrer nofollow noopener">Les mer på IMDB</a>
      </div>
    </div>
  </article>
</main>
