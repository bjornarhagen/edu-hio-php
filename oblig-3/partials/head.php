<?php
  $body_class = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $_page)));
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $_page ?> | Film Archive</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="<?= $_path ?>css/main.css" />
</head>
<body class="<?= $body_class ?>">
