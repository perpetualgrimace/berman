<?

// the next page will be the next project,
// unless there are no older projects, in which case it will be the latest project
if ($page->hasNextVisible()) {
  $next = $page->nextVisible();
} else {
  $next = $page->siblings()->visible()->first();
}

// next image
if ($next->nextImg() != '') {
  $nextImg = $next->image($next->nextImg());
} elseif ($next->image($site->nextImg())) {
  $nextImg = $next->image($site->nextImg());
} elseif ($next->heroImg() != '') {
  $nextImg = $next->image($next->heroImg());
} elseif ($next->image($site->heroImg())) {
  $nextImg = $next->image($site->heroImg());
} else {
  $nextImg = NULL;
}

?>

<!-- next up text -->
<section class="next-up g-columns">
  <div class="g-col" role="presentation">
    <span class="heading">Next up: </span>
  </div>
</section>

<!-- next link -->
<section class="u-fullwidth next g-columns no-padding u-margin-bottom-off">

  <!-- the link -->
   <a href="<?= $next->url() ?>" class="next-link g-container u-padding-top-xl u-padding-bottom-xl">
     <div class="g-col u-margin-top u-margin-bottom">
       <h2 class="next-title work-next-title display"><span class="u-screenreader">Next up: </span>
         <?= $next->title() ?>
       </h2>
     </div>
   </a>

   <!-- background image -->
   <? if($nextImg != NULL): ?>
     <div class="next-img u-margin-top-off" data-bg-src="<?= $nextImg->url() ?>"></div>
     <noscript>
        <div class="next-img u-margin-top-off" style="background-image: url(<?= $nextImg->url() ?>);"></div>
     </noscript>
   <? endif ?>

</section>
