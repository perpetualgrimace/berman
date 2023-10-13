<?

// if a source is specified, pull that one
if(isset($source) && $source != '') {
  $quote = $pages->find('quotes/' . $source);

// otherwise, pull a random one
} else {
  $quote = $pages->find('quotes')->children()->shuffle()->first();
}

// check for image
if($quote->quoteImg() != '') {
  $quoteImg = $quote->image($quote->quoteImg())->url();
} else {
  $quoteImg = NULL;
}

?>

<div class="quote-container quote-<?= $quote->slug() ?> u-fullwidth">

  <div class="g-columns u-padding-top-xl u-padding-bottom-xl">
    <div class="g-col g-8 u-margins-auto">
      <blockquote class="quote-blockquote">
        <p class="quote-text beta"><?= $quote->text() ?></p>
        <p class="quote-attribution">&mdash;<?= $quote->title() ?></p>
      </blockquote>
      </div>
    </div>

  <? if ($quoteImg != NULL): ?>
    <div class="quote-img u-margin-top-off" data-bg-src="<?= $quoteImg ?>"></div>
    <noscript>
      <div class="quote-img u-margin-top-off" style="background-image: url(<?= $quoteImg ?>)"></div>
    </noscript>
  <? endif ?>

</div>
