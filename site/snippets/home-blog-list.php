<?php

$thisYear = $pages->find('blog')->children()->not('series')->last();
$lastYear = $pages->find('blog')->children()->not('series')->slice(1, 2);

$thisYearArticles = $thisYear->children()->listed()->flip();
$lastYearArticles = $lastYear->children()->listed()->flip();

if ($thisYearArticles->count() > 5) {
  $articles = $thisYearArticles->limit(6);
} else {
  $articles = $thisYearArticles->merge($lastYearArticles)->limit(6);
}

?>

<section class="section u-padding-bottom-off home-blog-list">
  <div class="g-columns">
    <div class="g-col">

    <h2 class="display alpha"><span class="u-screenreader">Our blog: </span><?= $pages->find('blog')->headline() ?></h2>

    <div class="heading gamma u-margin-top u-margin-bottom-lg" role="presentation">The Berman blog</div>

    <ul class="blog-list">
      <?php foreach($articles as $article) {
        snippet('blog-card', ['article' => $article]);
      } ?>
    </ul>

    <a href="<?= $site->url() ?>/blog" class="button u-margin-top-off u-margin-bottom-off">More articles</a>

  </div>
  </div>
</section>
