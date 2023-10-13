<?

$articles = $page->children()->not('series')->children()->visible()->flip();
$topics = $articles->pluck('primary_topic', ',', true);
// $pagination = $articles->pagination();

?>

<section class="blog-list-container u-margin-top">
  <div class="g-columns u-left">

     <div class="blog-list-sidebar g-col g-3 u-padding-top-off u-float-right">
       <? snippet('blog-list-sidebar-authors'); ?>
       <? snippet('blog-list-sidebar-series'); ?>
     </div>

     <ul class="blog-list g-col g-9 u-padding-bottom-off js-filtered">
       <? foreach($articles as $article) {
         snippet('blog-card', ['article' => $article]);
       } ?>
     </ul>

  </div>
</section>
