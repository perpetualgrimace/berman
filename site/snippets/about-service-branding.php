<section class="g-columns">
   <div class="g-columns u-left">

   <article class="col-70pc">
      <?= $page->text()->kirbytext() ?>

      <div class="in-article">

        <div class="grid-2-1 u-margin-top">
          <?= $page->col1()->kirbytext() ?>
        </div>

        <div class="grid-2-1 u-margin-top">
          <?= $page->col2()->kirbytext() ?>
        </div>

      </div>

      <?= $page->logos()->kirbytext() ?>

      <div class="in-article">

        <?php foreach ($page->images() as $logo): ?>
          <div class="grid-4-3-2">
            <img src="<?= $logo->url() ?>" alt="" />
          </div>
        <?php endforeach; ?>

      </div>

      <?= $page->branding_services()->kirbytext() ?>

      <div class="in-article">

        <div class="grid-2-1 u-margin-top">
         <?= $page->col3()->kirbytext() ?>
        </div>

        <div class="grid-2-1 u-margin-top">
         <?= $page->col4()->kirbytext() ?>
        </div>

      </div>

   </article>

   <?php $siblings = $page->siblings($self = false); ?>

   <?php if($siblings != ''): ?>

   <aside class="col-25pc">
      <div class="container series u-margin-top-off">

         <h3><?= $page->sidebarTitle() ?></h3>

         <ul class="vertical-list u-margin-top-off-children">

          <?php foreach($siblings as $sibling): ?>
            <li>
              <a class="milli" href="<?= $sibling->url() ?>"><?= $sibling->title() ?></a>
            </li>
          <?php endforeach ?>

         </ul>

      </div>
   </aside>

 <?php endif ?>

   </div>
</section>
