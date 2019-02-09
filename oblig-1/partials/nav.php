<nav>
  <?php
    foreach ($pages as $page_path => $page_name) {
      $classes = 'nav-item';

      // Check if current page is active
      if ($page_path === $_page) {
        $classes .= ' nav-item-current' . ' nav-item-' . $_page;
      }

      // Check if page is a movie
      if (isset($movies[$page_path])) {
        echo '<a href="' . $_path . '?movie=' . $page_path . '" class="' . $classes . '">' . $page_name . '</a>';
      } else {
        echo '<a href="' . $_path . $page_path . '" class="' . $classes . '">' . $page_name . '</a>';
      }
    }
  ?>
</nav>
