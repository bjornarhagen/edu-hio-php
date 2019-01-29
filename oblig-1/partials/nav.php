<nav>
  <?php
    foreach ($pages as $page_path => $page_name) {
      $classes = 'nav-item';

      if ($page_path === $_page) {
        $classes = 'nav-item-current';
      }

      echo '<a href="' . $_path . $page_path . '" class="' . $classes . '">' . $page_name . '</a>';
    }
  ?>
</nav>
