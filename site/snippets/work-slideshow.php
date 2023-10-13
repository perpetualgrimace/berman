<?

// First, check for slides field.
if ($section->slides() != '') {
  $slides = $section->slides()->toStructure();
}
// Otherwise, just grab all the images.
else {
  $slides = $section->images();
}

// set counter at 0
$slideCount = 0;

// set js attribute
$jsDataAttr = 'data-js="work-slideshow"';

?>

<div class="work-slideshow-section u-fullwidth">
  <ul class="work-slideshow-list" <?= $jsDataAttr ?>>

    <? foreach($slides as $slide):
      // increment the counter
      $slideCount++;
      // if using the slides field, use the image function and get a valid url
      if ($section->slides() != '') {
        $imgUrl = $section->image($slide->slide())->url();
      }
      // otherwise, we collected the images through the images function, so just grab the url
      else {
        $imgUrl = $slide->url();
      }
    ?>

      <li class="work-slideshow-item u-margin-top-off">
        <img class="work-slideshow-img" data-src="<?= $imgUrl ?>" alt="" draggable="false">
        <!-- if javascript fails to load, only show the first slide -->
        <? if ($slideCount == 1): ?>
          <noscript>
            <img class="work-slideshow-img" src="<?= $imgUrl ?>" alt="" draggable="false">
          </noscript>
        <? endif ?>
      </li>

    <? endforeach ?>

  </ul><!-- .work-slideshow-list -->
</div><!-- .work-slideshow-section.u-fullwidth -->
