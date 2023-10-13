<?php

$invisiblePages = site()->index()->invisible();
$ready = $invisiblePages->filterBy('approval', 'ready');
$approved = $invisiblePages->filterBy('approval', 'approved');

if($ready != ''): ?>

<h2 style="padding-top: 1rem;">Ready for Review:</h2>

  <?php foreach ($ready as $page): ?>

  <li style="padding: 0.5em 0 .25em 0">
    <a href="./pages/<?= $page->uri() ?>/edit">
      <span><?= ucwords(preg_replace("/.+\//", " ", $page->parent())) . ': ' . $page->title() ?></span>
    </a>
  </li>

<?php
  endforeach;
  endif;
  if($approved != ''):
?>

<h2 style="padding-top: 1rem;">Approved by Jeff:</h2>

<?php foreach ($approved as $page): ?>

  <li style="padding: 0.5em 0 .25em 0">
    <a href="./pages/<?= $page->uri() ?>/edit">
      <span><?= ucwords(preg_replace("/.+\//", " ", $page->parent())) . ': ' . $page->title() ?></span>
    </a>
  </li>

<?php
  endforeach;
  endif;
?>
