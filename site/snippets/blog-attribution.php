<?

$authors = $page->authors()->toStructure();
$authorImg = $site->url() . '/assets/img/berman-team@2x.png'; // default
$authorCount = 0; // init

// get number of authors
foreach ($authors as $author) {
  $authorCount++;
}
// one author
if ($authorCount == 1 && $page->template() != 'blog-berman140') {
  $authorPage = $pages->find('about/people/' . $page->authors()->toStructure());
  $author = $authorPage->slug();
  $authorName = $authorPage->title();
  // get image if an image is found
  if ($authorPage->image('headshot.jpg')) {
    $authorImg = $authorPage->image('headshot.jpg')->url();
  }
// multiple authors
} else {
  // $author = $pages->find('about/people');
  $author = 'berman';
  $authorName = 'Berman Team';
}

?>

<a class="attribution u-margin-top-lg u-margin-bottom-sm" href="<?= $pages->find('blog')->url() . '#' . $author ?>">

  <div class="attribution-avatar">
    <img class="attribution-img" data-src="<?= $authorImg ?>" alt="">
    <noscript>
      <img class="attribution-img" src="<?= $authorImg ?>" alt="">
    </noscript>
  </div>

  <div class="attribution-caption u-margin-top-off"><span class="attribution-text">Written by </span><span class="attribution-name u-underline"><?= $authorName ?></span></div>

</a>
