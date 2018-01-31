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
                        srcset="<?= $config['img_dir']; ?>hero_home.jpg" />
                <!-- Tablet -->
                <source media="(min-width: 550px)"
                        srcset="<?= $config['img_dir']; ?>hero_tablet.png" />
                <!-- Mobile -->
                <source srcset="<?= $config['img_dir']; ?>hero_tablet.png" />
                <img src="<?= $config['img_dir']; ?>hero_home.jpg" class="img-responsive" style="width:100%;" />
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
              <picture>
                <!-- Desktop -->
                <source media="(min-width: 450px)"
                        srcset="<?= $config['img_dir']; ?>mission_desktop.png" />
                <!-- Mobile -->
                <source srcset="<?= $config['img_dir']; ?>mission_desktop.png" />
                <img src="<?= $config['img_dir']; ?>mission_desktop.png" class="img-responsive homeMission-img" style="width:100%;" />
              </picture>
            </div>
            <div class="col-md-7">
              <h2>Our Mission</h2>
              <span class="border"></span>
              <p class="homeMission-lead">Our mission is to help Bitcoin Cash serve one billion users within five years.</p>
              <p>Anyone, or any team, can put in a proposal to request funding from the BCF. The proposals will be assessed based on cost versus impact and S.M.A.R.T principles, to make sure funds are allocated where they will have maximum impact.</p>
              <p>Members of the community are encouraged to take ownership of their projects and see them through to completion.</p>
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
              <img src="<?= $config['img_dir']; ?>proposal_temp.jpg" class="img-responsive homeHelp-sectionImg">
            </div>
            <div class="col-md-7 homeHelp-proposalCol">
              <h3 class="homeHelp-sectionHeading">Submit a Proposal</h3>
              <p class="homeHelp-sectionText">Do you have a briliant idea of how to promote adoption of Bitcoin Cash? Fill out our proposal form and we may help fund it!</p>
              <a href="<?= $config['base_url']; ?>proposal/" class="btn btn-lg homeHelp-sectionBtn">Learn More</a>
            </div>
          </div>
          <div class="row homeHelp-section">
            <div class="col-md-5 col-md-push-7 homeHelp-imageCol">
              <img src="<?= $config['img_dir']; ?>volunteer_temp.jpg" class="img-responsive homeHelp-sectionImg">
            </div>
            <div class="col-md-7 col-md-pull-5 homeHelp-volunteerCol">
              <h3 class="homeHelp-sectionHeading">Volunteer</h3>
              <p class="homeHelp-sectionText">We have active projects right now that need help from talented people like you. Volunteering is a great chance to earn a little BCH while increasing the value of the coins you already hold.</p>
              <a href="<?= $config['base_url']; ?>volunteer/" class="btn btn-lg homeHelp-sectionBtn">Learn More</a>
            </div>
          </div>
          <div class="row homeHelp-section">
            <div class="col-md-5 homeHelp-imageCol">
              <img src="<?= $config['img_dir']; ?>donate_temp.jpg" class="img-responsive homeHelp-sectionImg">
            </div>
            <div class="col-md-7 homeHelp-donateCol">
              <h3 class="homeHelp-sectionHeading">Donate</h3>
              <p class="homeHelp-sectionText">Want to help out but don't have time to get involved yourself? No problem! Your BCH donations will help tremendously. We aim for complete transparency and accountablity with community donations.</p>
              <a href="<?= $config['base_url']; ?>donate/" class="btn btn-lg homeHelp-sectionBtn">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
