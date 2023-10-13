<section class="section g-columns u-center u-margin-top-off">
  <div class="g-col u-padding-top-off u-padding-bottom-off">
    <div class="cta u-padding-top-xl u-padding-bottom-xl">

      <h2 class="display">Want <?= $page->firstname() ?> to provide a quote, guest blog, or speak at your next event? </h2>
      <a href="mailto:<?= $pages->find('contact')->email() ?>?subject=attn: <?= $page->title() ?>" class="button large">Ask <? e($page->sex() == 'male', 'him', 'her') ?> now</a>

    </div><!-- .cta -->
  </div><!-- .g-col -->
</section><!-- .g-columns -->
