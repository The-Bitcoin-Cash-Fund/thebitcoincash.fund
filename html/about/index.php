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
      <div class="aboutHero">
        <div class="container">
          <picture>
            <!-- Desktop -->
            <source media="(min-width: 450px)"
                    srcset="<?= $config['img_dir']; ?>hero_about.jpg" />
            <!-- Mobile -->
            <source srcset="<?= $config['img_dir']; ?>hero_about_mobile.jpg" />
            <img src="<?= $config['img_dir']; ?>hero_about.jpg" class="img-responsive aboutHero-img" />
          </picture>
          <h1 class="aboutHero-heading">We believe in a future after fiat</h1>
          <p class="aboutHero-lead">We are passionate and commited to the long-term success of Bitcoin Cash</p>
        </div>
      </div>
      <div class="aboutHero-subhead">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="aboutTrust">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <img src="<?= $config['img_dir']; ?>about_trust.jpg" class="img-responsive aboutTrust-img"></div>
            <div class="col-md-7">
              <h3 class="aboutTrust-heading">Why you should trust us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim nunc nibh, eget lacinia erat lacinia eu. Cras nibh leo, posuere in sodales gravida, viverra vel nibh. In aliquam elit vitae nulla volutpat tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sed erat placerat, tincidunt augue nec, pulvinar justo. Maecenas sed neque ac nisl elementum elementum non et sem. Sed augue nulla, fermentum nec pellentesque eget, tempor sed massa. Donec tincidunt consequat lectus sit amet cursus. Mauris porta lacus quis varius ornare.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="aboutTeam">
        <div class="container">
          <h2>Meet the Team</h2>
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
                <p class="aboutTeam-role">Executive Director</p>
                <p class="aboutTeam-bio">Entered the Bitcoin space in 2011, and founded the Bitcoin Cash Fund in November 2017.</p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/__pcd__" target="_blank">@__pcd__</a>
                </p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_haipo_yang.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Haipo Yang</p>
                <p class="aboutTeam-role">Board Member</p>
                <p class="aboutTeam-bio">Founded the highly successful mining pool ViaBTC, and led the R&amp;D aboutTeam at ZeusMiner. </p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/yhaiyang" target="_blank">@yhaiyang</a>
                </p>
              </div>
            </div>
            <div class="clearfix visible-md visible-lg"></div>
          </div>
        </div>
      </div>
      <div class="advisors">
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
      <div class="aboutSponsors">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2>Sponsors</h2>
              <span class="border"></span>
              <p>These corporate sponsors are fully aligned with our goals and are pushing Bitcoin Cash adoption forward at a lightning pace.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-4"><a href="https://www.bitcoin.com/" target="_blank" class="aboutSponsors-link"><img src="<?= $config['img_dir']; ?>sponsor-bitcoin.png"></a></div>
            <div class="col-xs-6 col-sm-4"><a href="https://viabtc.com/" target="_blank" class="aboutSponsors-link"><img src="<?= $config['img_dir']; ?>sponsor-viabtc.png"></a></div>
            <div class="col-xs-6 col-sm-4"><a href="https://www.yours.org/" target="_blank" class="aboutSponsors-link"><img src="<?= $config['img_dir']; ?>sponsor-yours.png"></a></div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
