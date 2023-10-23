<?php

// variables
$limit   = 5;
$series  = $page->series();
// $authors = pages($page->authors()->toStructure()->first()->author());


// in a series
if ($series != '' OR $page->intendedTemplate() == 'blog-berman140') {
  snippet('blog-sidebar-series', [
    'series' => $series
  ]);
}

// more posts by the author(s)
// snippet('blog-sidebar-authors', [
//   'limit'   => $limit,
//   'series'  => $series,
//   'authors' => $authors
// ]);