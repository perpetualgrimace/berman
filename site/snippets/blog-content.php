<section class="section g-columns">
   <article class="g-col g-9">

      <? if ($page->byline() != ''): ?>
        <div class="byline"><em><?= kirbytext($page->byline()) ?></em></div>
      <? endif ?>

      <?= kirbytext($page->text()) ?>

   </article>

   <aside class="blog-sidebar g-col g-3">
     <? snippet('blog-sidebar') ?>
   </aside>

</section>
