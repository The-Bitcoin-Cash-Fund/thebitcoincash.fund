<?php $config = include('_config.php'); ?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => 'The Bitcoin Cash Fund',
      'description' => 'A community-driven, grassroots project to accelerate the adoption of Bitcoin Cash.',
      'url'         => 'https://thebitcoincash.fund',
      'og_img'      => 'https://thebitcoincash.fund/assets/img/bcf_opengraph.jpg'
    ]; ?>
    <?php include($config['include_dir'] . 'head.php'); ?>
    <title><?= $headInfo['title'] ?></title>
  </head>
  <body>
    <?php include($config['include_dir'] . 'nav.php'); ?>
    <div class="page-wrap">
      <div id="hero">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <picture>
                <!-- Desktop -->
                <source media="(min-width: 768px)"
                        srcset="<?= $config['img_dir']; ?>hero_desktop.png" />
                <!-- Tablet -->
                <source media="(min-width: 550px)"
                        srcset="<?= $config['img_dir']; ?>hero_tablet.png" />
                <!-- Mobile -->
                <source srcset="<?= $config['img_dir']; ?>hero_tablet.png" />
                <img src="<?= $config['img_dir']; ?>hero_desktop.png" class="img-responsive" style="width:100%;" />
              </picture>
              <h1 id="hero-title">The Bitcoin Cash Fund!!</h1>
              <p id="hero-lead">A community-driven, grassroots project to accelerate the adoption of Bitcoin Cash.</p>
            </div>
          </div>
        </div>
      </div>
      <div id="subhead">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <p>The <strong>Bitcoin Cash Fund</strong> is a non-profit organisation, with the mission of distributing donated funds to projects that promote Bitcoin Cash.</p>
            </div>
          </div>
        </div>
      </div>
      <div id="what-is-bch">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2>What Is Bitcoin Cash?</h2>
              <span class="border"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 what-bch-answer">
              <img src="<?= $config['svg_dir']; ?>globe.svg" class="bch-business-icon">
              <p>A person-to-person online global digital cash system.</p>
            </div>
            <div class="col-md-4 what-bch-answer">
              <img src="<?= $config['svg_dir']; ?>cubes.svg" class="bch-business-icon">
              <p>A decentralized currency not controlled by any one person.</p>
            </div>
            <div class="col-md-4 what-bch-answer">
              <img src="<?= $config['svg_dir']; ?>flash.svg" class="bch-business-icon">
              <p>A secure, high-speed and low-cost payment system.</p>
            </div>
          </div>
        </div>
      </div>
      <div id="mission">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <picture>
                <!-- Desktop -->
                <source media="(min-width: 450px)"
                        srcset="<?= $config['img_dir']; ?>mission_desktop.png" />
                <!-- Mobile -->
                <source srcset="<?= $config['img_dir']; ?>mission_desktop.png" />
                <img id="mission-img" src="<?= $config['img_dir']; ?>mission_desktop.png" class="img-responsive" style="width:100%;" />
              </picture>
            </div>
            <div class="col-md-7">
              <h2>Our Mission</h2>
              <span class="border"></span>
              <p id="mission-lead">Our mission is to help Bitcoin Cash serve one billion users within five years.</p>
              <p>Anyone, or any team, can put in a proposal to request funding from the BCF. The proposals will be assessed based on cost versus impact and S.M.A.R.T principles, to make sure funds are allocated where they will have maximum impact.</p>
              <p>Members of the community are encouraged to take ownership of their projects and see them through to completion.</p>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
