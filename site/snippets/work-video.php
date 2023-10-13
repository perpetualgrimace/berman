<?

// get the list of youtube videos
$videos = $section->videoList()->toStructure();

// data-attributes for js
$jsDataAttr = 'data-js="video-slider"';
$jsDataAttrNext = 'data-js="video-slider-next"';
$jsDataAttrPrev = 'data-js="video-slider-prev"';

?>


<section class="work-video-section section">
  <div class="video-container g-columns u-vertical-center">

    <!-- caption -->
    <div class="video-caption g-col g-4 delta">
      <?= kirbytext($section->text()) ?>
    </div><!-- list of pages -->

    <!-- video container -->
    <div class="video-container g-col g-8 u-margin-bottom-off u-padding-bottom-sm">

      <!-- multiple videos -->
      <? if ($videos->count() > 1): ?>
        <!-- trigger bx-slider within its own container, or else it messes up the grid -->
        <div class="video-list slider u-margin-top-off-children" <?= $jsDataAttr ?>>
          <? foreach($videos as $video) {
            snippet('work-video-figure', [
              'video' => $video
             ]);
          } ?>
        </div>

        <!-- carousel controls -->
        <ul class="video-pager-list g-columns inline-list u-margin-top-off u-margin-top-off-children">
          <li class="video-pager-item video-pager-item-left" <?= $jsDataAttrPrev ?>></li>
          <li class="video-pager-item video-pager-item-right" <?= $jsDataAttrNext ?>></li>
        </ul>

      <!-- single video -->
      <? else:
        snippet('work-video-figure', [
          'video' => $videos->first()
        ]);
      endif; ?>

    </div>
  </div>
</section>
