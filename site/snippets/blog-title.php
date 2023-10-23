<?php

// check to see if an article argument has been passed
if (isset($article)) { $article = $article; }
else { $article = $page; }

if (isset($article)):

  // the article is in a series
  if ($article->series() != ''): ?>

    <div class="series-label gamma">
      <?= $pages->find('blog/series/' . $article->series());
      if ($article->seriesNum() != 'unnumbered' && $article->intendedTemplate() != 'blog-berman140') {
        echo ', #' . $article->seriesNum();
      } ?>:</div>

  <?php endif ?>

  <?= $article->title() // the article title itself ?>

<?php endif ?>