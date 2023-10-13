<? $topics = array_unique($topics); ?>

<div class="sort">

  <p><?= $page->topic_sort() ?></p>

  <ul class="links vertical-list u-margin-top-off-children">

    <li>
      <a href="#all" data-sort="all" class="js-filters-active" tabindex="-1">All</a>
    </li>

    <?
    foreach($topics as $topic):
    $topic_class = strtolower(preg_replace('/\s+/', '_', $topic));
    ?>

    <li>
      <a href="#<?= $topic_class ?>" data-sort="<?= $topic_class ?>" tabindex="-1"><?= $topic ?></a>
    </li>

    <? endforeach ?>

  </ul>
</div>
