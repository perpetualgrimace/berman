<section class="g-columns">
  <div id="intro" class="g-columns">

    <? if ($page->quote() != ''): ?>

      <article class="col-70pc">
        <?= kirbytext($page->text()) ?>

        <div class="horizontal-figure follows-article">
          <div class="img"><span class="u-screenreader">concerns of the audience + core truth of the brand</span></div>
        </div>

      </article>

      <aside class="quote col-25pc u-margin-bottom-lg">
        <blockquote>
          <?= kirbytext($page->quote()) ?>
        </blockquote>
      </aside>

    <? else: ?>

      <article class="col-70pc">
        <?= kirbytext($page->text()) ?>
      </article>

    <? endif ?>

  </div>

  <div class="g-columns">
    <article class="col-75pc">

      <?= kirbytext($page->textBlock()) ?>

      <?php
      for($i = 1; $i < 8; $i++):
      $stage = 'stage' . $i; // variable name
      // check to make sure there's content
      if ($stage != '') {
      ?>

      <div class="method-stage">
        <div class="method-stage-icon method-stage<?= $i ?>-icon"></div>
        <div class="method-stage-caption">
          <?= kirbytext($page->$stage()) ?>
        </div>
      </div>
      <? } endfor ?>

    </article>
  </div>
</section>
