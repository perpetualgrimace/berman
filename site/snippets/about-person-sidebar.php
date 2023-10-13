<?
  $blogList = $pages->find('blog')->children()->visible()->filterBy('authors', $page->slug())->filterBy('template', 'blog');
  if(($blogList != '') && (count($blogList) > 0)):
?>

<div class="container u-margin-top-off">

   <h3 class="delta">Written by <?= $page->Firstname(); ?>:</h3>

   <ul class="vertical-list u-margin-top-off-children">

      <? foreach($blogList->flip()->paginate(5) as $blog): ?>
        <li class="milli">
          <a href="<?= $blog->url() ?>">
            <?= $blog->title() ?>
          </a>
        </li>
      <? endforeach ?>

   </ul>

</div>

<? endif ?>
