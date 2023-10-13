<?

if ($page->heroImg() != '') {
  $img = $page->image($page->heroImg());
} elseif ($page->image($site->heroImg())) {
  $img = $page->image($site->heroImg());
} else {
  $img = NULL;
}

?>



<div class="hero u-margin-top-off">
  <? if ($img != NULL): ?>
    <div class="hero-img" style="background-image: url(<?= $img->url() ?>)" alt="" draggable="false"></div>
  <? endif ?>
</div>
