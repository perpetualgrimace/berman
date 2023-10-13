<?
  $people = $page->children()->visible();
  /*
  $count = $children->count();
  if (($count % 5) == 0):
    $layout = 'grid-5-2-1';
  elseif (($count % 6) == 0):
    $layout = 'grid-6-3-1';
  else:
    $layout = 'grid-4-2-1';
  endif;
  */
?>


<section class="g-columns">
  <div id="intro" class="g-columns">

    <article class="col-70pc">

      <?= kirbytext($page->text()) ?>

      <? foreach($people as $person): ?>
        <? snippet('about-person-card', ['person' => $person]) ?>
      <? endforeach ?>

    </article>

    <aside class="quote col-25pc u-hide-below-m3">
      <blockquote>
        <?= kirbytext($page->quote()) ?>
      </blockquote>
    </aside>

  </div>
</section>
