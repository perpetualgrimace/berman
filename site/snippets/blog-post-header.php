<header class="blog-header header" role="banner">
  <div class="g-columns u-left">

    <h1 class="header-headline display blog-title u-margin-top-xl">
      <?php snippet('blog-title') ?>
    </h1>
    <?php if ($page->subhead() != ''): ?>
      <h2 class="header-subhead blog-header-subhead u-margin-top-sm">
        <?= $page->subhead() ?>
      </h2>
    <?php endif ?>

    <?php snippet('blog-attribution') ?>

  </div>

  <?php snippet('global-header-hero') ?>

</header>
