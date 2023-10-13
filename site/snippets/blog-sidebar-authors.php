<?

// get up to three authors for current post
// NOTE: assumes Berman140 author field is blank
foreach($page->authors()->toStructure()->limit(3) as $author):

  // get the author's name from the corresponding person page
  $authorName = $pages->find('about/people/' . $author)->firstname();

  // 1. move from /blog/year/slug to /blog/, then grab all grand children
  // 2. look for fuzzy author field matches
  // 3. filter out inivisible, non-blog posts
  $articles = $page->parent()->parent()->grandchildren()->filterBy('authors', '*=', $author)->visible()->filterBy('template', 'blog')->not($page)->flip();

  // exclude related articles from the same series (because that would be redundant)
  // ...then apply related article limit
  if ($series != '') {
    $articles = $articles->not('series', $series)->limit($limit);
  }
  // apply related article limit
  else {
    $articles = $articles->limit($limit);
  }

?>


<div class="container related">
  <h2 class="gamma">More from <?= $authorName ?>:</h2>

  <ul class="vertical-list u-margin-top-off-children">
    <? foreach($articles as $article):
      snippet('related-article', ['article' => $article]);
    endforeach ?>
  </ul>
</div>


<? endforeach // each author ?>
