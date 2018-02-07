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
      <div class="homeHero">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <picture>
                <!-- Desktop -->
                <source media="(min-width: 768px)"
                        srcset="<?= $config['svg_dir']; ?>home_hero_desktop.svg" />
                <!-- Mobile -->
                <source srcset="<?= $config['svg_dir']; ?>home_hero_mobile.svg" />
                <img src="<?= $config['svg_dir']; ?>home_hero_desktop.svg" class="img-responsive heroImg homeHero-img" />
              </picture>
              <h1 class="homeHero-title">The Bitcoin Cash Fund</h1>
              <p class="homeHero-lead">A community-driven, grassroots project to accelerate the adoption of Bitcoin Cash.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="homeHero-subhead">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <p>The <strong>Bitcoin Cash Fund</strong> is a non-profit organisation, with the mission of distributing donated funds to projects that promote Bitcoin Cash.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="homeBch">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2>What Is Bitcoin Cash?</h2>
              <span class="border"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 homeBch-answer">
              <img src="<?= $config['svg_dir']; ?>globe.svg" class="homeBch-businessIcon">
              <p>A person-to-person online global digital cash system.</p>
            </div>
            <div class="col-md-4 homeBch-answer">
              <img src="<?= $config['svg_dir']; ?>cubes.svg" class="homeBch-businessIcon">
              <p>A decentralized currency not controlled by any one person.</p>
            </div>
            <div class="col-md-4 homeBch-answer">
              <img src="<?= $config['svg_dir']; ?>flash.svg" class="homeBch-businessIcon">
              <p>A secure, high-speed and low-cost payment system.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="homeMission">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <img src="<?= $config['svg_dir']; ?>home_mission.svg" class="img-responsive homeMission-img" style="width:100%;" />
            </div>
            <div class="col-md-7">
              <h2>Our Mission</h2>
              <span class="border"></span>
              <p class="homeMission-lead">Our mission is to help Bitcoin Cash (BCH) serve one billion users within five years.</p>
              <p>We believe that the key to success for Bitcoin Cash lies in making sure it is adopted as a global payment system. To achieve this we need to rapidly grow both business and user adoption in unison to develop a closed-loop economy that benefits everyone.</p>
              <p>The Bitcoin Cash Fund supports community projects that help further these goals. We believe there is a tremendous amount of energy in the BCH community, and we aim to harness that energy and make BCH the currency of the future.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="homeHelp">
        <div class="container">
          <h2>How Can I Help?</h2>
          <span class="border"></span>
          <div class="row homeHelp-section">
            <div class="col-md-5 homeHelp-imageCol">
              <img src="<?= $config['svg_dir']; ?>home_proposal.svg" class="img-responsive homeHelp-sectionImg">
            </div>
            <div class="col-md-7 homeHelp-proposalCol">
              <h3 class="homeHelp-sectionHeading">Submit a Proposal</h3>
              <p class="homeHelp-sectionText">Do you have a brilliant idea of how to promote adoption of Bitcoin Cash? Fill out our proposal form and we may help fund it!</p>
              <a href="<?= $config['base_url']; ?>proposal/" class="btn btn-lg homeHelp-sectionBtn">Learn More</a>
            </div>
          </div>
          <div class="row homeHelp-section">
            <div class="col-md-5 col-md-push-7 homeHelp-imageCol">
              <img src="<?= $config['svg_dir']; ?>home_volunteer.svg" class="img-responsive homeHelp-sectionImg">
            </div>
            <div class="col-md-7 col-md-pull-5 homeHelp-volunteerCol">
              <h3 class="homeHelp-sectionHeading">Volunteer</h3>
              <p class="homeHelp-sectionText">We have active projects right now that need help from talented people like you. Volunteering is a great chance to earn some Bitcoin Cash while working with like-minded enthusiasts.</p>
              <a href="<?= $config['base_url']; ?>volunteer/" class="btn btn-lg homeHelp-sectionBtn">Learn More</a>
            </div>
          </div>
          <div class="row homeHelp-section">
            <div class="col-md-5 homeHelp-imageCol">
              <img src="<?= $config['svg_dir']; ?>home_donate.svg" class="img-responsive homeHelp-sectionImg">
            </div>
            <div class="col-md-7 homeHelp-donateCol">
              <h3 class="homeHelp-sectionHeading">Donate</h3>
              <p class="homeHelp-sectionText">Want to help out but don't have time to get involved yourself? No problem! Your donations are what make this all possible.</p>
              <a href="<?= $config['base_url']; ?>donate/" class="btn btn-lg homeHelp-sectionBtn">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
