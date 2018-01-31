<?php $config = include('../_config.php'); ?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => 'Volunteer Your Time',
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
      <div class="volunteerHero">
        <div class="container">
          <picture>
            <!-- Desktop -->
            <source media="(min-width: 450px)"
                    srcset="<?= $config['img_dir']; ?>hero_volunteer.jpg" />
            <!-- Mobile -->
            <source srcset="<?= $config['img_dir']; ?>hero_volunteer_mobile.jpg" />
            <img src="<?= $config['img_dir']; ?>hero_volunteer.jpg" class="img-responsive volunteerHero-img" />
          </picture>
          <h1 class="volunteerHero-heading">Ready to put your skills to use?</h1>
          <p class="volunteerHero-lead">We've got active projects right now that need the help of talented people like you.</p>
        </div>
      </div>
      <div class="homeHero-subhead">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <p>This is a great opportunity to not only earn some Bitcoin Cash, but also help raise the value of the BCH you already own.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="volunteerForm">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h2 class="volunteerForm-heading">We need you!</h2>
              <p class="volunteerForm-text">We need people with skill like the ones listed in the form to volunteer some of their time for projects to bring awareness and adoption of Bitcoin Cash. If this is you get in contact with me, or come and talk to us at chat.thebitcoincash.fund.</p>
              <p class="volunteerForm-text">We can also budget some amount of funds for work, but priority will be given to people willing to do at least partially volunteer their time.</p>
              <h2 class="volunteerForm-heading">If you don't have skills</h2>
              <p class="volunteerForm-text">If you don't have any of these skills, that doesn't mean we don't need your help. There are lots of other things that projects need help with (i.e. sending out stickers, handing out leaflets, writing education content etc.).</p>
            </div>
            <div class="col-md-7">
              <form action="#" method="POST">
                <input class="form-control input-lg volunteerForm-input" type="text" placeholder="Name" name="name">
                <input class="form-control input-lg volunteerForm-input" type="email" placeholder="Email" name="email">
                <fieldset class="volunteerForm-fieldset">
                  <legend class="volunteerForm-fieldsetLegend">Your Skills</legend>
                  <div class="volunteerForm-fieldsetHalf">
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Project Management
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Web Development
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Graphic Design
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Marketing
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Sales
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Writing
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Business Onboarding
                      </label>
                    </div>
                  </div>
                  <div class="volunteerForm-fieldsetHalf">
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Social Media
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Translation
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Videography
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Audio
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Music
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Motion Graphics
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Other (Below)
                      </label>
                    </div>
                  </div>
                  <input class="form-control input-lg volunteerForm-input" type="text" placeholder="Other Skills (optional)" name="">
                </fieldset>
                <fieldset class="volunteerForm-fieldset">
                  <legend class="volunteerForm-fieldsetLegend">Portfolio (Optional)</legend>
                  <div class="volunteerForm-fieldsetHalf">
                    <input class="form-control input-lg volunteerForm-input" type="text" placeholder="GitHub" name="">
                    <input class="form-control input-lg volunteerForm-input" type="text" placeholder="Website" name="">
                  </div>
                  <div class="volunteerForm-fieldsetHalf">
                    <input class="form-control input-lg volunteerForm-input" type="text" placeholder="Twitter" name="">
                    <input class="form-control input-lg volunteerForm-input" type="text" placeholder="Other" name="">
                  </div>
                </fieldset>
                <textarea class="form-control input-lg volunteerForm-input" rows="7" placeholder="Additional Notes" name="message"></textarea>
                <input class="btn btn-lg volunteerForm-btn" type="submit" value="Send">
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
