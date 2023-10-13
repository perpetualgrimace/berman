<?

/*
$topic = $page->primary_topic();
$topic = preg_replace('/\s+/', '', $topic);
$topic = preg_replace('/#+/', '', $topic);
echo $topic;
*/

// sanitize and set hashtag
$hashtag = '';
if($page->template() == 'blog-berman140') {
  $hashtag = 'Berman140';
} elseif($page->hashtag() != '') {
  $hashtag = $page->hashtag();
  $hashtag = preg_replace('/\s+/', '', $hashtag);
  $hashtag = preg_replace('/#+/', '', $hashtag);
}

// variables
$url = $page->url();
$title = urlencode($page->title());
$excerpt = excerpt($title, 60);
$contact = $pages->find('contact');

// social image
if ($page->socialImg() != '') {
  $img = $page->image($page->socialImg())->url();
} elseif ($page->image($site->socialImg())) {
  $img = $page->image($site->socialImg())->url();
} elseif ($page->heroImg() != '') {
  $img = $page->image($page->heroImg())->url();
} elseif ($page->image($site->heroImg())) {
  $img = $page->image($site->heroImg())->url();
} else {
  $img = NULL;
}


?>

<section class="section g-columns u-center u-margin-top-off">
  <div class=" g-col g-6 u-padding-top-off u-margins-auto u-padding-bottom-off">
    <div class="cta u-padding-top-xl u-padding-bottom-xl">

      <h2 class="display">Share this article</h2>

      <div class="share u-margin-top-off-children">

        <a class="share-link" target="_blank"
          href="https://twitter.com/share?url=<?= $url . '&text=' . $excerpt . '&via=' . $contact->twitter() . '&hashtags=' . $hashtag ?>">
          <span class="u-screenreader">Share on Twitter</span>
          <? snippet('share-icon-twitter') ?>
        </a>

        <a class="share-link" target="_blank"
          href="http://www.facebook.com/sharer.php?u=<?= $url ?>">
          <span class="u-screenreader">Share on Facebook</span>
          <? snippet('share-icon-facebook') ?>
        </a>

        <a class="share-link" target="_blank"
          href="http://www.linkedin.com/shareArticle?url=<?= $url . '&title=' . $title ?>">
          <span class="u-screenreader">Share on LinkedIn</span>
          <? snippet('share-icon-linkedin') ?>
        </a>

        <a class="share-link" target="_blank"
          href="https://plus.google.com/share?url=<?= $url ?>">
          <span class="u-screenreader">Share on Google+</span>
          <? snippet('share-icon-gplus') ?>
        </a>

      </div>

    </div><!-- .cta -->
  </div><!-- .g-col -->
</section><!-- .g-columns -->
