<?

if ($page->heroImg() != '') {
  $img = $page->image($page->heroImg());
} elseif ($page->image($site->heroImg())) {
  $img = $page->image($site->heroImg());
}

?>

<div class="hero u-margin-top-off">
  <div class="hero-img home-hero-img" style="background-image: url(<?= $img->url() ?>)"></div>
</div>
