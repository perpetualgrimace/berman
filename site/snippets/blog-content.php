<section class="section g-columns">
   <article class="g-col g-9">

      <?php if ($page->byline() != ''): ?>
        <div class="byline"><em><?= $page->byline()->kirbytext() ?></em></div>
      <?php endif ?>

      <?= $page->text()->kirbytext() ?>

   </article>

   <aside class="blog-sidebar g-col g-3">
     <?php snippet('blog-sidebar') ?>
   </aside>

</section>
