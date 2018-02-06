<?php $config = include('../_config.php'); ?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => 'Form Sumbitted Succesfully',
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
      <div class="hero">
        <div class="container">
          <picture>
            <!-- Desktop -->
            <source media="(min-width: 650px)"
                    srcset="<?= $config['svg_dir']; ?>success_hero_desktop.svg" />
            <!-- Mobile -->
            <source srcset="<?= $config['svg_dir']; ?>success_hero_mobile.svg" />
            <img src="<?= $config['svg_dir']; ?>success_hero_desktop.svg" class="img-responsive hero-img" />
          </picture>
          <h1 class="hero-heading">Form Submitted succesfully!</h1>
          <p class="hero-lead">Now why don't you join our chat?</p>
        </div>
      </div>
      <div class="successChat">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-push-7 successChat-imgCol">
              <img src="<?= $config['svg_dir']; ?>about_trust.svg" class="img-responsive successChat-img"></div>
            <div class="col-md-7 col-md-pull-5 successChat-txtCol">
              <h3 class="successChat-heading">Join Our Chat</h3>
              <p>The Bitcoin Cash Fund was formed in the BCH Slack group in late 2017. We knew that pushing adoption of Bitcoin Cash would go a lot smoother with some type of organization. We set out to raise a few hundred dollars to make a short video and ended up with a tremendous outpouring of support from the community.</p>
              <p>Since then we incorporated as a non-profit organization and have pulled together a small team of hard-working professionals.</p>
              <a href="<?= $config['base_url']; ?>donate/" class="btn btn-lg successChat-btn">Join Us!</a>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
