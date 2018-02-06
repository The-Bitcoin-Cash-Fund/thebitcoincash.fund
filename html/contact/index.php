<?php $config = include('../_config.php'); ?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => 'Contact',
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
      <div class="contact">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2>Get In Touch</h2>
              <span class="border-white"></span>
              <ul class="contact-snsList">
                <li><a href="https://www.youtube.com/channel/UC0NQCJDbECWg3jjkmsEDO-A/videos" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-yt.svg" alt="YouTube" class="contact-snsImg"></a></li>
                <li><a href="https://twitter.com/BitcoinCashFund" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-twitter.svg" alt="Twitter" class="contact-snsImg"></a></li>
                <li><a href="https://www.facebook.com/bitcoincashfund/" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-fb.svg" alt="Facebook" class="contact-snsImg"></a></li>
                <li><a href="https://steemit.com/@bitcoincashfund" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-steemit.svg" alt="Steemit" class="contact-snsImg"></a></li>
                <li><a href="https://www.reddit.com/r/bitcoincashmarketing" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-reddit.svg" alt="Reddit" class="contact-snsImg"></a></li>
                <li><a href="https://www.yours.org/user/bitcoincashfund" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-yours.svg" alt="Yours" class="contact-snsImg"></a></li>
              </ul>
              <div class="contact-form">
                <form action="https://formcarry.com/s/r1pJYQNgM" method="POST">
                  <input class="form-control input-lg contact-input" type="text" placeholder="Name" name="name">
                  <input class="form-control input-lg contact-input" type="email" placeholder="Email" name="email">
                  <textarea class="form-control input-lg contact-input" rows="7" placeholder="Message" name="message"></textarea>
                  <input class="btn btn-lg contact-btn" type="submit" value="Send">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="successChat">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-push-7 successChat-imgCol">
              <img src="<?= $config['svg_dir']; ?>success_chat.svg" class="img-responsive successChat-img"></div>
            <div class="col-md-7 col-md-pull-5 successChat-txtCol">
              <h3 class="successChat-heading">Join Our Chat</h3>
              <p>The Bitcoin Cash Fund was formed in the BCH Slack group in late 2017. We knew that pushing adoption of Bitcoin Cash would go a lot smoother with some type of organization. We set out to raise a few hundred dollars to make a short video and ended up with a tremendous outpouring of support from the community.</p>
              <p>Since then we incorporated as a non-profit organization and have pulled together a small team of hard-working professionals.</p>
              <a href="https://chat.thebitcoincash.fund/" target="_blank" class="btn btn-lg successChat-btn">Join Us!</a>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
