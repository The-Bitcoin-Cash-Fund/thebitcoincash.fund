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
      <div id="donate">
        <div id="donate-wrapper" class="container">
          <div class="row">
            <div class="col-md-8">
              <h2>Donate</h2>
              <span class="border-white"></span>
              <p class="donate-text">This is the official Bitcoin Cash Fund funding address. Simply copy and paste, or scan the address into your favourite wallet to donate. All donations are welcome.</p>
            </div>
            <div class="col-md-4">
              <img src="<?= $config['img_dir']; ?>qr_code.png" id="donate-qr-code" class="img-responsive">
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <p id="donate-address">3ECKq7onkjnRQR2nNe5uUJp2yMsXRmZavC</p>
            </div>
          </div>
        </div>
      </div>

      <div id="sponsors">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2>Sponsors</h2>
              <span class="border"></span>
              <p>These corporate sponsors are fully aligned with our goals and are pushing Bitcoin Cash adoption forward at a lightning pace.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-4"><a href="https://www.bitcoin.com/" target="_blank" class="sponsors-link"><img src="<?= $config['img_dir']; ?>sponsor-bitcoin.png"></a></div>
            <div class="col-xs-6 col-sm-4"><a href="https://viabtc.com/" target="_blank" class="sponsors-link"><img src="<?= $config['img_dir']; ?>sponsor-viabtc.png"></a></div>
            <div class="col-xs-6 col-sm-4"><a href="https://www.yours.org/" target="_blank" class="sponsors-link"><img src="<?= $config['img_dir']; ?>sponsor-yours.png"></a></div>
          </div>
        </div>
      </div>
      <div id="contact">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2>Get In Touch</h2>
              <span class="border-white"></span>
              <ul id="contact-sns-list">
                <li><a href="https://www.youtube.com/channel/UC0NQCJDbECWg3jjkmsEDO-A/videos" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-yt.svg" alt="YouTube" class="contact-sns-img"></a></li>
                <li><a href="https://twitter.com/BitcoinCashFund" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-twitter.svg" alt="Twitter" class="contact-sns-img"></a></li>
                <li><a href="https://www.facebook.com/bitcoincashfund/" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-fb.svg" alt="Facebook" class="contact-sns-img"></a></li>
                <li><a href="https://steemit.com/@bitcoincashfund" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-steemit.svg" alt="Steemit" class="contact-sns-img"></a></li>
                <li><a href="https://www.reddit.com/r/bitcoincashmarketing" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-reddit.svg" alt="Reddit" class="contact-sns-img"></a></li>
                <li><a href="https://www.yours.org/user/bitcoincashfund" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-yours.svg" alt="Yours" class="contact-sns-img"></a></li>
              </ul>
              <div id="contact-form">
                <form action="https://formcarry.com/s/r1pJYQNgM" method="POST">
                  <input class="form-control input-lg contact-input" type="text" placeholder="Name" name="name">
                  <input class="form-control input-lg contact-input" type="email" placeholder="Email" name="email">
                  <textarea class="form-control input-lg contact-input" rows="7" placeholder="Message" name="message"></textarea>
                  <input id="contact-btn" class="btn btn-lg" type="submit" value="Send">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
