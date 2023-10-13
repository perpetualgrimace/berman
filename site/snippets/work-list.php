<?

// get all work pages
$works = $pages->find('work')->children()->visible();

// limit works on home page
if ($page->isHomePage()) {
  $works = $works->limit(12);
}

?>

<section class="<? e($page->isHomePage(), 'section ', 'u-margin-top ') ?>work-grid g-columns u-left-center">
  <div class="g-col">

    <!-- title text -->
    <? if ($page->isHomePage()): ?>
      <h2 class="display alpha u-margin-bottom"><span class="u-screenreader">Our </span>Work</h2>
    <? endif ?>

    <!-- the grid -->
    <ul class="thumb-list<? e(!$page->isHomePage(), ' u-padding-top') ?>">
      <? foreach ($works as $work) {
        snippet('work-thumbnail', ['work' => $work]);
      } ?>
    </ul>

    <!-- more -->
    <? if ($page->isHomePage()): ?>
      <div class="g-columns u-center">
        <a href="<?= $site->url() ?>/work#more" class="button u-margin-top-lg u-margin-bottom">More Work</a>
      </div>
    <? endif ?>

  </div>
</section>
