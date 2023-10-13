<?

// check for svg logo first
if ($page->image($page->logoImgSvg()) || $page->image('logo.svg')) {
  // explicit svg file set
  if ($page->image($page->logoImgSvg())) { $mainLogo = $page->image($page->logoImgSvg()); }
  // logo.svg found
  else { $mainLogo = $page->image('logo.svg'); }

  // check for fallback png logo
  if ($page->image($page->logoImgPng()) || $page->image('logo.png')) {
    // explicit png file set
    if ($page->image($page->logoImgPng())) { $fallbackLogo = $page->image($page->logoImgPng()); }
    // logo.png found
    else { $fallbackLogo = $page->image('logo.png'); }
  // no fallback logo found
  } else {
    $fallbackLogo = NULL;
  }

// check for png logo second
} elseif ($page->image($page->logoImgPng()) || $page->image('logo.png')) {
  // explicit png file set
  if ($page->image($page->logoImgPng())) { $mainLogo = $page->image($page->logoImgPng()); }
  // logo.png found
  else { $mainLogo = $page->image('logo.png'); }
  // no fallback
  $fallbackLogo = NULL;

// neither svg or png logo is found
} else {
  $mainLogo = NULL;
}

?>

<header class="work-header header t-dark" role="banner">
  <div class="g-container">
    <div class="g-columns work-headline-container">
      <div class="g-col">

          <? if($mainLogo != NULL): ?>

            <h1 class="work-headline <?= $page->slug() . '-headline' ?>">
              <img class="work-headline-logo" src="<?= $mainLogo->url() ?>"
                <? if($fallbackLogo != NULL): ?>
                  onerror="this.src=<?= $fallbackLogo->url() ?>"
                <? endif ?>
              alt="" draggable="false"><span class="u-screenreader"><?= $page->title() ?></span>
            </h1>

          <? else: ?>

            <h1 class="work-headline display"><?= $page->title() ?></h1>

          <? endif ?>

      </div><!-- .g-col -->
    </div><!-- .g-columns -->
  </div><!-- .g-container -->

  <!-- hero image -->
  <? snippet('work-header-hero') ?>

</header>

<div class="g-container u-padding-bottom-off u-padding-top-off">
