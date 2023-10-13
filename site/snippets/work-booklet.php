<?

// First, check for pages field.
if ($section->pages() != '') {
  $images = $section->pages()->toStructure();
}
// Otherwise, just grab all the images.
else {
  $images = $section->images();
}

// set counter at 0
$slideCount = 0;

// data-attributes for js
$jsDataAttr = 'data-js="booklet-slider-' . $section->idNumber() . '"';
$jsDataAttrNext = 'data-js="booklet-slider-next-' . $section->idNumber() . '"';
$jsDataAttrPrev = 'data-js="booklet-slider-prev-' . $section->idNumber() . '"';

?>

<div class="work-booklet-section section">
  <div class="g-columns u-vertical-center">

    <!-- caption -->
    <article class="booklet-caption g-col g-4 delta">
      <?= kirbytext($section->text()) ?>
    </article>

    <!-- list of pages -->
    <div class="booklet-container g-col g-8 u-margin-bottom-off">

      <!-- trigger bx-slider within its own container, or else it messes up the grid -->
      <ul class="booklet-list" <?= $jsDataAttr ?>>

        <? foreach($images as $image):
          // increment the counter
          $slideCount++;
          // if using the slides field, use the image function and get a valid url
          if ($section->pages() != '') {
            $imgUrl = $section->image($image->page())->url();
          }
          // otherwise, we collected the images through the images function, so just grab the url
          else {
            $imgUrl = $image->url();
          }
        ?>

        <li class="booklet-item u-margin-top-off">
          <a class="booklet-link" href="<?= $imgUrl ?>" data-source="<?= $imgUrl ?>" title="" >
            <img class="booklet-img" data-src="<?= $imgUrl ?>" alt="" draggable="false">
            <!-- if javascript fails to load, only show the first slide -->
            <? if ($slideCount == 1): ?>
              <noscript>
                <img class="booklet-img" src="<?= $imgUrl ?>" alt="" draggable="false">
              </noscript>
            <? endif ?>
          </a>
        </li>

      <? endforeach ?>

      </ul>

      <!-- carousel controls -->
      <ul class="booklet-nextprev-list g-columns inline-list u-margin-top-off">
        <li class="booklet-nextprev-item" <?= $jsDataAttrPrev ?>></li>
        <li class="booklet-nextprev-item" <?= $jsDataAttrNext ?>></li>
      </ul>

    </div>
  </div>
</div>
