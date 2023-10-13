<?

// check to see if an image has been specified
if ($section->background() != '') {
  $img = $section->image($section->background());
// if not, look for the first image in the folder
} elseif ($section->image()) {
  $img = $section->image();
// no images found
} else {
  $img = NULL;
}

?>

<section class="work-background-section u-fullwidth">
  <? if ($img != NULL): ?>
    <img class="work-background-img" data-src="<?= $img->url() ?>" alt="" draggable="false" width="<?= $img->width() ?>" height="<?= $img->height() ?>">
    <noscript>
      <img class="work-background-img" src="<?= $img->url() ?>" alt="" draggable="false" width="<?= $img->width() ?>" height="<?= $img->height() ?>">
    </noscript>
  <? else: ?>
    <div class="g-columns">
      <h2 class="u-padding">Error: No image found for <?= $section->title() ?></h2>
    </div>
  <? endif ?>
</section>
