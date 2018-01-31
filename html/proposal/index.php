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
          <picture>
            <!-- Desktop -->
            <source media="(min-width: 450px)"
                    srcset="<?= $config['img_dir']; ?>hero_proposal.jpg" />
            <!-- Mobile -->
            <source srcset="<?= $config['img_dir']; ?>hero_proposal_mobile.jpg" />
            <img src="<?= $config['img_dir']; ?>hero_proposal.jpg" class="img-responsive heroImg" />
          </picture>
          <h1 class="proposalHero-heading">Have a brilliant marketing idea?</h1>
          <p class="proposalHero-lead">If you have an idea how to spread adoption of Bitcoin Cash, we'd like to help you fund it.</p>
        </div>
      </div>
      <div class="proposalIntro">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <picture>
                <!-- Desktop -->
                <source media="(min-width: 450px)"
                        srcset="<?= $config['img_dir']; ?>proposal_submit.png" />
                <!-- Mobile -->
                <source srcset="<?= $config['img_dir']; ?>proposal_submit.png" />
                <img src="<?= $config['img_dir']; ?>proposal_submit.png" class="img-responsive proposalIntro-img" style="width:100%;" />
              </picture>
            </div>
            <div class="col-md-7">
              <h2>What we're looking for</h2>
              <span class="border proposalIntro-border"></span>
              <p class="proposalIntro-lead">We are looking to promote any non-profit project that will help promote the adoption of Bitcoin Cash.</p>
              <p>Examples of projects we're funding now are Bitcoin Cash video tutorials, a BCH-specific JavaScript library and a "business onboarding info pack". We've previously funded the incredible <a href="https://txhighway.com/" target="_blank">TX Highway</a> as well as Bitcoin Cash meetups all over the world.</p>
              <p>If you have an idea like this that you think will help make Bitcoin Cash the future of money, submit the form below and we'll evaluate your proposal.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="proposalForm">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-push-7">
              <h2 class="proposalForm-heading">Example Proposals</h2>
              <p class="proposalForm-text">To get an idea of how to fill out this form, take a look at these accepted proposals from other community members.</p>
              <ul class="proposalForm-list">
                <li><a href="https://github.com/cranau/FPR/blob/f06ec2b38b0ba11f35e669c592c4eef99456a5d2/fpr-0008.md" target="_blank">Bitcoin Cash Tutorial Series</a></li>
                <li><a href="https://github.com/Wecx/Seatac-Bitcoin-Cash-Acceptance-Initiative/blob/master/BCF-FPR-SeatacBCH.md" target="_blank">Seatac BCH Acceptance Initiative</a></li>
              </ul>
              <p class="proposalForm-text">If you have any questions, feel free to contact us or come and talk to us at chat.thebitcoincash.fund</p>
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
