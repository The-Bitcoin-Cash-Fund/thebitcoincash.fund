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
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
