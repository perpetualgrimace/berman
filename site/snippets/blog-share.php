<h2>Share this article</h2>

<div class="share-container">

  <a class="share share-twitter" target="_blank"
    href="https://twitter.com/share?url=<?= $page->url() ?>&text=<?= excerpt($page->title(), 60) ?>&via=<?= $pages->find('contact')->twitter() ?>&hashtags=<?

    $topic = $page->primary_topic();
    $topic = preg_replace('/\s+/', '', $topic);
    $topic = preg_replace('/#+/', '', $topic);
    echo $topic;

    if($page->hashtag() != ''):

    $hashtag = $page->hashtag();
    $hashtag = preg_replace('/\s+/', '', $hashtag);
    $hashtag = preg_replace('/#+/', '', $hashtag);
    echo ','; echo $hashtag;

    endif ?>">
    Twitter</a>

  <a class="share share-facebook" target="_blank"
    href="https://www.facebook.com/sharer/sharer.php?u=<?= $page->url() ?>">
    Facebook</a>

  <a class="share share-linkedin" target="_blank"
    href="http://www.linkedin.com/shareArticle?url=<?= $page->url() ?>&title=<?= $page->title() ?>">
    LinkedIn</a>

  <a class="share share-google" target="_blank"
    href="https://plus.google.com/share?url=<?= $page->url() ?>">
    Google+</a>

</div>
