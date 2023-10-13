<section class="g-columns">
  <div id="intro" class="g-columns">

    <?php if ($page->quote() != ''): ?>

      <article class="col-70pc">
        <?= $page->text()->kirbytext() ?>

        <div class="horizontal-figure follows-article">
          <div class="img"><span class="u-screenreader">concerns of the audience + core truth of the brand</span></div>
        </div>

      </article>

      <aside class="quote col-25pc u-margin-bottom-lg">
        <blockquote>
          <?= $page->quote()->kirbytext() ?>
        </blockquote>
      </aside>

    <?php else: ?>

      <article class="col-70pc">
        <?= $page->text()->kirbytext() ?>
      </article>

    <?php endif ?>

  </div>

  <div class="g-columns">
    <article class="col-75pc">

      <?= $page->textBlock()->kirbytext() ?>

      <?php
      for($i = 1; $i < 8; $i++):
      $stage = 'stage' . $i; // variable name
      // check to make sure there's content
      if ($stage != '') {
      ?>

      <div class="method-stage">
        <div class="method-stage-icon method-stage<?= $i ?>-icon"></div>
        <div class="method-stage-caption">
          <?= $page->$stage()->kirbytext() ?>
        </div>
      </div>
      <?php } endfor ?>

    </article>
  </div>
</section>
