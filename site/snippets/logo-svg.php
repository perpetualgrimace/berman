<?
// check for variables passed from template
if (isset($file)):
  $svgUrl = $file->url();
  $pngUrl = str_replace('.svg', '.png', $svgUrl);
?>
  <img class="logo-img" src="<?= $svgUrl ?>" alt="" onerror="this.src='<?= $pngUrl ?>;this.onerror=null;'" draggable="false">
<? endif ?>
