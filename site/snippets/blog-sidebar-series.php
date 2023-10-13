<!-- get series description -->
<? if($pages->find('blog/series/' . $page->series())->description() != ''): ?>

  <div class="container series-description delta">
    <h2 class="gamma u-margin-bottom-sm">About this series:</h2>
    <?= $pages->find('blog/series/' . $page->series())->description()->kt() ?>
  </div>

<? endif ?>


<!-- more from this series -->
<div class="container series">
  <h2 class="gamma u-margin-bottom-sm">More in this series:</h2>
  <ul class="vertical-list u-margin-top-off-children">

  <? foreach($series->flip() as $article) {
    snippet('related-article', [
      'article' => $article,
      'showSeriesName' => FALSE
    ]);
  } ?>

  </ul>
</div>
