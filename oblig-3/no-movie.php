<main>
  <h1>Film Archive</h1>
  <section class="movies">
    <?php
      foreach ($movies as $movie_slug => $movie) {
    ?>
    <article class="movie">
      <a href="<?= $_path; ?>?movie=<?= $movie_slug; ?>"><img class="movie-poster" src="<?= $_path; ?>images/movies/<?= $movie['slug']; ?>.jpg" alt="<?= $movie['name']; ?> movie poster"></a>
      <div class="movie-info">
        <h2 value="<?= $movie_slug; ?>"><a href="<?= $_path; ?>?movie=<?= $movie_slug; ?>"><?= $movie['name']; ?></a></h2>
        <div class="dices">
          <?php
            for ($i=1; $i <= 6; $i++) {
              $dice_html = '<img src="' . $_path . 'images/graphics/dice-' . $i . '.png" alt="Rating ' . $i . '">';

              if ($i == $movie['rating']) {
                $dice_html = '<img class="dice-current" src="' . $_path . 'images/graphics/dice-' . $i . '.png" alt="Rating ' . $i . '">';
              }

              echo $dice_html;
            }
          ?>
        </div>
      </div>
    </article>
    <?php
      }
    ?>
  </section>
</main>
