<?

// check to see if an article argument has been passed
if (isset($article)) { $article = $article; }
else { $article = $page; }

// the article is in a series
if ($article->series() != ''): ?>

  <div class="series-label gamma">
    <?= $pages->find('blog/series/' . $article->series())->title();
    if ($article->seriesNum() != 'unnumbered' && $article->intendedTemplate() != 'blog-berman140') {
      echo ', #' . $article->seriesNum();
    } ?>:</div>

<? endif ?>

<?= $article->title() // the article title itself ?>
