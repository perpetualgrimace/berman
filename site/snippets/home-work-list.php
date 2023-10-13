<?

// get all work pages
$works = $pages->find('work')->featuredWork()->toStructure();

?>

<section class="g-columns work-grid home-work-grid thumbnails">

  <!-- title text -->
  <div class="g-columns u-left-center u-margin-bottom">
    <h2 class="display alpha"><span class="u-screenreader">Our </span>Work</h2>
  </div>

  <!-- the grid -->
  <ul class="thumb-list home-thumb-list g-columns u-margin-top-off-children">
    <? foreach ($works as $work) {
      snippet('home-work-thumbnail', ['work' => $work]);
    } ?>
  </ul>

  <!-- more -->
  <div class="g-columns u-center u-margin-top">
    <a href="<?= $site->url() ?>/work#more" class="button">More Work</a>
  </div>

</section>
