<?php $config = include('../_config.php'); ?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => 'Submit a Proposal',
      'description' => '',
      'url'         => '',
      'og_img'      => ''
    ]; ?>
    <?php include($config['include_dir'] . 'head.php'); ?>
    <title><?= $headInfo['title'] . $config['title_post'] ?></title>
  </head>
  <body>
    <?php include($config['include_dir'] . 'nav.php'); ?>
    <div class="page-wrap">
      <!-- Content -->
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
