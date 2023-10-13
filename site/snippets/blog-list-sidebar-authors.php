<? $authors = $pages->find('about/people/')->children()->visible(); ?>


<label class="select-label u-margin-top-off" for="author-select">Sort by author:</label>

<span class="select-container u-margin-top-off t-dark">
  <select id="author-select" name="author" data-author-select>
    <option value="all" selected>Any author</option>
    <option value="berman">Multiple authors</option>
    <? foreach($authors as $author): ?>
        <option value="<?= $author->slug() ?>"><?= $author->title() ?></option>
    <? endforeach ?>
  </select>
</span>
