<? $template = $page->intendedTemplate() ?>

<header class="header" role="banner">
  <div class="g-container">
    <div class="g-columns">
      <div class="g-col">

        <h1 class="header-headline display<? e($template == 'blog' || $template == 'blog-berman140', ' blog-title u-margin-top-xl') ?>">

          <? // title
          if ($template == 'blog' || $template == 'blog-berman140') {
            snippet('blog-title');
          } elseif ($template == 'contact') {
            echo $page->title();
          } elseif ($page->headline() != '') {
            echo $page->headline();
          } else {
            echo $page->title();
          };


          // subhead=
          if ($page->subhead() != ''): ?><span class="u-screenreader">: </span>
            <span class="header-subhead heading gamma u-margin-top">
              <?= $page->subhead() ?>
            </span>
          <? endif ?>
        </h1>


        <!-- blog attribution -->
        <? if ($template == 'blog' || $template == 'blog-berman140') {
          snippet('blog-attribution');
        } ?>

      </div><!-- .g-col -->
    </div><!-- .g-columns -->
  </div><!-- .g-container -->

  <!-- hero image -->
  <? snippet('global-header-hero') ?>

  <!-- contact page header is a link -->
  <? if ($template == 'contact'): ?>
    <a class="contact-header-link" href="https://www.google.com/maps/place/Berman+Creative/@42.3429017,-71.0864318,17z/data=!3m1!4b1!4m5!3m4!1s0x89e37a10b0cb3295:0xdb200539069e6751!8m2!3d42.3428978!4d-71.0842431"><span class="u-screenreader">View <?= $page->address1() ?> on Google Maps</span></a>
  <? endif ?>

</header>

<div class="g-container u-padding-bottom-off u-padding-top-off">

<? /* if($page->depth() >= 1): ?>

  <nav class="breadcrumbs" role="navigation">
    <ul>

      <? foreach($site->breadcrumb() as $crumb): ?>
        <? if(($crumb->uri() != 'home') && ($crumb->isActive() == false)): ?>

          <li class="crumb">
            <a href="<?= $crumb->url() ?>">
              <?= $crumb->title() ?>
            </a>
          </li>

        <? endif ?>
      <? endforeach ?>

    </ul>
  </nav>

<? endif */ ?>
