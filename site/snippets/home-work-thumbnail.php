<?php

// image
if ($work->image() != '') {
  $thumbImg = $pages->find('work')->image($work->image());
} else {
  $thumbImg = NULL;
}

// link
if ($work->page() != '') {
  $link = $pages->find('work/' . $work->page());
} else {
  $link = $pages->find('work');
}

?>

<li class="thumb-item home-thumb-item u-center js-filtered-visible">

    <a href="<?= $link ?>" class="thumb-link">
      <div class="thumb-caption">
        <span class="thumb-title display gamma"><?= $work->client() ?></span><?php if ($work->caption() != ''): ?><span class="u-screenreader">: </span><span class="thumb-meta milli"><?= $work->caption() ?></span><?php endif ?>
      </div>
    </a>

    <?php if ($thumbImg != NULL): ?>
      <img class="home-thumb-img thumb-img" data-src="<?= $thumbImg->url() ?>" alt="" width="<?= $thumbImg->width() ?>" height="<?= $thumbImg->height() ?>">
      <noscript>
        <img class="home-thumb-img thumb-img" src="<?= $thumbImg->url() ?>" alt="" width="<?= $thumbImg->width() ?>" height="<?= $thumbImg->height() ?>">
      </noscript>
    <?php endif ?>

    <div class="thumb-underlay"></div>

</li>
