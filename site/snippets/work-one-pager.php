<?

// First, check for pages field.
if ($section->pages() != '') {
  $images = $section->pages()->toStructure();
}
// Otherwise, just grab all the images.
else {
  $images = $section->images()->limit(3);
}

// assign the appropriate grid class
$imgCount = 'g-' . (12 / $images->count()); // divide 12 columns by number of images to display

// set js attribute
$jsDataAttr = 'data-js="one-pager-' . $section->idNumber() . '"';

?>

<article class="work-one-pager-section section">
  <div class="u-vertical-center g-columns">

    <!-- caption -->
    <div class="one-pager-caption g-col g-4 delta">
      <?= kirbytext($section->text()) ?>
    </div>

    <!-- group of images -->
    <div class="one-pager-container g-col g-8 g-columns g-constant u-margin-bottom-off u-margin-top-off-children" <?= $jsDataAttr ?>>

      <? foreach($images as $image):
        // if using the slides field, use the image function and get a valid url
        if ($section->pages() != '') {
          $imgUrl = $section->image($image->page())->url();
        }
        // otherwise, we collected the images through the images function, so just grab the url
        else {
          $imgUrl = $image->url();
        }
      ?>

        <a class="one-pager-link g-col <?= $imgCount ?>" href="<?= $imgUrl ?>" data-source="<?= $imgUrl ?>" title="">
          <img class="one-pager-img" data-src="<?= $imgUrl ?>" alt="" draggable="false">
          <noscript>
            <img class="one-pager-img" src="<?= $imgUrl ?>" alt="" draggable="false">
          </noscript>
        </a>

      <? endforeach ?>

    </div><!-- .one-pager-container -->

  </div><!-- .g-columns -->
</article><!-- .one-pager -->
