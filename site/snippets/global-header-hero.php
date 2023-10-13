<?

$blog = $pages->find('blog');

if ($page->heroImg() != '') {
  $img = $page->image($page->heroImg());
} elseif ($page->image($site->heroImg())) {
  $img = $page->image($site->heroImg());
} elseif ($page->intendedTemplate() == 'blog' || $page->intendedTemplate() == 'blog.140') {
  $img = $blog->image($blog->heroImg());
} elseif ($page->parent()->image($page->parent()->heroImg())) {
  $img = $page->parent()->image($page->parent()->heroImg());
} elseif ($page->parent()->image($site->heroImg())) {
  $img = $page->parent()->image($site->heroImg());
} else {
  $img = NULL;
}

?>

<div class="hero u-margin-top-off">
  <? if ($img != NULL): ?>
    <div class="hero-img" style="background-image: url(<?= $img->url() ?>)" alt="" draggable="false"></div>
  <? endif ?>
</div>
