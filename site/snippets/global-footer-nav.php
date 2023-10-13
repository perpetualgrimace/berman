<?php

// main menu items
$items = $pages->listed();

?>


<a class="footer-nav-logo<?php e( $page->isHomePage(), ' is-active-pg' ) ?>" href="<?php e( $page->isHomePage(), '#main', $site->url() ) ?>">
  <?php snippet('icon-berman-logo-inverted') ?>
</a>

<ul class="footer-nav-list">
  <?php foreach($items as $item): ?>

    <li class="footer-nav-item">
      <a class="footer-link footer-nav-link<?php e($item->isOpen(), ' is-active-pg') ?>" <?php e( ($item->slug() == $page->slug()), 'aria-describedby="current"' ) ?> href="<?php e( $item->isOpen() && ( $page->slug() == $item->slug() ), '#main', $item->url() ) ?>">
      <?= $item->uri(); if($item->uri() == 'about'): ?>
        <span class="u-screenreader"> <?= $site->title() ?></span>
      <?php endif; ?>
      </a>
    </li>

    <?php endforeach ?>
</ul>
