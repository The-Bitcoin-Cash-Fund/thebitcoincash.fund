<?php $config = include('../_config.php'); ?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => 'About Us',
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
      <div id="team">
        <div class="container">
          <h2>Meet the Team</h2>
          <span class="border"></span>
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <div class="team-wrapper">
                <img src="<?= $config['img_dir']; ?>team_ian_descoteaux.jpg" class="img-responsive team-photo">
                <p class="team-name">Ian Descôteaux</p>
                <p class="team-role">Board Member</p>
                <p class="team-bio">Entered the Bitcoin space in 2010 and built up a mining farm and has been mining ever since.</p>
                <p class="team-social">
                  <a href="https://twitter.com/checksum0" target="_blank">@checksum0</a>
                </p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="team-wrapper">
                <img src="<?= $config['img_dir']; ?>team_paul_wasensteiner.jpg" class="img-responsive team-photo">
                <p class="team-name">Paul Wasensteiner</p>
                <p class="team-role">Executive Director</p>
                <p class="team-bio">Entered the Bitcoin space in 2011, and founded the Bitcoin Cash Fund in November 2017.</p>
                <p class="team-social">
                  <a href="https://twitter.com/__pcd__" target="_blank">@__pcd__</a>
                </p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="team-wrapper">
                <img src="<?= $config['img_dir']; ?>team_haipo_yang.jpg" class="img-responsive team-photo">
                <p class="team-name">Haipo Yang</p>
                <p class="team-role">Board Member</p>
                <p class="team-bio">Founded the highly successful mining pool ViaBTC, and led the R&amp;D team at ZeusMiner. </p>
                <p class="team-social">
                  <a href="https://twitter.com/yhaiyang" target="_blank">@yhaiyang</a>
                </p>
              </div>
            </div>
            <div class="clearfix visible-md visible-lg"></div>
          </div>
        </div>
      </div>
      <div id="advisors">
        <div class="container">
          <h2>Our Advisors</h2>
          <span class="border"></span>
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="team-wrapper"> <img src="<?= $config['img_dir']; ?>team_jack_liu.jpg" class="img-responsive team-photo">
                <p class="team-name">Jack C. Liu</p>
                <p class="team-bio">Formerly served as Chief Strategy Officer of OKCoin Group, and co-founded OKEx and OKLink.</p>
                <p class="team-social">
                  <a href="https://twitter.com/liujackc" target="_blank">@liujackc</a>
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="team-wrapper"><img src="<?= $config['img_dir']; ?>team_roger_ver.jpg" class="img-responsive team-photo">
                <p class="team-name">Roger Ver</p>
                <p class="team-bio">World's first Investor in Bitcoin startups and has been investing in Bitcoin startups since early 2011.</p>
                <p class="team-social">
                  <a href="https://twitter.com/rogerkver" target="_blank">@rogerkver</a>
                </p>
              </div>
            </div>
            <div class="clearfix visible-sm visible-md"></div>
            <div class="col-sm-6 col-lg-3">
              <div class="team-wrapper"><img src="<?= $config['img_dir']; ?>team_peter_rizun.jpg" class="img-responsive team-photo">
                <p class="team-name">Dr. Peter R. Rizun</p>
                <p class="team-bio">Chief Scientist for Bitcoin Unlimited, committed to researching the bottlenecks to Bitcoin scaling.</p>
                <p class="team-social">
                  <a href="https://twitter.com/peterrizun" target="_blank">@peterrizun</a>
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="team-wrapper"><img src="<?= $config['img_dir']; ?>team_mike_komaransky.jpg" class="img-responsive team-photo">
                <p class="team-name">Mike Komaransky</p>
                <p class="team-bio">

                  An investor and advocate of Bitcoin since 2010, Mike was a partner at DRW, and was Head of Trading at Cumberland Mining from 2014 until June 2017.</p>
                <p class="team-social">
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
