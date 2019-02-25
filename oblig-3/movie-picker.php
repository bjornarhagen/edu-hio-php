<form id="movie-picker" action="<?= $_path ?>movies/pick-a-movie.php" method="post">
    <select name="movie" id="select-movie" required>
        <option value="null" selected disabled>Pick a film</option>
        <?php
            foreach ($movies as $movie_slug => $movie) {
                if (isset($_movie) && $_movie['slug'] == $movie_slug) {
                    echo '<option value="' . $movie_slug . '" selected>' . $movie['name'] . '</option>';
                } else {
                    echo '<option value="' . $movie_slug . '">' . $movie['name'] . '</option>';
                }
            }
        ?>
    </select>
    <button type="submit">Show</button>
</form>
