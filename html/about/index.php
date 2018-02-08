<?php $config = include('../_config.php'); ?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => 'About Us',
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
                    srcset="<?= $config['svg_dir']; ?>about_hero_desktop.svg" />
            <!-- Mobile -->
            <source srcset="<?= $config['svg_dir']; ?>about_hero_mobile.svg" />
            <img src="<?= $config['svg_dir']; ?>about_hero_desktop.svg" class="img-responsive hero-img" />
          </picture>
          <h1 class="hero-heading">Bitcoin Cash is the future</h1>
          <p class="hero-lead">We are passionate group of professionals committed to the long-term success of this legendary crypto currency.</p>
        </div>
      </div>
      <div class="hero-subhead">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <p>We've attracted a global team of dedicated, talented individuals with a vested interest in promoting Bitcoin Cash.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="aboutTrust">
        <div class="container">
          <div class="row">
            <div class="col-md-5 aboutTrust-imgCol">
              <img src="<?= $config['svg_dir']; ?>about_trust.svg" class="img-responsive aboutTrust-img"></div>
            <div class="col-md-7 aboutTrust-txtCol">
              <h3 class="aboutTrust-heading">Humble Beginnings</h3>
              <p>The Bitcoin Cash Fund was formed in a Bitcoin Cash chat group in 2017. It was started by a simple request to the community to crowdfund a short promo video for Bitcoin Cash. The outpouring of support across the industry was phenomenal, and it became crystal clear that there was a need for an organisation to take on this role permanently.</p>
              <p>Since then we have incorporated as a non-profit organization and have pulled together a small team of hard-working professionals distributed across the globe to get things done.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="aboutExec">
        <div class="container">
          <h2>The Board</h2>
          <span class="border"></span>
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_ian_descoteaux.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Ian Descôteaux</p>
                <p class="aboutTeam-role">Board Member</p>
                <p class="aboutTeam-bio">Entered the Bitcoin space in 2010 and built up a mining farm and has been mining ever since.</p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/checksum0" target="_blank">@checksum0</a>
                </p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_paul_wasensteiner.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Paul Wasensteiner</p>
                <p class="aboutTeam-role">Board Member</p>
                <p class="aboutTeam-bio">Entered the Bitcoin space in 2011, and founded the Bitcoin Cash Fund in November 2017.</p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/PWasensteiner" target="_blank">@PWasensteiner</a>
                </p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_haipo_yang.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Haipo Yang</p>
                <p class="aboutTeam-role">Board Member</p>
                <p class="aboutTeam-bio">Founded the highly successful mining pool ViaBTC, and led the R&amp;D team at ZeusMiner. </p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/yhaiyang" target="_blank">@yhaiyang</a>
                </p>
              </div>
            </div>
            <div class="clearfix visible-md visible-lg"></div>
          </div>
        </div>
      </div>
      <div class="aboutTeam">
        <div class="container">
          <h2>Meet The Team</h2>
          <span class="border"></span>
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_paul_wasensteiner.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Paul Wasensteiner</p>
                <p class="aboutTeam-role">Executive Director</p>
                <!--
                <p class="aboutTeam-bio">Entered the Bitcoin space in 2011, and founded the Bitcoin Cash Fund in November 2017.</p>
                <p class="aboutTeam-social">
                <a href="https://twitter.com/PWasensteiner" target="_blank">@PWasensteiner</a>
                </p>
                -->
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_ian_descoteaux.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Ian Descôteaux</p>
                <p class="aboutTeam-role">Technical Director</p>
                <!--
                <p class="aboutTeam-bio">Entered the Bitcoin space in 2010 and built up a mining farm and has been mining ever since.</p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/checksum0" target="_blank">@checksum0</a>
                </p>
                -->
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_monica_rea.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Monica Rea</p>
                <p class="aboutTeam-role">Event Coordinator</p>
                <!--
                <p class="aboutTeam-bio">bio</p>
                <p class="aboutTeam-social">
                <a href="https://twitter.com/username" target="_blank">@username</a>
                </p>
                -->
              </div>
            </div>
            <div class="clearfix visible-sm visible-md visible-lg"></div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_aron_levi.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Aron Levi</p>
                <p class="aboutTeam-role">Sales &amp; Business Development</p>
                <!--
                <p class="aboutTeam-bio">bio</p>
                <p class="aboutTeam-social">
                <a href="https://twitter.com/username" target="_blank">@username</a>
                </p>
                -->
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_george_samuels.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">George Samuels</p>
                <p class="aboutTeam-role">Community Manager</p>
                <!--
                <p class="aboutTeam-bio">bio</p>
                <p class="aboutTeam-social">
                <a href="https://twitter.com/username" target="_blank">@username</a>
                </p>
                -->
              </div>
            </div>
            <div class="clearfix visible-md visible-lg"></div>
          </div>
        </div>
      </div>
      <div class="aboutAdvisors">
        <div class="container">
          <h2>Our Advisors</h2>
          <span class="border"></span>
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="aboutTeam-wrapper"> <img src="<?= $config['img_dir']; ?>team_jack_liu.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Jack C. Liu</p>
                <p class="aboutTeam-bio">Formerly served as Chief Strategy Officer of OKCoin Group, and co-founded OKEx and OKLink.</p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/liujackc" target="_blank">@liujackc</a>
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="aboutTeam-wrapper"><img src="<?= $config['img_dir']; ?>team_roger_ver.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Roger Ver</p>
                <p class="aboutTeam-bio">World's first Investor in Bitcoin startups and has been investing in Bitcoin startups since early 2011.</p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/rogerkver" target="_blank">@rogerkver</a>
                </p>
              </div>
            </div>
            <div class="clearfix visible-sm visible-md"></div>
            <div class="col-sm-6 col-lg-3">
              <div class="aboutTeam-wrapper"><img src="<?= $config['img_dir']; ?>team_peter_rizun.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Dr. Peter R. Rizun</p>
                <p class="aboutTeam-bio">Chief Scientist for Bitcoin Unlimited, committed to researching the bottlenecks to Bitcoin scaling.</p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/peterrizun" target="_blank">@peterrizun</a>
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="aboutTeam-wrapper"><img src="<?= $config['img_dir']; ?>team_mike_komaransky.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Mike Komaransky</p>
                <p class="aboutTeam-bio">
                  An investor and advocate of Bitcoin since 2010, Mike was a partner at DRW, and was Head of Trading at Cumberland Mining from 2014 until June 2017.</p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/mkomaransky" target="_blank">@mkomaransky</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
