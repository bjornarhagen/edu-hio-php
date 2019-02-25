<nav>
  <form action="<?= $_path ?>movies/pick-a-movie.php" method="post">
    <button class="nav-item" type="submit">Film Archive</button>
  </form>
  <?php
    require('movie-picker.php');
  ?>
</nav>
