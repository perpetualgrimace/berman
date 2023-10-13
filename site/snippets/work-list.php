<?php

// get all work pages
$works = $pages->find('work')->children()->visible();

// limit works on home page
if ($page->isHomePage()) {
  $works = $works->limit(12);
}

?>

<section class="<?php e($page->isHomePage(), 'section ', 'u-margin-top ') ?>work-grid g-columns u-left-center">
  <div class="g-col">

    <!-- title text -->
    <?php if ($page->isHomePage()): ?>
      <h2 class="display alpha u-margin-bottom"><span class="u-screenreader">Our </span>Work</h2>
    <?php endif ?>

    <!-- the grid -->
    <ul class="thumb-list<?php e(!$page->isHomePage(), ' u-padding-top') ?>">
      <?php foreach ($works as $work) {
        snippet('work-thumbnail', ['work' => $work]);
      } ?>
    </ul>

    <!-- more -->
    <?php if ($page->isHomePage()): ?>
      <div class="g-columns u-center">
        <a href="<?= $site->url() ?>/work#more" class="button u-margin-top-lg u-margin-bottom">More Work</a>
      </div>
    <?php endif ?>

  </div>
</section>
