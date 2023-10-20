<?php

// variables
$limit   = 5;
$series  = $pages->pluck("series");
// TODO: test relatedpages($Options = ['searchField' => 'Series', 'baseURL' => 'blog'])->flip()->limit($limit);
$authors = pages($page->authors()->toStructure()->first()->author());


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