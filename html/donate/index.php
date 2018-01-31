<?php $config = include('../_config.php'); ?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => 'Donate',
      'description' => '',
      'url'         => '',
      'og_img'      => 'https://thebitcoincash.fund/assets/img/bcf_opengraph.jpg'
    ]; ?>
    <?php include($config['include_dir'] . 'head.php'); ?>
    <title><?= $headInfo['title'] . $config['title_post'] ?></title>
  </head>
  <body>
    <?php include($config['include_dir'] . 'nav.php'); ?>
    <div class="page-wrap">
      <div class="donateHero">
        <div class="container">
          <picture>
            <!-- Desktop -->
            <source media="(min-width: 450px)"
                    srcset="<?= $config['img_dir']; ?>hero_donate.jpg" />
            <!-- Mobile -->
            <source srcset="<?= $config['img_dir']; ?>hero_donate_mobile.jpg" />
            <img src="<?= $config['img_dir']; ?>hero_donate.jpg" class="img-responsive heroImg" />
          </picture>
          <h1 class="donateHero-heading">A donation to the BCF is an investment in your future</h1>
          <p class="donateHero-lead">Widespread adoption of Bitcoin Cash will result in higher price.</p>
        </div>
      </div>
      <div class="donate">
        <div class="container donate-wrapper">
          <div class="row">
            <div class="col-md-8">
              <h2>Donate</h2>
              <span class="border-white"></span>
              <p class="donate-text">This is the official Bitcoin Cash Fund funding address. Simply copy and paste, or scan the address into your favourite wallet to donate. All donations are welcome.</p>
            </div>
            <div class="col-md-4">
              <img src="<?= $config['img_dir']; ?>qr_code.png" class="img-responsive donate-qr">
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <p class="donate-address">bitcoincash:pzyjepg4rmm8yx8v0sc6svac255ta2md2y9l0edptq</p>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
