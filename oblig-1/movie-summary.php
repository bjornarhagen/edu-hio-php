<article id="movie-summary-<?= $slug; ?>">
  <img src="<?= $_path; ?>images/movies/<?= $slug; ?>-thumb.jpg" alt="<?= $movie['name']; ?> movie poster">
  <h2><?= $movie['name']; ?></h2>
  <p><?= $movie['description']; ?></p>
  <a href="<?= $_path ?>movie.php?id=<?= $slug ?>">More ...</a>
</article>
