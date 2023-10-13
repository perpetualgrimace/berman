<section class="g-columns">
  <div class="g-columns <?= $alignment ?>">
    <div class="article limited-width">
      <?= kirbytext($pages->find('home')->blog()) ?>
      <? snippet('mailchimp-subscribe') ?>
    </div>
  </div>
</section>
