<header class="blog-header header" role="banner">
  <div class="g-columns u-left">

    <h1 class="header-headline display blog-title u-margin-top-xl">
      <? snippet('blog-title') ?>
    </h1>
    <? if ($page->subhead() != ''): ?>
      <h2 class="header-subhead blog-header-subhead u-margin-top-sm">
        <?= $page->subhead() ?>
      </h2>
    <? endif ?>

    <? snippet('blog-attribution') ?>

  </div>

  <? snippet('global-header-hero') ?>

</header>
