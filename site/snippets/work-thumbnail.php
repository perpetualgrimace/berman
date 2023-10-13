<?

// $classes = explode(",", $work->tags());
// $classes = strtr($work->tags(), ",", " ");
// $classes = preg_replace('/\s\s+/', ' ', $classes);

// $tags = str_replace(',', ', ', $work->tags());
// $tags = preg_replace('/\s\s+/', ' ', $tags);

if ($work->thumbImg() != '') {
  $thumbImg = $work->image($work->thumbImg());
} elseif ($work->image($site->thumbImg())) {
  $thumbImg = $work->image($site->thumbImg());
}

?>

<li class="thumb-item u-center js-filtered-visible u-margin-top-off u-margin-top-off-children">

    <a href="<?= $work->url() ?>" class="thumb-link">
      <div class="thumb-caption">
        <span class="thumb-title display gamma"><?= $work->title() ?></span><span class="u-screenreader">: </span><span class="thumb-meta milli"><?= $work->headline() ?></span>
      </div>
    </a>

    <img class="thumb-img" data-src="<?= $thumbImg->url() ?>" alt="" width="<?= $thumbImg->width() ?>" height="<?= $thumbImg->height() ?>">
    <noscript>
      <img class="thumb-img" src="<?= $thumbImg->url() ?>" alt="" width="<?= $thumbImg->width() ?>" height="<?= $thumbImg->height() ?>">
    </noscript>

    <div class="thumb-underlay"></div>

</li>
