<? $children = $page->children()->visible(); ?>


<section class="parent-container section u-padding-bottom-off">
  <div class="g-columns u-left">

  <article class="parent-article g-col g-9">
    <?= kirbytext($page->text()) ?>
  </article>

  <aside class="parent-sidebar g-col g-3">
    <? if ($page->sidebarTitle() != ''): ?>
      <h2 class="gamma"><?= $page->sidebarTitle() ?></h2>
    <? endif ?>

    <ul class="vertical-list u-margin-top-sm">
      <? foreach($children as $child): ?>
        <li>
          <a href="<?= $child->url() ?>" class="milli"><?= $child->title() ?></a>
        </li>
      <? endforeach ?>
    </ul>
  </aside>

  </div>
</section>
