<?

// look for page-specific cta, and grab the site-wide cta if none is provided
if($page->cta() != '') {
  $cta = $page->cta();
  $ctaText = $page->ctaText();
  $ctaLink = $pages->find($page->ctaLink())->url();
  $ctaButtonText = $page->CtaButton();
} else {
  $cta = $site->cta();
  $ctaText = $page->ctaText();
  $ctaLink = $pages->find($site->ctaLink())->url();
  $ctaButtonText = $site->CtaButton();
}

?>

<section class="section g-columns u-center u-margin-top-off u-margin-bottom">
  <div class="g-col u-padding-top-off u-padding-bottom-off">
    <div class="cta u-padding-top-xl u-padding-bottom-xl">

      <h2 class="cta-title display"><?= $cta ?></h2>

      <? if ($ctaText != ''): ?>
        <p class="cta-text"><?= $ctaText ?></p>
      <? endif ?>

      <a href="<?= $ctaLink ?>" class="button cta-button"><?= $ctaButtonText ?></a>

    </div><!-- .cta -->
  </div><!-- .g-col -->
</section><!-- .g-columns -->
