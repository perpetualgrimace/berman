<?php

// main menu items
$items = $pages->listed();

// text that applies next to menu icon
$menutext = 'menu';

?>


<div class="nav-container">
  <nav class="nav nav-main g-container u-padding-top-off" role="navigation">
    <div class="g-columns">
      <div class="g-col u-padding-top-off u-padding-bottom-off">


    <!-- skip link -->
    <a class="button-inverted skip u-screenreader" href="#main">Skip to content</a>


    <!-- logo -->
    <a class="nav-logo<?php e( $page->isHomePage(), ' is-active-pg' ) ?>" href="<?php e( $page->isHomePage(), '#main', $site->url() ) ?>">
      <?php snippet('icon-berman-logo') ?>
    </a>


    <!-- nav toggle -->
    <a class="js-nav-toggle nav-toggle is-inactive" href="#nav">
      <div class="js-hamburger hamburger is-inactive">
        <span class="hamburger-bun hamburger-bun-top"></span>
        <span class="hamburger-bun hamburger-bun-patty"></span>
        <span class="hamburger-bun hamburger-bun-bottom"></span>
      </div>
      <span class="nav-toggle-text"><?= $menutext ?></span>
    </a>


    <!-- social media icons -->
    <ul class="nav-social-list">
    <?php

    // define social media icons in an array
    $social_media = ['twitter', 'facebook', 'instagram'];

    foreach($social_media as $social):
      $snippet = 'global-nav-' . $social;

    ?>

      <li class="nav-social-item">
        <a class="nav-social-link nav-social-link-<?= $social ?>" href="http://<?= $social ?>.com/<?= $pages->find('contact')->$social() ?>" tabindex="-1">
          <?php snippet($snippet) ?><span class="u-screenreader"><?= $social ?></span>
        </a>
      </li>

    <?php endforeach ?>
    </ul>


    <!-- main nav -->
    <ul id="nav" class="nav-list is-collapsed">

    <?php foreach($items as $item): ?>

      <li class="nav-item<?php e(in_array($item->uri(), $site->dropdownable()->yaml()), ' has-dropdown" aria-haspopup="true'); ?>">
        <a class="nav-link<?php e($item->isOpen(), ' is-active-pg') ?>" <?php e( ($item->slug() == $page->slug()), 'aria-describedby="current"' ) ?> href="<?php e( $item->isOpen() && ( $page->slug() == $item->slug() ), '#main', $item->url() ) ?>">
        <?= $item->uri(); if($item->uri() == 'about'): ?>
          <span class="u-screenreader"> <?= $site->title() ?></span>
        <?php endif; ?>
        </a>

        <!-- dropdown, checked against $site->dropdownable() list -->
        <?php if($item->hasChildren() &&
        in_array($item->uri(), $site->dropdownable()->yaml())): ?>

        <ul class="dropdown" role="group">
        <?php foreach($item->children()->listed() as $child): ?>

        <li class="dropdown-item">
          <a id="dropdown-item-<?= $child->slug() ?>" class="dropdown-link<?php e($child->isOpen(), ' is-active-pg') ?>" <?php e( ($child->slug() == $page->slug() ), 'aria-describedby="current"') ?>
            href="<?php e( $child->isOpen() && ( $page->slug() == $child->slug() ), '#main', $child->url() ) ?>" role="menuitem">
              <?= $child->title() ?>
            </a>
        </li>

        <?php endforeach ?>
        </ul>

      <?php endif ?>

      </li>

    <?php endforeach ?>

    </ul> <!-- nav-list -->

    <!-- current page indicator for screenreader folk -->
    <div hidden id="current">Current page</div>

      </div>
    </div>
  </nav>
</div>


<main role="main" class="wrapper" id="main">
