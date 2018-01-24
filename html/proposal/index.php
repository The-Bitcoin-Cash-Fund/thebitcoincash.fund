<?php $config = include('../_config.php'); ?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => 'Submit a Proposal',
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

      <div class="proposalHero">
        <div class="container">
          <img src="<?= $config['img_dir']; ?>hero_proposal.jpg" class="img-responsive proposalHero-img">
          <h1 class="proposalHero-heading">Do you have a brilliant idea?</h1>
          <p class="proposalHero-lead">Let us know your idea for how to spread adoption of Bitcoin Cash.</p>
        </div>
      </div>
      <div class="proposalForm">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-push-7">
              <h2 class="proposalForm-heading">Some Notes</h2>
              <p class="proposalForm-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed placerat purus. Suspendisse sed venenatis urna. Aliquam erat volutpat. Nullam pellentesque lectus non enim rhoncus condimentum. Ut ullamcorper in nibh id egestas. Curabitur consectetur egestas suscipit.</p>
              <p class="proposalForm-text">Donec sit amet lacus nulla. Integer consequat non leo eu gravida. Phasellus facilisis consequat felis sed dictum. Aenean bibendum risus tellus, vitae cursus sem congue vel. Vestibulum id egestas ex, in vestibulum urna. Nullam feugiat nisi vel viverra dignissim.</p>
              <h2 class="proposalForm-heading">If you don't have skills</h2>
              <p class="proposalForm-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed placerat purus. Suspendisse sed venenatis urna. Aliquam erat volutpat. Nullam pellentesque lectus non enim rhoncus condimentum. Ut ullamcorper in nibh id egestas. Curabitur consectetur egestas suscipit. Donec sit amet lacus nulla. Integer consequat non leo eu gravida. Phasellus facilisis consequat felis sed dictum. Aenean bibendum risus tellus, vitae cursus sem congue vel. Vestibulum id egestas ex, in vestibulum urna. Nullam feugiat nisi vel viverra dignissim.</p>
            </div>
            <div class="col-md-7 col-md-pull-5">
              <form action="#" method="POST">
                <input class="form-control input-lg proposalForm-input" type="text" placeholder="Name" name="name">
                <input class="form-control input-lg proposalForm-input" type="email" placeholder="Email" name="email">
                <input class="form-control input-lg proposalForm-input" type="text" placeholder="Project Name" name="name">
                <textarea class="form-control input-lg proposalForm-input" rows="4" placeholder="Project Summary" name="message"></textarea>

                <textarea class="form-control input-lg proposalForm-input" rows="2" placeholder="Stakeholders (List all people involved. Pseudonyms are ok.)" name="message"></textarea>
                
                <textarea class="form-control input-lg proposalForm-input" rows="4" placeholder="Required Resources (Skills, manpower, connections, etc.)" name="message"></textarea>

                <textarea class="form-control input-lg proposalForm-input" rows="5" placeholder="Itemized Budget & Funding Schedule" name="message"></textarea>

                <textarea class="form-control input-lg proposalForm-input" rows="5" placeholder="Timeline" name="message"></textarea>

                <textarea class="form-control input-lg proposalForm-input" rows="3" placeholder="Goals (Define who you want to reach, as well as how and why.)" name="message"></textarea>
                
                <textarea class="form-control input-lg proposalForm-input" rows="5" placeholder="Additional Info (Optional)" name="message"></textarea>

                <!--
                <fieldset class="proposalForm-fieldset">
                  <legend class="proposalForm-fieldsetLegend">Your Skills</legend>
                  <div class="proposalForm-fieldsetHalf">
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Project Management
                      </label>
                    </div>
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Web Development
                      </label>
                    </div>
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Graphic Design
                      </label>
                    </div>
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Marketing
                      </label>
                    </div>
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Sales
                      </label>
                    </div>
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Writing
                      </label>
                    </div>
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Business Onboarding
                      </label>
                    </div>
                  </div>
                  <div class="proposalForm-fieldsetHalf">
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Social Media
                      </label>
                    </div>
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Translation
                      </label>
                    </div>
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Videography
                      </label>
                    </div>
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Audio
                      </label>
                    </div>
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Music
                      </label>
                    </div>
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Motion Graphics
                      </label>
                    </div>
                    <div class="checkbox proposalForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Other (Below)
                      </label>
                    </div>
                  </div>
                  <input class="form-control input-lg proposalForm-input" type="text" placeholder="Other Skills (optional)" name="">
                </fieldset>
                <fieldset class="proposalForm-fieldset">
                  <legend class="proposalForm-fieldsetLegend">Portfolio (Optional)</legend>
                  <div class="proposalForm-fieldsetHalf">
                    <input class="form-control input-lg proposalForm-input" type="text" placeholder="GitHub" name="">
                    <input class="form-control input-lg proposalForm-input" type="text" placeholder="Website" name="">
                  </div>
                  <div class="proposalForm-fieldsetHalf">
                    <input class="form-control input-lg proposalForm-input" type="text" placeholder="Twitter" name="">
                    <input class="form-control input-lg proposalForm-input" type="text" placeholder="Other" name="">
                  </div>
                </fieldset>
                -->
                
                <input class="btn btn-lg proposalForm-btn" type="submit" value="Submit for Review">
              </form>
            </div>
          </div>
        </div>
      </div>



      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
