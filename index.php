<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Obliger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      margin: 0;
      display: flex;
      min-height: 100vh;
      justify-content: center;
      align-content: center;
      align-items: center;
      flex-direction: column;
      color: #fff;
      background-color: #000;
    }

    a {
      display: inline-block;
      padding: 0.5em 1em;
      color: #00ff00;
    }

    a:hover,
    a:focus {
      color: #005500;
      background-color: #00ff00;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <h1>Obliger</h1>
  <nav>
    <?php
      $pages = [
        'oblig-1' => 'Oblig 1',
        'oblig-2' => 'Oblig 2',
        'oblig-3' => 'Oblig 3'
      ];

      foreach ($pages as $page_link => $page_name) {
        echo '<a href="' . $page_link . '">' . $page_name . '</a>';
      }
    ?>
  </nav>
</body>
</html>
