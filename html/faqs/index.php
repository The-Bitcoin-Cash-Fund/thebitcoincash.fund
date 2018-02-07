<?php $config = include('../_config.php'); ?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => 'Frequently Asked Questions',
      'description' => '',
      'url'         => '',
      'og_img'      => 'https://thebitcoincash.fund/assets/img/bcf_opengraph.jpg'
    ]; ?>
    <?php include($config['include_dir'] . 'head.php'); ?>
    <title><?= $headInfo['title'] . $config['title_post'] ?></title>
    <script>
      $().ready(function() {
        $('.faqs-q').each(function() {
          var $this = $(this),
              state = false,
              answer = $this.next('.faqs-a').slideUp();
          $this.click(function() {
            state = !state;
            answer.slideToggle(state);
            $this.toggleClass('active', state);
          });
        });
      });
    </script>
  </head>
  <body>
    <?php include($config['include_dir'] . 'nav.php'); ?>
    <div class="page-wrap">
      <div class="container">
        <h2>Frequently Asked Questions</h2>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 faqs-wrapper">
            <!-- -->
            <h2 class="faqs-sectionHeading">General</h2>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Why is the Bitcoin Cash Fund needed?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed lorem non dolor posuere dictum.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Where does the BCF get its funding from?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Aliquam porta ligula posuere volutpat mattis. Sed quis euismod ante, vel vulputate est. Cras maximus posuere efficitur. Curabitur lacinia id urna quis ultrices.</p>
            </div>
            <!-- -->
            <h2 class="faqs-sectionHeading">Proposals</h2>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>How do you decide whether a proposal will be funded or not?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ante, varius id tortor sit amet, pulvinar congue nulla.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>What is the maximum budget for a project?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Curabitur lacinia id urna quis ultrices.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>My business needs funding, can you fund us?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Duis consequat consectetur tempus. Aliquam porta ligula posuere volutpat mattis. Sed quis euismod ante, vel vulputate est.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>How long will you take to respond to a proposal?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Sed quis euismod ante, vel vulputate est. Cras maximus posuere efficitur. Curabitur lacinia id urna quis ultrices.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>What is the process once a proposal has been accepted?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <!-- -->
            <h2 class="faqs-sectionHeading">Volunteer</h2>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>How can I help?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Aliquam porta ligula posuere volutpat mattis. Sed quis euismod ante, vel vulputate est. Cras maximus posuere efficitur.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Why should I volunteer my time?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Nunc sed lorem non dolor posuere dictum. Sed nulla ante, varius id tortor sit amet, pulvinar congue nulla.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Can't I get paid for helping?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Varius id tortor sit amet, pulvinar congue nulla. Duis consequat consectetur tempus. Cras maximus posuere efficitur. Curabitur lacinia id urna quis ultrices.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>What if I don't have any technical skills?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Sed nulla ante, varius id tortor sit amet, pulvinar congue nulla. Duis consequat consectetur tempus. Sed quis euismod ante, vel vulputate est. Cras maximus posuere efficitur.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Don't you only need developers?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>I don't have much free time but I would like to help. What can I do?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Nunc sed lorem non dolor posuere dictum. Sed nulla ante, varius id tortor sit amet, pulvinar congue nulla.</p>
            </div>
            <!-- -->
            <h2 class="faqs-sectionHeading">Donations</h2>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>How are donations being spent?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed lorem non dolor posuere dictum. Sed nulla ante, varius id tortor sit amet, pulvinar congue nulla. Duis consequat consectetur tempus.</p>
            </div>
            <!-- -->
            <h2 class="faqs-sectionHeading">Bitcoin Cash</h2>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>What is Bitcoin Cash?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Check out this short video!</p>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jduVN643Prc" allowfullscreen=""></iframe>
              </div>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Is Bitcoin Cash the Same as Bitcoin (Core)?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Bitcoin Cash and Bitcoin Core were the same blockchain up until a specific block on August 1st 2017. At this point the network split into two separate networks commonly referred to as Bitcoin Cash and Bitcoin Core.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Why did the Bitcoin network split?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>There was a large disagreement within the Bitcoin community on what was the best method to grow the capacity of the network to allow more users. The disagreement ended in a split in the community and network.</p>
              <p>Bitcoin Cash follows the original scaling design for Bitcoin explained by Satoshi Nakamoto in 2008. This scaling design is to increase the capacity of the network as needed. Bitcoin Core uses a new, untested and incomplete scaling method of moving transactions off the blockchain, and only use the blockchain for settlement transaction by large institutions such as banks.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>What is the difference between Bitcoin Cash and Bitcoin (Core)?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Bitcoin Cash is a very cheap and reliable money system like Cash. Transactions cost less than 1c and are secured in the network in 10 minutes on average. Bitcoin Core transactions are expensive due to the limited capacity of the network, and can cost upwards of $50. The congestion on the Bitcoin Core network also means that transactions speeds are unreliable unless a very high fee is paid.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Where can I find out more about Bitcoin Cash?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>We suggest visiting <a href="http://www.bitcoincash.org/" target="_blank">bitcoincash.org</a> to learn more.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Where can I buy some Bitcoin Cash?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>There are numerous places to buy Bitcoin Cash all around the world. You can buy Bitcoin Cash directly at <a href="http://joinbitcoin.cash/user" target="_blank">joinbitcoin.cash/user</a></p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Where can I find the Bitcoin Cash community?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>The Bitcoin Cash community is extremely diverse and can be found many locations all around the world, including at meetups which can be found at <a href="http://joinbitcoin.cash/meetups" target="_blank">joinbitcoin.cash/meetups</a> and online at <a href="http://www.reddit.com/r/btc" target="_blank">reddit.com/r/btc</a>, <a href="http://chat.thebitcoincash.fund" target="_blank">chat.thebitcoincash.fund</a> and <a href="http://joinbitcoin.cash/community" target="_blank">joinbitcoin.cash/community</a>.</p>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
