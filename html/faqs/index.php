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
              <p><span class="faqs-qa">A</span>Bitcoin Cash is like a huge distributed organisation with no CEO. Like any organisation with a product marketing and sales is needed to compete in the market. In the history of Bitcoin and Bitcoin Cash, there has never been an entity dedicated specifically to the adoption and awareness of the currency through marketing and sales activities.</p>
              <p>Marketing is important. Even if your product or service is mind-blowingly awesome, if no one knows it exists, then it will never succeed.</p>
              <p>The BCF exists to take on this role within the Bitcoin Cash ecosystem.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Where does the BCF get its funding from?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>The BCF has a diverse set of revenue sources including private donations from the community, sponsorship from key Bitcoin Cash businesses, and sales of merchandise.</p>
            </div>
            
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Where is the Bitcoin Cash Fund based?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>We are a global organisation. Our team is distributed all across the globe and we work remotely together through the internet. The organisation was founded on the Isle of Man.</p>
            </div>
            <!-- -->
            <h2 class="faqs-sectionHeading">Proposals</h2>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>How do you decide whether a proposal will be funded or not?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>We use a standard process for evaluating each proposal on a case-by-case basis. The standard by which we evaluate projects can be found at <a href="https://github.com/The-Bitcoin-Cash-Fund/Docs/blob/master/FPR-Eval-Spec.md" target="_blank">https://github.com/The-Bitcoin-Cash-Fund/Docs/blob/master/FPR-Eval-Spec.md</a></p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>What is the maximum budget for a project?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>There is no specifically defined maximum budget for a project. Each project is evaluated on a case-by-case basis. How trustworthy the person/team requesting the funding plays a large role in how much we will be willing to fund a project. Projects typically request around $1000 in BCH on average.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>My business needs funding, can you fund us?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>We cannot fund a for-profit business for the benefit of that business. We can only fund profit projects that do not have a profit motive. That does not mean that we will not pay for services provided. For example we would potentially fund a project to create an educational video on Bitcoin Cash, even if it was made by a for-profit business. We would not provide funding for a business because the business needs funding.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>How long will you take to respond to a proposal?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>We aim to respond within 48 hours. The best thing to do after (or before) you submit a proposal is to come and speak to us at <a href="https://chat.thebitcoincash.fund" target="_blank">https://chat.thebitcoincash.fund</a> and tell us more about your ideas.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>What is the process once a proposal has been accepted?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Once a proposal has been accepted, we will notify the project leader of this fact. If funding is needed immediately (not typically the case) then we will arrange payments to be made.</p>
            </div>

            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>When will the cost of the project be funded after a proposal has been accepted?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Typically the cost will be funded after the project has been completed. In cases where certain costs need to be covered upfront during the duration of the project, a receipt for this cost must be provided to us, and then we will be able to make payment for this specific cost.</p>
            </div>

            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Can I be paid for my time spent on a project?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>We are willing to cover the cost of time spent on a project at a reasonable market rate, but we require that some time is volunteered to the project. We will evaluate how much volunteered time is reasonable on a case-by-case basis.</p>
              <p>Obviously, we very much appreciate any volunteered time, as it means our resources can stretch further to drive further Bitcoin Cash adoption and awareness.</p>
            </div>
            <!-- -->
            <h2 class="faqs-sectionHeading">Volunteer</h2>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>How can I help?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>There are lots of ways you can help. The first thing to do is go to <a href="<?= $config['base_url']; ?>volunteer/">the volunteer page</a> and submit the form there to help us know a bit about yourself so we can better answer this question.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Why should I volunteer my time?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>The BCF is a non-profit organisation with the sole purpose of increasing adoption and awareness of Bitcoin Cash. All of our resources go towards achieving this. Every bit of volunteered time people offer to us allows us to stretch our resources even further and do even more.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Can't I get paid for helping?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Depending on what you are doing, this is certainly possible. We suggest reading some of the Q&amp;A’s above to learn about the project proposals. The BCF does not exist to provide jobs to people, but if you have a great idea for something to work on, then we may be able to subsidise some of this cost. We always appreciate volunteered time though, as this allows us to stretch our resources further.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>What if I don't have any technical skills?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Not every project requires highly skilled people. Sometimes we just need boots on the ground. Hosting a meetup is also a great way of helping Bitcoin Cash.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Don't you only need developers?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Boosting Bitcoin Cash adoption will need people with all different types of skill-sets. Bitcoin Cash isn’t just a technology, it is also a social and economic system. This means people from all walks of life can get involved.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>I don't have much free time but I would like to help. What can I do?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>If you have the funds available, the BCF always appreciates donations to help us drive Bitcoin Cash adoption. Our funding address can be found on <a href="<?= $config['base_url']; ?>donate/">the donate page</a>. Another things that really helps us is following our social media accounts, including Twitter and Facebook, and liking and retweeting our posts. This helps spread the word about Bitcoin Cash.</p>
            </div>
            <!-- -->
            <h2 class="faqs-sectionHeading">Donations</h2>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>How are donations being spent?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Our donation address can be found on <a href="<?= $config['base_url']; ?>donate/">the donate page</a>. Currently we only accept Bitcoin Cash donations.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>How much should I donate?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>We appreciate donations of any amount. People send us donations from $1 in BCH to many thousands of dollars in BCH.</p>
              <p>We ask that if you intend to send us a donation of over $1000 in value, that you get in touch with us first.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>How are donations being spent?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Making sure that donations are spent in a financial prudent and productive way is extremely important to us. Donations, like the rest of our revenue, are spent in four main areas.</p>
              <ul>
                <li>Funding community projects.</li>
                <li>Funding community events, including meetups around the globe.</li>
                <li>Funding internal marketing projects for Bitcoin Cash.</li>
                <li>Funding the running of the BCF.</li>
              </ul>
              <p>We also make sure that there is some surplus funds leftover from our revenue each month, to make sure we are able to build up a balance that can ensure the BCF’s long-term sustainability.</p>
              <p>All funds of the BCF are currently kept as Bitcoin Cash.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Can I claim the donation against my taxes?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>We are a non-profit, but currently this is not possible. We are looking into it though.</p>
            </div>
            <div class="faqs-q">
              <p><span class="faqs-qa">Q</span>Can I donate in my local currency?</p>
            </div>
            <div class="faqs-a">
              <p><span class="faqs-qa">A</span>Currently we only accept donations in Bitcoin Cash. We may look into the possibility of accepting fiat donations in the future.</p>
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
