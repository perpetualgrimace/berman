<?

// get siblings
$siblings = $page->siblings($self = false)->visible();

// get sidebar title
if($page->sidebarTitle() != '') {
  $sidebarTitle = $page->sidebarTitle();
// career page sidebar title
} elseif($page->sidebarTitle() != '' && $page->parent()->slug() == 'careers') {
  $sidebarTitle = 'Other positions:';
// default sidebar title
} else {
  $sidebarTitle = 'Related:';
}

?>


<section class="sibling-container section u-padding-bottom-off">
  <div class="g-columns u-left">

    <article class="sibling-article g-col g-9">
      <?= kirbytext($page->text()) ?>
    </article>

    <? if ($siblings != ''): ?>
      <aside class="parent-sidebar g-col g-3">

          <h2 class="gamma"><?= $sidebarTitle ?></h2>

          <ul class="vertical-list u-margin-top-sm">
            <? foreach($siblings as $sibling): ?>
              <li>
                <a href="<?= $sibling->url() ?>" class="milli"><?= $sibling->title() ?></a>
              </li>
            <? endforeach ?>
          </ul>
      </aside>
    <? endif ?>

  </div>
</section>
