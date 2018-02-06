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
    <script>
      $().ready(function() {
        $.extend(jQuery.validator.messages, {
          required: 'This field is required'
        });
        $("#volunteerForm-form").validate({
          rules: {
            Name: "required",
            Email: {
              required: true,
              email: true
            }
          },
          messages: {
            Name: "Please enter your name",
            Email: "Please enter a valid email address"
          }
        });
      });
    </script>
  </head>
  <body>
    <?php include($config['include_dir'] . 'nav.php'); ?>
    <div class="page-wrap">
      <div class="hero">
        <div class="container">
          <picture>
            <!-- Desktop -->
            <source media="(min-width: 650px)"
                    srcset="<?= $config['svg_dir']; ?>volunteer_hero_desktop.svg" />
            <!-- Mobile -->
            <source srcset="<?= $config['svg_dir']; ?>volunteer_hero_mobile.svg" />
            <img src="<?= $config['svg_dir']; ?>volunteer_hero_desktop.svg" class="img-responsive hero-img" />
          </picture>
          <h1 class="hero-heading">Ready to put your skills to use?</h1>
          <p class="hero-lead">We've got active projects right now that need the help of talented people like you.</p>
        </div>
      </div>
      <div class="hero-subhead">
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
            <div class="col-md-5 volunteerForm-txtCol">
              <h2 class="volunteerForm-heading">We need you!</h2>
              <p class="volunteerForm-text">We need people with skill like the ones listed in the form to volunteer some of their time for projects to bring awareness and adoption of Bitcoin Cash. If this is you get in contact with me, or come and talk to us at chat.thebitcoincash.fund.</p>
              <p class="volunteerForm-text">We can also budget some amount of funds for work, but priority will be given to people willing to do at least partially volunteer their time.</p>
              <h2 class="volunteerForm-heading">If you don't have skills</h2>
              <p class="volunteerForm-text">If you don't have any of these skills, that doesn't mean we don't need your help. There are lots of other things that projects need help with (i.e. sending out stickers, handing out leaflets, writing education content etc.).</p>
            </div>
            <div class="col-md-7 volunteerForm-frmCol">
              <form id="volunteerForm-form" action="https://formcarry.com/s/HkK6QYWUG" method="POST">
                <input class="form-control input-lg volunteerForm-input" type="text" placeholder="Name" name="Name">
                <input class="form-control input-lg volunteerForm-input" type="email" placeholder="Email" name="Email">
                <fieldset class="volunteerForm-fieldset">
                  <legend class="volunteerForm-fieldsetLegend">Your Skills</legend>
                  <div class="volunteerForm-fieldsetHalf">
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Project_Management">
                        Project Management
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Web_Development">
                        Web Development
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Graphic_Design">
                        Graphic Design
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Marketing">
                        Marketing
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Sales">
                        Sales
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Writing">
                        Writing
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Business_Onboarding">
                        Business Onboarding
                      </label>
                    </div>
                  </div>
                  <div class="volunteerForm-fieldsetHalf">
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Social_Media">
                        Social Media
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Translation">
                        Translation
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Videography">
                        Videography
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Audio">
                        Audio
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Music">
                        Music
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Motion_Graphics">
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
                  <input class="form-control input-lg volunteerForm-input" type="text" placeholder="Other Skills (optional)" value="" name="Other_Skills">
                </fieldset>
                <fieldset class="volunteerForm-fieldset">
                  <legend class="volunteerForm-fieldsetLegend">Portfolio (Optional)</legend>
                  <div class="volunteerForm-fieldsetHalf">
                    <input class="form-control input-lg volunteerForm-input" type="text" placeholder="GitHub" value="" name="GitHub">
                    <input class="form-control input-lg volunteerForm-input" type="text" placeholder="Website" value="" name="Website">
                  </div>
                  <div class="volunteerForm-fieldsetHalf">
                    <input class="form-control input-lg volunteerForm-input" type="text" placeholder="Twitter" value="" name="Twitter">
                    <input class="form-control input-lg volunteerForm-input" type="text" placeholder="Other" value="" name="Other">
                  </div>
                </fieldset>
                <textarea class="form-control input-lg volunteerForm-input" rows="7" placeholder="Additional Notes" name="Message"></textarea>
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
