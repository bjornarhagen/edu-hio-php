<nav>
  <a class="nav-item" href="<?= $_path ?>">Vis alle</a>
  <?php
    foreach ($movies as $movie_slug => $movie) {
      $link_html = '<a class="nav-item" href="' . $_path . '?movie=' . $movie_slug . '">' . $movie['name'] . '</a>';

      if ($_page == $movie['name']) {
        $link_html = '<a class="nav-item nav-item-current" href="' . $_path . '?movie=' . $movie_slug . '">' . $movie['name'] . '</a>';
      }

      echo $link_html;
    }
  ?>
</nav>
