<?php $config = include('../_config.php'); ?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => 'Donate',
      'description' => '',
      'url'         => '',
      'og_img'      => 'https://thebitcoincash.fund/assets/img/bcf_opengraph.jpg'
    ]; ?>
    <?php include($config['include_dir'] . 'head.php'); ?>
    <title><?= $headInfo['title'] . $config['title_post'] ?></title>




    <!-- 2. Include library -->
    <script src="../assets/js/clipboard.js"></script>
    <!-- 3. Instantiate clipboard -->
    <script>
      $().ready(function() {
        var clipboard = new Clipboard('.btn');
        clipboard.on('success', function(e) {
          console.log(e);
        });
        clipboard.on('error', function(e) {
          console.log(e);
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
                    srcset="<?= $config['svg_dir']; ?>donate_hero_desktop.svg" />
            <!-- Mobile -->
            <source srcset="<?= $config['svg_dir']; ?>donate_hero_mobile.svg" />
            <img src="<?= $config['svg_dir']; ?>donate_hero_desktop.svg" class="img-responsive hero-img" />
          </picture>
          <h1 class="hero-heading">A donation to the BCF is an investment in your future</h1>
          <p class="hero-lead">Widespread adoption of Bitcoin Cash will result in higher price.</p>
        </div>
      </div>
      <div class="donate">
        <div class="container donate-wrapper">
          <div class="row">
            <div class="col-md-8">
              <h2>Donate</h2>
              <span class="border-white"></span>
              <p class="donate-text">This is the official Bitcoin Cash Fund funding address. Simply copy and paste, or scan the address into your favourite wallet to donate. All donations are welcome.</p>
            </div>
            <div class="col-md-4">
              <img src="<?= $config['img_dir']; ?>qr_code.png" class="img-responsive donate-qr">
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <p class="donateAddress">bitcoincash:pzyjepg4rmm8yx8v0sc6svac255ta2md2y9l0edptq</p>
              <button class="donateAddress-btn" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
                Copy
              </button>
            </div>
          </div>
          
          
          <div class="AccountDepositAddress__AddressContainer-eGdoWi dpEOSO Flex-kFpfAw jvBcNs">
            <div class="AccountDepositAddress__Address-AWWOH iodXY Flex-kFpfAw jvBcNs">
              <span class="AccountDepositAddress__StyledText-lklxiu eREHRf Text__Font-QQBaL iLwbvc" color="slateDark">qpeu897t76yjnpppxrma5vn7q5w0muaruc9vd6am7w</span>
            </div>
            <div class="AccountDepositAddress__IconContainer-haHcpp gpuOod Flex-kFpfAw kBmCHF">
              <div class="CopyButton__Container-dMZTx fRcwcJ Flex-kFpfAw ejaNmw">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" class="CopyButton__CopyIcon-fedzrO eJuGCu">
                  <path d="M16 8v8H8v4h12V8h-4zm0-2h6v16H6v-6H0V0h16v6zM2 2v12h12V2H2z"></path>
                </svg>
                <div class="CopyButton__Tick-csYhTY cOJOwE SuccessTick__AnimationContainer-lcUplE flCbFf">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0.5 1 36 36" class="SuccessTick__Tick-kcsWOu kTeOrK"><path d="M11.6 20l4.3 4.2 10.5-10.4">
                    </path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          
          


        </div>
      </div>
      <div class="donateChat">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-push-7 donateChat-imgCol">
              <img src="<?= $config['svg_dir']; ?>donate_transparency.svg" class="img-responsive donateChat-img"></div>
            <div class="col-md-7 col-md-pull-5 donateChat-txtCol">
              <h3 class="donateChat-heading">Transparency</h3>
              <p>The Bitcoin Cash Fund was formed in the BCH Slack group in late 2017. We knew that pushing adoption of Bitcoin Cash would go a lot smoother with some type of organization. We set out to raise a few hundred dollars to make a short video and ended up with a tremendous outpouring of support from the community.</p>
              <p>Since then we incorporated as a non-profit organization and have pulled together a small team of hard-working professionals.</p>
              <a href="<?= $config['base_url']; ?>donate/" class="btn btn-lg donateChat-btn">Join Us!</a>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
