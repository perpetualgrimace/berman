<?php

$authors = $article->authors()->toStructure();
$authorCount = 0; // init

// dump($authors);

// get number of authors
foreach ($authors as $author) {
  $authorCount++;
}
// one author
if ($authorCount == 1 && $article->template() != 'blog-berman140') {
  $author = $pages->find('about/people/' . $article->authors()->toStructure());
  // $authorClass = $author->slug(); // TODO: fix
  $authorClass = "jberman";
  // $authorLink = $pages->find('blog')->url() . '#' . $author->slug();
  // $authorLink = $author->url();
  // $authorName = $author->title();
  $authorName = "Jeff Berman"; // TODO: fix
// multiple authors
} else {
  $authorClass = 'berman';
  // $authorLink = $pages->find('blog')->url() . '#berman';
  // $authorLink = $pages->find('about/people')->url();
  $authorName = 'Berman Team';
}

// author link
if ($page == 'blog') {
  $authorLink = '#' . $authorClass;
} else {
  $authorLink = $pages->find('blog')->url() . '#' . $authorClass;
}

// series link
if ($article->series() != '') {
  $seriesClass = $article->series()->slug();
  $seriesTitle = $pages->find('blog/series/' . $article->series())->title($article->series()); // TODO: fix
  // $seriesTitle = "series title";

  if ($page == 'blog') {
    $seriesLink = '#' . $seriesClass;
  } else {
    $seriesLink = $pages->find('blog')->url() . '#' . $seriesClass;
  }
}



// get the thumbnail image
if ($article->thumbImg() != '') {
  $thumbImg = $article->image($article->thumbImg());
} elseif ($article->image($site->thumbImg())) {
  $thumbImg = $article->image($site->thumbImg());
} elseif (!$article->image($article->thumbImg()) && !$article->image($site->thumbImg()) && $article->template() == 'blog-berman140') {
  $thumbImg = $pages->find('blog')->image($pages->find('blog')->berman140Thumb());
} else {
  $thumbImg = NULL;
}

?>

<li class="card blog-card <?= $authorClass ?>" data-author="<?= $authorClass ?>" data-series="<?= $article->series() ?>">

    <a href="<?= $article->url() ?>" class="card-thumb blog-card-thumb" tabindex="-1" aria-hidden="true">
      <?php if ($thumbImg != NULL): ?>
        <img class="card-img" data-src="<?= $thumbImg->url() ?>" alt="" draggable="false">
        <noscript>
          <img class="card-img" src="<?= $thumbImg->url() ?>" alt="" draggable="false">
        </noscript>
      <?php endif ?>
    </a>

    <div class="card-caption">
       <a class="card-title display gamma" href="<?= $article->url() ?>"><?= $article->title() ?></a>
       <p class="card-meta u-margin-top-sm">Written by <a class="card-meta-link u-underline-off" href="<?= $authorLink ?>"><?php snippet('icon-author') ?> <span class="u-underline"><?= $authorName ?></span></a>
       <?php if($article->series() != ''): ?> in <a class="card-meta-link card-meta-series-link u-underline-off" href="<?= $seriesLink ?>"> <?php snippet('icon-series') ?> <span class="u-underline"><?= $seriesTitle ?></span></a><?php endif ?></p>
    </div>

</li>
