<?

// check for svg logo first
if ($section->image($section->logoImgSvg()) || $section->image('logo.svg')) {
  // explicit svg file set
  if ($section->image($section->logoImgSvg())) { $mainLogo = $section->image($section->logoImgSvg()); }
  // logo.svg found
  else { $mainLogo = $section->image('logo.svg'); }

  // check for fallback png logo
  if ($section->image($section->logoImgPng()) || $section->image('logo.png')) {
    // explicit png file set
    if ($section->image($section->logoImgPng())) { $fallbackLogo = $section->image($section->logoImgPng()); }
    // logo.png found
    else { $fallbackLogo = $section->image('logo.png'); }
  // no fallback logo found
  } else {
    $fallbackLogo = NULL;
  }

// check for png logo second
} elseif ($section->image($section->logoImgPng()) || $section->image('logo.png')) {
  // explicit png file set
  if ($section->image($section->logoImgPng())) { $mainLogo = $section->image($section->logoImgPng()); }
  // logo.png found
  else { $mainLogo = $section->image('logo.png'); }
  // no fallback
  $fallbackLogo = NULL;

// neither svg or png logo is found
} else {
  $mainLogo = NULL;
}

?>

<section class="work-logo-section section">
   <div class="g-columns">
     <div class="work-logo-container g-col g-10 u-margins-auto">

     <? if($mainLogo != NULL): ?>

         <img class="work-logo-img" src="<?= $mainLogo->url() ?>"
           <? if($fallbackLogo != NULL): ?>
             onerror="this.src=<?= $fallbackLogo->url() ?>"
           <? endif ?>
         alt="" draggable="false"><span class="u-screenreader"><?= $section->title() ?></span>

     <? else: ?>

       <h3 class="work-headline display">Error: no logo selected</h3>

     <? endif ?>

      <div class="work-logo-caption delta"><?= kirbytext($section->text()) ?></div>

    </div><!-- .work-logo-container.g-col -->
  </div><!-- .g-columns -->
</section><!-- .work-logo-section -->
