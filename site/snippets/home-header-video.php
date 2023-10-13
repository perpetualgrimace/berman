<? $device = s::get('device_class'); ?>

<header class=" home-header header g-columns">

   <? if($device == 'mobile'): ?><div class="home-hero-mobile"><? endif ?>

      <div class="header g-columns u-left-center">
        <h1 class="home-headline display giga" style="transform: translateY(1em); opacity: 0;"><?= $page->headline() ?></h1>
      </div>

      <div class="js-wp-nav-trigger"></div>

      <div class="header-overlay"></div>

      <? if($device != 'mobile'): ?>

        <video width="0" height="0" class="home-video u-margin-top-off" id="video-background" preload="auto" autoplay loop="loop" muted>
          <source data-src="<?= $site->url() ?>/content/home/video.mp4"  type="video/mp4">
          <source data-src="<?= $site->url() ?>/content/home/video.webm" type="video/webm">
          <source data-src="<?= $site->url() ?>/content/home/video.ogv"  type="video/ogv">
          <img src="<?= $site->url() ?>/content/home/video.jpg">
        </video>

      <? endif; ?>

    <? if($device == 'mobile'): ?></div><? endif ?>

   </div>
</header>

<div class="scroll-indicator-container">
  <a class="scroll-indicator-link button-inverted" href="#intro" tabindex="-1">

    <svg class="scroll-indicator-svg" width="36px" height="22px" viewBox="-90 -81 36 22">
        <polygon fill="#2629A8" points="-85.3875005 -81 -72 -67.4021594 -58.6124997 -81 -54.5 -76.8137655 -72 -59 -89.5 -76.8137655"></polygon>
    </svg>

  </a>
</div>
