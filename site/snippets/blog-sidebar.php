<?

// variables
$limit   = 5;
$series  = relatedpages($Options = ['searchField' => 'Series', 'baseURL' => 'blog'])->flip()->limit($limit);
$authors = pages($page->authors()->toStructure());


// in a series
if ($series != '' OR $page->intendedTemplate() == 'blog-berman140') {
  snippet('blog-sidebar-series', [
    'series' => $series
  ]);
}

// more posts by the author(s)
snippet('blog-sidebar-authors', [
  'limit'   => $limit,
  'series'  => $series,
  'authors' => $authors
]);


/* unused features
$related_primary = relatedpages($Options = ['searchField' => 'primary_topic', 'startURI' => 'blog']);
$related_secondary = relatedpages($Options = ['searchField' => 'secondary_topic', 'startURI' => 'blog']);

// manual related pages
elseif($page->related_manual() != '') {
  $articles = $page->related_manual()->toStructure();
  snippet('blog-sidebar-related-manual', ['articles' => $articles]);
} */
