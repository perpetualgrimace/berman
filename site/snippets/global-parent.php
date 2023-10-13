<?php $children = $page->children()->listed(); ?>


<section class="parent-container section u-padding-bottom-off">
  <div class="g-columns u-left">

  <article class="parent-article g-col g-9">
    <?= $page->text()->kirbytext() ?>
  </article>

  <aside class="parent-sidebar g-col g-3">
    <?php if ($page->sidebarTitle() != ''): ?>
      <h2 class="gamma"><?= $page->sidebarTitle() ?></h2>
    <?php endif ?>

    <ul class="vertical-list u-margin-top-sm">
      <?php foreach($children as $child): ?>
        <li>
          <a href="<?= $child->url() ?>" class="milli"><?= $child->title() ?></a>
        </li>
      <?php endforeach ?>
    </ul>
  </aside>

  </div>
</section>
