<main id="movie-<?= $_movie['slug']; ?>" class="page-movie">
  <article>
    <img class="movie-poster" src="<?= $_path; ?>images/movies/<?= $_movie['slug']; ?>.jpg" alt="<?= $_movie['name']; ?> movie poster">
    <div class="movie-info">
      <h1><?= $_movie['name']; ?>.</h2>
      <p><?= $_movie['description']; ?></p>
      <div class="button-wrapper">
        <img id="dice" src="<?= $path . 'images/graphics/dice-' . $_movie['rating'] . '.png'; ?>" alt="Rating <?= $_movie['rating']; ?>">
        <?php
          foreach ($_movie['cast'] as $role => $person) {
            echo '<p><strong>' . ucfirst($role) . ':</strong> ' . $person['name_real'] . ' as ' . $person['name_role'] . '</p>';
          }
        ?>
        <a href="<?= $_movie['links']['imdb'] ?>" class="button" target="_blank" rel="noreferrer nofollow noopener">Read more on IMDb</a>
      </div>
    </div>
  </article>
</main>
