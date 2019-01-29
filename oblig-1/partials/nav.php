<nav>
  <?php
    foreach ($nav_links as $link_path => $link_name) {
      $nav_item_classes = 'nav-item';

      if ($link_path === $page_slug) {
        $nav_item_classes = 'nav-item-current';
      }

      echo '<a href="' . $_path . $link_path . '" class="' . $nav_item_classes . '">' . $link_name . '</a>';
    }
  ?>
</nav>
