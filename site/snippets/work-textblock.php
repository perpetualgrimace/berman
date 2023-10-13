<article class="work-textblock-section section g-columns">
  <div class="g-col g-8 u-margins-auto">

    <!-- optional subhead -->
    <? if($section->subhead() != ''): ?>
      <h2 class="display"><?= $section->subhead() ?></h2>
    <? endif ?>

    <!-- main text -->
    <div class="delta">
      <?= kirbytext($section->text()) ?>
    </div>

  </div>
</article>
