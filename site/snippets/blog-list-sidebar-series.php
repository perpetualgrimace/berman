<? $seriesList = $pages->find('blog/series')->children(); ?>


<label class="select-label" for="series-select">Sort by series:</label>

<span class="select-container u-margin-top-off u-margin-bottom t-dark">
  <select id="series-select" name="series" data-series-select>
    <option value="all" selected>Any series</option>
    <? foreach($seriesList as $series):
      $title = $series->title()->excerpt(7, 'words');
      $label = $title;
      // attempted to add article counts, but it failed after the first entry 🤷‍
      // $count = $page->grandChildren()->visible()->filterBy('series', 'berman140')->count();
      // $label = $title . ' (' . $count . ')';
    ?>
        <option value="<?= $series->slug() ?>"><?= $label ?></option>
    <? endforeach ?>
  </select>
</span>
