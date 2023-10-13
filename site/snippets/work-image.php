<?

// check for specified image
if ($section->img() != '') {
  $img = $section->image($section->img());
// pull the first image
} elseif ($section->image()) {
  $img = $section->image();
// no image found
} else {
  $img = NULL;
}

?>

<article class="work-image-section section">
  <div class="u-vertical-center g-columns">

    <!-- caption -->
    <!-- NOTE: float doesn't work because of display:flex, but I'm leaving it here as a flex/order fallback -->
    <div class="work-image-caption g-col g-6 delta u-float-right">
      <?= kirbytext($section->text()) ?>
    </div>

    <!-- image -->
    <div class="work-image-container g-col g-6">

      <? if($img != NULL): ?>
        <img class="work-image-img" data-src="<?= $img->url() ?>" alt="" draggable="false">
        <noscript>
          <img class="work-image-img" src="<?= $img->url() ?>" alt="" draggable="false">
        </noscript>
      <? endif ?>

    </div>

  </div>
</article>
