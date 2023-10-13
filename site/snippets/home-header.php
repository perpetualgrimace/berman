<header class="home-header header t-dark">
  <div class="g-container">

   <div class="home-hero g-columns">

      <div class="g-col u-padding-top-off">
        <h1 class="header-headline home-headline display giga"><?= $page->headline() ?></h1>

        <p class="gamma home-header-subhead"><?= $page->subhead() ?></p>
      </div>

      <div class="js-wp-nav-trigger"></div>

   </div>

   </div>

   <? snippet('home-header-hero') ?>
</header>

<div class="scroll-indicator-container">
  <a class="scroll-indicator-link button-inverted" href="#intro" tabindex="-1"  aria-hidden="true">

    <svg class="scroll-indicator-svg" width="36px" height="22px" viewBox="-90 -81 36 22">
      <polygon fill="#2629A8" points="-85.3875005 -81 -72 -67.4021594 -58.6124997 -81 -54.5 -76.8137655 -72 -59 -89.5 -76.8137655"></polygon>
    </svg>

    <span class="u-screenreader"></span>

  </a>
</div>

<div class="g-container u-padding-bottom-off u-padding-top-off">
